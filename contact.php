<?php session_start();


?>

<?php require('cnx.php'); ?>

<?php
									  
									  $characts    = 'abcdefghijklmnopqrstuvwxyz';
$characts   .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
$characts   .= '1234567890'; 
$code_aleatoire      = ''; 

for($i=0;$i < 10;$i++)    //10 est le nombre de caractères
{ 
$code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
}
									  
if(!empty($_POST)) {
	
	if($_POST['code'] == $_COOKIE['Verif-Email']) {
			
     $nom=htmlentities($_POST['nom']); 
	 $web=htmlentities($_POST['web']); 
     $email=htmlentities($_POST['emaill']); 
	 $bug=htmlentities($_POST['bug']); 
     $message=htmlentities($_POST['messagee']); 
	 $page=htmlentities($_POST['page']); 
	
     $email = $_POST['emaill'];
     $to = "support@over-games.fr";
	 $subject = "Formulaire de contact Over-Games";
	 $mail_body = 'Nom de l\'utilisateur : '.$nom.'<br/>
	 Email de l\'utilisateur : '.$email.'<br/>
	 Site internet de l\'utilisateur : '.$web.'<br/>
	 Bug sur le site internet : '.$bug.'<br/>
	 Page du site internet : '.$page.'<br/>
	 Message de l\'utilisateur : '.$message.'
	 ';
 
           
      $headers  = 'MIME-Version: 1.0' . "\r\n";
	  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	  $headers .= 'From: '. $email . "\r\n";
	  mail($to, $subject, $mail_body, $headers);
	
		die('<META HTTP-equiv="refresh" content=0;URL=contact?message=oui>');
		
	}else{
			die('<META HTTP-equiv="refresh" content=0;URL=contact?message=non>');
	
	
	}
}

?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet9['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet9['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet9['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet9['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet9['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	<link rel="stylesheet" href="wp-content/themes/powerup/bootstrapcss"/>
	
	<style>	p {
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
        
        	<p align="center">Envoyez un mot une lettre, Signalez-nous un bug.</p>	
        	
        	<hr>
        	
        	 <?php if($_GET['message'] == "oui")
    { ?>    
    <div align="center" id="settings-resultat" style="margin-bottom: 37px;margin-top: 37px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Le message a été envoyé.</div>
                                        </div>
     <?php } ?>
     
      <?php if($_GET['message'] == "non")
    { ?>    
    <div align="center" id="settings-resultat2" style="margin-bottom: 37px;margin-top: 37px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color : rgba(209,26,29,1.00);margin-right: 2px;"></span> Le code que vous avez entré ne correspond pas.</div>
                                        </div>
     <?php } ?>
     

<div align="center" style="margin-top: 23px;">
<table style="width: 570px" border="0" align="center" class="condition_form">
 <form action="contact" method="post">
  <tbody>
    <tr>
      <td style="font-weight: bold; font-size: 15px; color: white; padding-bottom: 13px;">Votre nom et prénom</td>
    </tr>
    <tr>
      <td><input style="height: 20px;" name="nom" type="text" required="" class="form-control" id="nom" placeholder="Votre nom"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Votre adresse email</td>
    </tr>
    <tr>
      <td><input style="height: 20px;" name="emaill" type="email" required="" class="form-control" id="emaill" placeholder="Votre email"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Votre site internet</td>
    </tr>
    <tr>
      <td><input style="height: 20px;" name="web" type="text" required="" class="form-control" id="web" placeholder="Votre site internet"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Signalé un bug</td>
    </tr>
    <tr>
      <td><input style="height: 20px;" name="bug" type="text" class="form-control" id="bug" placeholder="Signaler un bug"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Quelle Page</td>
    </tr>
    <tr>
      <td><input style="height: 20px;" name="page" type="text" class="form-control" id="page" placeholder="Quelle page"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Code de sécurité</td>
    </tr>
    <tr>
      <td><input style="height: 10px;display: inline-block;width: 90px;" name="code" type="text" required="" class="form-control" id="code" maxlength="10" placeholder=""><span class="label label-primary Code" style="display: inline-block;margin-left: 8px;margin-top: 7px;"><?php echo $code_aleatoire; ?></span></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Votre message</td>
    </tr>
    <tr>
      <td><textarea name="messagee" class="form-control" id="messagee" placeholder="Votre message" style="height: 269px;text-align: center;font-weight: bold;font-size: 12px;background-color: white; width: 100%;"></textarea></td>
    </tr>
    
    <tr>
      <td align="center" style="padding-top: 23px;"><button type="submit" class="btn btn-info">Envoyer le message</button>&nbsp;
												<button type="reset" class="condition_form_btn btn btn-warning">Effacer le message</button>
											 </td>
    </tr>
  </tbody>
	</form>
</table>
</div>
    
    <div align="center" style="margin-top: 23px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4491.678078496689!2d0.2040920543546396!3d47.97954785706716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e28f4c8bb19495%3A0x767ea27fc47adc44!2sOver-Games!5e0!3m2!1sfr!2sfr!4v1595924129803!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
     
    </div> 
    
       
</script><script>
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = "Verif-Email"+"="+"<?php echo $code_aleatoire ?>"+expires+"; path=/";
}

createCookie();
</script>   
  
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

<?php if($_GET['message'] == "non")
    { ?>    

    <script>                                
    setTimeout(function(){
    jQuery("#settings-resultat2").fadeOut(700);
    window.history.pushState(document.title,document.title,"/contact");
    }, 3000);
</script>
    

    <?php } ?>

<?php if($_GET['message'] == "oui")
    { ?>    

    <script>                                
    setTimeout(function(){
    jQuery("#settings-resultat").fadeOut(700);
    window.history.pushState(document.title,document.title,"/contact");
    }, 3000);
</script>
    

    <?php } ?>


</body>
</html>
