<?php require_once('cnx.php'); ?>
<?php
$stmt20 = $cnx->prepare("SELECT COUNT(*) AS forum_id FROM forum_topic_2 WHERE rep = :rep");
$stmt20->execute((array(':rep' => "non")));
$forumtopic1 = $stmt20->fetch();
$stmt20->closeCursor();
?>


<?php
$session = $cnx->prepare("SELECT * FROM utilisateurs");
$session->execute();
$session1 = $session->fetch();
$session->closeCursor();
?>

<?php
$session2 = $cnx->prepare("SELECT * FROM forum_topic_2");
$session2->execute();
$session22 = $session2->fetch();
$session2->closeCursor();
?>

<?php
$stmt21 = $cnx->prepare("SELECT COUNT(*) AS forum_id FROM forum_forum_2_2");
$stmt21->execute();
$forumtopic2 = $stmt21->fetch();
$stmt21->closeCursor();
?>

<?php
$stmt222 = $cnx->prepare("SELECT COUNT(*) AS id FROM forum_forum_2_1");
$stmt222->execute();
$forumtopic222 = $stmt222->fetch();
$stmt222->closeCursor();
?>

<?php
$stmt223 = $cnx->prepare("SELECT COUNT(*) AS id FROM forum_forum_2_2");
$stmt223->execute();
$forumtopic223 = $stmt223->fetch();
$stmt223->closeCursor();
?>

<?php
$stmt224 = $cnx->prepare("SELECT COUNT(*) AS id FROM utilisateurs");
$stmt224->execute();
$forumtopic224 = $stmt224->fetch();
$stmt224->closeCursor();
?>

<?php
$reponse24 = $cnx->prepare("SELECT * FROM forum_categorie_2 WHERE cat_id = :cat_id");
$reponse24->execute(array(':cat_id' => $_GET['forum_cat_id']));
$result24 = $reponse24->fetch();
$reponse24->closeCursor();
?>
<?php
$reponse27 = $cnx->prepare("SELECT * FROM forum_categorie_2 WHERE cat_id = :cat_id");
$reponse27->execute(array(':cat_id' => $_GET['forum_cat_id']));
$result27 = $reponse27->fetch();
$reponse27->closeCursor();
?>
<?php
$reponse28 = $cnx->prepare("SELECT * FROM forum_forum_2_1 WHERE forum_cat_id = :forum_cat_id AND forum_id = :forum_id AND topic_id = :topic_id");
$reponse28->execute(array(':forum_cat_id' => $_GET['forum_cat_id'], ':forum_id' => $_GET['forum_id'], ':topic_id' => $_GET['topic_id']));
$result28 = $reponse28->fetch();

$reponse28->closeCursor();
?>

<?php
$reponse51 = $cnx->prepare("SELECT * FROM forum_forum_2_1 WHERE forum_cat_id = :forum_cat_id AND forum_id = :forum_id AND topic_id = :topic_id");
$reponse51->execute(array(':forum_cat_id' => $_GET['forum_cat_id'], ':forum_id' => $_GET['forum_id'], ':topic_id' => $_GET['topic_id']));
$result51 = $reponse51->fetch();
?>

<?php
$reponse29=$cnx->query('SELECT COUNT(*) AS forum_id FROM forum_forum_2_1');
$result29 = $reponse29->fetch();
?>
<?php
$reponse30 = $cnx->prepare("SELECT * FROM forum_forum_2_1 WHERE forum_cat_id = :forum_cat_id AND forum_id = :forum_id AND topic_id = :topic_id");
$reponse30->execute(array(':forum_cat_id' => $_GET['forum_cat_id'], ':forum_id' => $_GET['forum_id'], ':topic_id' => $_GET['topic_id']));
$result30 = $reponse30->fetch();
?>

<?php
 
// Si tout va bien, on peut continuer
 
$nombre_de_msg_par_page=20; // On met dans une variable le nombre de messages qu'on veut par page
 
// On récupère le nombre total de messages
 
$reponse40=$cnx->query('SELECT COUNT(*) AS forum_name, forum_heur FROM forum_forum_2_2 ORDER BY forum_heur DESC');
$total_messages = $reponse40->fetch();
$nombre_messages=$total_messages['forum_name'];
 
$reponse40=$cnx->query("SET NAMES 'utf8'");
 
 
// on détermine le nombre de pages
$nb_pages = ceil($nombre_messages / $nombre_de_msg_par_page);
         

?>
<?php
 
 
// Maintenant, on va afficher les messages
// ---------------------------------------
if (isset($_GET['page']))
{
    $page = $_GET['page']; // On récupère le numéro de la page indiqué dans l'adresse (livredor.php?page=4)
}
else // La variable n'existe pas, c'est la première fois qu'on charge la page
{
    $page = 1; // On se met sur la page 1 (par défaut)
}
 
// On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
$premierMessageAafficher = ($page - 1) * $nombre_de_msg_par_page;
// On ferme la requête avant d'en faire une autre
$reponse40->closeCursor();

$reponse40 = $cnx->prepare('SELECT * FROM forum_forum_2_2 WHERE forum_cat_id = :forum_cat_id ORDER BY forum_heur DESC LIMIT ' . $premierMessageAafficher . ', ' . $nombre_de_msg_par_page);
$reponse40->execute(array(':forum_cat_id' => $_GET['forum_cat_id']));
?>
<?php
$reponse41 = $cnx->prepare("SELECT * FROM forum_forum_2_2 WHERE forum_cat_id = :forum_cat_id AND forum_id = :forum_id");
$reponse41->execute(array(':forum_cat_id' => $_GET['forum_cat_id'], ':forum_id' => $_GET['forum_id']));
$result41 = $reponse41->fetch();

$reponse41->closeCursor();
?>

<?php
$reponse422 = $cnx->prepare("SELECT * FROM forum_forum_2_1 WHERE forum_cat_id = :forum_cat_id ORDER BY forum_heur ASC");
$reponse422->execute(array(':forum_cat_id' => $_GET['forum_cat_id']));
?>

<?php
$reponse1 = $cnx->prepare("SELECT * FROM forum_categorie_2 WHERE forum_administration = 1 ORDER BY id DESC");
$reponse1->execute();
?>

<?php
$reponse2 = $cnx->prepare("SELECT * FROM forum_categorie_2 WHERE forum_administration = 0 AND forum_server = 0 ORDER BY id ASC");
$reponse2->execute();
?>

<?php
$reponse3 = $cnx->prepare("SELECT * FROM forum_categorie_2 WHERE forum_server = 1 ORDER BY id ASC");
$reponse3->execute();
?>

<?php
$reponse52 = $cnx->prepare("SELECT * FROM forum_forum_2_1 WHERE topic_createur = :topic_createur");
$reponse52->execute(array(':topic_createur' => $_SESSION['pseudo']));
$result52 = $reponse52->fetch();
$reponse52->closeCursor();
?>
<?php
$reponse53 = $cnx->prepare("SELECT * FROM forum_forum_2_1 ORDER BY id DESC");
$reponse53->execute();
?>

<?php
$stmt20 = $cnx->prepare("SELECT COUNT(*) AS forum_id FROM forum_topic_2 WHERE rep = :rep");
$stmt20->execute((array(':rep' => "non")));
$forumtopic1 = $stmt20->fetch();
?>
<?php
$stmt21 = $cnx->prepare("SELECT COUNT(*) AS forum_id FROM forum_forum_2_2");
$stmt21->execute();
$forumtopic2 = $stmt21->fetch();
?>