<?php require('cnx.php') ?>

<?php

$email = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$email->execute(array(':email' => $_POST['emaill']));
$result_email = $email->fetch();

$pseudo = $cnx->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo");
$pseudo->execute(array(':pseudo' => $_POST['pseudo']));
$result_pseudo = $pseudo->fetch();

if(!empty($_POST) && $_POST['texte'] == $_COOKIE['Verif-Account'])
{
	
if(!empty($_POST) && $_POST['password'] == $_POST['password2']) {
if(!empty($_POST) && filter_var($_POST['emaill'], FILTER_VALIDATE_EMAIL)) {
	
	if(!empty($_POST) && ($result_email['email'] != $_POST['emaill']) && ($result_pseudo['pseudo'] != $_POST['pseudo'])) {
	
   
	$email = addslashes($_POST['emaill']);

    $password = md5($_POST['password']);
	$pseudo = addslashes($_POST['pseudo']);
	$etat = "1";
	$rang = "Membre";
	$date = date("Y-m-d H:i");
	$heure = date("H:i");
	$ip = $_SERVER['REMOTE_ADDR']; 
	$token = md5(uniqid(rand(), true));
	$_SESSION['code'] = $token;	
	$avatar = "https://over-games.fr/image/avatar/aucun.png"; 
	$avatar2 = "https://over-games.fr/image/avatar/aucun.png"; 
            
    $q = array('pseudo'=>$pseudo, 'email'=>$email, 'password'=>$password, 'etat'=>$etat, 'date'=>$date, 'heure'=>$heure , 'ip'=>$ip, 'rang'=>$rang, 'token'=>$token, 'avatar2'=>$avatar2, 'avatar'=>$avatar);
    $sql = 'INSERT INTO utilisateurs (pseudo, email, password, etat, date, heure, ip, rang, token, avatar2, avatar) VALUES (:pseudo, :email, :password, :etat, :date, :heure, :ip, :rang, :token, :avatar2, :avatar)';
    $req = $cnx->prepare($sql);
    $req->execute($q);
		
		
	/*Code Premium*/
	$email = addslashes($_POST['emaill']);
	$code = $code_pro;
	$date_creation = date('d/m/Y');
    $heure_creation = date('H:i:s');
		
    $q2 = array('email'=>$email, 'code'=>$code, 'date_creation'=>$date_creation, 'heure_creation'=>$heure_creation);
    $sql2 = 'INSERT INTO code_promo (email, code, date_creation, heure_creation) VALUES (:email, :code, :date_creation, :heure_creation)';
    $req2 = $cnx->prepare($sql2);
    $req2->execute($q2);
		
	$email2 = addslashes($_POST['emaill']);
	$code2 = $code_pro2;
	$date_creation2 = date('d/m/Y');
    $heure_creation2 = date('H:i:s');
		
    $q3 = array('email2'=>$email2, 'code2'=>$code2, 'date_creation2'=>$date_creation2, 'heure_creation2'=>$heure_creation2);
    $sql3 = 'INSERT INTO code_promo (email2, code2, date_creation2, heure_creation2) VALUES (:email2, :code2, :date_creation2, :heure_creation2)';
    $req3 = $cnx->prepare($sql3);
    $req3->execute($q3);	
	
	$to = $_POST['emaill'];
				$subject = "Votre inscription sur Over Games";
				$mail_body =  '<html><head>
<title>Votre inscription sur Over-Games </title>
<meta charset="utf-8">
</head>
<body background="http://hdcoolwallpapers.com/wp-content/uploads/2014/10/HD-3D-Abstract-Wallpapers-462.jpg">
<div id="mimi_background_color_wrapper" style="min-width: 630px;">
 
  <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td valign="top" align="left">
          <p style="display:none;font-size:0px;color:transparent">Merci de Votre inscription
</p><br>

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
                    
                    <div align="center" style="padding-bottom:15px;"><img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/128/success-icon.png" width="128" height="128"></div>
                    
                    <div class="module header" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><table width="100%" style="border-collapse: collapse; border-spacing: 0; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;"><tbody><tr>
                    
                    <td width="530" align="left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><div align="center">
                      <h2 align="center" style="font-weight: bold; line-height: 1.2em; color: #888888; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 22px; text-align: center;">Merci de Votre inscription</h2></div><br></td></tr></tbody></table></div><div class="module combo-left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;"><table width="100%" style="border-collapse: collapse; border-spacing: 0; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-top-width: 0; border-right-width: 0; border-bottom-width: 0; border-left-width: 0;"><tbody><tr>
                        <td width="530" align="left" style="clear: both; margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
                        
                        <div align="center">
                        <div>
                        <p align="left" style="line-height: 1.5em; color: #40413E; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; direction: ltr; unicode-bidi: embed; vertical-align: baseline; margin-top: 0; margin-right: 0; margin-bottom: 1.3em; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">Bienvenue sur Over Games, ' . $_POST['pseudo'] . ',<br><br>
                          Merci de votre inscription sur le site internet. <br><br>
                          Retrouvé vos informations de connexion et de votre inscription en dessous.<br> <br>
						Votre clé de sécurité et la suivante : ' . $_SESSION['code'] . '<br><br>
                        Votre adresse email : ' . $_POST['emaill'] . '<br>         
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
		
				
die('<META HTTP-equiv="refresh" content=0;URL=/?inscription=oui#valide>');

			
	}else{
		die('<META HTTP-equiv="refresh" content=0;URL=/?inscription=non#error>');
	}
 
}else{
	
	
	
}
}
	
}else{
	$erreur_code = 'Le code que vous avez entré ne correspond pas.';	
}
?>
