<?php require_once('cnx.php'); ?>
<?php require_once('log-membre.php'); ?>

<?php

if(!empty($_POST) && md5($_POST['password']) == md5($result_requeteUsers['password']) && $_POST['password'] == 'Oui')	
{

$users = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$users->execute(array(':email' => $_SESSION['email']));
$usersresult = $users->fetch();
$users->closeCursor();

$users2 = $cnx->prepare("DELETE FROM utilisateurs WHERE email = :email");
$users2->execute(array(':email' => $_SESSION['email']));
$usersresult2 = $users2->fetch();
$users2->closeCursor();

die('<META HTTP-equiv="refresh" content=0;URL=deconnexion>');	
	
}
?>