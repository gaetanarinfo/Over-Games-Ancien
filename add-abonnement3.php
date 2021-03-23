<?php require_once('cnx.php'); ?>
<?php require_once('log-membre.php'); ?>

<?php
$profil = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$profil->execute(array(':email' => $_SESSION['email']));
$profil_result = $profil->fetch();
$profil->closeCursor();

$req = $cnx->prepare('UPDATE utilisateurs SET genCode = :genCode WHERE email = :email');
	$req->execute(array(
	'email' => $_SESSION['email'],
	'genCode' => $_GET["genCode"]
	));
?>

<?php if($profil_result['Premium'] == "oui") { 	
		
	die('<META HTTP-equiv="refresh" content=0;URL=index>');	?>
		
	<?php }else{ 	
	
	if($_GET["genCode"] = $profil_result["genCode"])
	{
	
	setlocale(LC_TIME, "fr_FR");
	
	$date = strtotime("+2 year");
	$req = $cnx->prepare('UPDATE utilisateurs SET datefinpremium = :datefinpremium, datefinpremium2 = :datefinpremium2, email = :email, Premium = :Premium, datefinpremiumheure = :datefinpremiumheure, datefinpremiumdate = :datefinpremiumdate, TypeAbo = :TypeAbo WHERE email = :email');
	$req->execute(array(
	'email' => $_SESSION['email'],
	'datefinpremium' => date('Y-m-d'),
	'datefinpremiumheure' => date('H:i:s'),
	'datefinpremium2' => date('Y-m-d H:i:s', $date),
	'datefinpremiumdate' => utf8_encode(strftime("%A %d %B %G", $date)),
	'Premium' => "oui",
	'TypeAbo' => "3"	
	));
	
	$Date1 = strftime("%A %d %B %G");
	
	$email = stripslashes($_SESSION['email']);
	$dateachat = stripslashes($Date1);
	$objet = stripslashes("Abonnement Premium 2 ans");
	$Prix = stripslashes("59,90 €");
	$qte = addslashes("1");
            
    $q = array(
	'email'=> $email, 
	'dateachat'=> $dateachat, 
	'objet'=> $objet, 
	'Prix'=> $Prix, 
	'qte'=> $qte
	);
	
    $sql = 'INSERT INTO HistoriqueAchat (
	email, 
	dateachat, 
	objet, 
	Prix, 
	qte
	) 
	VALUES (
	:email, 
	:dateachat, 
	:objet, 
	:Prix, 
	:qte
	)';
    $req = $cnx->prepare($sql);
    $req->execute($q);
		
    $from = "premium@games-actus.fr";
 
    $to = $_SESSION["email"];
 
    $subject = "Bienvenue sur OverGames - Premium";
	
	$serveur14 = $cnx->prepare("SELECT * FROM Premium");
	$serveur14->execute();
	$profil_result3 = $serveur14->fetch();
	$serveur14->closeCursor();	
 
    $message = $profil_result3['html'];
	
	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=UTF-8';

     // En-têtes additionnels
     $headers[] = 'From: Over Games <premium@over-games.fr>';
		
 
    mail($to, $subject, $message, implode("\r\n", $headers));
	
	die('<META HTTP-equiv="refresh" content=0;URL=/Abonnement-Valider>');	
		}else{
			die('<META HTTP-equiv="refresh" content=0;URL=/devenir-premium>');	
		}
	} ?>
	