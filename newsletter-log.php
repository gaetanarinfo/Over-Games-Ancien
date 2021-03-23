<?php require('cnx.php') ?>
<?php
$errors3 = array(); //To store errors
    $form_data3 = array(); //Pass back the data to `form.php`
    
    
    /* Validate the form on server side */
    if (empty($_POST['emailnews'])) { //Name cannot be empty
        $errors3['emailnews'] = 'email cannot be blank';
    }
    
    if (!empty($errors3)) { //If errors in validation
    	
    } else { //If not, process the form, and return true on success
?>

<?php


$serveur7 = $cnx->prepare("SELECT * FROM NewsLetter");
$serveur7->execute();
$aime_resultat = $serveur7->fetch();
$serveur7->closeCursor();


if($_POST['emailnews'] == $aime_resultat['email'])
{
	
				$form_data3['errors5'] = true;
	
}else{
				
			
				
				$form_data3['success5'] = true;
				
				$email = $_POST['emailnews'];	
				$date = date('d-m-Y H:i:s');
	
				
				$q = array('email'=>$email, 'date'=>$date);
				$sql = 'INSERT INTO NewsLetter (email, date) VALUES (:email, :date)';
				$req = $cnx->prepare($sql);
				$req->execute($q);
				
	}
	}
	
	echo json_encode($form_data3);
?>