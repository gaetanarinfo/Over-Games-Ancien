<?php require('cnx.php') ?>
<?php require_once('log-membre.php'); ?>
<?php
	
	$deletemp = $cnx->prepare("DELETE FROM mp_prive WHERE destinataire = :destinataire AND id = :id");
	$deletemp->execute(array(':destinataire' => $_SESSION['pseudo'], ':id' => $_GET['id']));
	$count = $deletemp->rowCount();

	
	die('<META HTTP-equiv="refresh" content=0;URL=/index>'); 
?>