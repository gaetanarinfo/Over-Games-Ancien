<?php include('cnx.php'); ?>

<?php

$errors = array(); //To store errors
    $form_data = array(); //Pass back the data to `form.php`

 if (!empty($errors)) { //If errors in validation
    	
    } else { //If not, process the form, and return true on success

if(!empty($_POST))
	{
	$email = stripslashes($_SESSION['email']);
	$pseudo = stripslashes($_SESSION['pseudo']);
	$sujet = stripslashes($_POST['sujet1']);	
	$destinataire = stripslashes($_POST['destinataire1']);
	$message = stripslashes($_POST['messagee1']);
	$ddate = date("d-m-Y");
	$date1 = date("Y-m-d");
	setlocale(LC_TIME, "fr_FR");
	$date = strftime("%A %d %B %G", strtotime($date1));
	$avatar = stripslashes($result_requeteUsers['avatar']);
	$heure = date("H:i:s");	

    $q = array(
	'email'=> $email, 
	'pseudo'=> $pseudo, 
	'destinataire'=> $destinataire, 
	'message'=> $message,
	'sujet'=> $sujet,
	'ddate'=> $ddate,
	'date'=> $date,
	'avatar'=> $avatar,
	'heure'=> $heure	
	);
	
    $sql = 'INSERT INTO mp_prive (
	email, 
	pseudo, 
	destinataire, 
	message,
	sujet,
	ddate,
	date,
	avatar,
	heure
	) 
	VALUES (
	:email, 
	:pseudo, 
	:destinataire, 
	:message,
	:sujet,
	:ddate,
	:date,
	:avatar,
	:heure
	)';
    $req = $cnx->prepare($sql);
    $req->execute($q);
		
	$req7 = $cnx->prepare('UPDATE utilisateurs SET notif_mp = notif_mp + 1 WHERE pseudo = :pseudo');
	$req7->execute(array(
	'pseudo' => $destinataire,
	));	

	
}else{
		$form_data['error'] = false;
	}
}

echo json_encode($form_data);
?>