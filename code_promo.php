<?php require_once('cnx.php'); ?>

<?php

$actu = $cnx->prepare("SELECT * FROM code_promo WHERE code = :code");
$actu->execute(array(':code' => $_POST['code']));
$acturesult = $actu->fetch();
$actu->closeCursor();

$idp = $_POST['codeid'];


if($_POST['code'] == $acturesult['code'] && $acturesult['code_utilise'] != "oui" && !empty($_POST['code']))
	{
	
	$_SESSION['code'] = $_POST['code'];
	$date = strtotime("+1 day");
	$req = $cnx->prepare('UPDATE code_promo SET expire = :expire, code_utilise = :code_utilise, code_partage = :code_partage WHERE code = :code');
	$req->execute(array(
	'expire' => date("d/m/Y H:i:s", $date),
	'code' => $_POST['code'],
	'code_utilise' => "oui",
	'code_partage' => "oui"	
	));
	
		
	die('<META HTTP-equiv="refresh" content=0;URL=/premium?code=oui>');	
	
	}else{
	die('<META HTTP-equiv="refresh" content=0;URL=/news?code=non>');
	}
?>