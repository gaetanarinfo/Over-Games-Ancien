<?php require_once('cnx.php'); ?>
<?php
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 1000000000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {

$generate_thumb = uniqid();

$dossier = 'image/Image-Galerie/';
$fichier = basename($_FILES['file']['name']);
$taille_maxi = 10000000000;
$taille = filesize($_FILES['file']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg');
$extension = strrchr($_FILES['file']['name'], '.'); 

     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
	 if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $generate_thumb)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
		 
	setlocale(LC_TIME, 'fr_FR.utf8','fra');
		 
	$test = "image/Image-Galerie/";
	$images = $test . $generate_thumb;
	$date = ucfirst(strftime($number_of_the_day.'%d %B %Y'));
	$titre = $_POST['titre'];	 
            
    $q = array('images'=>$images, 'date'=>$date, 'titre'=>$titre);
    $sql = 'INSERT INTO galerie (image, date, titre) VALUES (:images, :date, :titre)';
    $req = $cnx->prepare($sql);
    $req->execute($q);

     }
     else //Sinon (la fonction renvoie FALSE).
     {
       
     }
	
   

echo "<div id=\"coverdiv\" style=\"background: url('image/Image-Galerie/$generate_thumb');
    width: 100%;
    background-position: 0px 0px;
    position: relative;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
    height: 767px;
    display: block;\"></div><br>";
}
}
?>