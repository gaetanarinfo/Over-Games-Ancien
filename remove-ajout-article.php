<?php require('cnx.php') ?>
<?php require_once('log-membre.php'); ?>
<?php
	$req2 = $cnx->prepare('UPDATE utilisateurs SET liste = :liste WHERE email = :email');
	$req2->execute(array(':email' => $_SESSION['email'], ':liste' => ""));
	
	$deleteaime = $cnx->prepare("DELETE FROM Guide_Achat_Liste WHERE email = :email");
	$deleteaime->execute(array(':email' => $_SESSION['email']));
	$count = $deleteaime->rowCount();

	
	die('<META HTTP-equiv="refresh" content=0;URL=/>'); 
?>