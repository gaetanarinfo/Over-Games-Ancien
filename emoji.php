<?php require_once('cnx.php'); ?>
<?php require_once('log-membre.php'); ?>

<?php
	$req = $cnx->prepare('UPDATE utilisateurs SET humeur = :humeur WHERE email = :email');
	$req->execute(array(
	'humeur' => $_GET['emoji'],
	'email' => $_SESSION['email']
	));
?>


<?php if($_GET['emoji'] == "emo1") { ?>
<a title="Rigole" style="margin-left: -198px;"><img src="image/emoji/1f53147abc300a9a6e9ebe9615f93916.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo2"){ ?>
 <a title="Cool" style="margin-left: -198px;"><img src="image/emoji/22d3bb1ef846c961b6d79a0074c5257c.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo3"){ ?>
 <a title="Heureux" style="margin-left: -198px;"><img src="image/emoji/33b356494bc92ee1a428e58e1a38b4f5.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo4"){ ?>
 <a title="Pleure" style="margin-left: -198px;"><img src="image/emoji/40af215ae5c29572301fad633f9d4973.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo5"){ ?>
 <a title="Casser" style="margin-left: -198px;"><img src="image/emoji/43f562a0d63ba8c4d650a8b7936e961b.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo6"){ ?>
 <a title="Posé" style="margin-left: -198px;"><img src="image/emoji/50d6fcb92cc6320314096e79d4dec051.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo7"){ ?>
 <a title="Enervé" style="margin-left: -198px;"><img src="image/emoji/59f3b3231ec2e3cf91c5b975889e3c91.png" style="width:25px;"></a> 
<?php }elseif($_GET['emoji'] == "emo8"){ ?>
 <a title="Sarcastique" style="margin-left: -198px;"><img src="image/emoji/67d439f077e4180416b633b333088834.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo9"){ ?>
 <a title="Gamer" style="margin-left: -198px;"><img src="image/emoji/75de057f355b0a711c187d430808e5df.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo10"){ ?>
 <a title="En Couple" style="margin-left: -198px;"><img src="image/emoji/3576951ae5345f8045c05ddbb58b4962.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo11"){ ?>
 <a title="Mort de rire" style="margin-left: -198px;"><img src="image/emoji/10622116650a711d1d43130d16ab07fc.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo12"){ ?>
 <a title="Chambouler" style="margin-left: -198px;"><img src="image/emoji/a6f4673381b6074c837f4e502d4d1378.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo13"){ ?>
 <a title="Love" style="margin-left: -198px;"><img src="image/emoji/a92f24f3d21bf5129b16a1b9ff72ab4b.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo14"){ ?>
 <a title="Méchant" style="margin-left: -198px;"><img src="image/emoji/b0bd0a0a52fe2402e6809ce7423594bf.png" style="width:25px;"></a>
<?php }elseif($_GET['emoji'] == "emo15"){ ?>
 <a title="La Nosée" style="margin-left: -198px;"><img src="image/emoji/ff64fae0c116c61a7eb7abeeff25fdf4.png" style="width:25px;"></a>
 <?php } ?>
 <div style="padding-left: 7px;margin-top: -22px;margin-left: 24px;">Vous avez changez votre humeur </div>