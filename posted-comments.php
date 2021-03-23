<?php require('cnx.php') ?>
<?php require_once('log-membre.php'); ?>

<?php

				$pseudo = addslashes($_SESSION['pseudo']);
				$email = addslashes($_SESSION['email']);
				$id = addslashes($_GET['id']);
				$Titre = addslashes($_POST['titre']);
				$message = stripslashes(nl2br($_POST['message']));
				$avatar = addslashes($_SESSION['avatar']);
				$date = date("d/m/Y");
				$heure = date("H:i");
				$ddate = date("Y-m-d h:i:s A");
				$heure_fin = date('Y-m-d h:i:s A', time()+540);
				$idunique = md5(uniqid(rand(), true));
					
				$q = array('idunique'=>$idunique, 'pseudo'=>$pseudo, 'email'=>$email, 'id'=>$id, 'Titre'=>$Titre, 'message'=>$message, 'avatar'=>$avatar, 'date'=>$date, 'heure'=>$heure, 'ddate'=>$ddate, 'heure_fin'=>$heure_fin);
				$sql = 'INSERT INTO Actualites_Commentaire (idunique, pseudo, email, id, Titre, message, avatar, date, heure, ddate, heure_fin) VALUES (:idunique, :pseudo, :email, :id, :Titre, :message, :avatar, :date, :heure, :ddate, :heure_fin)';
				$req = $cnx->prepare($sql);
				$req->execute($q);
				
				$req2 = $cnx->prepare('UPDATE Actualite SET comment = comment + 1 WHERE id = :id');
				$req2->execute(array(
				'id' => $_GET['id']));
				
				die('<META HTTP-equiv="refresh" content=0;URL=article?id='. $_GET['id'] .'&commentaire=oui>'); 
				
	

?>
