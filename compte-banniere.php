<?php require('cnx.php') ?>
<?php
$errors3 = array(); //To store errors
    $form_data3 = array(); //Pass back the data to `form.php`

?>

<?php


$serveur7 = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$serveur7->execute(array(":email" => $_SESSION['email']));
$aime_resultat = $serveur7->fetch();
$serveur7->closeCursor();

				
				$req2 = $cnx->prepare('UPDATE utilisateurs SET banniere = :banniere WHERE email = :email');
				$req2->execute(array(':email' => $_SESSION['email'], ':banniere' => $_POST['banniereform']));
				
				$form_data3['success3'] = true;	
	
	echo json_encode($form_data3);
?>