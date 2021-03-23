<?php session_start();


?>

<?php require('cnx.php'); ?>
<?php require('log-membre.php'); ?>
<?php require('Requete.php'); ?>
<?php require('view.php'); ?>

<?php
$actu6 = $cnx->prepare("SELECT * FROM Test_Commentaire WHERE email = :email");
$acturesult6 = $cnx->query("SET NAMES 'utf8'");
$actu6->execute(array(':email' => $_SESSION['email']));
$acturesult6 = $actu6->fetch();		

$actu5 = $cnx->prepare("SELECT * FROM Actualites_Commentaire WHERE email = :email");
$acturesult5 = $cnx->query("SET NAMES 'utf8'");
$actu5->execute(array(':email' => $_SESSION['email']));
$acturesult5 = $actu5->fetch();	

$actu2 = $cnx->prepare("SELECT * FROM Actualites_Commentaire WHERE email = :email ORDER BY ddate DESC");
$acturesult2 = $cnx->query("SET NAMES 'utf8'");
$actu2->execute(array(':email' => $_SESSION['email']));
?>  

<?php
$actu = $cnx->prepare("SELECT * FROM Test_Commentaire WHERE email = :email ORDER BY ddate DESC");
$acturesult = $cnx->query("SET NAMES 'utf8'");
$actu->execute(array(':email' => $_SESSION['email']));
?> 

<?php
$profilcode = $cnx->prepare("SELECT COUNT(*) AS id FROM code_promo WHERE email = :email AND Valable = :Valable");
$profilcode->execute(array(':email' => $_SESSION['email'], ':Valable' => "oui"));
$profil_code = $cnx->query("SET NAMES 'utf8'");
$profil_code = $profilcode->fetch();
$profilcode->closeCursor();
?> 

<?php
$actu3 = $cnx->prepare("SELECT * FROM HistoriqueAchat WHERE email = :email ORDER BY id DESC");
$acturesult3 = $cnx->query("SET NAMES 'utf8'");
$actu3->execute(array(':email' => $_SESSION['email']));
?>   

<?php
$actu7 = $cnx->prepare("SELECT * FROM code_promo WHERE email = :email ORDER BY id DESC");
$acturesult7 = $cnx->query("SET NAMES 'utf8'");
$actu7->execute(array(':email' => $_SESSION['email']));
?>   
<?php 
	
	if(!empty($_POST))
	{
	$req = $cnx->prepare('UPDATE utilisateurs SET pays = :pays, nom = :nom, prenom = :prenom, age = :age, sexe = :sexe, facebook = :facebook, twitter = :twitter, yt = :yt, psn = :psn, xblive = :xblive, steam = :steam, description = :description, adresse = :adresse, postal = :postal, complement = :complement, ville = :ville, site = :site WHERE email = :email');
	$req->execute(array(
	'email' => $_SESSION['email'],
	'pays' => $_POST['pays'],
	'nom' => $_POST['nom'],
	'site' => $_POST['site'],	
	'prenom' => $_POST['prenom'],
	'age' => $_POST['age'],
	'sexe' => $_POST['sexe'],
	'psn' => $_POST['psn'],
	'xblive' => $_POST['xblive'],
	'steam' => $_POST['steam'],
	'facebook' => $_POST['facebook'],
	'yt' => $_POST['yt'],
	'description' => $_POST['description'],
	'twitter' => $_POST['twitter'],
	'adresse' => $_POST['adresse'],
	'postal' => $_POST['postal'],
	'complement' => $_POST['complement'],
	'ville' => $_POST['ville']
	));
	
	$req2 = $cnx->prepare('UPDATE Guide_Achat SET Createur = :prenom WHERE email = :email');
	$req2->execute(array(
	'email' => $_SESSION['email'],
	'prenom' => $_POST['pseudo']
	));
	
	$req3 = $cnx->prepare('UPDATE Guide_Achat SET prenom = :prenom WHERE email = :email');
	$req3->execute(array(
	'email' => $_SESSION['email'],
	'prenom' => $_POST['pseudo']
	));
	
	$req4 = $cnx->prepare('UPDATE Test_Commentaire SET prenom = :prenom WHERE email = :email');
	$req4->execute(array(
	'email' => $_SESSION['email'],
	'prenom' => $_POST['pseudo']
	));
	
	$req5 = $cnx->prepare('UPDATE Test_Jeux SET Createur = :prenom WHERE email = :email');
	$req5->execute(array(
	'email' => $_SESSION['email'],
	'prenom' => $_POST['pseudo']
	));
	
	$req6 = $cnx->prepare('UPDATE Actualite SET Createur = :prenom WHERE email = :email');
	$req6->execute(array(
	'email' => $_SESSION['email'],
	'prenom' => $_POST['pseudo']
	));
	
	$req7 = $cnx->prepare('UPDATE Actualites_Commentaire SET prenom = :prenom WHERE email = :email');
	$req7->execute(array(
	'email' => $_SESSION['email'],
	'prenom' => $_POST['pseudo']
	));
	
	
	
	
	die('<META HTTP-equiv="refresh" content=0;URL=mon-compte?save=oui>');
}
		
	
?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet21['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet21['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet21['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet21['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet21['Favicon_Page']; ?>">
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
	   </span>     
     	
     	<span style="display: block;margin-top: .625rem;color: #636363;font-size: .75rem;line-height: 1rem;letter-spacing: 0rem;">
      Dernière ip de connexion
           <?php echo $result_requeteUsers['ip'] ?>
           
	   </span>   
      	
      </div>
   
   </div>    
    
   
        <div class="sitewrap-inner">
        
        
        
        <div class="content-wrapper">	
        
        
        
        	<?php if($_GET['save'] == "oui")
										{ ?>   
                                        <div align="center" id="save" style="margin-top: -41px;margin-bottom: 58px;">
                                        
                                         <div style="color: #ffffff;font-weight: bold;width: 501px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Votre modification à bien été pris en compte et apparaîtra dans quelque seconde</div>
    									</div>
                                       <?php } ?>	
        
 

<!-- BEGIN FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
                        <div class="index-background-element"></div>
           
            
               
    <div align="center" style="margin-top: -34px;margin-bottom: 27px;">
    
    <span class="menu1 active" id="m1">Préférences</span>
    
    <span class="menu2" id="m2">Gestion Premium</span>
    
     <span class="menu3" id="m3">Mes réactions</span>
    
    </div>
  
    <hr>
    
    
    <div id="menu1" style="margin-left: 13%;margin-top: 37px;margin-right: 13%;" align="left">
    	
    	<style>
			
		#message {
    position: relative;
    z-index: 4;
    left: 0;
    width: 0;
    height: 0;
    display: block;
    padding: 0;
    margin: 0;
    background: none;
    border: none;
    border-radius: 0;
    font-family: 0;
    font-size: 13px;
    color: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    resize: none;
}	
			
			.btn-file {
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

<h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Présentation</h2>
    	
   
     	
    	<hr style="margin-left: -1%;">
    	
    	<div align="center">
          
          <div style="color: white;margin-bottom: 14px;font-size: 15px;font-weight: bold;">Avatar</div>
          
          
          <div id="success8" style="color: #ffffff;font-weight: bold;width: 40%;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);margin-bottom: 30px; display: none;"><span class="fa fa-check" style="color: #2ebf39;margin-right: 2px;" aria-hidden="true"></span> L'avatar a été modifié.</div>
     
          <form id="av_post" method="post">
                   
                <input type="text" placeholder="https://" id="avatar" name="avatar" value="<?php echo $result_requeteUsers['avatar']; ?>" class="form-control" style="width: 292px;height: 20px;color: black;display: inline-block;">  <a id="clic_image" style="display: inline-block; cursor: pointer; margin-left: 10px; height: 20px;" class="btn btn-info" title="Aperçu"><i class="fa fa-caret-right" style="padding-top: 4px;padding-left: 1px;"></i></a>
                
                <button id="clic_image_check" type="submit" style="display: inline-block; cursor: pointer; margin-left: 10px; height: 34px;" class="btn btn-success" title="Valider"><i class="fa fa-check"></i></button>
                <br>
                <img src="" id="img" name="img" style="margin-top: 15px; display: none;">
                
		</form>
        
        </div>
    	
    	<hr style="width: 46%;">
    	
    	<div align="center" style="margin-bottom: 25px;">
    	
    	<div align="center" style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Image de couverture</div>
    	
    	   <div id="success9" style="color: #ffffff;font-weight: bold;width: 40%;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);margin-bottom: 30px; display: none;"><span class="fa fa-check" style="color: #2ebf39;margin-right: 2px; padding-top: 4px;padding-left: 1px;
" aria-hidden="true"></span> Votre image a été modifié.</div>
 
       <form id="ban_post" method="post">     
            
             <div align="center">
              <input placeholder="https://" value="<?php echo $result_requeteUsers['banniere']; ?>" type="text" id="banniere" name="banniere" class="form-control" style="width: 292px;height: 20px;color: black; display: inline-block;">  <a id="clic_image2" style="display: inline-block; cursor: pointer; margin-left: 10px; height: 20px;" class="btn btn-info" title="Aperçu"><i class="fa fa-caret-right"  style="padding-top: 4px;padding-left: 1px;"></i></a>
               
               <button type="submit" id="clic_image_check2" style="display: inline-block; cursor: pointer; margin-left: 10px; height: 34px;" class="btn btn-success" title="Valider"><i class="fa fa-check" ></i></button>
               
                <br>
                <img src="" id="img2" name="img2" style="margin-top: 15px;width: 73%;height: 250px; display: none;">
</div>
   
			</form>
    
    <form action="/mon-compte" method="post" enctype="multipart/form-data">
    	
    	<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Site Perso</div>
    	
    	<div><input type="text" name="site" value="<?php echo $result_requeteUsers['site']; ?>" class="form-control" style="width: 292px;height: 20px;color: black;"></div>
    	
    	
    	<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Signature</div>
    	
    	
    	<div>
                                        
                                        <div align="center">
                                        
                                         <br>
                                       
										<button onclick="insertTag('[br]', '', 'description');" type="button" data-toggle="tooltip" data-tag="br" class="wrap-tag" data-placement="top" title="" data-original-title="Saut de Ligne" style="font-size:12px;font-weight: bold; width: 20px; width: 20px;"><i class="fa fa-indent"></i></button>&nbsp;
              
                                      	<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Police Gras" style="font-size:12px;font-weight: bold; width: 20px;" type="button" value="G" onclick="insertTag('[gras]','[/gras]','description');" /><i class="fa fa-bold"></i></button>&nbsp;
                                      	
										<button type="button" value="I" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[italique]','[/italique]','description');" /><i class="fa fa-italic"></i></button>&nbsp;
										
										<button type="button" value="Souligné" data-toggle="tooltip" data-placement="top" title="" data-original-title="Souligné" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[souligné]','[/souligné]','description');" /><i class="fa fa-underline"></i></button>&nbsp;
										
										<button type="button" value="Strike" data-toggle="tooltip" data-placement="top" title="" data-original-title="Strike" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[s]','[/s]','description');" /><i class="fa fa-strikethrough"></i></button>&nbsp;
										
										<button type="button" value="Lien" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[url]','[/url]','description');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Lien Url" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien Texte" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[lien=]','[/lien]','description');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Image" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[img width=..px' + ' height=..px]','[/img]','description');"/><i class="fa fa-camera"></i></button>&nbsp;
										
										<button type="button" value="Code" data-toggle="tooltip" data-placement="top" title="" data-original-title="Style" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[code]','[/code]','description');" /><i class="fa fa-code"></i></button>&nbsp;
										
										<button type="button" value="Email" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[email=]','[/email]','description');" /><i class="fa fa-envelope"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Vidéo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vidéo" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[video]','[/video]','description');" /><i class="fa fa-video-camera"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="SWF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swf" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[swf width=' + ' height=]','[/swf]','description');" /><i class="fa fa-play-circle-o"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste simple" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[puces]','[/puces]','description');" /><i class="fa fa-list-ol"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste numéroté" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[puces2]','[/puces2]','description');" /><i class="fa fa-list-ul"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement gauche" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[left]','[/left]','description');" /><i class="fa fa-align-left"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement centré" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[center]','[/center]','description');" /><i class="fa fa-align-center"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement droite" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[right]','[/right]','description');" /><i class="fa fa-align-right"></i></button>&nbsp;

                                      <input data-toggle="tooltip" data-placement="top" title="" data-original-title="Couleur" style="height: 15.5px; font-size:12px;font-weight: bold; width: 20px;" type="color" id="colore" onchange="insertTag('[color=' + this.value + ']','[/color]', 'description');">&nbsp;

										<button type="button" value="cite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Citation" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[cite]','[/cite]','description');" /><i class="fa fa-list-alt"></i></button>&nbsp;

										<button type="button" value="bande" data-toggle="tooltip" data-placement="top" title="" data-tag="bande" data-original-title="Catégorie" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[bande]','[/bande]','description');" /><i class="fa fa-filter"></i></button>&nbsp;
										                                         
                                                                                                    
                                           <button type="button" value="hr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Séparateur" style="font-size:12px;font-weight: bold; width: 20px;" onclick="insertTag('[hr]','','description')" class="fa fa-arrows-h" /><i class="fa fa-arrows-hist-alt"></i></button>
                                               
                                               <br><br>
                                               <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Taille" style="font-size:12px;font-weight: bold; width: 20px;border-radius: 4px;height: 22px;" onchange="insertTag('[taille=' + this.options[this.selectedIndex].value + ']', '[/taille]', 'description');">
										<option value="" class="selected" selected="selected"></option>
										<?php
										
										foreach(range(0, 100) as $taille)
										   {
										   echo '<option style="font-size:'.$taille.'px;" value="'.$taille.'">'.$taille.'</option>';
										   } ?>
										

										
									</select>&nbsp;   
                
                                      
                                      <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Police de Texte" style="font-size:14px;font-weight: bold; width: 20px;border-radius: 4px;height: 22px;width: 151px;" onchange="insertTag('[font=' + this.options[this.selectedIndex].value + ']', '[/font]', 'description');">
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Arial" style="font-family:Arial; font-size: 14px;">Arial</option>
										<option value="Century Gothic" style="font-family:Century Gothic; font-size: 14px;">Century Gothic</option>
										<option value="Comic Sans MS" style="font-family:Comic Sans MS; font-size: 14px;">Comic Sans MS</option>
										<option value="Courier New" style="font-family:Courier New; font-size: 14px;">Courier New</option>
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Georgia" style="font-family:Georgia; font-size: 14px;">Georgia</option>
										<option value="Helvetica" style="font-family:Helvetica; font-size: 14px;">Helvetica</option>
										<option value="Impact" style="font-family:Impact; font-size: 14px;; font-size: 14px;">Impact</option>
										<option value="Lucida" style="font-family:Lucida; font-size: 14px;">Lucida</option>
										<option value="Lucida Grande" style="font-family:Lucida Grande; font-size: 14px;">Lucida Grande</option>
										<option value="Palatino" style="font-family:Palatino; font-size: 14px;">Palatino</option>
										<option value="Tahoma" style="font-family:Tahoma; font-size: 14px;">Tahoma</option>
										<option value="Times New Roman" style="font-family:Times New Roman; font-size: 14px;">Times New Roman</option>
										<option value="Verdana" style="font-family:Verdana; font-size: 14px;">Verdana</option>
										<option value="Trebuchet MS" style="font-family:Trebuchet MS; font-size: 14px;">Trebuchet MS</option>							
									</select>
                                       <br><br>
                                        <textarea name="description" class="form-control" id="description" style="height: 269px;" onselect="preview(this, 'previewDiv');" onkeyup="preview(this, 'previewDiv');"><?php echo $result_requeteUsers['description'] ?></textarea>
                                     
                                       	<br>
                                        	<div id="viewDiv" style="color: white;"></div>
                                        	<br>	
									 <div style="text-align:center;">
                                       
										<button type="button" class="btn btn-info" value="Visualiser" onclick="view('description','viewDiv');" />Visualiser</button> 
									
                                         
                                        </div>
 								 
								
                                       
                                        </div>
                                     
    	</div>
		</div>
   
    	 </div> 
    	 
    	 
    	 
    	 </div>
    	 
    	 <h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Identité du joueur</h2>
    	
    	
    	<hr style="margin-left: -1%;">
    	 
    	 
    	 <div align="center" style="margin-bottom: 25px;">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Playstation Network</div>
    	
    	<div><input type="text" name="psn" class="form-control" style="width: 292px;height: 20px;color: black;"  value="<?php echo $result_requeteUsers['psn']; ?>"></div>
    	
    	
    	<hr style="width: 46%;"><div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Xbox</div>
    	
    	<div><input type="text" name="xblive" class="form-control" style="width: 292px;height: 20px;color: black;"  value="<?php echo $result_requeteUsers['xblive']; ?>"></div>
    	
    	<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Steam</div>
    	
    	<div><input type="text" name="steam" class="form-control" style="width: 292px;height: 20px;color: black;"  value="<?php echo $result_requeteUsers['steam']; ?>"></div>
</div>
 
 <hr style="width: 46%;">
 

                                        <div id="emoji-resultat" style="color: #ffffff;font-weight: bold;width: 40%;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);margin-bottom: 30px; display: none;"></div><br>
                                        
<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Humeur</div>
    									
  
  <div align="center"> <a class="emoji" href="" id="emo1" title="Rigole"><img src="image/emoji/1f53147abc300a9a6e9ebe9615f93916.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo2" style="padding-left: 2px;" title="Cool"><img src="image/emoji/22d3bb1ef846c961b6d79a0074c5257c.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo3" style="padding-left: 2px;" title="Heureux"><img src="image/emoji/33b356494bc92ee1a428e58e1a38b4f5.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo4" style="padding-left: 2px;" title="Pleure"><img src="image/emoji/40af215ae5c29572301fad633f9d4973.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo5" style="padding-left: 2px;" title="Casser"><img src="image/emoji/43f562a0d63ba8c4d650a8b7936e961b.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo6" style="padding-left: 2px;" title="Posé"><img src="image/emoji/50d6fcb92cc6320314096e79d4dec051.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo7" style="padding-left: 2px;" title="Enervé"><img src="image/emoji/59f3b3231ec2e3cf91c5b975889e3c91.png" style="width:35px;"></a> 
                                              <a class="emoji" href="" id="emo8" style="padding-left: 2px;" title="Sarcastique"><img src="image/emoji/67d439f077e4180416b633b333088834.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo9" style="padding-left: 2px;" title="Gamer"><img src="image/emoji/75de057f355b0a711c187d430808e5df.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo10" style="padding-left: 2px;" title="En Couple"><img src="image/emoji/3576951ae5345f8045c05ddbb58b4962.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo11" style="padding-left: 2px;" title="Mort de rire"><img src="image/emoji/10622116650a711d1d43130d16ab07fc.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo12" style="padding-left: 2px;" title="Chambouler"><img src="image/emoji/a6f4673381b6074c837f4e502d4d1378.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo13" style="padding-left: 2px;" title="Love"><img src="image/emoji/a92f24f3d21bf5129b16a1b9ff72ab4b.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo14" style="padding-left: 2px;" title="Méchant"><img src="image/emoji/b0bd0a0a52fe2402e6809ce7423594bf.png" style="width:35px;"></a>
                                              <a class="emoji" href="" id="emo15" style="padding-left: 2px;" title="La Nosée"><img src="image/emoji/ff64fae0c116c61a7eb7abeeff25fdf4.png" style="width:35px;"></a></div>
   
    	 </div> 
    	 
    	</div> 
    	
    	 <h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Informations personnelles</h2>
    	
    	
    	<hr style="margin-left: -1%;">
    
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Prénom</div>
    	
    	<div><input type="text" name="prenom" class="form-control" style="width: 292px;height: 20px;color: black;" id="prenom" value="<?php echo $result_requeteUsers['prenom']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Nom</div>
    	
    	<div><input type="text" name="nom" class="form-control" style="width: 292px;height: 20px;color: black;" id="nom"  value="<?php echo $result_requeteUsers['nom']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Date de naissance</div>
    	
    	<div><input type="date" class="form-control" style="width: 292px;height: 20px;color: black;" id="age" name="age"  value="<?php echo $result_requeteUsers['age']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Pays</div>
    	
    	<div><select name="pays" id="pays" class="form-control" style="width: 316px;">

                        <option value="<?php echo $result_requeteUsers['pays']; ?>"><?php echo $result_requeteUsers['pays']; ?> </option>
                        
                         <option>----------------</option>
                      
<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option>
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option>
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>
<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>
<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option>
<option value="Chypre">Chypre </option>
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Cote_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>
<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>
<option value="Egypte">Egypte </option>
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>
<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>
<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>
<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option>
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>
<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>
<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>
<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>
<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option>
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>
<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="MadÃ¨re">MadÃ¨re </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>
<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>

<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>
<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option>
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>
<option value="Qatar">Qatar </option>
<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>
<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
<option value="Senegal">Senegal </option>
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option>
<option value="Sri_Lanka">Sri_Lanka </option>
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>
<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option>
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option>
<option value="Turquie">Turquie </option>
<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>
<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>
<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>
<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>
<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>
</select></div>
	
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Adresse</div>
    	
    	<div><input type="text" name="adresse" class="form-control" style="width: 292px;height: 20px;color: black;" id="adresse" value="<?php echo $result_requeteUsers['adresse']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Ville</div>
    	
    	<div><input type="text" name="ville" class="form-control" style="width: 292px;height: 20px;color: black;" id="ville" value="<?php echo $result_requeteUsers['ville']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Code Postal</div>
    	
    	<div><input type="text" name="postal" class="form-control" style="width: 292px;height: 20px;color: black;" id="postal" value="<?php echo $result_requeteUsers['postal']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Complément d'adresse</div>
    	
    	<div><input type="text" class="form-control" style="width: 292px;height: 20px;color: black;" id="complement" name="complement" value="<?php echo $result_requeteUsers['complement']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center" style="margin-bottom: 25px;">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Civilité</div>
    	
    	<div><select name="sexe" id="sexe" class="form-control" style="width: 316px;">
                                                      <option value="<?php echo $result_requeteUsers['sexe']; ?>"><?php echo $result_requeteUsers['sexe']; ?></option>
                                                      <option>----------------------------------</option>
                                                      <option value="M">M</option>
                                                      <option value="MME">MME</option>
                                                    </select></div>
		</div>
   	
   	
    	
    	 <h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Réseaux sociaux</h2>
    	
    	<hr style="margin-left: -1%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Youtube</div>
    	
    	<div><input type="text" class="form-control" style="width: 292px;height: 20px;color: black;" id="yt" name="yt" value="<?php echo $result_requeteUsers['yt']; ?>"></div>
		</div>
   	
   <hr style="width: 46%;">
    	
    	<div align="center">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Facebook</div>
    	
    	<div><input type="text" class="form-control" style="width: 292px;height: 20px;color: black;" id="facebook" name="facebook" value="<?php echo $result_requeteUsers['facebook']; ?>"></div>
		</div>
   	
   		<hr style="width: 46%;">
    	
    	<div align="center" style="margin-bottom: 25px;">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Twitter</div>
    	
    	<div><input type="text" class="form-control" style="width: 292px;height: 20px;color: black;" id="twitter" name="twitter" value="<?php echo $result_requeteUsers['twitter']; ?>"></div>
		</div>
  	
  	
  		<h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Supprimer mon compte</h2>
 
    	
    	<div align="center" style="margin-top: 31px;">
    		
    		<button class="btn btn-success pull-center" type="submit" style="font-weight: bold;">Sauvegarder mes informations</button>
    		
    	</div>
    	
</form>

<form action="/delete-account" method="post">

<hr style="margin-left: -1%;">
    	
    	
    	<div align="center" style="margin-bottom: 25px;">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Mot de passe</div>
    	
    	<div><input required type="text" class="form-control" style="width: 292px;height: 20px;color: black;" id="password" name="password"></div>
    	
    	<hr style="width: 46%;">
    	
    	<div style="color: white;font-size: 15px;margin-bottom: 14px;font-weight: bold;">Je souhaite supprimer mon compte</div>
    	
    	<div><input type="checkbox" required class="form-control" style="height: 20px;width: 3%;color: black;" id="password" name="password" value="Oui"></div>
    	
		<hr style="width: 46%;">
		
		<button class="btn btn-success pull-center" type="submit" style="font-weight: bold;">Valider</button>
		
		</div>
</form>	
	
	
	 <h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Confidentialité</h2>
    	
    	<hr style="margin-left: -1%;">
    	
    	
<div align="center">

<div id="success6" style="color: #ffffff;font-weight: bold;width: 40%;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);margin-bottom: 30px; display: none;"><span class="fa fa-check" style="color: #2ebf39;margin-right: 2px;" aria-hidden="true"></span> Votre compte est désormais privé.</div>
          
<div id="success7" style="color: #ffffff;font-weight: bold;width: 40%;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);margin-bottom: 30px; display: none;"><span class="fa fa-check" style="color: #2ebf39;margin-right: 2px;" aria-hidden="true"></span> Votre compte est désormais public.</div>
           
           
<form id="private" method="post">
	
<button class="btn btn-outline-warning" type="submit" style="font-weight: bold; background-color: transparent;">Compte privé</button>
		
<input id="formpriv" name="formpriv" type="hidden" value="1">
		
	
</form>

<form id="private2" method="post" style="display: none;">

<button class="btn btn-outline-warning" type="submit" style="font-weight: bold; background-color: transparent;">Compte public</button>
		
<input id="formpriv2" name="formpriv2" type="hidden" value="0">

</form>
	
</div>
		
		
			<div align="center" style="padding: 20px 20px 20px 20px;margin-top: 30px;color: white;line-height: 20px;font-weight: bold;background-color: #2f29297a;">Vos données sont destinées à Over Games et à ses prestataires pour vous fournir les services souscrits et vous informer de nos offres. Vous pouvez à tout moment modifier dans votre compte vos préférences concernant les offres susceptibles de vous être adressées. Enfin, conformément à la loi « informatique et libertés » modifiée, vous pouvez également accéder aux données vous concernant pour les faire rectifier ou supprimer, et de définir des directives relatives au sort de vos données à caractère personnel après décès, en contactant le service de protection des données via support@over-games.fr.</div>


       
       </div>  
       
       
       <div id="menu2" style="margin-left: 13%;margin-top: 37px;margin-right: 13%; display: none;" align="left">
    	
    	

<h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Gérer mon compte Premium</h2>
    	
    
<hr style="margin-left: -1%;">
    	
    	<div align="center" style="margin-bottom: 25px;">
          
          <div style="color: white;margin-bottom: 14px;font-size: 15px;font-weight: bold;">Gérer mes codes Premium</div>
          
           <hr style="width: 46%;"><div align="center">
     
              
           <span style="color: white;">Vous avez <span style="color: #4a80f9;font-weight: bold;"><?php echo $profil_code['id'] ?></span> codes articles non partagés</span>
			<br><br>
			<span style="color: #b7b6b6;">Les codes amis permettent de consulter un article Premium pendant 24 heures. N’hésitez pas à en faire profiter vos amis.</span>
        
        </div>

       
       </div> 
       
         <hr style="width: 46%;">
            
            <div align="center"><a id="btn_code" class="btn btn-outline-warning" style="padding-top: 7px;width: auto;font-weight: bold;">Mes Codes Premium</a></div>
            
            <div id="code_article" style="display: none;">
            
	<br><div>   
	   
<style>
.tableau {
	border: 5px dashed #8c2525a3;
    width: 100%;
    table-layout: fixed;
}
.tableau caption {
  font-size:1.4rem;
  color:#ffffff;
  background-color: #5d625c;
 /* caption-side: bottom; // top|bottom|initial|inherit; */
}
.tableau th {
  background-color:#999690;
  color:#fff;
}
.tableau tfoot td {
  color:#fff;
  background-color:#999690;
  border-top:1px solid #5d625c;
  border-bottom:1px solid #5d625c;
}
.zebre tbody tr:nth-child(odd) {
  background-color: #d6d3ce;
  border-bottom:1px solid #ccc;
  color:#444;
}
.zebre tbody tr:nth-child(even) {
  background-color: #c6c3bd;
  border-bottom:1px solid #ccc;
  color:#444;
}
.zebre tbody tr:hover:nth-child(odd) {
  background-color: #999690;
  color:#ffffff;
}
.zebre tbody tr:hover:nth-child(even) {
  background-color: #999690;
  color:#ffffff;
}

/* La couleur ne fonctionne pas avec odd / even */
.tableau col:nth-child(1) {
  background-color:#d6d3ce;
}
.tableau col:nth-child(2) {
  background-color:#dddad4;width:100px;text-align:right;
}
.tableau col:nth-child(3) {
  background-color:#c6c3bd;color:#fff;width:100px;text-align:right;
}

.tableau td:nth-child(2) {
  text-align:right;
}
.tableau td:nth-child(3) {
  text-align:right;
}
</style>

<table width="720" align="center" class="tableau zebre" style="margin-bottom: 20px;margin-top: 5px;">
  <colgroup>
    <col>
    <col>
    <col>
  </colgroup>
  <thead style="border-bottom: 1px solid black;">
    <tr style="height: 42px;">
      <th style="text-align:center;width: 49px;padding-top: 5px;padding-bottom: 5px;">Code</th><th style="text-align:center;">Date de création</th><th style="text-align:center;">Date d'expiration</th><th style="text-align: center;width: 47px;
">Activé</th><th style="text-align: center;width: 47px;
">Partagé</th><th style="text-align: center; width: 68px;
">Valable</th></tr>
  </thead>
   <tfoot>
    <tr style="height: 38px;"><td style="
    padding-top: 5px;
    padding-bottom: 5px;
">&nbsp;</td><td></td><td></td><td></td><td></td><td></td></tr>
  </tfoot>
  <tbody>
    
        <?php
   	while ($donnees3 = $actu7->fetch())
    {
   ?> 
     
    <tr style="font-size: 14px;font-weight: bold;">
    
    <td style="text-align: left;padding-top: 10px;padding-left: 8px;padding-bottom: 10px;"><?php echo $donnees3['code'] ?></td><td style="text-align:center;"><?php echo $donnees3['date_creation'] ?></td><td style="text-align: center;"><?php echo $donnees3['expire'] ?></td><td style="text-align: center;"><?php echo $donnees3['code_utilisé'] ?></td><td style="text-align: center;"><?php echo $donnees3['code_partage'] ?></td><td style="text-align: center;"><?php echo $donnees3['Valable']; ?></td>

    </tr>
    
    <?php
   	}
   ?> 
    
  </tbody>
</table>

</div>
	</div>
      
      <?php if($result_requeteUsers['Premium'] == "oui") { ?>
       
 <h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Mon compte</h2>
    	
    
<hr style="margin-left: -1%;">
         
           <div align="center">
          
        
          
          <div align="center" style="margin-bottom: 25px;">
     
             <?php $originalDate = $result_requeteUsers['datefinpremium'];
$newDate = date("d-m-Y", strtotime($originalDate)); ?>
              
           <span style="color: white;">Vous êtes membre Premium depuis le <?php echo $newDate = date("d/m/Y", strtotime($originalDate)); ?></span>
           
           <?php $originalDate2 = $result_requeteUsers['datefinpremium2'];
$newDate2 = date("d-m-Y", strtotime($originalDate2)); ?>
		
			<br><br>
			<span style="color: white;">Date de fin de mon abonnement : <?php echo $newDate2 = date("d/m/Y", strtotime($originalDate2)); ?></span>
       <br><br>
       
       
       <?php
$date1 = date(Y-m-d);
$date2 = $result_requeteUsers['datefinpremium2'];
	
$nbjour = date_diff($date1, $date2);	
	
?>

<?php
setlocale(LC_TIME, "fr_FR");
	
$originalDate3 = $result_requeteUsers['datefinpremium2'];

$date1 = date("d-m-Y"); //date fr le 01 mai 2010
$date2 = date("d-m-Y", strtotime($originalDate3)); // date fr le 01 octobre 2010
	
// On transforme les 2 dates en timestamp
$date3 = strtotime($date1);
$date4 = strtotime($date2);	
 
// On récupère la différence de timestamp entre les 2 précédents
$nbJoursTimestamp = $date4 - $date3;
 
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
 

?>
       
       
      <span style="color: white;">Il vous reste plus de <?php echo $nbJours ?> jours d’abonnement.</span>
      
<br><br><span style="color: white;">Prochaine échéance :</span>

<span style="color: white;"> Vous serez débité de 

<?php if($result_requeteUsers['TypeAbo'] == "1") { ?>
4,90€ 
<?php }else if($result_requeteUsers['TypeAbo'] == "2") { ?>
39,90€ 
<?php }else if($result_requeteUsers['TypeAbo'] == "1") { ?>
59,90€ 
<?php }?>

le <?php $originalDate4 = $result_requeteUsers['datefinpremium2']; 
	echo date("d/m/Y", strtotime($originalDate4)) ?></span>
        
        </div>
        
      
       </div>
            
             <h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Contact SAV</h2>
    	
    
		<hr style="margin-left: -1%;">
       
       <div align="center">
       
		<span style="color: white;">En cas de problème, n’hésitez pas à contacter notre SAV à cette adresse :</span><br>
      	</span><a href="mailto:premium@over-games.fr">premium@over-games.fr</a></span>
      	
       </div>
           
     <?php } ?>
                
                 </div>   
                 
                 
       <div id="menu3" style="margin-left: 13%;margin-top: 37px;margin-right: 13%; display: none;" align="left">
    	
    	

<h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Mes réactions sur les jeux vidéos.</h2>
    	
    
<hr style="margin-left: -1%;">
    	
    	<div align="left" style="margin-bottom: 25px;">
          
       
          <div>     
  
   <?php if(!empty($acturesult6["ids"])) { ?>  

  <?php
   	while ($donnees2 = $actu->fetch())
    {
   ?>    

<table style="width: auto" border="0">
  <tbody>
    <tr>
      <td><img style="width: 74px; height: 74px;" class="thumbnail" src="<?php echo $donnees2['avatar'] ?>" alt=""></td>
      
      <td><div class="comment-content" style="margin-top: -16px;line-height: 29px;margin-left: 9px;">
			<a class="username" style="font-size: 15px;font-weight: bold;color: white;"><?php echo $donnees2['pseudo'] ?></a><span style="font-size: 15px;color: white;font-weight: bold;"> | <?php echo $donnees2['Titre'] ?></span>
			
			
			<p style="font-size: 16px; color: white;"><?php echo substr($donnees2['message'], 0, 60);?></p>
			
			<span class="pull-left" style="font-size: 12px;font-weight: bold;text-align: left;color: white;"><?php echo AffDate($donnees2['ddate']); ?></span>
			
		</div></td>
    </tr>
  </tbody>
</table>

			  
<?php } ?>

<?php }else{ ?>

<div align="center" style="margin-top: 16px;"><span style="font-size: 18px;font-weight: bold;">Aucune réaction sur les jeux vidéo pour le moment.</span></div>

<?php } ?> 

</div>


       
       </div> 
       
       
       
<h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Mes réactions sur les actualités.</h2>
    	
    
<hr style="margin-left: -1%;">
       
<div align="left" style="margin-bottom: 25px;">
          
       
          <div>     
  
   <?php if(!empty($acturesult5["id"])) { ?>  

  <?php
   	while ($donnees2 = $actu2->fetch())
    {
   ?>    

<table style="width: auto" border="0">
  <tbody>
    <tr>
      <td><img style="width: 74px; height: 74px;" class="thumbnail" src="<?php echo $donnees2['avatar'] ?>" alt=""></td>
      
      <td><div class="comment-content" style="margin-top: -16px;line-height: 29px;margin-left: 9px;">
			<a class="username" style="font-size: 15px;font-weight: bold;color: white;"><?php echo $donnees2['pseudo'] ?></a><span style="font-size: 15px;color: white;font-weight: bold;"> | <?php echo $donnees2['Titre'] ?></span>
			
			
			<p style="font-size: 16px; color: white;"><?php echo substr($donnees2['message'], 0, 60);?></p>
			
			<span class="pull-left" style="font-size: 12px;font-weight: bold;text-align: left;color: white;"><?php echo AffDate($donnees2['ddate']); ?></span>
			
		</div></td>
    </tr>
  </tbody>
</table>

			  
<?php } ?>

<?php }else{ ?>

<div align="center" style="margin-top: 16px;"><span style="font-size: 18px;font-weight: bold;">Aucune réaction sur les jeux vidéo pour le moment.</span></div>

<?php } ?> 

</div>


       
       </div>  
          
          <h2 style="color: white;font-weight: bold;border-left: 2px solid #207ad6;padding-left: 10px;">Mes derniers achats sur le site internet.</h2>
    	
    
<hr style="margin-left: -1%;">
       
<div align="center" style="margin-bottom: 25px;">
          
   <style>
.tableau {
  width:100%;
  table-layout: fixed;
  border-collapse: collapse;
}
.tableau caption {
  font-size:1.4rem;
  color:#ffffff;
  background-color: #5d625c;
 /* caption-side: bottom; // top|bottom|initial|inherit; */
}
.tableau th {
  background-color:#999690;
  color:#fff;
}
.tableau tfoot td {
  color:#fff;
  background-color:#999690;
  border-top:1px solid #5d625c;
  border-bottom:1px solid #5d625c;
}
.zebre tbody tr:nth-child(odd) {
  background-color: #d6d3ce;
  border-bottom:1px solid #ccc;
  color:#444;
}
.zebre tbody tr:nth-child(even) {
  background-color: #c6c3bd;
  border-bottom:1px solid #ccc;
  color:#444;
}
.zebre tbody tr:hover:nth-child(odd) {
  background-color: #999690;
  color:#ffffff;
}
.zebre tbody tr:hover:nth-child(even) {
  background-color: #999690;
  color:#ffffff;
}

/* La couleur ne fonctionne pas avec odd / even */
.tableau col:nth-child(1) {
  background-color:#d6d3ce;
}
.tableau col:nth-child(2) {
  background-color:#dddad4;width:100px;text-align:right;
}
.tableau col:nth-child(3) {
  background-color:#c6c3bd;color:#fff;width:100px;text-align:right;
}

.tableau td:nth-child(2) {
  text-align:right;
}
.tableau td:nth-child(3) {
  text-align:right;
}
</style>

<table width="720" align="center" class="tableau zebre">
  <colgroup>
    <col>
    <col>
    <col>
  </colgroup>
  <thead>
    <tr>
      <th style="text-align:center;width: 87px;padding-top: 5px;padding-bottom: 5px;">Produit</th><th style="text-align:center;" width="124">Date d'achat</th><th width="230" style="text-align:center;">Statut de la commande</th><th style="width: 0px;"></th><th style="text-align: center;width: 41px;
">Quantité</th><th style="text-align: center;width: 47px;
">Prix</th></tr>
  </thead>
   <tfoot>
    <tr><td style="
    padding-top: 5px;
    padding-bottom: 5px;
">&nbsp;</td><td></td><td></td><td></td><td></td><td></td></tr>
  </tfoot>
  <tbody>
    
        <?php
   	while ($donnees3 = $actu3->fetch())
    {
   ?> 
     
    <tr style="font-size: 14px;font-weight: bold;">
    
    <td style="text-align:center;padding-top: 10px;padding-bottom: 10px;"><?php echo $donnees3['objet'] ?></td><td style="text-align:center;"><?php echo $donnees3['dateachat'] ?></td><td style="text-align:center;"><?php echo $donnees3['Status'] ?></td><td style="width: 0px;"></td><td style="text-align: center;"><?php echo $donnees3['qte'] ?></td><td style="text-align: center;"><?php echo $donnees3['Prix'] ?></td>

    </tr>
    
    <?php
   	}
   ?> 
    
  </tbody>
</table>       
           
       </div>  
                 </div>    
      
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
