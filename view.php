  <?php 

function parseZCode($content) {
	// Parsage des balises
	$zcode = array(  
		'~\[italique\](.*?)\[/italique\]~s',
        '~\[souligné\](.*?)\[/souligné\]~s',
        '~\[gras\](.*?)\[/gras\]~s',
        '~\[barre\](.*?)\[/barre\]~s',
		'~\[url\](.*?)\[/url\]~s',
		'~\[br\]~s',
        '~\[lien=(.*?)\](.*?)\[/lien\]~s',
		'~\[img width=(.*?)height=(.*?)\](.*?)\[/img\]~s',
		'~\[code\](.*?)\[/code\]~s',
		'~\[email=(.*?)\](.*?)\[/email\]~s',
        '~\[s\](.*?)\[/s\]~s',
		'~\[left\](.*?)\[/left\]~s',
		'~\[center\](.*?)\[/center\]~s',
		'~\[right\](.*?)\[/right\]~s',	
		'~\[color=(.*?)\](.*?)\[/color\]~s',
		'~\[taille=(.*?)\](.*?)\[/taille\]~s',
		'~\[font=(.*?)\](.*?)\[/font\]~s',
		'~\[video\](.*?)\[/video\]~s',
		'~\[swf width=(.*?)height=(.*?)\](.*?)\[/swf\]~s',
		'~\[puces\](.*?)\[/puces\]~s',
		'~\[puces2\](.*?)\[/puces2\]~s',
		'~\[cite\](.*?)\[/cite\]~s',
		'~\[bande\](.*?)\[/bande\]~s',
		'~\[hr\]~s'
	);  
	
	$html = array(  
		'<em>$1</em>', 
		'<u>$1</u>',
		'<b>$1</b>',
		'<del>$1</del>', 
		'<a href="$1">$1</a>',
		'<br />$1', 
		'<a href="$1">$2</a>',
		'<img style="width:$1; height:$2;" src="$3"/>',
		'<style>$1</style>',
		'<a href="mailto:$1">$2</a>',
		'<strike>$1</strike>',
		'<div align="left">$1</div>',
		'<div align="center">$1</div>',
		'<div align="right">$1</div>',
		'<div style="color:$1">$2</div>',
		'<div style="font-size:$1px">$2</div>',
		'<div style="font-family:$1">$2</div>',
        '<iframe frameborder="0" width="750px" height="498" src="$1" allowfullscreen></iframe>',
		'<object type="application/x-shockwave-flash" data="$3" width="$1px" height="$2px"><param name="allowScriptAccess" value="never"><param name="play" value="true"><param name="movie" value="$3"><param name="menu" value="false"><param name="quality" value="high"><param name="scalemode" value="noborder"><param name="wmode" value="transparent"></object>',
		'<div><ul style="list-style: disc;"><li>$1</li></ul></div>',
		'<div><ol style="list-style: decimal;"><li>$1</li></ol></div>',
		'<blockquote>$1</blockquote>',
		'<div class="gk__helpers__category">$1</div>',
		'<hr style="border-bottom: 3px solid #1b4f78 !important;width: 600px;">'
	); 
	


   	$content = preg_replace($zcode, $html, $content);
	
	// Rtours à la ligne
	$content = preg_replace('`\n`isU', '<br />', $content); 
	
	return $content;

}

if (isset($_POST["string"])) {
	$content = $_POST["string"];
	
	if (get_magic_quotes_gpc()) {
		$content = stripslashes($content);
	}

	echo parseZCode($content); // Ecriture du contenu parsé. 
}

?>

