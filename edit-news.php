<?php session_start();


?>

<?php require('cnx.php'); ?>
<?php require_once('logged-admin.php'); ?>

<?php

	if($_GET['id'] != $resultat_site_internet16_2['id'] OR empty($_GET['id'])) {
		die('<META HTTP-equiv="refresh" content=0;URL=index>');
	}
	
	if(!empty($_POST))
	{
	$req = $cnx->prepare('UPDATE Actualite SET Cat = :Cat, Paragraphe = :Paragraphe, BonPlans = :BonPlans, BonPlansLien = :BonPlansLien, Titre = :Titre, Description = :Description, Image = :Image, Date = :Date, Heure = :Heure, DDate = :DDate, Tags = :Tags, widht = :widht, Createur = :Createur, Categorie = :Categorie, Categorie2 = :Categorie2, Categorie3 = :Categorie3, Categorie4 = :Categorie4, Categorie5 = :Categorie5, SortieJeux = :SortieJeux, NomJeux = :NomJeux, ImgJeux = :ImgJeux, DescriptionPremium = :DescriptionPremium, CourtDescriptionPremium = :CourtDescriptionPremium, comparateur = :comparateur, NewJeux = :NewJeux, Titre2 = :Titre2, ImagePetite = :ImagePetite WHERE id = :id AND Createur = :Createur');
	$req->execute(array(
	'id' => $_GET['id'],
	'Titre' => $_POST['Titre'],
	'Titre2' => $_POST['Titre2'],
	'Description' => $_POST['Description'],
	'Image' => $_POST['image'],
	'ImagePetite' => $_POST['ImagePetite'],
	'Date' => $_POST['Date'],
	'Heure' => $_POST['Heure'],
	'DDate' => $_POST['DDate'],
	'Tags' => $_POST['Tags'],
	'widht' => $_POST['widht'],
	'Createur' => Gaëtan,
	'Categorie' => $_POST['Categorie'],
	'Categorie2' => $_POST['Categorie2'],
	'Categorie3' => $_POST['Categorie3'],
	'Categorie4' => $_POST['Categorie4'],
	'Categorie5' => $_POST['Categorie5'],
	'SortieJeux' => $_POST['SortieJeux'],
	'NomJeux' => $_POST['NomJeux'],
	'ImgJeux' => $_POST['ImgJeux'],	
	'Cat' => $_POST['Cat'],
	'Paragraphe' => $_POST['Paragraphe'],
	'BonPlans' => $_POST['BonPlans'],	
	'NewJeux' => $_POST['NewJeux'],
	'BonPlansLien' => $_POST['BonPlansLien'],
	'DescriptionPremium' => $_POST['DescriptionPremium'],
	'CourtDescriptionPremium' => $_POST['CourtDescriptionPremium'],
	'comparateur' => $_POST['comparateur']
	));
		
	die('<META HTTP-equiv="refresh" content=0;URL=edit-news?id='. $_GET['id'] .'&edit-news=oui>');	
	
	}else{

	}

?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet16['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet16['Titre_Page']; ?> | <?php echo $resultat_site_internet16_2['Titre']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet16['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet16['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet16['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	<link rel="stylesheet" href="wp-content/themes/powerup/bootstrapcss"/>
	
	<style>	p {
  margin-top: -35px;		
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 3s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
   font-weight : bold;
}
	
	@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}	
	</style>

	</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>   
    
   
        <div class="sitewrap-inner">
        
        
        
        <div class="content-wrapper">	
        
        	<p align="center"><?php echo $resultat_site_internet16_2['Titre']; ?></p>	
        	
        	<hr>
        	
        	 <?php if($_GET['edit-news'] == "oui")
    { ?>    
    <div align="center" id="settings-resultat2" style="margin-bottom: 37px;margin-top: 37px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Votre actualité a bien été éditer.</div>
                                        </div>
     <?php } ?>
     
      <?php if($_GET['edit-news'] == "non")
    { ?>    
    <div align="center" id="settings-resultat" style="margin-bottom: 37px;margin-top: 37px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color : rgba(209,26,29,1.00);margin-right: 2px;"></span> Il y a des erreurs dans votre formulaire.</div>
                                        </div>
     <?php } ?>
     

<div align="center" style="margin-top: 23px;padding-left: 20px; padding-right: 40px;">
<table style="width: 100% !important;" border="0" align="center">
 <form action="edit-news?id=<?php echo $_GET['id'] ?>" method="post">
  <tbody>
    <tr>
      <td style="font-weight: bold; font-size: 15px; color: white; padding-bottom: 13px;">Le titre</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="Titre" type="text" required="required" class="form-control" id="Titre" placeholder="Le titre" value="<?php echo $resultat_site_internet16_2['Titre'] ?>"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Le sous titre</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="Titre2" type="text" required="required" class="form-control" id="Titre2" placeholder="Le sous titre" value="<?php echo $resultat_site_internet16_2['Titre2'] ?>"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Catégorie</td>
    </tr>
    <tr>
      <td><select style="width: 102.5%;" name="Cat" required id="Cat" title="Cat" class="form-control">
													 	<option value="">Catégorie <?php echo $resultat_site_internet16_2['Cat'] ?></option>
                                                      <option value="NEWS">NEWS</option>
													<option value="PREVIEW">PREVIEW</option>
													<option value="LES BONS PLANS">LES BONS PLANS</option>
                                                   <option value="PREMIUM">PREMIUM</option>
                                                   <option value="PLAYSTATION 5 / PS5">PLAYSTATION 5 / PS5</option>
													 <option value="JUSTE UN DOIGT">JUSTE UN DOIGT</option>
                                                   <option value="XBOX SERIES">XBOX SERIES X</option>
                                                    </select></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Image de l'actualité (Modifier la valeur avec la touche entrer)</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="image" type="text" class="form-control" id="image" placeholder="L'image de l'actualité" value="<?php echo $resultat_site_internet16_2['Image'] ?>"></td>
    </tr>
    
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Image de l'actualité petite (Modifier la valeur avec la touche entrer)</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="ImagePetite" type="text" class="form-control" id="ImagePetite" placeholder="L'image de l'actualité" value="<?php echo $resultat_site_internet16_2['ImagePetite'] ?>"></td>
    </tr>
    

    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Lien du Bon Plan</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="BonPlansLien" type="text" class="form-control" id="BonPlansLien" placeholder="Lien du Bon Plan" value="<?php echo $resultat_site_internet16_2['BonPlansLien'] ?>"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La date</td>
    </tr>
    
    <tr>
      <td>
													
                                                    <input style="height: 20px" name="Date" type="text" required class="form-control" id="Date" placeholder="dimanche 3 septembre 2017" value="<?php echo $resultat_site_internet16_2['Date'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">L'heure de l'actualité</td>
    </tr>
     
     <tr>
      <td><input style="height: 20px" name="Heure" type="time" required class="form-control" id="Heure" placeholder="L'heure de l'actualité" value="<?php echo $resultat_site_internet16_2['Heure'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La Ddate de l'actualité</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="DDate" type="text" required class="form-control" id="DDate" placeholder="2017-09-03 20:11"value="<?php echo $resultat_site_internet16_2['DDate'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Les Tags</td>
    </tr>
     
     <tr>
      <td><input style="height: 20px" name="Tags" type="text" required="required" class="form-control" id="Tags"  value="<?php echo $resultat_site_internet16_2['Tags'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La première catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie" type="text"  class="form-control" id="Categorie"  value="<?php echo $resultat_site_internet16_2['Categorie'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La deuxième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie2" type="text"  class="form-control" id="Categorie2"  value="<?php echo $resultat_site_internet16_2['Categorie2'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La troisième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie3" type="text"  class="form-control" id="Categorie3"  value="<?php echo $resultat_site_internet16_2['Categorie3'] ?>"></td>
    </tr>
    
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La quatrième catégorie</td>
    </tr>
    
    <tr>
      <td><input style="height: 20px" name="Categorie4" type="text"  class="form-control" id="Categorie4"  value="<?php echo $resultat_site_internet16_2['Categorie4'] ?>"></td>
    </tr>
    
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La cinquième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie5" type="text"  class="form-control" id="Categorie5"  value="<?php echo $resultat_site_internet16_2['Categorie5'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La sixième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie6" type="text"  class="form-control" id="Categorie6"  value="<?php echo $resultat_site_internet16_2['Categorie6'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La septième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie7" type="text"  class="form-control" id="Categorie7"  value="<?php echo $resultat_site_internet16_2['Categorie7'] ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La huitième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie8" type="text"  class="form-control" id="Categorie8"  value="<?php echo $resultat_site_internet16_2['Categorie8'] ?>"></td>
    </tr>
    
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Taille de l'image</td>
    </tr><tr>
     
     <tr><td><input style="height: 20px" name="widht" type="number" min="1" max="999" required class="form-control" id="widht" placeholder="Taille de l'image" value="<?php echo $resultat_site_internet16_2['widht'] ?>"></td></tr>

      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Petite image du jeux</td> 
    </tr>
     
     <tr>
     	<td><input style="height: 20px" name="ImgJeux" type="text" class="form-control" id="ImgJeux" placeholder="Petite image du jeux" value="<?php echo $resultat_site_internet16_2['ImgJeux'] ?>"></td>
     </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Titre du jeux</td>
    </tr>
     
     <tr><td><input style="height: 20px" name="NomJeux" type="text" class="form-control" id="NomJeux" placeholder="Titre du jeux" value="<?php echo $resultat_site_internet16_2['NomJeux'] ?>"></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Sortie du jeux</td>
    </tr>
     
     <tr><td><input style="height: 20px" name="SortieJeux" type="text" class="form-control" id="SortieJeux" placeholder="20 octobre 2017" value="<?php echo $resultat_site_internet16_2['SortieJeux'] ?>"></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Un Jeux ?</td>
    </tr>
     
     <tr><td style="color: white; font-weight: bold;">Oui <input id="NewJeux" name="NewJeux" type="radio" <?php if($resultat_site_internet16_2['NewJeux'] == "1") { ?>value="1" checked="oui"<?php } ?>> / Non <input id="NewJeux" name="NewJeux" type="radio" <?php if($resultat_site_internet16_2['NewJeux'] == "0") { ?>value="0" checked="oui"<?php } ?>></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Un Bon Plans ?</td>
    </tr>
     
     <tr><td style="color: white; font-weight: bold;">Oui <input id="BonPlans" name="BonPlans" type="radio" <?php if($resultat_site_internet16_2['BonPlans'] == "oui") { ?>value="oui" checked="oui"<?php } ?>> / Non <input id="BonPlans" name="BonPlans" type="radio" <?php if($resultat_site_internet16_2['BonPlans'] == "non") { ?>value="non" checked="non"<?php } ?>></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Paragraphe</td>
    </tr>
     
     <tr><td><textarea name="Paragraphe" class="form-control" id="Paragraphe" style="text-align: center; height: 100px;" placeholder="Le Paragraphe"><?php echo $resultat_site_internet16_2['Paragraphe'] ?></textarea></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Courte Description Premium</td>
    </tr>
     
     <tr><td><textarea name="CourtDescriptionPremium" class="form-control" id="CourtDescriptionPremium" style="text-align: center; height: 100px;" placeholder="Courte Description Premium"><?php echo $resultat_site_internet16_2['CourtDescriptionPremium'] ?></textarea></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Comparateur</td>
    </tr>
     
     <tr><td><textarea name="comparateur" class="form-control" id="comparateur" style="text-align: center; height: 100px;" placeholder="Comparateur"><?php echo $resultat_site_internet16_2['comparateur'] ?></textarea></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La Description de l'actualité</td>
    </tr>
     
     <tr><td><button onclick="insertTag('[br]', '', 'Description');" type="button" data-toggle="tooltip" data-tag="br" class="wrap-tag" data-placement="top" title="" data-original-title="Saut de Ligne" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px; width: 20px;"><i class="fa fa-indent"></i></button>&nbsp;
              
                                      	<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Police Gras" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px; width: 20px;" type="button" value="G" onclick="insertTag('[gras]','[/gras]','Description');" /><i class="fa fa-bold"></i></button>&nbsp;
                                      	
										<button type="button" value="I" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[italique]','[/italique]','Description');" /><i class="fa fa-italic"></i></button>&nbsp;
										
										<button type="button" value="Souligné" data-toggle="tooltip" data-placement="top" title="" data-original-title="Souligné" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[souligné]','[/souligné]','Description');" /><i class="fa fa-underline"></i></button>&nbsp;
										
										<button type="button" value="Strike" data-toggle="tooltip" data-placement="top" title="" data-original-title="Strike" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[s]','[/s]','Description');" /><i class="fa fa-strikethrough"></i></button>&nbsp;
										
										<button type="button" value="Lien" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[url]','[/url]','Description');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Lien Url" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien Texte" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[lien=]','[/lien]','Description');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Image" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[img width=..px' + ' height=..px]','[/img]','Description');"/><i class="fa fa-camera"></i></button>&nbsp;
										
										<button type="button" value="Code" data-toggle="tooltip" data-placement="top" title="" data-original-title="Style" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[code]','[/code]','Description');" /><i class="fa fa-code"></i></button>&nbsp;
										
										<button type="button" value="Email" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[email=]','[/email]','Description');" /><i class="fa fa-envelope"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Vidéo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vidéo" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[video]','[/video]','Description');" /><i class="fa fa-video-camera"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="SWF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swf" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[swf width=' + ' height=]','[/swf]','Description');" /><i class="fa fa-play-circle-o"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste simple" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces]','[/puces]','Description');" /><i class="fa fa-list-ol"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste numéroté" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces2]','[/puces2]','Description');" /><i class="fa fa-list-ul"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement gauche" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[left]','[/left]','Description');" /><i class="fa fa-align-left"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement centré" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[center]','[/center]','Description');" /><i class="fa fa-align-center"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement droite" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[right]','[/right]','Description');" /><i class="fa fa-align-right"></i></button>&nbsp;

                                      <input data-toggle="tooltip" data-placement="top" title="" data-original-title="Couleur" style="height: 17px; font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" type="color" id="colore" onchange="insertTag('[color=' + this.value + ']','[/color]', 'Description');">&nbsp;

										<button type="button" value="cite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Citation" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[cite]','[/cite]','Description');" /><i class="fa fa-list-alt"></i></button>&nbsp;

										<button type="button" value="bande" data-toggle="tooltip" data-placement="top" title="" data-tag="bande" data-original-title="Catégorie" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[bande]','[/bande]','Description');" /><i class="fa fa-filter"></i></button>&nbsp;
										                                         
                                                                                                    
                                           <button type="button" value="hr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Séparateur" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[hr]','','Description')" class="fa fa-arrows-h" /><i class="fa fa-arrows-hist-alt"></i></button>
                                               
                                               
                                               <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Taille" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 43px;border-radius: 4px;height: 20px;" onchange="insertTag('[taille=' + this.options[this.selectedIndex].value + ']', '[/taille]', 'Description');">
										<option value="" class="selected" selected="selected"></option>
										<?php
										
										foreach(range(0, 100) as $taille)
										   {
										   echo '<option style="font-size:'.$taille.'px;" value="'.$taille.'">'.$taille.'</option>';
										   } ?>
										
										
									</select>&nbsp;   
                
                                      
                                      <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Police de Texte" style="font-size:14px;font-weight: bold;margin-bottom: 6px;border-radius: 4px;height: 20px;width: 151px;" onchange="insertTag('[font=' + this.options[this.selectedIndex].value + ']', '[/font]', 'Description');">
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Arial" style="font-family:Arial; font-size: 14px;">Arial</option>
										<option value="Century Gothic" style="font-family:Century Gothic; font-size: 14px;">Century Gothic</option>
										<option value="Comic Sans MS" style="font-family:Comic Sans MS; font-size: 14px;">Comic Sans MS</option>
										<option value="Courier New" style="font-family:Courier New; font-size: 14px;">Courier New</option>
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Georgia" style="font-family:Georgia; font-size: 14px;">Georgia</option>
										<option value="Helvetica" style="font-family:Helvetica; font-size: 14px;">Helvetica</option>
										<option value="Impact" style="font-family:Impact; font-size: 14px;; font-size: 14px;">Impact</option>
										<option value="Lucida" style="font-family:Lucida; font-size: 14px;">Lucida</option>
										<option value="Lucida Grande" style="font-family:Lucida Grande; font-size: 14px;">Lucida Grande</option>
										<option value="Palatino" style="font-family:Palatino; font-size: 14px;">Palatino</option>
										<option value="Tahoma" style="font-family:Tahoma; font-size: 14px;">Tahoma</option>
										<option value="Times New Roman" style="font-family:Times New Roman; font-size: 14px;">Times New Roman</option>
										<option value="Verdana" style="font-family:Verdana; font-size: 14px;">Verdana</option>
										<option value="Trebuchet MS" style="font-family:Trebuchet MS; font-size: 14px;">Trebuchet MS</option>							
									</select>
                                       <br>
                                        <textarea name="Description" class="form-control" id="Description" style="height: 269px;" placeholder="La description" onselect="preview(this, 'previewDiv');" onkeyup="preview(this, 'previewDiv');"><?php echo $resultat_site_internet16_2['Description'] ?></textarea>
                                       
                                        <div id="previewDiv"></div><br><br><div align="center"><button type="button" style="font-weight: bold;" class="btn btn-success pull-center" value="Visualiser" onclick="view('Description','viewDiv');" />Visualiser</button></div><br><br><div align="center" style="color: white;" id="viewDiv"></div> <br></td></tr>
     
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La Description de l'actualité Premium</td>
    </tr>
    
    
    
    <tr><td><button onclick="insertTag('[br]', '', 'DescriptionPremium');" type="button" data-toggle="tooltip" data-tag="br" class="wrap-tag" data-placement="top" title="" data-original-title="Saut de Ligne" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;"><i class="fa fa-indent"></i></button>&nbsp;
              
                                      	<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Police Gras" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" type="button" value="G" onclick="insertTag('[gras]','[/gras]','DescriptionPremium');" /><i class="fa fa-bold"></i></button>&nbsp;
                                      	
										<button type="button" value="I" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[italique]','[/italique]','DescriptionPremium');" /><i class="fa fa-italic"></i></button>&nbsp;
										
										<button type="button" value="Souligné" data-toggle="tooltip" data-placement="top" title="" data-original-title="Souligné" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[souligné]','[/souligné]','DescriptionPremium');" /><i class="fa fa-underline"></i></button>&nbsp;
										
										<button type="button" value="Strike" data-toggle="tooltip" data-placement="top" title="" data-original-title="Strike" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[s]','[/s]','DescriptionPremium');" /><i class="fa fa-strikethrough"></i></button>&nbsp;
										
										<button type="button" value="Lien" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[url]','[/url]','DescriptionPremium');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Lien Url" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien Texte" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[lien=]','[/lien]','DescriptionPremium');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Image" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[img width=..px' + ' height=..px]','[/img]','DescriptionPremium');"/><i class="fa fa-camera"></i></button>&nbsp;
										
										<button type="button" value="Code" data-toggle="tooltip" data-placement="top" title="" data-original-title="Style" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[code]','[/code]','DescriptionPremium');" /><i class="fa fa-code"></i></button>&nbsp;
										
										<button type="button" value="Email" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[email=]','[/email]','DescriptionPremium');" /><i class="fa fa-envelope"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Vidéo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vidéo" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[video]','[/video]','DescriptionPremium');" /><i class="fa fa-video-camera"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="SWF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swf" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[swf width=' + ' height=]','[/swf]','DescriptionPremium');" /><i class="fa fa-play-circle-o"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste simple" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces]','[/puces]','DescriptionPremium');" /><i class="fa fa-list-ol"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste numéroté" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces2]','[/puces2]','DescriptionPremium');" /><i class="fa fa-list-ul"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement gauche" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[left]','[/left]','DescriptionPremium');" /><i class="fa fa-align-left"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement centré" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[center]','[/center]','DescriptionPremium');" /><i class="fa fa-align-center"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement droite" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[right]','[/right]','DescriptionPremium');" /><i class="fa fa-align-right"></i></button>&nbsp;

                                      <input data-toggle="tooltip" data-placement="top" title="" data-original-title="Couleur" style="height: 17px;font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" type="color" id="colore" onchange="insertTag('[color=' + this.value + ']','[/color]', 'DescriptionPremium');">&nbsp;

										<button type="button" value="cite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Citation" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[cite]','[/cite]','DescriptionPremium');" /><i class="fa fa-list-alt"></i></button>&nbsp;

										<button type="button" value="bande" data-toggle="tooltip" data-placement="top" title="" data-tag="bande" data-original-title="Catégorie" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[bande]','[/bande]','DescriptionPremium');" /><i class="fa fa-filter"></i></button>&nbsp;
										                                         
                                                                                                    
                                           <button type="button" value="hr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Séparateur" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[hr]','','DescriptionPremium')" class="fa fa-arrows-h" /><i class="fa fa-arrows-hist-alt"></i></button>
                                               
                                               
                                               <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Taille" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 43px;border-radius: 4px;height: 20px;" onchange="insertTag('[taille=' + this.options[this.selectedIndex].value + ']', '[/taille]', 'DescriptionPremium');">
										<option value="" class="selected" selected="selected"></option>
										<?php
										
										foreach(range(0, 100) as $taille)
										   {
										   echo '<option style="font-size:'.$taille.'px;" value="'.$taille.'">'.$taille.'</option>';
										   } ?>
										
										
									</select>&nbsp;   
                
                                      
                                      <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Police de Texte" style="font-size:14px;font-weight: bold;margin-bottom: 6px;border-radius: 4px;height: 20px;width: 151px;" onchange="insertTag('[font=' + this.options[this.selectedIndex].value + ']', '[/font]', 'DescriptionPremium');">
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Arial" style="font-family:Arial; font-size: 14px;">Arial</option>
										<option value="Century Gothic" style="font-family:Century Gothic; font-size: 14px;">Century Gothic</option>
										<option value="Comic Sans MS" style="font-family:Comic Sans MS; font-size: 14px;">Comic Sans MS</option>
										<option value="Courier New" style="font-family:Courier New; font-size: 14px;">Courier New</option>
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Georgia" style="font-family:Georgia; font-size: 14px;">Georgia</option>
										<option value="Helvetica" style="font-family:Helvetica; font-size: 14px;">Helvetica</option>
										<option value="Impact" style="font-family:Impact; font-size: 14px;; font-size: 14px;">Impact</option>
										<option value="Lucida" style="font-family:Lucida; font-size: 14px;">Lucida</option>
										<option value="Lucida Grande" style="font-family:Lucida Grande; font-size: 14px;">Lucida Grande</option>
										<option value="Palatino" style="font-family:Palatino; font-size: 14px;">Palatino</option>
										<option value="Tahoma" style="font-family:Tahoma; font-size: 14px;">Tahoma</option>
										<option value="Times New Roman" style="font-family:Times New Roman; font-size: 14px;">Times New Roman</option>
										<option value="Verdana" style="font-family:Verdana; font-size: 14px;">Verdana</option>
										<option value="Trebuchet MS" style="font-family:Trebuchet MS; font-size: 14px;">Trebuchet MS</option>							
									</select>
                                       <br>
                                        <textarea name="DescriptionPremium" class="form-control" id="DescriptionPremium" style="height: 269px;" placeholder="La Description Premium de L'actualité" onselect="preview2(this, 'previewDiv2');" onkeyup="preview2(this, 'previewDiv2');"><?php echo $resultat_site_internet16_2['DescriptionPremium'] ?></textarea>
                                       
                                        <div id="previewDiv2"></div><br><br><div align="center"><button style="font-weight: bold;" type="button" class="btn btn-success pull-center" value="Visualiser" onclick="view('DescriptionPremium','viewDiv2');" />Visualiser</button></div> <br><br><div align="center" style="color: white;" id="viewDiv2"></div> <br></td></tr>
   
    <tr><td><br><div align="center"><button style="font-weight: bold;" class="btn btn-warning pull-center" type="submit">Mettre en ligne</button</div></td></tr>
    
    
  </tbody>
</form>
</table>
</div>
    
 
    </div> 
    
        <!-- /.content-wrapper -->
        
   
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

<script>
		
		
												function insertTag(startTag, endTag, textareaId, tagType) {
													var field  = document.getElementById(textareaId); 
													var scroll = field.scrollTop;
													field.focus();

													/* === Partie 1 : on récupère la sélection === */
													if (window.ActiveXObject) {
															var textRange = document.selection.createRange();            
															var currentSelection = textRange.text;
													} else {
															var startSelection   = field.value.substring(0, field.selectionStart);
															var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
															var endSelection     = field.value.substring(field.selectionEnd);               
													}

													/* === Partie 2 : on analyse le tagType === */
													if (tagType) {
															switch (tagType) {
																	case "lien":
																		endTag = "</lien>";
																		if (currentSelection) { // Il y a une sélection
																				if (currentSelection.indexOf("http://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
																						// La sélection semble être un lien. On demande alors le libellé
																						var label = prompt("Quel est le libellé du lien ?") || "";
																						startTag = "<lien url=\"" + currentSelection + "\">";
																						currentSelection = label;
																				} else {
																						// La sélection n'est pas un lien, donc c'est le libelle. On demande alors l'URL
																						var URL = prompt("Quelle est l'url ?");
																						startTag = "<lien url=\"" + URL + "\">";
																				}
																		} else { // Pas de sélection, donc on demande l'URL et le libelle
																				var URL = prompt("Quelle est l'url ?") || "";
																				var label = prompt("Quel est le libellé du lien ?") || "";
																				startTag = "<lien url=\"" + URL + "\">";
																				currentSelection = label;                     
																		}
																break;
																	case "cit":
															endTag = "</cit>";
															if (currentSelection) { // Il y a une sélection
																	if (currentSelection.length > 30) { // La longueur de la sélection est plus grande que 30. C'est certainement la citation, le pseudo fait rarement 20 caractères
																			var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																			startTag = "<cit nom=\"" + auteur + "\">";
																	} else { // On a l'Auteur, on demande la citation
																			var citation = prompt("Quelle est la citation ?") || "";
																			startTag = "<cit nom=\"" + currentSelection + "\">";
																			currentSelection = citation;    
																	}
															} else { // Pas de selection, donc on demande l'Auteur et la Citation
																	var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																	var citation = prompt("Quelle est la citation ?") || "";
																	startTag = "<cit nom=\"" + auteur + "\">";
																	currentSelection = citation;    
															}
													break;
															}
													}

													/* === Partie 3 : on insère le tout === */
													if (window.ActiveXObject) {
															textRange.text = startTag + currentSelection + endTag;
															textRange.moveStart("character", -endTag.length - currentSelection.length);
															textRange.moveEnd("character", -endTag.length);
															textRange.select();     
													} else {
															field.value = startSelection + startTag + currentSelection + endTag + endSelection;
															field.focus();
															field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
													} 

													field.scrollTop = scroll;     
											}
			
												function getXMLHttpRequest() {
													var xhr = null;

													if (window.XMLHttpRequest || window.ActiveXObject) {
														if (window.ActiveXObject) {
															try {
																xhr = new ActiveXObject("Msxml2.XMLHTTP");
															} catch(e) {
																xhr = new ActiveXObject("Microsoft.XMLHTTP");
															}
														} else {
															xhr = new XMLHttpRequest();
														}
													} else {
														alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
														return null;
													}

													return xhr;
												}
												
												function view(textareaId, viewDiv){
												var content = encodeURIComponent(document.getElementById(textareaId).value);
												var xhr = getXMLHttpRequest();

												if (xhr && xhr.readyState != 0) {
													xhr.abort();
													delete xhr;
												}

												xhr.onreadystatechange = function() {
													if (xhr.readyState == 4 && xhr.status == 200){
														document.getElementById(viewDiv).innerHTML = xhr.responseText;
													} else if (xhr.readyState == 3){
														document.getElementById(viewDiv).innerHTML = "<div style=\"text-align: center;\">Chargement en cours...</div>";
													}
												}

												xhr.open("POST", "view.php", true);
												xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
												xhr.send("string=" + content);
											}
											
		
		
												function insertTag(startTag, endTag, textareaId, tagType) {
													var field  = document.getElementById(textareaId); 
													var scroll = field.scrollTop;
													field.focus();

													/* === Partie 1 : on récupère la sélection === */
													if (window.ActiveXObject) {
															var textRange = document.selection.createRange();            
															var currentSelection = textRange.text;
													} else {
															var startSelection   = field.value.substring(0, field.selectionStart);
															var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
															var endSelection     = field.value.substring(field.selectionEnd);               
													}

													/* === Partie 2 : on analyse le tagType === */
													if (tagType) {
															switch (tagType) {
																	case "lien":
																		endTag = "</lien>";
																		if (currentSelection) { // Il y a une sélection
																				if (currentSelection.indexOf("http://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
																						// La sélection semble être un lien. On demande alors le libellé
																						var label = prompt("Quel est le libellé du lien ?") || "";
																						startTag = "<lien url=\"" + currentSelection + "\">";
																						currentSelection = label;
																				} else {
																						// La sélection n'est pas un lien, donc c'est le libelle. On demande alors l'URL
																						var URL = prompt("Quelle est l'url ?");
																						startTag = "<lien url=\"" + URL + "\">";
																				}
																		} else { // Pas de sélection, donc on demande l'URL et le libelle
																				var URL = prompt("Quelle est l'url ?") || "";
																				var label = prompt("Quel est le libellé du lien ?") || "";
																				startTag = "<lien url=\"" + URL + "\">";
																				currentSelection = label;                     
																		}
																break;
																	case "cit":
															endTag = "</cit>";
															if (currentSelection) { // Il y a une sélection
																	if (currentSelection.length > 30) { // La longueur de la sélection est plus grande que 30. C'est certainement la citation, le pseudo fait rarement 20 caractères
																			var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																			startTag = "<cit nom=\"" + auteur + "\">";
																	} else { // On a l'Auteur, on demande la citation
																			var citation = prompt("Quelle est la citation ?") || "";
																			startTag = "<cit nom=\"" + currentSelection + "\">";
																			currentSelection = citation;    
																	}
															} else { // Pas de selection, donc on demande l'Auteur et la Citation
																	var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																	var citation = prompt("Quelle est la citation ?") || "";
																	startTag = "<cit nom=\"" + auteur + "\">";
																	currentSelection = citation;    
															}
													break;
															}
													}

													/* === Partie 3 : on insère le tout === */
													if (window.ActiveXObject) {
															textRange.text = startTag + currentSelection + endTag;
															textRange.moveStart("character", -endTag.length - currentSelection.length);
															textRange.moveEnd("character", -endTag.length);
															textRange.select();     
													} else {
															field.value = startSelection + startTag + currentSelection + endTag + endSelection;
															field.focus();
															field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
													} 

													field.scrollTop = scroll;     
											}
			
												function getXMLHttpRequest() {
													var xhr = null;

													if (window.XMLHttpRequest || window.ActiveXObject) {
														if (window.ActiveXObject) {
															try {
																xhr = new ActiveXObject("Msxml2.XMLHTTP");
															} catch(e) {
																xhr = new ActiveXObject("Microsoft.XMLHTTP");
															}
														} else {
															xhr = new XMLHttpRequest();
														}
													} else {
														alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
														return null;
													}

													return xhr;
												}
												
												function view(textareaId, viewDiv2){
												var content = encodeURIComponent(document.getElementById(textareaId).value);
												var xhr = getXMLHttpRequest();

												if (xhr && xhr.readyState != 0) {
													xhr.abort();
													delete xhr;
												}

												xhr.onreadystatechange = function() {
													if (xhr.readyState == 4 && xhr.status == 200){
														document.getElementById(viewDiv2).innerHTML = xhr.responseText;
													} else if (xhr.readyState == 3){
														document.getElementById(viewDiv2).innerHTML = "<div style=\"text-align: center;\">Chargement en cours...</div>";
													}
												}

												xhr.open("POST", "view.php", true);
												xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
												xhr.send("string=" + content);
											}
												</script>

<?php if($_GET['edit-news'] == "non")
    { ?>    

    <script>                                
    setTimeout(function(){
    jQuery("#settings-resultat").fadeOut(700);
    window.history.pushState(document.title,document.title,"/edit-news?id=<?php echo $_GET['id'] ?>");
    }, 3000);
</script>
    

    <?php } ?>

<?php if($_GET['edit-news'] == "oui")
    { ?>    

    <script>                                
    setTimeout(function(){
    jQuery("#settings-resultat2").fadeOut(700);
    window.history.pushState(document.title,document.title,"/edit-news?id=<?php echo $_GET['id'] ?>");
    }, 3000);
</script>
    

    <?php } ?>


</body>
</html>
