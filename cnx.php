<?php session_start(); ?>
<?php
 $serveur = 'db5000342686.hosting-data.io';
 $user = 'dbu607905';
 $pass  = '@Zyfnnake72';
 $bdd = 'dbs333147';

try {
    $cnx = new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $pass);
	$cnx->exec('SET NAMES utf8');
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
 ?>
 
 

<?php


/*$site_internet_ligne = $cnx->prepare("SELECT * FROM Site_Internet_OverGames");
$resultat_site_internet_ligne = $cnx->query("SET NAMES 'utf8'");
$site_internet_ligne->execute();
$resultat_site_internet_ligne = $site_internet_ligne->fetch();

if($resultat_site_internet_ligne['ligne'] == "1" && $_SERVER['REQUEST_URI'] != "/hors-ligne" && $_SESSION['rang'] != "Administrateur") {
	
	die('<META HTTP-equiv="refresh" content=0;URL=/hors-ligne>');
	
}*/

$site_internet = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet = $cnx->query("SET NAMES 'utf8'");
$site_internet->execute(array(':id' => "1"));
$resultat_site_internet = $site_internet->fetch();

$site_internet2 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet2 = $cnx->query("SET NAMES 'utf8'");
$site_internet2->execute(array(':id' => "2"));
$resultat_site_internet2 = $site_internet2->fetch();

$site_internet3 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet3 = $cnx->query("SET NAMES 'utf8'");
$site_internet3->execute(array(':id' => "3"));
$resultat_site_internet3 = $site_internet3->fetch();

$site_internet4 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet4 = $cnx->query("SET NAMES 'utf8'");
$site_internet4->execute(array(':id' => "4"));
$resultat_site_internet4 = $site_internet4->fetch();

$site_internet5 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet5 = $cnx->query("SET NAMES 'utf8'");
$site_internet5->execute(array(':id' => "5"));
$resultat_site_internet5 = $site_internet5->fetch();

$site_internet6 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet6 = $cnx->query("SET NAMES 'utf8'");
$site_internet6->execute(array(':id' => "6"));
$resultat_site_internet6 = $site_internet6->fetch();

$site_internet7 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet7 = $cnx->query("SET NAMES 'utf8'");
$site_internet7->execute(array(':id' => "7"));
$resultat_site_internet7 = $site_internet7->fetch();

$site_internet7_2 = $cnx->prepare("SELECT * FROM Actualite WHERE id = :id");
$resultat_site_internet7_2 = $cnx->query("SET NAMES 'utf8'");
$site_internet7_2->execute(array(':id' => $_GET['id']));
$resultat_site_internet7_2 = $site_internet7_2->fetch();

$site_internet8 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet8 = $cnx->query("SET NAMES 'utf8'");
$site_internet8->execute(array(':id' => "8"));
$resultat_site_internet8 = $site_internet8->fetch();

$site_internet9 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet9 = $cnx->query("SET NAMES 'utf8'");
$site_internet9->execute(array(':id' => "9"));
$resultat_site_internet9 = $site_internet9->fetch();

$site_internet10 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet10 = $cnx->query("SET NAMES 'utf8'");
$site_internet10->execute(array(':id' => "10"));
$resultat_site_internet10 = $site_internet10->fetch();

$site_internet11 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet11 = $cnx->query("SET NAMES 'utf8'");
$site_internet11->execute(array(':id' => "11"));
$resultat_site_internet11 = $site_internet11->fetch();

$site_internet11_2 = $cnx->prepare("SELECT * FROM Test_Jeux WHERE item = :item");
$resultat_site_internet11_2 = $cnx->query("SET NAMES 'utf8'");
$site_internet11_2->execute(array(':item' => $_GET['item']));
$resultat_site_internet11_2 = $site_internet11_2->fetch();

$site_internet12 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet12 = $cnx->query("SET NAMES 'utf8'");
$site_internet12->execute(array(':id' => "12"));
$resultat_site_internet12 = $site_internet12->fetch();

$site_internet13 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet13 = $cnx->query("SET NAMES 'utf8'");
$site_internet13->execute(array(':id' => "13"));
$resultat_site_internet13 = $site_internet13->fetch();

$site_internet14 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet14 = $cnx->query("SET NAMES 'utf8'");
$site_internet14->execute(array(':id' => "14"));
$resultat_site_internet14 = $site_internet14->fetch();

$site_internet15 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet15 = $cnx->query("SET NAMES 'utf8'");
$site_internet15->execute(array(':id' => "15"));
$resultat_site_internet15 = $site_internet15->fetch();

$site_internet16 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet16 = $cnx->query("SET NAMES 'utf8'");
$site_internet16->execute(array(':id' => "16"));
$resultat_site_internet16 = $site_internet16->fetch();

$site_internet16_2 = $cnx->prepare("SELECT * FROM Actualite WHERE id = :id");
$resultat_site_internet16_2 = $cnx->query("SET NAMES 'utf8'");
$site_internet16_2->execute(array(':id' => $_GET['id']));
$resultat_site_internet16_2 = $site_internet16_2->fetch();

$site_internet17 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet17 = $cnx->query("SET NAMES 'utf8'");
$site_internet17->execute(array(':id' => "17"));
$resultat_site_internet17 = $site_internet17->fetch();

$site_internet18 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet18 = $cnx->query("SET NAMES 'utf8'");
$site_internet18->execute(array(':id' => "18"));
$resultat_site_internet18 = $site_internet18->fetch();

$site_internet19 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet19 = $cnx->query("SET NAMES 'utf8'");
$site_internet19->execute(array(':id' => "19"));
$resultat_site_internet19 = $site_internet19->fetch();

$site_internet20 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet20 = $cnx->query("SET NAMES 'utf8'");
$site_internet20->execute(array(':id' => "20"));
$resultat_site_internet20 = $site_internet20->fetch();

$site_internet21 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet21 = $cnx->query("SET NAMES 'utf8'");
$site_internet21->execute(array(':id' => "21"));
$resultat_site_internet21 = $site_internet21->fetch();

$site_internet22 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet22 = $cnx->query("SET NAMES 'utf8'");
$site_internet22->execute(array(':id' => "22"));
$resultat_site_internet22 = $site_internet22->fetch();

$site_internet22_1 = $cnx->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo");
$resultat_site_internet22_1 = $cnx->query("SET NAMES 'utf8'");
$site_internet22_1->execute(array(':pseudo' => $_GET['p']));
$resultat_site_internet22_1 = $site_internet22_1->fetch();

$site_internet23 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet23 = $cnx->query("SET NAMES 'utf8'");
$site_internet23->execute(array(':id' => "23"));
$resultat_site_internet23 = $site_internet23->fetch();

$site_internet24 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet24 = $cnx->query("SET NAMES 'utf8'");
$site_internet24->execute(array(':id' => "24"));
$resultat_site_internet24 = $site_internet24->fetch();

$site_internet25 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet25 = $cnx->query("SET NAMES 'utf8'");
$site_internet25->execute(array(':id' => "25"));
$resultat_site_internet25 = $site_internet25->fetch();

$site_internet26 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet26 = $cnx->query("SET NAMES 'utf8'");
$site_internet26->execute(array(':id' => "26"));
$resultat_site_internet26 = $site_internet26->fetch();

$site_internet27 = $cnx->prepare("SELECT * FROM Site_Internet_OverGames WHERE id = :id");
$resultat_site_internet27 = $cnx->query("SET NAMES 'utf8'");
$site_internet27->execute(array(':id' => "27"));
$resultat_site_internet27 = $site_internet27->fetch();

$sli_article = $cnx->prepare("SELECT * FROM Actualite WHERE Tags = :Tags ORDER BY id DESC LIMIT 0,4");
$resultat_sli_article = $cnx->query("SET NAMES 'utf8'");
$sli_article->execute(array(':Tags' => $resultat_site_internet7_2['Tags']));

$sli_test = $cnx->prepare("SELECT * FROM Test_Jeux WHERE plateforme = :plateforme ORDER BY id DESC LIMIT 0,4");
$resultat_sli_test = $cnx->query("SET NAMES 'utf8'");
$sli_test->execute(array(':plateforme' => $resultat_site_internet11_2['plateforme']));

$commantaire = $cnx->prepare("SELECT COUNT(*) AS id FROM Actualites_Commentaire WHERE id = :id");
$commantaire->execute(array(':id' => $_GET['id']));
$resultat_commantaire = $commantaire->fetch();
$commantaire->closeCursor();

$commantaire2 = $cnx->prepare("SELECT * FROM Actualites_Commentaire WHERE id = :id AND email = :email");
$commantaire2->execute(array(':id' => $_GET['id'], ':email' => $_SESSION['email']));
$resultat_commantaire2 = $commantaire2->fetch();
$commantaire2->closeCursor();

$commantaire3 = $cnx->prepare("SELECT COUNT(*) AS item FROM Test_Commentaire WHERE item = :item");
$commantaire3->execute(array(':item' => $_GET['item']));
$resultat_commantaire3 = $commantaire3->fetch();
$commantaire3->closeCursor();

$commantaire4 = $cnx->prepare("SELECT * FROM Test_Commentaire WHERE item = :item AND email = :email");
$commantaire4->execute(array(':item' => $_GET['item'], ':email' => $_SESSION['email']));
$resultat_commantaire4 = $commantaire4->fetch();
$commantaire4->closeCursor();

$profilpremium = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$profilpremium->execute(array(':email' => $_SESSION['email']));
$profilpremiumresult = $profilpremium->fetch();
$profilpremium->closeCursor();

$trailer = $cnx->prepare("SELECT * FROM Trailer");
$resultat_trailer = $cnx->query("SET NAMES 'utf8'");
$trailer->execute();
$resultat_trailer = $trailer->fetch();
	
$slider_premium = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat ORDER BY id DESC LIMIT 0,1");
$slider_result_premium = $cnx->query("SET NAMES 'utf8'");
$slider_premium->execute(array(':Cat' => 'PREMIUM'));
$slider_result_premium = $slider_premium->fetch();

$slider_premium_psn = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat AND Categorie = :Categorie ORDER BY id DESC LIMIT 0,1");
$slider_result_premium_psn = $cnx->query("SET NAMES 'utf8'");
$slider_premium_psn->execute(array(':Cat' => 'PREMIUM', ':Categorie' => 'PS4'));
$slider_result_premium_psn = $slider_premium_psn->fetch();

$slider_premium_psn2 = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat AND Categorie = :Categorie ORDER BY id DESC LIMIT 0,1");
$slider_result_premium_psn2 = $cnx->query("SET NAMES 'utf8'");
$slider_premium_psn2->execute(array(':Cat' => 'PREMIUM', ':Categorie' => 'PS5'));
$slider_result_premium_psn2 = $slider_premium_psn2->fetch();

$slider_psn3 = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat AND Categorie = :Categorie ORDER BY id DESC LIMIT 0,1");
$slider_result_psn3 = $cnx->query("SET NAMES 'utf8'");
$slider_psn3->execute(array(':Cat' => 'NEWS', ':Categorie' => 'PS4'));
$slider_result_psn3 = $slider_psn3->fetch();

$slider_premium2 = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat ORDER BY id DESC LIMIT 1,1");
$slider_result_premium2 = $cnx->query("SET NAMES 'utf8'");
$slider_premium2->execute(array(':Cat' => 'PREMIUM'));
$slider_result_premium2 = $slider_premium2->fetch();

$slider_premium3 = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat ORDER BY id DESC LIMIT 2,1");
$slider_result_premium3 = $cnx->query("SET NAMES 'utf8'");
$slider_premium3->execute(array(':Cat' => 'PREMIUM'));
$slider_result_premium3 = $slider_premium3->fetch();

$slider = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat ORDER BY id DESC LIMIT 0,1");
$slider_result = $cnx->query("SET NAMES 'utf8'");
$slider->execute(array(':Cat' => 'News'));
$slider_result = $slider->fetch();

$slider2 = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat ORDER BY id DESC LIMIT 0,1");
$slider_result2 = $cnx->query("SET NAMES 'utf8'");
$slider2->execute(array(':Cat' => 'Premium'));
$slider_result2 = $slider2->fetch();

$slider3 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 0,1");
$slider_result3 = $cnx->query("SET NAMES 'utf8'");
$slider3->execute();
$slider_result3 = $slider3->fetch();

$test_page = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 0,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page->execute();

$test_page2 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 0,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page2->execute();

$test_page3 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 0,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page3->execute();

$test_page4 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 6,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page4->execute();

$test_page5 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 6,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page5->execute();

$test_page6 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 6,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page6->execute();

$test_page7 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 12,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page7->execute();

$test_page8 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 12,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page8->execute();

$test_page9 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 12,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page9->execute();

$test_page10 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 18,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page10->execute();

$test_page11 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 18,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page11->execute();

$test_page12 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 18,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page12->execute();
	
$test_page13 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 24,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page13->execute();

$test_page14 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 24,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page14->execute();

$test_page15 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 24,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page15->execute();
	
$test_page16 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 30,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page16->execute();

$test_page17 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 30,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page17->execute();

$test_page18 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 30,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page18->execute();
	
$test_page19 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 36,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page19->execute();

$test_page20 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 36,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page20->execute();

$test_page21 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 36,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page21->execute();
	
$test_page22 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 42,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page22->execute();

$test_page23 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 42,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page23->execute();

$test_page24 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 42,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page24->execute();
	
$test_page25 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 48,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page25->execute();

$test_page26 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 48,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page26->execute();

$test_page27 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 48,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page27->execute();
	
$test_page28 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 54,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page28->execute();

$test_page29 = $cnx->prepare("SELECT * FROM TestJeux ORDER BY id DESC LIMIT 54,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page29->execute();

$test_page30 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 54,6");
$donnees3 = $cnx->query("SET NAMES 'utf8'");
$test_page30->execute();

$slider4 = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 0,16");
$slider_result4 = $cnx->query("SET NAMES 'utf8'");
$slider4->execute();

$day2 = strtotime("-1 day"); 
$date12 = date('Y-m-d', $day2);
setlocale(LC_TIME, "fr_FR");

$slider5 = $cnx->prepare("SELECT * FROM Actualite WHERE date = :date ORDER BY id DESC LIMIT 0,10");
$slider_result4 = $cnx->query("SET NAMES 'utf8'");
$slider5->execute(array(':date' => strftime("%A %d %B %G", strtotime($date12))));

$Pub = $cnx->prepare("SELECT * FROM Pub3 WHERE id = :id ORDER BY id DESC");
$Pub_result = $cnx->query("SET NAMES 'utf8'");
$Pub->execute(array(':id' => "5"));
$Pub_result = $Pub->fetch();

$Pub2 = $cnx->prepare("SELECT * FROM Pub3 WHERE id = :id ORDER BY id DESC");
$Pub_result2 = $cnx->query("SET NAMES 'utf8'");
$Pub2->execute(array(':id' => "2"));
$Pub_result2 = $Pub2->fetch();

$Pub3 = $cnx->prepare("SELECT * FROM Pub3 WHERE id = :id ORDER BY id DESC");
$Pub_result3 = $cnx->query("SET NAMES 'utf8'");
$Pub3->execute(array(':id' => "1"));
$Pub_result3 = $Pub3->fetch();

$Pub4 = $cnx->prepare("SELECT * FROM Pub3 WHERE id = :id ORDER BY id DESC");
$Pub_result4 = $cnx->query("SET NAMES 'utf8'");
$Pub4->execute(array(':id' => "6"));
$Pub_result4 = $Pub4->fetch();

$slider_Tags = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 0,30");
$slider_result_Tags = $cnx->query("SET NAMES 'utf8'");
$slider_Tags->execute();

$slider_Comment = $cnx->prepare("SELECT * FROM Actualites_Commentaire ORDER BY id DESC LIMIT 0,6");
$slider_result_Comment = $cnx->query("SET NAMES 'utf8'");
$slider_Comment->execute();

$slider6 = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 0,13");
$slider_result4 = $cnx->query("SET NAMES 'utf8'");
$slider6->execute();

$guide_achat = $cnx->prepare("SELECT * FROM Guide_Achat ORDER BY id DESC LIMIT 0,10");
$guide_achat_resultat = $cnx->query("SET NAMES 'utf8'");
$guide_achat->execute();

$twitch = $cnx->prepare("SELECT * FROM Twitch ORDER BY id DESC LIMIT 0,3");
$twitch_resultat = $cnx->query("SET NAMES 'utf8'");
$twitch->execute();

$guide_video = $cnx->prepare("SELECT * FROM Guide_Video ORDER BY id DESC LIMIT 0,7");
$guide_video_resultat = $cnx->query("SET NAMES 'utf8'");
$guide_video->execute();

$test = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 0,10");
$test_resultat = $cnx->query("SET NAMES 'utf8'");
$test->execute();

$guide_achat2 = $cnx->prepare("SELECT * FROM Guide_Achat ORDER BY id DESC LIMIT 0,1");
$guide_achat_resultat2 = $cnx->query("SET NAMES 'utf8'");
$guide_achat2->execute();
$guide_achat_resultat2 = $guide_achat2->fetch();

$requeteUsers = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$result_requeteUsers = $cnx->query("SET NAMES 'utf8'");
$requeteUsers->execute(array(':email' => $_SESSION['email']));
$result_requeteUsers = $requeteUsers->fetch();

$promo = $cnx->prepare("SELECT * FROM code_promo WHERE code = :code");
$promo->execute(array(':code' => $_SESSION['code']));
$promoresult = $promo->fetch();
$promo->closeCursor();

$actus = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 0,1");
$actus_result = $cnx->query("SET NAMES 'utf8'");
$actus->execute();
$actus_result = $actus->fetch();

$actus_test = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 0,10");
$actus_test_result = $cnx->query("SET NAMES 'utf8'");
$actus_test->execute();

$actu_article = $cnx->prepare("SELECT * FROM Actualites_Commentaire WHERE id = :id ORDER BY ddate DESC LIMIT 0,7");
$donnees = $cnx->query("SET NAMES 'utf8'");
$actu_article->execute(array(':id' => $_GET['id']));

$actu_test = $cnx->prepare("SELECT * FROM Test_Commentaire WHERE item = :item ORDER BY ddate DESC LIMIT 0,7");
$donnees = $cnx->query("SET NAMES 'utf8'");
$actu_test->execute(array(':item' => $_GET['item']));

$slider_Comment_test = $cnx->prepare("SELECT * FROM Test_Commentaire ORDER BY ddate DESC LIMIT 0,7");
$slider_result_Comment = $cnx->query("SET NAMES 'utf8'");
$slider_Comment_test->execute();

$slider_Critique_test = $cnx->prepare("SELECT * FROM liste_ratings ORDER BY DDate DESC LIMIT 0,10");
$slider_result_Comment2 = $cnx->query("SET NAMES 'utf8'");
$slider_Critique_test->execute();

$critique = $cnx->prepare("SELECT * FROM liste_ratings ORDER BY DDate DESC");
$critique = $cnx->query("SET NAMES 'utf8'");
$critique->execute();
$resultat_critique = $critique->fetch();

$menu_article = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC LIMIT 0,7");
$resultat_menu_article = $cnx->query("SET NAMES 'utf8'");
$menu_article->execute();

$menu_test = $cnx->prepare("SELECT * FROM Test_Jeux ORDER BY id DESC LIMIT 0,7");
$resultat_menu_test = $cnx->query("SET NAMES 'utf8'");
$menu_test->execute();

$requeteUsersGuide = $cnx->prepare("SELECT COUNT(*) ids FROM Guide_Achat_Liste WHERE email = :email");
$requeteUsersGuide->execute(array(':email' => $_SESSION['email']));
$result_requeteUsersGuide = $requeteUsersGuide->fetch();

$requeteUsersMp = $cnx->prepare("SELECT COUNT(*) AS id FROM mp_prive WHERE destinataire = :destinataire AND lu = :lu");
$requeteUsersMp->execute(array(':destinataire' => $_SESSION['pseudo'], ':lu' => "non"));
$result_requeteUsersMp = $requeteUsersMp->fetch();

$galerie_index = $cnx->prepare("SELECT * FROM galerie ORDER BY id DESC LIMIT 0,3");
$resultat_galerie_index = $cnx->query("SET NAMES 'utf8'");
$galerie_index->execute();

$galerie_index2 = $cnx->prepare("SELECT * FROM galerie ORDER BY id DESC LIMIT 0,3");
$resultat_galerie_index = $cnx->query("SET NAMES 'utf8'");
$galerie_index2->execute();

?>
