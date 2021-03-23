<?php require('cnx.php') ?>
<?php require_once('log-membre.php'); ?>
<?php
	$req2 = $cnx->prepare('UPDATE mp_prive SET lu = :lu WHERE destinataire = :destinataire AND id = :id');
	$req2->execute(array(':destinataire' => $_SESSION['pseudo'], ':id' => $_GET['id'], ':lu' => 'oui'));

	die('<META HTTP-equiv="refresh" content=0;URL=/index>'); 
?>