<?php require('cnx.php') ?>
<?php require_once('log-membre.php'); ?>
<?php
	
	$achataime = $cnx->prepare("SELECT * FROM Guide_Achat WHERE id = :id");
	$achataime->execute(array("id" => $_GET['id']));
	$resultat_achat = $achataime->fetch();
	$achataime->closeCursor();
	
	$email = stripslashes($_SESSION['email']);
	$titre = stripslashes($resultat_achat['Titre']);
	$lien = stripslashes($resultat_achat['Lien']);
	$Image = stripslashes($resultat_achat['Image']);
	$ImageLien = stripslashes($resultat_achat['ImageLien']);
	$Categorie1 = stripslashes($resultat_achat['Categorie1']);
	$Categorie2 = stripslashes($resultat_achat['Categorie2']);
	$Categorie3 = stripslashes($resultat_achat['Categorie3']);
	$Categorie4 = stripslashes($resultat_achat['Categorie4']);
	$Categorie5 = stripslashes($resultat_achat['Categorie5']);
	$Categorie6 = stripslashes($resultat_achat['Categorie6']);
	$Categorie7 = stripslashes($resultat_achat['Categorie7']);
	$Tags1 = stripslashes($resultat_achat['Tags1']);
	$Date = stripslashes($resultat_achat['Date']);
	$Developpeur = stripslashes($resultat_achat['Developpeur']);
	$ddate = date("y-m-d h:i:s A");
		
	$q = array('email'=>$email, 'titre'=>$titre, 'id'=>$_GET['id'], 'ddate'=>$ddate, 'lien'=>$lien, 'Image'=>$Image, 'ImageLien'=>$ImageLien, 'Tags1'=>$Tags1, 'Categorie1'=>$Categorie1, 'Categorie2'=>$Categorie2, 'Categorie3'=>$Categorie3, 'Categorie4'=>$Categorie4, 'Categorie5'=>$Categorie5, 'Categorie6'=>$Categorie6, 'Categorie7'=>$Categorie7, 'Date'=>$Date, 'Developpeur'=>$Developpeur);
	$sql = 'INSERT INTO Guide_Achat_Liste (email, titre, id, ddate, lien, Image, ImageLien, Tags1, Categorie1, Categorie2, Categorie3, Categorie4, Categorie5, Categorie6, Categorie7, Date, Developpeur) VALUES (:email, :titre, :id, :ddate, :lien, :Image, :ImageLien, :Tags1, :Categorie1, :Categorie2, :Categorie3, :Categorie4, :Categorie5, :Categorie6, :Categorie7, :Date, :Developpeur)';
	$req = $cnx->prepare($sql);
	$req->execute($q);
	
	$req2 = $cnx->prepare('UPDATE utilisateurs SET liste = liste + 1 WHERE email = :email');
	$req2->execute(array('email' => $_SESSION['email']));

	$req3 = $cnx->prepare('UPDATE Guide_Achat SET souhaits = souhaits + 1 WHERE id = :id');
	$req3->execute(array('id' => $_GET['id']));
?>	
	<span style="color:#1A4DD7;margin-left: 3px;margin-top: 6px;font-weight: bold;font-size: 12px;" class="fa fa-plus" title="Tu as ajouter ce jeux"></span>
