<?php session_start();


?>

<?php require('cnx.php'); ?>
<?php require('logged-admin.php'); ?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet17['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet17['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet17['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet17['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet17['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	<style>
	#premium {
		color: #FFFFFF;
background: #333333;
text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;
color: #FFFFFF;
background: transparent;
		font-size: 32px;
		font-weight: bold
		}
		
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
	</style>
		
	
	</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>   
    
   
        <div class="sitewrap-inner">
        
        
        
        <div class="content-wrapper">		
        
        <p align="center">C'est simple d'ajouter une newsletter</p>
 
    <hr>

<!-- BEGIN FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
                        <div class="index-background-element"></div>
          
  
    

        
<div class="index-loop-wrapper">
        <div class="index-loop-wrapper-inner" style="margin-right: 0px !important;">
        
<?php
	
$news = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 0,1");
$donnee = $cnx->query("SET NAMES 'utf8'");
$news->execute();
$donnee = $news->fetch();
	
$news2 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 1,1");
$donnee2 = $cnx->query("SET NAMES 'utf8'");
$news2->execute();
$donnee2 = $news2->fetch();
	
$news3 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 2,1");
$donnee3 = $cnx->query("SET NAMES 'utf8'");
$news3->execute();
$donnee3 = $news3->fetch();
	
$news4 = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 0,1");
$donnee4 = $cnx->query("SET NAMES 'utf8'");
$news4->execute();
$donnee4 = $news4->fetch();
	
$news5 = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 1,1");
$donnee5 = $cnx->query("SET NAMES 'utf8'");
$news5->execute();
$donnee5 = $news5->fetch();
	
$news6 = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 2,1");
$donnee6 = $cnx->query("SET NAMES 'utf8'");
$news6->execute();
$donnee6 = $news6->fetch();
?>        
        
 
<?php
	
if(!empty($_POST))
{ 
$to = "zineddinehamel@gmail.com";
	
				$subject = "Newsletter Over Games";
				$mail_body = '<html><head>
<title>Newsletter Over Games '. $date = date('d/m/Y') .' </title>
<meta charset="utf-8">
</head>
<body style="background-color:#a89d9d;">
<div id="mimi_background_color_wrapper" style="min-width: 630px">
 
  <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td valign="top" align="left">
         

          <div id="madmimi_outer_wrapper" style="margin-top: 0; margin-right: auto;border-radius: 5px;margin-bottom: 0; margin-left: auto; padding-top: 20px; padding-right: 0; padding-bottom: 0; padding-left: 0;">
 
  <table id="madmimi_wrapper" cellspacing="0" cellpadding="0" align="center" width="690" class="borderless " style=" margin-top: 0; margin-right: auto; margin-bottom: 0; margin-left: auto;border-radius: 5px;box-shadow: 0 0 19px white;"><tbody style="
"><tr><td style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
        <table id="subtle_wrapper" cellspacing="0" cellpadding="0" align="center" width="590" style="border-collapse: separate; border-spacing: 0; border-radius: 5px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;" class="borderless "><tbody><tr><td style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
                  <table id="madmimi_header" cellspacing="0" cellpadding="0" align="center" width="590" bgcolor="#E0E1DF" style="border-collapse: collapse; border-spacing: 0; border-radius: 5px 5px 0 0; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0; background-image: none; background-color: #E0E1DF;"><tbody><tr><td id="madmimi_header_content" width="590" style="border-radius: 5px 5px 0 0; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
                           </td>
                    </tr></tbody></table></td>
              </tr><tr><td style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
              <table id="madmimi_body" cellspacing="0" cellpadding="0" align="left" width="690" bgcolor="#E0E1DF" style=" margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; background-color: #E0E1DF;border-top-right-radius: 5px;      border-top-left-radius: 5px;"><tbody style="
"><tr valign="top" style="
"><td id="madmimi_body_content" style="max-width: 100%; margin-top: 0; margin-right: 0; margin-bottom: 0;margin-left: 0; padding-top: 25px; padding-right: 30px;padding-bottom: 0px; padding-left: 30px;">
                    
                    <div align="center" style="padding-bottom:15px; padding-top:15px; background-color: #20272d;">
                      <p><img src="https://over-games.fr/image/Logo.png" width="401" height="73"></p>
                      <p><b style="color: white;">Les dernières actualités, test, sur Over Games.</b></p>
                    </div>
                    
                    <div class="module header" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
                    
                    
                    
                    
                    <table width="100%" style="border-collapse: collapse; border-spacing: 0; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;"><tbody>
                    <tr>
                    <td><a href="https://over-games.fr/image/Slider-Index/Beautiful-Games-wallpapers-hd-1080p.jpg" target="_blank"><img alt="Bannière Over-Games" height="100%" src="https://over-games.fr/image/Slider-Index/Beautiful-Games-wallpapers-hd-1080p.jpg" style="border:none;border-radius:px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="100%"></a></td></tr>
                    
                    <tr>
                    
                    <td width="530" align="left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><br><div align="center">
                      <h2 align="center" style="font-weight: bold; color: #888888; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 22px; text-align: center;">Newsletter du '. $date = date('d/m/Y') .'</h2>
                      
                      
                    </div></td></tr></tbody></table></div><div class="module combo-left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><table width="100%" style="border-collapse: collapse; border-spacing: 0; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;"><tbody><tr>
                        <td width="530" align="left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
                        
                        <div align="center">
                        <div>
                         
                          <p align="left" style="line-height: 1.5em; color: #40413E; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; direction: ltr; unicode-bidi: embed; vertical-align: baseline; margin-top: 0; margin-right: 0; margin-bottom: 1.3em; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"> 
                                                   
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                          
                          
                          
                          <tbody>
                          
                          
                          <tr><td>  
                            <h3 align="center" style="font-weight: bold; color: black; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 18px; text-align: center;">Nos derniers tests</h3></td></tr>
                          
                          <tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
                           

                        
                           
                            <h1 class="text-build-content" style="margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; font-weight: normal;"><span style="color:#55575d;font-family:Arial;font-size:20px;line-height:22px;"><strong>'. $donnee2['Titre'] .'</strong></span></h1>
                          </div></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:550px;"><a href="https://over-games.fr/jeux?item='. $donnee['item'] .'" target="_blank">
                        
                        
                        <img alt="'. $donnee['image'] .'" src="https:'. $donnee['image'] .'" style="border:none;border-radius:5px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;"></a>
                        
                        </td></tr></tbody></table></td></tr>
			
						
						<tr><td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
							
						<span style="color:#148c36;font-family:Arial;font-size:13px;"><b>Plateforme : '. $donnee['plateforme'] .'</b></span>
                        
                        </p></div></td></tr><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
                        
                        <span style="font-family:Arial;font-size:13px;">'. $donnee['Paragraphe'] .'</span>
                        
                        </p></div></td></tr>
						
						
						</tbody></table>
						
							
							
						 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tbody><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"> 
						   <h1 class="text-build-content" style="margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; font-weight: normal;"><span style="color:#55575d;font-family:Arial;font-size:20px;line-height:22px;"><strong>'. $donnee3['Titre'] .'</strong></span></h1>
						 </div></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:550px;"><a href="https://over-games.fr/jeux?item='. $donnee2['item'] .'" target="_blank">
                        
                        
                        <img alt="'. $donnee2['image'] .'" src="https:'. $donnee2['image'] .'" style="border:none;border-radius:5px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;"></a>
                        
                        </td></tr></tbody></table></td></tr>
			
						
						<tr><td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
							
						<span style="color:#148c36;font-family:Arial;font-size:13px;"><b>Plateforme : '. $donnee2['plateforme'] .'</b></span>
                        
                        </p></div></td></tr><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
                        
                        <span style="font-family:Arial;font-size:13px;">'. $donnee2['Paragraphe'] .'</span>
                        
                        </p></div></td></tr>
						
						
						</tbody></table>
						
						
					

					 
						 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"> <tbody><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><h1 class="text-build-content" style="margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; font-weight: normal;"><span style="color:#55575d;font-family:Arial;font-size:20px;line-height:22px;"><b>'. $donnee['Titre'] .'</b></span></h1></div>
						   <span style="width:550px;"><a href="https://over-games.fr/jeux?item='. $donnee3['item'] .'" target="_blank"><img alt="'. $donnee3['image'] .'" src="https:'. $donnee3['image'] .'" style="border:none;border-radius:5px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;"></a></span></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr>
						   <td style="width:550px;">&nbsp;</td></tr></tbody></table></td></tr>
			
						
						<tr><td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
							
						<span style="color:#148c36;font-family:Arial;font-size:13px;"><b>Plateforme : '. $donnee3['plateforme'] .'</b></span>
                        
                        </p></div></td></tr><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
                        
                        <span style="font-family:Arial;font-size:13px;">'. $donnee3['Paragraphe'] .'</span>
                        
                        </p></div></td></tr>
						
						
						</tbody></table>
  
                            <tr><td>  
                            <h3 align="center" style="font-weight: bold; color: black; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 18px; text-align: center;">Nos dernière actualités</h3></td></tr>
                            
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"> <tbody><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
                              <h1 class="text-build-content" style="margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; font-weight: normal;"><span style="color:#55575d;font-family:Arial;font-size:20px;line-height:22px;"><b>'. $donnee4['Titre'] .'</b></span></h1></div>
						   <span style="width:550px;"><a href="https://over-games.fr/article?id='. $donnee4['id'] .'" target="_blank"><img alt="'. $donnee4['Image'] .'" src="https:'. $donnee4['Image'] .'" style="border:none;border-radius:5px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;"></a></span></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr>
						   <td style="width:550px;">&nbsp;</td></tr></tbody></table></td></tr>
			
						
						<tr><td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
							
						<span style="color:#148c36;font-family:Arial;font-size:13px;"><b>'. $donnee4['Cat'] .'</b></span>
                        
                        </p></div></td></tr><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;"><p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
                        
                        <span style="font-family:Arial;font-size:13px;">'. $donnee4['Paragraphe'] .'</span>
                        
                        </p></div></td></tr>
						
						
						</tbody></table>
						
						
						
						<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"> <tbody><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
                              <h1 class="text-build-content" style="margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; font-weight: normal;"><span style="color:#55575d;font-family:Arial;font-size:20px;line-height:22px;"><b>'. $donnee5['Titre'] .'</b></span></h1></div>
						   <span style="width:550px;"><a href="https://over-games.fr/article?id='. $donnee5['id'] .'" target="_blank"><img alt="'. $donnee5['Image'] .'" src="https:'. $donnee5['Image'] .'" style="border:none;border-radius:5px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;"></a></span></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr>
						   <td style="width:550px;">&nbsp;</td></tr></tbody></table></td></tr>
			
						
						<tr><td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
						  <p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
							
						<span style="color:#148c36;font-family:Arial;font-size:13px;"><b>'. $donnee5['Cat'] .'</b></span>
                        
                        </p></div></td></tr><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
                          <p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
                        
                        <span style="font-family:Arial;font-size:13px;">'. $donnee5['Paragraphe'] .'</span>
                        
                        </p></div></td></tr>
						
						
						</tbody></table>
						
					<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"> <tbody><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
                              <h1 class="text-build-content" style="margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; margin-top: 10px; margin-bottom: 10px; font-weight: normal;"><span style="color:#55575d;font-family:Arial;font-size:20px;line-height:22px;"><b>'. $donnee6['Titre'] .'</b></span></h1></div>
						   <span style="width:550px;"><a href="https://over-games.fr/article?id='. $donnee6['id'] .'" target="_blank"><img alt="'. $donnee6['Image'] .'" src="https:'. $donnee6['Image'] .'" style="border:none;border-radius:5px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;"></a></span></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr>
						   <td style="width:550px;">&nbsp;</td></tr></tbody></table></td></tr>
			
						
						<tr><td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
						  <p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
							
						<span style="color:#148c36;font-family:Arial;font-size:13px;"><b>'. $donnee6['Cat'] .'</b></span>
                        
                        </p></div></td></tr><tr><td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:25px;padding-bottom:0px;padding-left:25px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;">
                          <p class="text-build-content" style="margin: 10px 0; margin-top: 10px; margin-bottom: 10px;">
                        
                        <span style="font-family:Arial;font-size:13px;">'. $donnee6['Paragraphe'] .'</span>
                        
                        </p></div></td></tr>
						
						
						</tbody></table>
						
						<br>
						
                        </p></div></div></td></tr></tbody></table></div></td>
                </tr></tbody></table></td>
          </tr></tbody></table></td>
    </tr><tr><td style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; background-color:#20272d;">
      
      <div style="background:#20272d;background-color:#20272d;margin:0px auto;max-width:100%;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#20272d;background-color:#20272d;width:100%;"><tbody><tr><td style="border:0px solid #ffffff;direction:ltr;font-size:0px;padding:10px 0px 0px 0px;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:10px;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tbody><tr><td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;"><tbody><tr><td align="center" bgcolor="#f5a623" role="presentation" style="border:0px solid #ffffff;border-radius:7px;cursor:auto;mso-padding-alt:10px 25px 10px 25px;background:#f5a623;" valign="middle"><a href="https://over-games.fr/devenir-premium" style="display:inline-block;background:#f5a623;color:#ffffff;font-family:Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px 10px 25px;mso-padding-alt:0px;border-radius:7px;" target="_blank"><span style="color:#700e0e;font-size:13px;"><b>Devenir Membre Premium</b></span></a></td></tr></tbody></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div>
      
      <div style="background:#20272d;background-color:#20272d;margin:0px auto;max-width:100%;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#20272d;background-color:#20272d;width:100%;"><tbody><tr><td style="border:0px solid #ffffff;direction:ltr;font-size:0px;padding:0px 0px 0px 0px;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tbody><tr><td style="background:#20272d;font-size:0px;padding:10px 25px 0 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><p style="border-top:solid 2px #E6E6E6;font-size:1;margin:0px auto;width:100%;"></p><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 2px #E6E6E6;font-size:1;margin:0px auto;width:550px;" role="presentation" width="550px" ><tr><td style="height:0;line-height:0;"> &nbsp;
</td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div>
       
        
        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top; background-color: #20272d" width="100%"><tbody><tr><td align="center" style="font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" ><tr><td><![endif]--><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;"><tbody><tr><td style="padding:4px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-radius:3;width:32;"><tbody><tr><td style="padding:0px 0px 0px 0px;font-size:0;height:32;vertical-align:middle;width:32;"><a href="https://www.paypal.com/donate/?token=8E0c04mdtm3g0aQnK56Y-WbXchelGqkpdPR24kvc7Izc9k1q2LWno-SOVczNNuIyLx3AG0&amp;country.x=FR&amp;locale.x=FR" target="_blank"><img height="32" src="http://x6zh1.nltconfirm.ionos.com/img/x6zh1/b/mhils/g8047.png" style="border-radius:3;display:block;" width="32"></a></td></tr></tbody></table></td><td style="vertical-align:middle;"><a href="https://www.paypal.com/donate/?token=8E0c04mdtm3g0aQnK56Y-WbXchelGqkpdPR24kvc7Izc9k1q2LWno-SOVczNNuIyLx3AG0&amp;country.x=FR&amp;locale.x=FR" style="color:#ffffff;font-size:13px;font-family:Arial Black;line-height:22px;text-decoration:none;" target="_blank">Faire des dons</a></td></tr></tbody></table><!--[if mso | IE]></td><td><![endif]--><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;"><tbody><tr><td style="padding:4px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-radius:3;width:32;"><tbody><tr><td style="padding:0px 0px 0px 0px;font-size:0;height:32;vertical-align:middle;width:32;"><img height="32" src="http://x6zh1.nltconfirm.ionos.com/img/x6zh1/b/mhils/g804y.png" style="border-radius:3;display:block;" width="32"></td></tr></tbody></table></td><td style="vertical-align:middle;"><span style="color:#ffffff;font-size:13px;font-family:Arial Black;line-height:22px;text-decoration:none;">Notre Page Youtube</span></td></tr></tbody></table><!--[if mso | IE]></td><td><![endif]--><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;"><tbody><tr><td style="padding:4px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-radius:3;width:32;"><tbody><tr><td style="padding:0px 0px 0px 0px;font-size:0;height:32;vertical-align:middle;width:32;"><img height="32" src="http://x6zh1.nltconfirm.ionos.com/img/x6zh1/b/mhils/g8049.png" style="border-radius:3;display:block;" width="32"></td></tr></tbody></table></td><td style="vertical-align:middle;"><span style="color:#ffffff;font-size:13px;font-family:Arial Black;line-height:22px;text-decoration:none;">Notre page Facebook</span></td></tr></tbody></table><!--[if mso | IE]></td><td><![endif]--><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;"><tbody><tr><td style="padding:4px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-radius:3;width:32;"><tbody><tr><td style="padding:0px 0px 0px 0px;font-size:0;height:32;vertical-align:middle;width:32;"><a href="https://twitter.com/OverGames72" target="_blank"><img height="32" src="http://x6zh1.nltconfirm.ionos.com/img/x6zh1/b/mhils/g80ow.png" style="border-radius:3;display:block;" width="32"></a></td></tr></tbody></table></td><td style="vertical-align:middle;"><a href="https://twitter.com/OverGames72" style="color:#ffffff;font-size:13px;font-family:Arial Black;line-height:22px;text-decoration:none;" target="_blank">Notre page Twitter</a></td></tr></tbody></table><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table>

        <table id="madmimi_footer" border="0" cellspacing="0" cellpadding="0" class="ui_dark" style="border-collapse: collapse; border-spacing: 0; border-radius: 0 0 4px 4px; width: 100%; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0; background-color: #20272d"><tbody><tr><td id="madmimi_footer_content" style="border-radius: 0 0 4px 4px; color: #222; font-family: Helvetica Neue, Helvetica, Arial, Verdana, sans-serif; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-right: 30px; padding-bottom: 30px; padding-left: 30px;">
              <table class="toolbar" style="width: 100% !important; border-collapse: collapse; border-spacing: 0; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0; background-color: #20272d;"><tbody><tr><td id="madmimi_footer_left" style="text-align: center; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 10px; padding-right: 0; padding-bottom: 0; padding-left: 0;" align="center">
                    <div class="footer" align="center" style="color: white; font-weight: bold; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 11px; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; letter-spacing: 2px;">©2020 Copyright Over Games Tous droit réservé.
                    </div>
                  </td>
                </tr></tbody></table></td>
          </tr></tbody></table></td>
    </tr></tbody></table></div>
   

        </td>
      </tr>
     
  </tbody>
  </table></div>




</body></html>';
	
	$newsletteruser = $cnx->prepare("SELECT email FROM NewsLetter");
$donnees = $cnx->query("SET NAMES 'utf8'");
$newsletteruser->execute();
	
	  while ($donnees = $newsletteruser->fetch()) 
    {
		
		$liste .= ','; //On sépare les adresses par une virgule.
		$liste .= $donnees['email'];
		
		$_SESSION['listeemail'] = $liste;
	}
	
	
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$headers .= 'From: Over Games'."<no-reply@over-games.fr>" . "\r\n";				$headers .= 'Bcc: ' . $_SESSION['listeemail'] . '' . "\r\n";
	
				mail($to, $subject, $mail_body, $headers);

} 
?>

<div align="center">
<h3 style="color: white;">Message ajouté à la newsletter</h3>
<br />
<br />
<form method="post" action="/newsletter" enctype="multipart/form-data">

<?php 
	
$users = $cnx->prepare("SELECT * FROM NewsLetter");
$donneee = $cnx->query("SET NAMES 'utf8'");
$users->execute();

?>
	
<h3 style="color: white; font-weight: bold;">Liste des utilisateurs :</h3>
		<br><br>
<select style="width: 32%;" name="liste" id="liste" class="form-control">	
	
<?php while($donneee = $users->fetch()) {	?>
		
<option value="<?php echo $donneee['email'] ?>"><?php echo $donneee['email'] ?></option>

<?php } ?>

</select>
<br><br>

	<button type="submit" class="btn btn-warning">Envoyer la newsletter</button>
</form>
</div>

 
            </div>
     
   
                                                                               
                        <!-- END INDEX LOOP -->
            

        </div>
        
         
    </div>    
       
            
       
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>



</body>
</html>
<strong></strong>