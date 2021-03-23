<?php require('cnx.php') ?>
<?php require_once('log-membre.php'); ?>
<?php
	
	$achataime = $cnx->prepare("SELECT * FROM Guide_Achat WHERE id = :id");
	$achataime->execute(array("id" => $_GET['id']));
	$resultat_achat = $achataime->fetch();
	$achataime->closeCursor();
	
	$email = addslashes($_SESSION['email']);
	$titre = addslashes($resultat_achat['Titre']);
	$ddate = date("y-m-d");
		
	$q = array('email'=>$email, 'titre'=>$titre, 'id'=>$_GET['id'], 'ddate'=>$ddate);
	$sql = 'INSERT INTO Guide_Achat_Aime (email, titre, id, ddate) VALUES (:email, :titre, :id, :ddate)';
	$req = $cnx->prepare($sql);
	$req->execute($q);
	
	$req2 = $cnx->prepare('UPDATE Guide_Achat SET aime = aime + 1 WHERE id = :id');
	$req2->execute(array('id' => $_GET['id']));
?>	
	
<span title="Vous aimez ce jeu"><i class="fa fa-heart"></i></span>
