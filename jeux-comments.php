<?php require('cnx.php') ?>
<?php require_once('log-membre.php'); ?>

<?php

				$pseudo = addslashes($_SESSION['pseudo']);
				$email = addslashes($_SESSION['email']);
				$item = addslashes($_GET['item']);
				$Titre = addslashes($_POST['titre']);
				$message = stripslashes(nl2br($_POST['message']));
				$avatar = addslashes($_SESSION['avatar']);
				$date = date("d/m/Y");
				$heure = date("H:i");
				$ddate = date("Y-m-d h:i A");
				$heure_fin = date('Y-m-d h:i:s A', time()+540);
				$idunique = md5(uniqid(rand(), true));
					
				$q = array('idunique'=>$idunique, 'pseudo'=>$pseudo, 'email'=>$email, 'item'=>$item, 'message'=>$message, 'avatar'=>$avatar, 'date'=>$date, 'heure'=>$heure, 'ddate'=>$ddate, 'heure_fin'=>$heure_fin, 'Titre'=>$Titre);
				$sql = 'INSERT INTO Test_Commentaire (idunique, pseudo, email, item, message, avatar, date, heure, ddate, heure_fin, Titre) VALUES (:idunique, :pseudo, :email, :item, :message, :avatar, :date, :heure, :ddate, :heure_fin, :Titre)';
				$req = $cnx->prepare($sql);
				$req->execute($q);
				
				$req2 = $cnx->prepare('UPDATE TestJeux SET comment = comment + 1 WHERE item = :item');
				$req2->execute(array(
				'item' => $_GET['item']));
				
				die('<META HTTP-equiv="refresh" content=0;URL=jeux?item='. $_GET['item'] .'&commentaire=oui#avis>'); 
				

?>