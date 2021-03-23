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

	$date = strtotime("+12 month");


	$req = $cnx->prepare('UPDATE utilisateurs SET datefinpremium = :datefinpremium, datefinpremiumheure = :datefinpremiumheure, datefinpremiumdate = :datefinpremiumdate, Premium = :Premium, TypeAbo = :TypeAbo, datefinpremium2 = :datefinpremium2 WHERE email = :email');

	$req->execute(array(
	'email' => $result_requeteUsers['email'],
	'datefinpremium' => date('Y-m-d'),
	'datefinpremiumheure' => date('H:i:s'),	
	'datefinpremiumdate' =>  utf8_encode(strftime("%A %d %B %G", $date)),
	'Premium' => "oui",
	'TypeAbo' => "2",
	'datefinpremium2' => date("Y-m-d H:i:s", $date)
	));
	
	$Date1 = strftime("%A %d %B %G");
	
	$email = stripslashes($_SESSION['email']);
	$dateachat = stripslashes($Date1);
	$objet = stripslashes("Abonnement Premium 1 ans");
	$Prix = stripslashes("39,90 €");
	$qte = addslashes("1");
            
    $q2 = array(
	'email'=> $email, 
	'dateachat'=> $dateachat, 
	'objet'=> $objet, 
	'Prix'=> $Prix, 
	'qte'=> $qte
	);
	
    $sql2 = 'INSERT INTO HistoriqueAchat (
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
    $req2 = $cnx->prepare($sql2);
    $req2->execute($q2);
		
	die('<META HTTP-equiv="refresh" content=0;URL=/Abonnement-Valider>');	
		}else{
			die('<META HTTP-equiv="refresh" content=0;URL=/devenir-premium>');	
		}
	} ?>
	