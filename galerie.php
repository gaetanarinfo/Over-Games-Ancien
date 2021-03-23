<?php session_start();


?>

<?php require('cnx.php'); ?>

<?php

function Pagination($page_actuelle, $nb_pages, $vers=3, $premier=1){
   
	$pagination = '';

	$lien = preg_replace('`%([^d])`', '%%$1', $page2);
	if (!preg_match('`(?<!%)%d`', $page2) ) $page2 .= '%d';

	return $pagination;

}

if ($nb_pages > 1) {

if ( ($page_actuelle-$vers) > $premier+1 )
$pagination .= '…';

$debut = ($page_actuelle-$vers)>$premier ? $page_actuelle-$vers : $premier+1;
$fin = ($page_actuelle+$vers)<=($nb_pages-$premier) ? 
	$page_actuelle+$vers : $nb_pages-$vers;

for ( $i=$debut ; $i<=$fin ; $i++ ) {

	$pagination .= ' ';
	if ( $i==$page_actuelle )
		$pagination .= ''.$i.'';
	else
		$pagination .= ''.$i.'';
	}
	if ( ($page_actuelle+$around) < $nb_pages-$premier )
	$pagination .= '…';


}


// Lien précédent
if ( $page_actuelle > 1 )
	$pagination .= '« Précédent';
else
	$pagination .= '« Précédent';

// Lien début
for ( $i=1 ; $i<=$premier ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien fin
$debut = $nb_pages-$premier+1;
if( $debut <= $premier ) $debut = $premier+1;
for ( $i=$debut ; $i<=$nb_pages ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien suivant
if ( $page_actuelle < $nb_pages )
	$pagination .= ' Suivant »';
else
	$pagination .= ' Suivant »';
	
	
	if( isset($_GET['page']) && is_numeric($_GET['page']))
	$page = $_GET['page'];
else
	$page = 1;

$pagination = 35;

$limite = ($page - 1) * $pagination;

$galerie = $cnx->prepare('SELECT * FROM galerie ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$galerie->execute();

$i = $cnx->prepare("SELECT * FROM galerie ORDER BY id DESC");
$i->execute();
$x = $i->rowCount();

$nb_pages = ceil($x / $pagination);
if ($nb_pages>1){
	$paginations .= '' . pagination($page, $nb_pages) . '';
}
?>


<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet12['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet12['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet12['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet12['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet12['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	
	<link rel="stylesheet" href="wp-content/themes/powerup/bootstrapcss"/>
	
		
	<style>
	p {
  margin-top: -35px;		
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 3s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
   font-weight : bold;
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}	
		
.bb, .bb::before, .bb::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat 49%/219% rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb::before, .bb::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe 8s linear infinite;
}
.bb::before {
  animation-delay: -4s;
}
.bb:hover::after, .bb:hover::before {
  background-color: rgba(255, 0, 0, 0.3);
}

@keyframes clipMe {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}

/*2*/
.bb2, .bb2::before, .bb2::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb2 {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat 35px 40px rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb2::before, .bb2::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe2 8s linear infinite;
}
.bb2::before {
  animation-delay: -4s;
}
.bb2:hover::after, .bb2:hover::before {
  background-color: rgb(48 255 34 / 30%);
}

@keyframes clipMe2 {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}		
		
/*3*/
.bb3, .bb3::before, .bb3::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb3 {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat -163px 40px rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb3::before, .bb3::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe3 8s linear infinite;
}
.bb3::before {
  animation-delay: -4s;
}
.bb3:hover::after, .bb3:hover::before {
  background-color: rgb(66 183 228 / 30%);
}

@keyframes clipMe3 {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}	

		
.index-loop-wrapper-inner > .blog-index-date:nth-child(2)::before {
    content: 'Dernière publication le :';
    position: absolute;
    bottom: 30px;
    left: 15px;
    font-size: 13px;
    font-weight: 500;
    color: #878788;
    text-transform: none;
}
		
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");

.lumino {
  background: 64% 66% / 164% 124% no-repeat
              radial-gradient(ellipse at bottom, #fff, transparent, transparent);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-size: 10vw;
  font-family: "Source Sans Pro", sans-serif;
  animation: reveal 3000ms ease-in-out forwards 200ms,
             glow 2500ms linear infinite 2000ms;

  @keyframes reveal {
    80%{
      letter-spacing: 8px;
    }
    100% {
      background-size: 300% 300%;
    }
  }
  @keyframes glow {
    40% {
      text-shadow: 0 0 8px #fff;
    }
  }
}  
	
	</style>

		</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>   
    
   
        <div class="sitewrap-inner">
        
        <div class="content-wrapper">		

<!-- BEGIN FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
                        <div class="index-background-element"></div>
            <!-- END FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
            
     

<div class="index-main-wrapper">
    
	<p align="center">Notre galerie de jeux vidéo - Bon visionnage</p>
  
 
  <hr>
   
    <!-- BEGIN LOOP -->

    <div class="index-loop-wrapper" style="margin-top: 19px;">
        <div class="index-loop-wrapper-inner">
        
            <!-- BEGIN HIGHLIGHTED POSTS MARKER -->
            <div class="shortcode-wrapper">
            
		<style type="text/css">
			#gallery-1 {
				margin: auto;
			}
			#gallery-1 .gallery-item {
				float: left;
				margin-top: 10px;
				text-align: center;
				width: 20%;
			}
			#gallery-1 img {
				border: 2px solid #cfcfcf;
			}
			#gallery-1 .gallery-caption {
				margin-left: 0;
			}
		</style>
		
		
		
		<div id="gallery-1" class="gallery galleryid-663 gallery-columns-5 gallery-size-thumbnail">
		
		<?php while($galerie_resultat = $galerie->fetch()) { ?>
		
		<dl class="gallery-item">
			<dt class="gallery-icon landscape">
				<a data-size="800x450" href="https://over-games.fr/<?php echo $galerie_resultat['image'] ?>">
				
			<img width="150" height="150" src="https://over-games.fr/<?php echo $galerie_resultat['image'] ?>" class="attachment-thumbnail size-thumbnail" alt="" srcset="https://over-games.fr/<?php echo $galerie_resultat['image'] ?> 150w, https://over-games.fr/<?php echo $galerie_resultat['image'] ?> 200w" sizes="(max-width: 150px) 100vw, 150px">	
				
				</a>
			</dt>
			</dl>
			
		<?php } ?>
		
			<br style="clear: both">
		</div>
</div>
                                      
           	
      <hr>                                                                           
                        <!-- END INDEX LOOP -->
        <div align="center">
 
 <style>.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  background: red;
  cursor: inherit;
  display: block;
}
input[readonly] {
  background-color: white !important;
  cursor: text !important;
}</style>
        
         <div align="center">
           		<div class="" style="color: white; font-size: 16px;"><b>Votre image doit être un minimum de 1920 px - 1080 px ! Et doit être en rapport avec le thème jeux video !</b></div>
            </div><br><br>
                                   <div id="upload-wrapper">
    <div align="center">
        <form action="" method="post" enctype="multipart/form-data" id="upload_form">   
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                       Fichier<input type="file" name="file" id="file" required>
                    </span>
                    
                </span>
             

                
          </div>
          <br>    
      <input type="text" name="titre" id="titre" placeholder="Le nom du jeux" required="" class="form-control" style="width: 290px;text-align: center;height: 20px;" >
<br>
        <button type="submit" class="btn btn-primary" id="submit-btn" >Ajouter une image</button>
        <br><br>
        <div class="progress" id="loading" style="display:none;width: 255px;height: 7px;"> <div title="Un peu de patience..." class="progress-bar progress-bar-error progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"> </div> </div>
        </form>
        
        <br>
        
        
        
    </div>
</div>
  
 
             	
            
             
             <div id="message"></div>
        
        <div id="position-result" style="display:none;"></div>

    </div>    

        </div>
    </div>
    <!-- END LOOP -->
    
    

    <!-- BEGIN SIDEBAR -->
    <div class="sidebar-wrapper" style="margin-top: -77px;">   
           
           <?php if($profilpremiumresult['Premium'] == "oui") { ?>
           <br>
     <?php }else{ ?>  
               
            <div class="sidebar-ad-widget-wrapper">
        <div id="text-3" class="widget widget_text">			<div class="textwidget"><img style="opacity:0.75;margin-bottom:-3px;" alt="<?php echo $Pub_result['Image'] ?>" src="<?php echo $Pub_result['Image'] ?>"></div>
		</div>        <!-- BEGIN SPOSORED TEXT INCLUDE -->
        <div class="sponsored-texts">
    Publicité            <span>|</span>
        <a href="<?php echo $Pub_result['Pub'] ?>">
            Découvrir la pub        </a>
    </div>        <!-- END SPOSORED TEXT INCLUDE -->
    </div>
    
    <?php } ?>

    <?php include('wp-includes/Php/Login_Galerie.php'); ?>

    </div>
    <!-- END SIDEBAR -->
    
    
            

</div>
<!-- /.index-main-wrapper -->
        
       
       
        </div>
        <!-- /.content-wrapper -->
        
        
      <?php if($profilpremiumresult['Premium'] == "oui") { ?>
           
     <?php }else{ ?>  
       <br><br>
        <div align="center" id="ads2" style="margin-top: -78px;margin-bottom: 99px;">
			<a class="main_banner" href="<?php echo $Pub_result2['Pub'] ?>" style="display:block;" target="_self" data-number="4" title=""><img src="<?php echo $Pub_result2['Image'] ?>" alt="" class="img-responsive"></a>
        </div>
        
	<?php } ?>
     
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>
        
    </div>
   
</div>

<script>
	
jQuery(document).ready(function (e) {
jQuery("#upload_form").on('submit',(function(e) {
e.preventDefault();
jQuery("#message").empty();
jQuery('#loading').show();
jQuery.ajax({
url: "process5.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
jQuery('#loading').hide();
jQuery("#message").html(data);
}
});
}));

// Function to preview image after validation
jQuery(function() {
jQuery("#file").change(function() {
jQuery("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{

return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
jQuery("#file").css("color","green");
jQuery('#image_preview').css("display", "block");
jQuery('#previewing').attr('src', e.target.result);
jQuery('#previewing').attr('width', '250px');
jQuery('#previewing').attr('height', '230px');
};
});
</script>

<?php include('wp-includes/Php/Footer.php'); ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js" type="text/javascript" /></script>

<?php include('wp-includes/Php/Script_Footer.php'); ?>


</body>
</html>
