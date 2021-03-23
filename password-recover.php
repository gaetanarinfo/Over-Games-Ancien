<?php require('cnx.php') ?>
<?php
$errors3 = array(); //To store errors
    $form_data3 = array(); //Pass back the data to `form.php`
    
    
    /* Validate the form on server side */
    if (empty($_POST['pass2'])) { //Name cannot be empty
        $errors3['pass2'] = 'email cannot be blank';
    }
    
    if (!empty($errors3)) { //If errors in validation
    	
    } else { //If not, process the form, and return true on success
?>

<?php


$serveur7 = $cnx->prepare("SELECT * FROM utilisateurs");
$serveur7->execute();
$aime_resultat = $serveur7->fetch();
$serveur7->closeCursor();


if($_POST['token'] != $aime_resultat['token'])
{
	
				$form_data3['errors3'] = true;
	
}else{
				
				$req2 = $cnx->prepare('UPDATE utilisateurs SET password = :pass2 WHERE token = :token');
				$req2->execute(array(':token' => $_POST['token'], ':pass2' => md5($_POST['pass2'])));
				
				$form_data3['success3'] = true;
				
				$to = $aime_resultat['email'];
				$subject = "Modification de votre mot de passe";
				$mail_body = '<html><head>
<title>Modification de votre mot de passe</title>
<meta charset="utf-8">
</head>
<body background="http://hdcoolwallpapers.com/wp-content/uploads/2014/10/HD-3D-Abstract-Wallpapers-462.jpg">
<div id="mimi_background_color_wrapper" style="min-width: 630px;">
 
  <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td valign="top" align="left">
          <p style="display:none;font-size:0px;color:transparent">Modification de votre mot de passe
</p>

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
                    
                    <div align="center" style="padding-bottom:15px;"><img src="https://cdn2.iconfinder.com/data/icons/oxygen/128x128/apps/preferences-desktop-cryptography.png"></div><br>
                    
                    <div class="module header" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><table width="100%" style="border-collapse: collapse; border-spacing: 0; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;"><tbody><tr>
                    
                    <td width="530" align="left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><div align="center">
                      <h2 align="center" style="font-weight: bold; line-height: 1.2em; color: #888888; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 22px; text-align: center;">Une modification de votre mot de passe et survenue</h2></div><br></td></tr></tbody></table></div><div class="module combo-left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><table width="100%" style="border-collapse: collapse; border-spacing: 0; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;"><tbody><tr>
                        <td width="530" align="left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
                        
                        <div align="center">
                        <div>
                        <p align="left" style="line-height: 1.5em; color: #40413E; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; direction: ltr; unicode-bidi: embed; vertical-align: baseline; margin-top: 0; margin-right: 0; margin-bottom: 1.3em; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">Bonjour, ' . $aime_resultat['pseudo'] . ',<br>Votre mot de passe à été modifie le  ' . date("d/m/Y G:i:s") . '. <br>Avec l\'adresse ip : ' . $_SERVER['REMOTE_ADDR'] . '<br> <br>
						Votre clé de sécurité et la suivante : ' . $aime_resultat['token'] . '<br>
                        Si vous n\'ête pas à l\'origine de cette modification merci de prendre contact avec nous.<br>
						<br>
                        </p></div></div></td></tr></tbody></table></div>
                    <div class="outlook-fixer" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
  <table style="border-collapse: collapse; border-spacing: 0; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;" width="100%"><tbody><tr><td align="left" style="font-size: 1px; line-height: 0; clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;" width="530" height="1">
        <img src="https://go.madmimi.com/assets/outlook_fixer.gif" height="1" alt="1px" style="border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;" width="530"></td>
    </tr></tbody></table></div>


                  </td>
                </tr></tbody></table></td>
          </tr></tbody></table></td>
    </tr><tr><td style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">

        <table id="madmimi_footer" border="0" cellspacing="0" cellpadding="0" class="ui_dark" style="border-collapse: collapse; border-spacing: 0; border-radius: 0 0 4px 4px; width: 100%; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0; background-image: none;"><tbody><tr><td id="madmimi_footer_content" bgcolor="#503B2A" style="border-radius: 0 0 4px 4px; color: #222; font-family: Helvetica Neue, Helvetica, Arial, Verdana, sans-serif; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 20px; padding-right: 30px; padding-bottom: 30px; padding-left: 30px;background-color: #DADADA;">
              <table class="toolbar" style="width: 100% !important; border-collapse: collapse; border-spacing: 0; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;"><tbody><tr><td id="madmimi_footer_left" style="text-align: center; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 10px; padding-right: 0; padding-bottom: 0; padding-left: 0;background-color: #DADADA;" align="center" bgcolor="#503B2A">
                    <div class="footer" style="color: #9A9B9C; font-weight: bold; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 11px; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0; letter-spacing: 2px;">©2020 Copyright Over Games Tous droit réservé.
                    </div>
                  </td>
                </tr></tbody></table></td>
          </tr></tbody></table></td>
    </tr></tbody></table></div>
   

        </td>
      </tr></tbody></table></div>




</body></html>
';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$headers .= 'From: Over Games'."<no-reply@over-games.fr>";
				
				mail($to, $subject, $mail_body, $headers);
				
	}
	}
	
	echo json_encode($form_data3);
?>