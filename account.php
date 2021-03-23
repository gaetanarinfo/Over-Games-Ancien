<?php require_once('logged.php'); ?>
<?php require_once('auth.php'); ?>
<?php

	$errors = array(); //To store errors
    $form_data = array(); //Pass back the data to `form.php`
    
    
    /* Validate the form on server side */
    if (empty($_POST['email1'])) { //Name cannot be empty
        $errors['email1'] = 'email cannot be blank';
    }
    
    if (!empty($errors)) { //If errors in validation
    	
    } else { //If not, process the form, and return true on success
		
	$email = $_POST['email1'];
    $password = $_POST['password1'];

    $q = array('email'=>$email, 'password'=>md5($password));
    $sql = 'SELECT * FROM utilisateurs WHERE email = :email AND password = :password';
    $req = $cnx->prepare($sql);
    $req->execute($q);
    $count = $req->rowCount($sql);
    if($count == 1){
		
        //Verifier si l'utilisateur est actif
        $sql = 'SELECT * FROM utilisateurs WHERE email = :email AND password = :password AND etat = 1';
        $req = $cnx->prepare($sql);
        $req->execute($q);
		$row = $req->fetch();
        $actif = $req->rowCount($sql);
        if($actif == 1){
            $_SESSION['Auth'] = array(
                'email' => $email,
                'password' => $password
            );
						
			if($actif == 1)
			{
			$_SESSION['email'] = $email;
			$_SESSION['prenom'] = $row['prenom'];
			$_SESSION["rang"] = $row['rang'];
			$_SESSION["nom"] = $row['nom'];
			$_SESSION["description"] = $row['description'];	
			$_SESSION["sexe"] = $row['sexe'];	
			$_SESSION["pays"] = $row['pays'];
			$_SESSION["email"] = $row['email'];
			$_SESSION["id"] = $row['id'];
			$_SESSION["ip"] = $row['ip'];
			$_SESSION["token"] = $row['token'];
			$_SESSION["avatar"] = $row['avatar'];
			$_SESSION["password"] = $row['password'];
			$_SESSION["pseudo"] = $row['pseudo'];
			$form_data['success'] = true;
			
			$date =  date("Y-m-d H:i:s", time() + 3600);

	$req2 = $cnx->prepare('UPDATE utilisateurs SET connexion = :connexion WHERE email = :email');
			$req2->execute(array(
			'connexion' => $date,
			'email' => $_SESSION['email']
			));
	
			
			}
    }else{
		
		$form_data['error'] = false;
		
}
	}else{
		
		$form_data['error'] = false;
		
}
}	
	echo json_encode($form_data);

?>