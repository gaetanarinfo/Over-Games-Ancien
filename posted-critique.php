<?php require_once('cnx.php'); ?>
<?php
	$commantaire3 = $cnx->prepare("SELECT * FROM liste_ratings WHERE id = :id AND email = :email");
	$commantaire3->execute(array(':id' => $_GET['id'], ':email' => $_SESSION['email']));
	$resultat_commantaire3 = $commantaire3->fetch();
	$commantaire3->closeCursor();

	if(!$resultat_commantaire3['id'])
	{
	if(!empty($_POST)) {
   
	$commantaire2 = $cnx->prepare("SELECT * FROM Guide_Achat WHERE id = :id");
	$commantaire2->execute(array(':id' => $_GET['id']));
	$resultat_commantaire2 = $commantaire2->fetch();
	$commantaire2->closeCursor();
		
	$Titre = stripslashes($resultat_commantaire2['Titre']);
	$email = stripslashes($_SESSION['email']);
	$prenom = stripslashes($_SESSION['pseudo']);
	$id = stripslashes($resultat_commantaire2['id']);
	$note = stripslashes($_POST['note-'. $resultat_commantaire2['id'] .'']);
	$qualite = stripslashes($_POST['qualite-'. $resultat_commantaire2['id'] .'']);
	$difficulte = stripslashes($_POST['difficulte-'. $resultat_commantaire2['id'] .'']);
	$critique = stripslashes($_POST['critique-'. $resultat_commantaire2['id'] .'']);
	$DDate = date("Y-m-d h:i:s A");
	       
    $q = array('prenom'=>$prenom, 'email'=>$email, 'Titre'=>$Titre, 'id'=>$id, 'note'=>$note, 'qualite'=>$qualite, 'difficulte'=>$difficulte, 'critique'=>$critique, 'DDate'=>$DDate);
    $sql = 'INSERT INTO liste_ratings (prenom, email, Titre, id, note, qualite, difficulte, critique, DDate) VALUES (:prenom, :email, :Titre, :id, :note, :qualite, :difficulte, :critique, :DDate)';
    $req = $cnx->prepare($sql);
    $req->execute($q);
	
	$req2 = $cnx->prepare('UPDATE Guide_Achat SET note = note + 1 WHERE id = :id');
	$req2->execute(array('id' => $_GET['id']));

	?>
   
	
	<?php
	
	}
	
	die('<META HTTP-equiv="refresh" content=0;URL=liste-jeux?critique=oui>');	
	
	}else{
		
	die('<META HTTP-equiv="refresh" content=0;URL=liste-jeux?critique=non>');	
	
	}
?>