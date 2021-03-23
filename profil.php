<?php session_start();


?>

<?php require('cnx.php'); ?>
<?php require('Requete.php'); ?>
<?php require('view.php'); ?>

<?php if($resultat_site_internet22_1['Prive'] == "1" OR $resultat_site_internet22_1['pseudo'] != $_GET['p'] OR $_GET['p'] == "") {
	
	die('<META HTTP-equiv="refresh" content=0;URL=index>');

} ?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet22['Titre_Page_Head']; ?> | Profil de <?php echo $resultat_site_internet22_1['pseudo']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet22_1['description']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet22['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet22['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	<style>
	 .middle-xs {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.center-xs, [class^='gk__layout'] #sp-sw-main .box.html {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
}
	 
	 .user_info{
		 position: relative;
    z-index: 1;
    display: block;
    width: 31.25rem;
    margin: 0 auto;
    margin-top: 40px;
    opacity: 0.9;
    padding: 1.25rem;
    box-shadow: 0 0 7px #ab9f9f;
	 }
	 
	 .user_info:after{
	 position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    content: '';
    background-color: #f5f5f5;
	 } 
		
	.menu1{
		cursor: pointer;
		color: white;font-size: 15px;font-weight: bold;letter-spacing: 0.5px;margin-right: 105px;
		
		}
		
	.menu1:hover{
		color: #cab3b3;
		cursor: pointer;
		font-size: 15px;font-weight: bold;letter-spacing: 0.5px;margin-right: 105px;
		}	
		
	.menu2{
		cursor: pointer;
		color: white;font-size: 15px;font-weight: bold;letter-spacing: 0.5px;margin-right: 105px;
		
		}
		
	.menu2:hover{
		color: #cab3b3;
		cursor: pointer;
		font-size: 15px;font-weight: bold;letter-spacing: 0.5px;margin-right: 105px;
		}
		
	.menu3{
		cursor: pointer;
		color: white;font-size: 15px;font-weight: bold;letter-spacing: 0.5px;
		
		}
		
	.menu3:hover{
		color: #cab3b3;
		cursor: pointer;
		font-size: 15px;font-weight: bold;letter-spacing: 0.5px;
		}
		
		
	.active {
    cursor: pointer;
    color: #7c91c1;
    font-size: 15px;
    padding-bottom: 8px;
    font-weight: bold;
    border-bottom: 3px solid #597ac3;
    letter-spacing: 0.5px;
    margin-right: 105px;
	}
		
			
	.active2 {
    cursor: pointer;
    color: #7c91c1;
    font-size: 15px;
    padding-bottom: 8px;
    font-weight: bold;
    border-bottom: 3px solid #597ac3;
    letter-spacing: 0.5px;
	}
		
		
		
	 </style>

	
	</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>
   
 <div class="flex-row middle-xs center-xs" id="banniere_plus" style="background-image: url('<?php echo $result_requeteUsers['banniere'] ?>');position: relative;width: 100%;padding: 5.5rem 0;background-color: #191919;background-repeat: no-repeat;-o-background-size: cover;background-size: cover;margin-bottom: -182px;margin-top: 7%;">
 
 
 
      <div class="user_info" align="center">
      	
      	<img alt="" id="avat" style="display: block;-moz-box-sizing: border-box;box-sizing: border-box;width: 60px;height: 60px;margin: -50px auto .625rem;background-color: transparent;" src="<?php echo $result_requeteUsers['avatar'] ?>">
      	
      	<span style="display: block;margin-bottom: 5px;color: #191919;font-size: .875rem;line-height: 1rem;letter-spacing: 0rem;font-weight: 700;-webkit-font-smoothing: antialiased;"><?php echo $result_requeteUsers['pseudo'] ?></span>
      	
      	<?php if($result_requeteUsers['Premium'] == "oui") { ?>
      	<span style="display: block;color: #5d6d7b;font-size: .75rem;padding-top: 8px;line-height: 1rem;font-weight: bold;letter-spacing: 0rem;"><i class="fa fa-bolt"></i> Premium</span>
      	<?php }else{ ?>
      	<span style="display: block;color: #5d6d7b;font-size: .75rem;padding-top: 8px;line-height: 1rem;font-weight: bold;letter-spacing: 0rem;"><i class="fa fa-bolt"></i> Pas d'abonnement en cours</span>
      	<?php } ?>
      	
      	<span style="display: block;margin-top: .625rem;color: #636363;font-size: .75rem;line-height: 1rem;font-weight: bold;letter-spacing: 0rem;">Inscrit <?php echo AffDate($result_requeteUsers['date']) ?></span>
      	
      	<span style="display: block;margin-top: .625rem;color: #636363;font-size: .75rem;line-height: 1rem;letter-spacing: 0rem;"><?php if($result_requeteUsers['psn'] == "Aucun") { ?>PSN : Aucun | <?php }else{ ?>PSN : <?php echo $result_requeteUsers['psn']; ?> | <?php } ?><?php if($result_requeteUsers['xblive'] == "Aucun") { ?>Xbox : Aucun | <?php }else{ ?> | Xbox : <?php echo $result_requeteUsers['xblive']; ?> <?php } ?><?php if($result_requeteUsers['steam'] == "Aucun") { ?>Steam : Aucun<?php }else{ ?> | Steam : <?php echo $result_requeteUsers['steam']; ?><?php } ?>
       </span>
       
       <span style="position: relative;font-size: .875rem;line-height: 1rem;letter-spacing: 0rem;">
       <p style="position: relative;overflow: hidden;max-height: 80px;color: #191919;margin-top: 0.825rem;">
           <?php echo parseZCode($result_requeteUsers['description']) ?>
            </p>
	   </span></div>
   
   </div>    
    
   
        <div class="sitewrap-inner">
        
        
        
        <div class="content-wrapper" style="margin-top: 4px;">	
 
         </div> 
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

<script> 
  
  jQuery('#description').keyup(function() {
  
    var nombreCaractere2 = jQuery(this).val().length;
    var nombreCaractere2 = 150 - nombreCaractere2;
    
    var nombreMots2 = jQuery.trim(jQuery(this).val()).split(' ').length;
    if(jQuery(this).val() === '') {
     	nombreMots2 = 0;
    }	
    
    var msg2 = ' ' + nombreMots2 + ' mot(s) - ' + nombreCaractere2 + ' Caractere(s) restant';
    jQuery('#compteur2').text(msg2);
    if (nombreCaractere2 < 1) { jQuery('#compteur2').addClass("mauvais"); } else { jQuery('#compteur2').removeClass("mauvais"); }
    
  })  

</script>
	
	<script>
		
		
												function insertTag(startTag, endTag, textareaId, tagType) {
													var field  = document.getElementById(textareaId); 
													var scroll = field.scrollTop;
													field.focus();

													/* === Partie 1 : on récupère la sélection === */
													if (window.ActiveXObject) {
															var textRange = document.selection.createRange();            
															var currentSelection = textRange.text;
													} else {
															var startSelection   = field.value.substring(0, field.selectionStart);
															var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
															var endSelection     = field.value.substring(field.selectionEnd);               
													}

													/* === Partie 2 : on analyse le tagType === */
													if (tagType) {
															switch (tagType) {
																	case "lien":
																		endTag = "</lien>";
																		if (currentSelection) { // Il y a une sélection
																				if (currentSelection.indexOf("http://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
																						// La sélection semble être un lien. On demande alors le libellé
																						var label = prompt("Quel est le libellé du lien ?") || "";
																						startTag = "<lien url=\"" + currentSelection + "\">";
																						currentSelection = label;
																				} else {
																						// La sélection n'est pas un lien, donc c'est le libelle. On demande alors l'URL
																						var URL = prompt("Quelle est l'url ?");
																						startTag = "<lien url=\"" + URL + "\">";
																				}
																		} else { // Pas de sélection, donc on demande l'URL et le libelle
																				var URL = prompt("Quelle est l'url ?") || "";
																				var label = prompt("Quel est le libellé du lien ?") || "";
																				startTag = "<lien url=\"" + URL + "\">";
																				currentSelection = label;                     
																		}
																break;
																	case "cit":
															endTag = "</cit>";
															if (currentSelection) { // Il y a une sélection
																	if (currentSelection.length > 30) { // La longueur de la sélection est plus grande que 30. C'est certainement la citation, le pseudo fait rarement 20 caractères
																			var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																			startTag = "<cit nom=\"" + auteur + "\">";
																	} else { // On a l'Auteur, on demande la citation
																			var citation = prompt("Quelle est la citation ?") || "";
																			startTag = "<cit nom=\"" + currentSelection + "\">";
																			currentSelection = citation;    
																	}
															} else { // Pas de selection, donc on demande l'Auteur et la Citation
																	var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																	var citation = prompt("Quelle est la citation ?") || "";
																	startTag = "<cit nom=\"" + auteur + "\">";
																	currentSelection = citation;    
															}
													break;
															}
													}

													/* === Partie 3 : on insère le tout === */
													if (window.ActiveXObject) {
															textRange.text = startTag + currentSelection + endTag;
															textRange.moveStart("character", -endTag.length - currentSelection.length);
															textRange.moveEnd("character", -endTag.length);
															textRange.select();     
													} else {
															field.value = startSelection + startTag + currentSelection + endTag + endSelection;
															field.focus();
															field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
													} 

													field.scrollTop = scroll;     
											}
			
												function getXMLHttpRequest() {
													var xhr = null;

													if (window.XMLHttpRequest || window.ActiveXObject) {
														if (window.ActiveXObject) {
															try {
																xhr = new ActiveXObject("Msxml2.XMLHTTP");
															} catch(e) {
																xhr = new ActiveXObject("Microsoft.XMLHTTP");
															}
														} else {
															xhr = new XMLHttpRequest();
														}
													} else {
														alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
														return null;
													}

													return xhr;
												}
												
												function view(textareaId, viewDiv){
												var content = encodeURIComponent(document.getElementById(textareaId).value);
												var xhr = getXMLHttpRequest();

												if (xhr && xhr.readyState != 0) {
													xhr.abort();
													delete xhr;
												}

												xhr.onreadystatechange = function() {
													if (xhr.readyState == 4 && xhr.status == 200){
														document.getElementById(viewDiv).innerHTML = xhr.responseText;
													} else if (xhr.readyState == 3){
														document.getElementById(viewDiv).innerHTML = "<div style=\"text-align: center;\">Chargement en cours...</div>";
													}
												}

												xhr.open("POST", "view.php", true);
												xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
												xhr.send("string=" + content);
											}
											
		
		
												function insertTag(startTag, endTag, textareaId, tagType) {
													var field  = document.getElementById(textareaId); 
													var scroll = field.scrollTop;
													field.focus();

													/* === Partie 1 : on récupère la sélection === */
													if (window.ActiveXObject) {
															var textRange = document.selection.createRange();            
															var currentSelection = textRange.text;
													} else {
															var startSelection   = field.value.substring(0, field.selectionStart);
															var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
															var endSelection     = field.value.substring(field.selectionEnd);               
													}

													/* === Partie 2 : on analyse le tagType === */
													if (tagType) {
															switch (tagType) {
																	case "lien":
																		endTag = "</lien>";
																		if (currentSelection) { // Il y a une sélection
																				if (currentSelection.indexOf("http://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
																						// La sélection semble être un lien. On demande alors le libellé
																						var label = prompt("Quel est le libellé du lien ?") || "";
																						startTag = "<lien url=\"" + currentSelection + "\">";
																						currentSelection = label;
																				} else {
																						// La sélection n'est pas un lien, donc c'est le libelle. On demande alors l'URL
																						var URL = prompt("Quelle est l'url ?");
																						startTag = "<lien url=\"" + URL + "\">";
																				}
																		} else { // Pas de sélection, donc on demande l'URL et le libelle
																				var URL = prompt("Quelle est l'url ?") || "";
																				var label = prompt("Quel est le libellé du lien ?") || "";
																				startTag = "<lien url=\"" + URL + "\">";
																				currentSelection = label;                     
																		}
																break;
																	case "cit":
															endTag = "</cit>";
															if (currentSelection) { // Il y a une sélection
																	if (currentSelection.length > 30) { // La longueur de la sélection est plus grande que 30. C'est certainement la citation, le pseudo fait rarement 20 caractères
																			var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																			startTag = "<cit nom=\"" + auteur + "\">";
																	} else { // On a l'Auteur, on demande la citation
																			var citation = prompt("Quelle est la citation ?") || "";
																			startTag = "<cit nom=\"" + currentSelection + "\">";
																			currentSelection = citation;    
																	}
															} else { // Pas de selection, donc on demande l'Auteur et la Citation
																	var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																	var citation = prompt("Quelle est la citation ?") || "";
																	startTag = "<cit nom=\"" + auteur + "\">";
																	currentSelection = citation;    
															}
													break;
															}
													}

													/* === Partie 3 : on insère le tout === */
													if (window.ActiveXObject) {
															textRange.text = startTag + currentSelection + endTag;
															textRange.moveStart("character", -endTag.length - currentSelection.length);
															textRange.moveEnd("character", -endTag.length);
															textRange.select();     
													} else {
															field.value = startSelection + startTag + currentSelection + endTag + endSelection;
															field.focus();
															field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
													} 

													field.scrollTop = scroll;     
											}
			
												function getXMLHttpRequest() {
													var xhr = null;

													if (window.XMLHttpRequest || window.ActiveXObject) {
														if (window.ActiveXObject) {
															try {
																xhr = new ActiveXObject("Msxml2.XMLHTTP");
															} catch(e) {
																xhr = new ActiveXObject("Microsoft.XMLHTTP");
															}
														} else {
															xhr = new XMLHttpRequest();
														}
													} else {
														alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
														return null;
													}

													return xhr;
												}
												
												function view(textareaId, viewDiv2){
												var content = encodeURIComponent(document.getElementById(textareaId).value);
												var xhr = getXMLHttpRequest();

												if (xhr && xhr.readyState != 0) {
													xhr.abort();
													delete xhr;
												}

												xhr.onreadystatechange = function() {
													if (xhr.readyState == 4 && xhr.status == 200){
														document.getElementById(viewDiv2).innerHTML = xhr.responseText;
													} else if (xhr.readyState == 3){
														document.getElementById(viewDiv2).innerHTML = "<div style=\"text-align: center;\">Chargement en cours...</div>";
													}
												}

												xhr.open("POST", "view.php", true);
												xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
												xhr.send("string=" + content);
											}
												</script>
												
												
												
<script type="text/javascript">
//customize values to suit your needs.
var max_file_size 		= 8048576; //maximum allowed file size
var allowed_file_types 	= ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg']; //allowed file types
var message_output_el2 	= 'output2'; //ID of an element for response output
var loadin_image_el 	= 'loading-img2'; //ID of an loading Image element

//You may edit below this line but not necessarily
var options = { 
	//dataType:  'json', //expected content type
	target: '#' + message_output_el2,   // target element(s) to be updated with server response 
	beforeSubmit: before_submit,  // pre-submit callback 
	success: after_success,  // post-submit callback 
	resetForm: true        // reset the form after successful submit 
}; 

jQuery('#upload_form-2').submit(function(){
	jQuery(this).ajaxSubmit(options); //trigger ajax submit
	return false; //return false to prevent standard browser submit
}); 

function before_submit(formData, jqForm, options){
	var proceed = true;
	var error = [];	
	/* validation ##iterate though each input field
	if you add extra text or email fields just add "required=true" attribute for validation. */
	jQuery(formData).each(function(){ 
		
		//check any empty required file input
		if(this.type == "file" && this.required == true && !jQuery.trim(this.value)){ //check empty text fields if available
			error.push( this.name + " is empty!");
			proceed = false;
		}
		
		//check any empty required text input
		if(this.type == "text" && this.required == true && !jQuery.trim(this.value)){ //check empty text fields if available
			error.push( this.name + " is empty!");
			proceed = false;
		}
		
		//check any invalid email field
		var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?jQuery/; 
		if(this.type == "email" && !email_reg.test(jQuery.trim(this.value))){ 
			error.push( this.name + " contains invalid email!");
			proceed = false;          
		}
		
		//check invalid file types and maximum size of a file
		if(this.type == "file"){
			if(window.File && window.FileReader && window.FileList && window.Blob){
				if(this.value !== ""){
					if(allowed_file_types.indexOf(this.value.type) === -1){
						error.push( "<b>"+ this.value.type + "</b> is unsupported file type!");
						proceed = false;
					}
	
					//allowed file size. (1 MB = 1048576)
					if(this.value.size > max_file_size){ 
						error.push( "<b>"+ bytes_to_size(this.value.size) + "</b> is too big! Allowed size is " + bytes_to_size(max_file_size));
						proceed = false;
					}
				}
			}else{
				error.push( "Please upgrade your browser, because your current browser lacks some new features we need!");
				proceed = false;
			}
		}
		
	});	
	
	jQuery(error).each(function(i){ //output any error to element
		jQuery('#' + message_output_el2).html('<div class="error">'+error[i]+"</div>");
	});	
	
	if(!proceed){
		return false;
	}
	
	jQuery('#' + loadin_image_el).show();
}

//Callback function after success
function after_success(data){
	jQuery('#' + message_output_el2).html(data);
	jQuery('#' + loadin_image_el).hide();
	}

//Callback function to format bites bit.ly/19yoIPO
function bytes_to_size(bytes){
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}


jQuery(document).on('change', '.btn-file :file', function() {
  var input = jQuery(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

jQuery(document).ready( function() {
    jQuery('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = jQuery(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});
</script>

	 <?php if($_GET['save'] == "oui")
    { ?>    

	<script>								
	setTimeout(function(){
	jQuery("#save").fadeOut(700);
	window.history.pushState(document.title,document.title,"/mon-compte");
	}, 2000);
</script>



	<?php } ?>
	
	<script type="text/javascript">				
jQuery("#btn_code").click(function(evt) {
	jQuery("#code_article").fadeToggle('250');
})		

</script>


<script>
jQuery('#m2').click(function() {

	jQuery('#menu1').fadeOut(200);
	jQuery('#menu2').fadeIn(200);
	jQuery('#menu3').fadeOut(200);
	jQuery('#m3').removeClass(' active2');
	jQuery('#m1').removeClass(' active');
	jQuery('#m2').addClass(' active2');
	
})

jQuery('#m1').click(function() {

	jQuery('#menu3').fadeOut(200);
	jQuery('#menu2').fadeOut(200);
	jQuery('#menu1').fadeIn(200);
	jQuery('#m3').removeClass(' active2');
	jQuery('#m2').removeClass(' active2');
	jQuery('#m1').addClass(' active');
	
})

jQuery('#m3').click(function() {

	jQuery('#menu3').fadeIn(200);
	jQuery('#menu2').fadeOut(200);
	jQuery('#menu1').fadeOut(200);
	jQuery('#m3').addClass(' active2');
	jQuery('#m2').removeClass(' active2');
	jQuery('#m1').removeClass(' active');
	
})
</script>

<script>
	
		jQuery('#private').submit(function(evt) {
		jQuery('#success6').hide();
		jQuery('#error6').hide();
		
		jQuery.ajax({
		type 		: 'POST',
		url 		: '../compte-prive.php',
		data        : "&prive="+jQuery("#formpriv").val(), 
		dataType 	: 'json',
		success 	: function(data) {
			
		jQuery('#success6').show();
	
			function reloadjs(){
							jQuery('#success6').hide(300);		
							jQuery('#private').hide();
							jQuery('#private2').show();

								}
								setTimeout(reloadjs,900)
    
	

		}
		});
		return false;
		});	
	</script>
	
	<script>
	
		jQuery('#private2').submit(function(evt) {
		jQuery('#success7').hide();
		jQuery('#error7').hide();
		
		jQuery.ajax({
		type 		: 'POST',
		url 		: '../compte-prive.php',
		data        : "&prive2="+jQuery("#formpriv2").val(), 
		dataType 	: 'json',
		success 	: function(data) {
	
		jQuery('#success7').show();
	
			function reloadjs(){
								jQuery('#success7').hide(300);	
								jQuery('#private2').hide();
								jQuery('#private').show();
								}
								setTimeout(reloadjs,900)
    
	
		}
		});
		return false;
		});	
	</script>
	
	<script>

jQuery("#emo1").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo1')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo2").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo2')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo3").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo3')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo4").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo4')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo5").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo5')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo6").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo6')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo7").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo7')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo8").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo8')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo9").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo9')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo10").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo10')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo11").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo11')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo12").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo12')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo13").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo13')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo14").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo14')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 

jQuery("#emo15").click(function(evt) {
	jQuery("#emoji-resultat").load('emoji.php?emoji=emo15')
	jQuery("#emoji-resultat").fadeIn(600);
	
	jQuery("#emoji").fadeToggle(600);
	setTimeout(function(){
   	window.location.reload(1);
	}, 4000);
return false;
}) 
</script>

<script>
	jQuery('#clic_image').click(function(e) {
   
		var valeur = jQuery('input[name=avatar]').val();
		jQuery("#img").show();
        jQuery("#img").attr("src", valeur);
		jQuery("#avat").attr("src", valeur);

	});
	
	jQuery('#clic_image2').click(function(e) {
   
		var valeur2 = jQuery('input[name=banniere]').val();
		
		jQuery("#img2").show();
        jQuery("#img2").attr("src", valeur2);
		
		jQuery("#banniere_plus").css("background-image", "url(" + valeur2 + ")");

	});
</script>

<script>
jQuery('#av_post').submit(function(evt) {
		jQuery('#success8').hide();
		jQuery('#error8').hide();
		
		jQuery.ajax({
		type 		: 'POST',
		url 		: '../compte-avatar.php',
		data        : "&avatarform="+jQuery("#avatar").val(), 
		dataType 	: 'json',
		success 	: function(data) {
	
		jQuery('#success8').show();
	
			function reloadjs(){
								jQuery('#success8').hide(300);	
								jQuery('input[name=avatar]').prop("disabled", true);
								}
								setTimeout(reloadjs,900)
    
	
		}
		});
		return false;
		});	
</script>

<script>
jQuery('#ban_post').submit(function(evt) {
		jQuery('#success9').hide();
		jQuery('#error9').hide();
		
		jQuery.ajax({
		type 		: 'POST',
		url 		: '../compte-banniere.php',
		data        : "&banniereform="+jQuery("#banniere").val(), 
		dataType 	: 'json',
		success 	: function(data) {
	
		jQuery('#success9').show();
	
			function reloadjs(){
								jQuery('#success9').hide(300);	
								jQuery('input[name=banniere]').prop("disabled", true);
								}
								setTimeout(reloadjs,900)
    
	
		}
		});
		return false;
		});	
</script>

</body>
</html>
