<?php session_start();


?>

<?php require('cnx.php'); ?>

<?php

function Pagination2($page_actuelle, $nb_pages, $vers=3, $premier=1){
   
	$pagination = '';

	$lien = preg_replace('`%([^d])`', '%%$1', $page2);
	if (!preg_match('`(?<!%)%d`', $page2) ) $page2 .= '%d';

	return $pagination;

}

if ($nb_pages > 1) {

if ( ($page_actuelle-$vers) > $premier+1 )
$pagination .= '…';

$debut = ($page_actuelle-$vers)>$premier ? $page_actuelle-$vers : $premier+1;
$fin = ($page_actuelle+$vers)<=($nb_pages-$premier) ? 
	$page_actuelle+$vers : $nb_pages-$vers;

for ( $i=$debut ; $i<=$fin ; $i++ ) {

	$pagination .= ' ';
	if ( $i==$page_actuelle )
		$pagination .= ''.$i.'';
	else
		$pagination .= ''.$i.'';
	}
	if ( ($page_actuelle+$around) < $nb_pages-$premier )
	$pagination .= '…';


}


// Lien précédent
if ( $page_actuelle > 1 )
	$pagination .= '« Précédent';
else
	$pagination .= '« Précédent';

// Lien début
for ( $i=1 ; $i<=$premier ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien fin
$debut = $nb_pages-$premier+1;
if( $debut <= $premier ) $debut = $premier+1;
for ( $i=$debut ; $i<=$nb_pages ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien suivant
if ( $page_actuelle < $nb_pages )
	$pagination .= ' Suivant »';
else
	$pagination .= ' Suivant »';
	
	
	if( isset($_GET['page']) && is_numeric($_GET['page']))
	$page = $_GET['page'];
else
	$page = 1;

$pagination = 20;

$limite = ($page - 1) * $pagination;

$galerie = $cnx->prepare('SELECT * FROM GalleriePsStore ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$galerie->execute();

$i = $cnx->prepare("SELECT * FROM GalleriePsStore ORDER BY id DESC");
$i->execute();
$x = $i->rowCount();

$nb_pages = ceil($x / $pagination);
if ($nb_pages>1){
	$paginations .= '' . pagination2($page, $nb_pages) . '';
}
?>

<?php

function Pagination($page_actuelle, $nb_pages, $vers=3, $premier=1){
   
	$pagination = '';

	$lien = preg_replace('`%([^d])`', '%%$1', $page2);
	if (!preg_match('`(?<!%)%d`', $page2) ) $page2 .= '%d';

	return $pagination;

}

if ($nb_pages > 1) {

if ( ($page_actuelle-$vers) > $premier+1 )
$pagination .= '…';

$debut = ($page_actuelle-$vers)>$premier ? $page_actuelle-$vers : $premier+1;
$fin = ($page_actuelle+$vers)<=($nb_pages-$premier) ? 
	$page_actuelle+$vers : $nb_pages-$vers;

for ( $i=$debut ; $i<=$fin ; $i++ ) {

	$pagination .= ' ';
	if ( $i==$page_actuelle )
		$pagination .= ''.$i.'';
	else
		$pagination .= ''.$i.'';
	}
	if ( ($page_actuelle+$around) < $nb_pages-$premier )
	$pagination .= '…';


}


// Lien précédent
if ( $page_actuelle > 1 )
	$pagination .= '« Précédent';
else
	$pagination .= '« Précédent';

// Lien début
for ( $i=1 ; $i<=$premier ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien fin
$debut = $nb_pages-$premier+1;
if( $debut <= $premier ) $debut = $premier+1;
for ( $i=$debut ; $i<=$nb_pages ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien suivant
if ( $page_actuelle < $nb_pages )
	$pagination .= ' Suivant »';
else
	$pagination .= ' Suivant »';
	
	
	if( isset($_GET['page']) && is_numeric($_GET['page']))
	$page = $_GET['page'];
else
	$page = 1;

$pagination = 25;

$limite = ($page - 1) * $pagination;

$achat = $cnx->prepare('SELECT * FROM Actualite WHERE Cat = :Cat OR Categorie = :Categorie OR Categorie2 = :Categorie2 OR Categorie3 = :Categorie3 OR Categorie4 = :Categorie4 OR Categorie5 = :Categorie5 OR Categorie6 = :Categorie6 OR Categorie7 = :Categorie7 OR Categorie8 = :Categorie8 ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat->execute(array('Cat' => "PLAYSTATION 5 / PS5", 'Categorie' => "PS4", 'Categorie2' => "PS4", 'Categorie3' => "PS4", 'Categorie4' => "PS4", 'Categorie5' => "PS4", 'Categorie6' => "PS4", 'Categorie7' => "PS4", 'Categorie8' => "PS4"));

$achat2 = $cnx->prepare('SELECT * FROM Actualite WHERE Categorie = :Categorie OR Categorie2 = :Categorie2 OR Categorie3 = :Categorie3 OR Categorie4 = :Categorie4 OR Categorie5 = :Categorie5 OR Categorie6 = :Categorie6 OR Categorie7 = :Categorie7 OR Categorie8 = :Categorie8 ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat2->execute(array('Categorie' => "PS4", 'Categorie2' => "PS4", 'Categorie3' => "PS4", 'Categorie4' => "PS4", 'Categorie5' => "PS4", 'Categorie6' => "PS4", 'Categorie7' => "PS4", 'Categorie8' => "PS4"));

$achat3 = $cnx->prepare('SELECT * FROM Actualite WHERE Cat = :Cat OR Categorie = :Categorie OR Categorie2 = :Categorie2 OR Categorie3 = :Categorie3 OR Categorie4 = :Categorie4 OR Categorie5 = :Categorie5 OR Categorie6 = :Categorie6 OR Categorie7 = :Categorie7 OR Categorie8 = :Categorie8 ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat3->execute(array('Cat' => "PLAYSTATION 5 / PS5", 'Categorie' => "PS5", 'Categorie2' => "PS5", 'Categorie3' => "PS5", 'Categorie4' => "PS5", 'Categorie5' => "PS5", 'Categorie6' => "PS5", 'Categorie7' => "PS5", 'Categorie8' => "PS5"));

$achat4 = $cnx->prepare('SELECT * FROM Actualite WHERE Categorie = :Categorie OR Categorie2 = :Categorie2 OR Categorie3 = :Categorie3 OR Categorie4 = :Categorie4 OR Categorie5 = :Categorie5 OR Categorie6 = :Categorie6 OR Categorie7 = :Categorie7 OR Categorie8 = :Categorie8 ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat4->execute(array('Categorie' => "PS3", 'Categorie2' => "PS3", 'Categorie3' => "PS3", 'Categorie4' => "PS3", 'Categorie5' => "PS3", 'Categorie6' => "PS3", 'Categorie7' => "PS3", 'Categorie8' => "PS3"));

$achat5 = $cnx->prepare('SELECT * FROM Actualite WHERE Categorie = :Categorie OR Categorie2 = :Categorie2 OR Categorie3 = :Categorie3 OR Categorie4 = :Categorie4 OR Categorie5 = :Categorie5 OR Categorie6 = :Categorie6 OR Categorie7 = :Categorie7 OR Categorie8 = :Categorie8 ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat5->execute(array('Categorie' => "PS2", 'Categorie2' => "PS2", 'Categorie3' => "PS2", 'Categorie4' => "PS2", 'Categorie5' => "PS2", 'Categorie6' => "PS2", 'Categorie7' => "PS2", 'Categorie8' => "PS2"));

$achat6 = $cnx->prepare('SELECT * FROM Actualite WHERE Categorie = :Categorie OR Categorie2 = :Categorie2 OR Categorie3 = :Categorie3 OR Categorie4 = :Categorie4 OR Categorie5 = :Categorie5 OR Categorie6 = :Categorie6 OR Categorie7 = :Categorie7 OR Categorie8 = :Categorie8 ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat6->execute(array('Categorie' => "PS1", 'Categorie2' => "PS1", 'Categorie3' => "PS1", 'Categorie4' => "PS1", 'Categorie5' => "PS1", 'Categorie6' => "PS1", 'Categorie7' => "PS1", 'Categorie8' => "PS1"));

$i = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat OR Categorie = :Categorie OR Categorie2 = :Categorie2 OR Categorie3 = :Categorie3 OR Categorie4 = :Categorie4 OR Categorie5 = :Categorie5 OR Categorie6 = :Categorie6 OR Categorie7 = :Categorie7 OR Categorie8 = :Categorie8 ORDER BY id DESC");
$i->execute(array('Cat' => "PLAYSTATION 5 / PS5", 'Categorie' => "PS4", 'Categorie2' => "PS4", 'Categorie3' => "PS4", 'Categorie4' => "PS4", 'Categorie5' => "PS4", 'Categorie6' => "PS4", 'Categorie7' => "PS4", 'Categorie8' => "PS4"));
$x = $i->rowCount();

$nb_pages = ceil($x / $pagination);
if ($nb_pages>1){
	$paginations .= '' . pagination($page, $nb_pages) . '';
}
?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet13['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet13['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet13['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet13['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet13['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet">
	
	<style>
	#premium {
		color: #FFFFFF;
background: #333333;
text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;
color: #FFFFFF;
background: transparent;
		font-size: 32px;
		font-weight: bold
		}
		
		p {
  margin-top: -35px;		
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
        
        <div align="center"><p align="center">Vous aimez Playstation ? Alors bienvenue...</p></div>
        
        <style>
			#wrapper {
width: calc(48px * 2);
    margin: 45px 50% 166px;
    transform: translate(-50%, -50%);
}

#wrapper div {
  width: 48px;
  height: 48px;
  float: left;
  text-align: center;
  line-height: 4.5;
}

svg {
  width: 70%;
}

#triangle svg {
  animation: rotateAnimation 3s ease-in-out infinite;
  color: aqua;	
}

#square svg {
  animation: rotateAnimation 3s 1s ease-in-out infinite;
  color: red;
}

#circle svg {
  animation: rotateAnimation 3s 0.5s ease-in-out infinite;
  color: darkkhaki;
}

#cross svg {
  animation: rotateAnimation 3s 2s ease-in-out infinite;
  color: yellow;	
}

@keyframes rotateAnimation {
  0% {
    transform: rotate(0) scale(1);
  }
  50% {
    transform: rotate(120deg) scale(0);
  }
  70% {
    transform: rotate(-120deg) scale(0);
  }
  100% {
    transform: rotate(0) scale(1);
  }
}</style>

<div id="wrapper">

  <div id="triangle">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 115">
      <defs />
      <path fill="#FFF" d="M64.5 0L129 115H0L64.5 0zm0 24.531L20.489 103h88.021L64.5 24.531z" /></svg>
  </div>

  <div id="circle">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129">
      <defs />
      <path fill="#FFF" d="M64.5 0C100.122 0 129 28.878 129 64.5S100.122 129 64.5 129 0 100.122 0 64.5 28.878 0 64.5 0zm0 12C35.505 12 12 35.505 12 64.5S35.505 117 64.5 117 117 93.495 117 64.5 93.495 12 64.5 12z" /></svg>
  </div>

  <div id="cross">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110">
      <defs />
      <path fill="#FFF" d="M101 .515L109.485 9l-46 46 46 46-8.485 8.485-46-46-46 46L.515 101l46-46-46-46L9 .515l46 46 46-46z" /></svg>
  </div>

  <div id="square">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 113">
      <defs />
      <path fill="#FFF" d="M113 0v113H0V0h113zm-12 12H12v89h89V12z" /></svg>
  </div>
</div>
 
     <?php if($profilpremiumresult['Premium'] == "oui") { ?>
          
     <?php }else{ ?>  
      
        <div align="center" id="ads2" style="margin-bottom: 28px;margin-top: 24px;">
			<a class="main_banner" href="<?php echo $Pub_result4['Pub'] ?>" style="display:block;" target="_self" data-number="4" title=""><img src="<?php echo $Pub_result4['Image'] ?>" alt="" class="img-responsive"></a>
        </div>
        
       <?php } ?>  

<!-- BEGIN FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
                        <div class="index-background-element"></div>
           
                       <div class="featured-big-wrapper">
    <div class="featured-big-inner">

        <!-- BEGIN LOOP (large featured story) -->
                <div class="featured-stories-wrapper featured-large">

            <div class="featured-stories-inner" style="background-image:url(<?php echo $slider_result_premium_psn['Image'] ?>);">
                <div class="featured-stories-bg-gradient">
                
                    <!-- BEGIN CATEGORY MARKERS -->
                    <div class="category-markers-wrapper">
                                                   
                        
                                                    <div class="images-post-marker">
                                <div class="images-post-marker-inner"></div>
                            </div>
                                            </div>
                    <!-- END CATEGORY MARKERS -->
                    
                    <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                                    <!-- END MARK HIGHLIGHTED POST -->
                    
                    <a href="article?id=<?php echo $slider_result_premium_psn['id'] ?>">
                        <!-- BEGIN CATEGORIES (except 'featured' and 'highlighted') -->
                        <div class="featured-category"><?php echo $slider_result_premium_psn['Cat'] ?></div>                    <!-- END CATEGORIES (except 'featured' and 'highlighted') -->

                        <div class="featured-title-wrapper">
                            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                                                            <div class="comment-count-bubble">
                                    <span>
                                        <?php echo $slider_result_premium_psn['comment'] ?>                                   </span>
                                </div>
                                                        <!-- END COMMENT COUNT (if post has comments) -->
                            <h2><?php echo $slider_result_premium_psn['Titre'] ?></h2>
                            <div class="featured-author-time">Par <?php echo $slider_result_premium_psn['Createur'] ?> // <?php echo $slider_result_premium_psn['Date'] ?></div>
                        </div>
                    </a>
                    
                </div>
            </div>

        </div>
                <!-- END LOOP (large featured story) -->

    </div>
</div>   
  
    
<div class="featured-small-wrapper">

    <!-- BEGIN LOOP (small featured stories) -->
        <div class="featured-stories-wrapper">

        <div class="featured-stories-inner" style="background-image:url(<?php echo $slider_result_premium_psn2['Image'] ?>);">
            <div class="featured-stories-bg-gradient">
            
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                    
                                            <div class="images-post-marker">
                            <div class="images-post-marker-inner"></div>
                        </div>
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                    <!-- END MARK HIGHLIGHTED POST -->
                
                <a href="article?id=<?php echo $slider_result_premium_psn2['id'] ?>">
                    <!-- BEGIN CATEGORIES (except 'featured' and 'highlighted') -->
                    <div class="featured-category"><?php echo $slider_result_premium_psn2['Cat'] ?></div>                    <!-- END CATEGORIES (except 'featured' and 'highlighted') -->

                    <div class="featured-title-wrapper">
                        <!-- BEGIN COMMENT COUNT (if post has comments) -->
                                                    <div class="comment-count-bubble">
                                <span>
                                   <?php echo $slider_result_premium_psn2['comment'] ?>                              </span>
                            </div>
                                                <!-- END COMMENT COUNT (if post has comments) -->
                        <h2><?php echo $slider_result_premium_psn2['Titre'] ?></h2>
                        <div class="featured-author-time">Par <?php echo $slider_result_premium_psn2['Createur'] ?> // <?php echo $slider_result_premium_psn2['Date'] ?></div>
                    </div>
                </a>
                
            </div>
        </div>

    </div>
        <div class="featured-stories-wrapper">

        <div class="featured-stories-inner" style="background-image:url(<?php echo $slider_result_psn3['ImagePetite'] ?>);">
            <div class="featured-stories-bg-gradient">
            
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                           
                    
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                            <div class="highlighted-post-marker"></div>
                                                    <!-- END MARK HIGHLIGHTED POST -->
                
                <a href="article?id=<?php echo $slider_result_psn3['id'] ?>">
                    <!-- BEGIN CATEGORIES (except 'featured' and 'highlighted') -->
                    <div class="featured-category"><?php echo $slider_result_psn3['Cat'] ?></div>                   <!-- END CATEGORIES (except 'featured' and 'highlighted') -->

                    <div class="featured-title-wrapper">
                        <!-- BEGIN COMMENT COUNT (if post has comments) -->
                                                <!-- END COMMENT COUNT (if post has comments) -->
                        <h2><?php echo $slider_result_psn3['Titre'] ?></h2>
                        <div class="featured-author-time">Par <?php echo $slider_result_psn3['Createur'] ?> // <?php echo $slider_result_psn3['Date'] ?></div>
                    </div>
                </a>
                
            </div>
        </div>

    </div>
        <!-- END LOOP (small featured stories) -->

</div>
   
   
   <div class="condition_psn">
   
    <hr>  
     <br>
   
    
  <div align="center" style="margin-top: 10px;">
    
    <div align="center" style="margin-bottom: 36px;font-family: Ubuntu Mono;letter-spacing: 5.5px;font-size: 18px;color: white;text-shadow: -1px 3px 6px #f7e7e7;">
  <h1>Choisissez votre plateforme</h1>
 
</div>

     
      <style>
		  .nk-feature-icon {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 50px;
    padding: 15px;
    background-color: #4c484829;
    border-radius: 4px !important;
    box-shadow: 0 0 7px #907d7dc2;
}
		.nk-feature-1 .nk-feature-icon, .nk-feature-2 .nk-feature-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 156px;
    height: 69px;
    padding-right: 10px;
    font-size: 3rem;
    line-height: 50px;
    color: #fff;
    text-align: center;
    border-radius: 3px;
}
		  .nk-feature-1 .nk-feature-cont, .nk-feature-2 .nk-feature-cont {
    padding-top: 8px;
}
		  .nk-feature-1 .nk-feature-icon img, .nk-feature-2 .nk-feature-icon img {
    max-width: 100%;
    height: auto;
}
		  .nk-feature-title {
    margin-bottom: .5rem;
    font-size: 1.25rem;
}
.h3, h3 {
    font-size: 1.75rem;
}

		  </style>
       
       <table width="100%" border="0">
  <tbody align="center">
    <tr>
      <td><div class="nk-feature-1">
                            <div class="nk-feature-icon ">
                                <img style="width: 50%;" src="image/crown.svg" alt="">
                            </div><br>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title" style="
    color: white;
    font-size: 15px;
">PS4</h3>
                                <h3 class="nk-feature-title"><a id="PS4" style="
    font-size: 14px;
    cursor: pointer;
">Voir les actualités</a></h3>
                            </div>
                        </div></td>
      <td><div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img style="width: 50%;" src="image/pikachu.svg" alt="">
                            </div><br>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title text-main-4" style="
    color: white;
    font-size: 15px;
">PS5</h3>
                                <h3 class="nk-feature-title text-main-2"><a id="PS5" style="
    font-size: 14px; cursor: pointer;
">Voir les actualités</a></h3>
                            </div>
                        </div></td>
      <td><div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img style="width: 50%;" src="image/game-controller.svg" alt="">
                            </div><br>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title text-main-3" style="
    color: white;
    font-size: 15px;
">PS3</h3>
                                <h3 class="nk-feature-title text-main-3"><a id="PS3" style="
    font-size: 14px; cursor: pointer;
">Voir les actualités</a></h3>
                            </div>
                        </div></td>
    
    </tr>
  </tbody>
</table>
<br><br>
<table align="center" border="0" width="100%" style="
    width: 68%;
">
	<tbody align="center">
		<tr>
			  <td style="width: 2%;"><div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img src="image/trophy.svg" alt="" style="width: 50%;">
                            </div><br>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title text-main-2" style="
    color: white;
    font-size: 15px;
">PS2</h3>
                                <h3 class="nk-feature-title text-main-4"><a id="PS2" style="
    font-size: 14px; cursor: pointer;
">Voir les actualités</a></h3>
                            </div>
                        </div></td>
      <td style="width: 2%;"><div class="nk-feature-1">
                            <div class="nk-feature-icon">
                                <img style="width: 50%;" src="image/revive.svg" alt="">
                            </div><br>
                            <div class="nk-feature-cont">
                                <h3 class="nk-feature-title text-main-1" style="
    color: white;
    font-size: 15px;
">PS1</h3>
                                <h3 class="nk-feature-title text-main-5"><a id="PS1" style="
    font-size: 14px; cursor: pointer;
">Voir les actualités</a></h3>
                            </div>
                        </div></td>
		</tr>
	</tbody>
</table>

   </div>   
   

			</div>
			
			
 <div class="conditon_form_psn" style="display: none;">
 
 <hr class="condition_hr"> 
 
 <form action="#" id="form">
 	
 	<select class="form-control">
 		<option value="PS1-From">PS1</option>
 		<option value="PS2-From">PS2</option>
 		<option value="PS3-From">PS3</option>
 		<option value="PS4-From">PS4</option>
 		<option value="PS5-From">PS5</option>
 	</select>
 
	 </form>	
 			
 </div>

 <hr class="condition_hr">  
     
<div class="index-loop-wrapper">
  
  <div class="index-loop-wrapper-inner" id="ramdomplateforme-Ps1" style="margin-right: 0px !important; display: none;">
        

            <!-- BEGIN INDEX LOOP -->
            
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($slider_result4 = $achat6->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $slider_result4['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $slider_result4['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $slider_result4['ImagePetite'] ?>);">
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                            
                    
                                            <div class="images-post-marker">
                            <div class="images-post-marker-inner"></div>
                        </div>
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                    <!-- END MARK HIGHLIGHTED POST -->

            </div>
            <!-- END FEATURED IMAGE + ICONS -->  
            
            <!-- BEGIN TITLE + DATE -->
            <div class="title-excerpt-wrapper">
                <!-- BEGIN TITLE -->
                <div class="entry-title">
                    <h2>
                        <!-- BEGIN STICKY POST MARKER -->
                                                <!-- END STICKY POST MARKER -->
                        <!-- BEGIN TITLE -->
                        <?php echo $slider_result4['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $slider_result4['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo$slider_result4['Paragraphe']; ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire la suite                    </span>
                    <!-- END READ MORE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?> 
 
            </div>
   
   <div class="index-loop-wrapper-inner" id="ramdomplateforme-Ps2" style="margin-right: 0px !important; display: none;">
        

            <!-- BEGIN INDEX LOOP -->
            
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($slider_result4 = $achat5->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $slider_result4['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $slider_result4['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $slider_result4['ImagePetite'] ?>);">
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                            
                    
                                            <div class="images-post-marker">
                            <div class="images-post-marker-inner"></div>
                        </div>
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                    <!-- END MARK HIGHLIGHTED POST -->

            </div>
            <!-- END FEATURED IMAGE + ICONS -->  
            
            <!-- BEGIN TITLE + DATE -->
            <div class="title-excerpt-wrapper">
                <!-- BEGIN TITLE -->
                <div class="entry-title">
                    <h2>
                        <!-- BEGIN STICKY POST MARKER -->
                                                <!-- END STICKY POST MARKER -->
                        <!-- BEGIN TITLE -->
                        <?php echo $slider_result4['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $slider_result4['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo$slider_result4['Paragraphe']; ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire la suite                    </span>
                    <!-- END READ MORE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?> 
 
            </div>
    
    <div class="index-loop-wrapper-inner" id="ramdomplateforme-Ps3" style="margin-right: 0px !important; display: none;">
        

            <!-- BEGIN INDEX LOOP -->
            
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($slider_result4 = $achat4->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $slider_result4['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $slider_result4['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $slider_result4['ImagePetite'] ?>);">
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                            
                    
                                            <div class="images-post-marker">
                            <div class="images-post-marker-inner"></div>
                        </div>
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                    <!-- END MARK HIGHLIGHTED POST -->

            </div>
            <!-- END FEATURED IMAGE + ICONS -->  
            
            <!-- BEGIN TITLE + DATE -->
            <div class="title-excerpt-wrapper">
                <!-- BEGIN TITLE -->
                <div class="entry-title">
                    <h2>
                        <!-- BEGIN STICKY POST MARKER -->
                                                <!-- END STICKY POST MARKER -->
                        <!-- BEGIN TITLE -->
                        <?php echo $slider_result4['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $slider_result4['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo$slider_result4['Paragraphe']; ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire la suite                    </span>
                    <!-- END READ MORE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?> 
 
            </div>
     
     <div class="index-loop-wrapper-inner" id="ramdomplateforme-Ps5" style="margin-right: 0px !important; display: none;">
        

            <!-- BEGIN INDEX LOOP -->
            
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($slider_result4 = $achat3->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $slider_result4['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $slider_result4['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $slider_result4['ImagePetite'] ?>);">
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                            
                    
                                            <div class="images-post-marker">
                            <div class="images-post-marker-inner"></div>
                        </div>
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                    <!-- END MARK HIGHLIGHTED POST -->

            </div>
            <!-- END FEATURED IMAGE + ICONS -->  
            
            <!-- BEGIN TITLE + DATE -->
            <div class="title-excerpt-wrapper">
                <!-- BEGIN TITLE -->
                <div class="entry-title">
                    <h2>
                        <!-- BEGIN STICKY POST MARKER -->
                                                <!-- END STICKY POST MARKER -->
                        <!-- BEGIN TITLE -->
                        <?php echo $slider_result4['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $slider_result4['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo$slider_result4['Paragraphe']; ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire la suite                    </span>
                    <!-- END READ MORE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?> 
 
            </div>
      
     <div class="index-loop-wrapper-inner" id="ramdomplateforme-Ps4" style="margin-right: 0px !important; display: none;">
        

            <!-- BEGIN INDEX LOOP -->
            
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($slider_result4 = $achat2->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $slider_result4['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $slider_result4['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $slider_result4['ImagePetite'] ?>);">
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                            
                    
                                            <div class="images-post-marker">
                            <div class="images-post-marker-inner"></div>
                        </div>
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                    <!-- END MARK HIGHLIGHTED POST -->

            </div>
            <!-- END FEATURED IMAGE + ICONS -->  
            
            <!-- BEGIN TITLE + DATE -->
            <div class="title-excerpt-wrapper">
                <!-- BEGIN TITLE -->
                <div class="entry-title">
                    <h2>
                        <!-- BEGIN STICKY POST MARKER -->
                                                <!-- END STICKY POST MARKER -->
                        <!-- BEGIN TITLE -->
                        <?php echo $slider_result4['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $slider_result4['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo$slider_result4['Paragraphe']; ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire la suite                    </span>
                    <!-- END READ MORE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?> 
 
            </div>
       
        <div class="index-loop-wrapper-inner" id="ramdomplateforme-out" style="margin-right: 0px !important;">
        

            <!-- BEGIN INDEX LOOP -->
            
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($slider_result4 = $achat->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $slider_result4['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $slider_result4['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $slider_result4['ImagePetite'] ?>);">
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                            
                    
                                            <div class="images-post-marker">
                            <div class="images-post-marker-inner"></div>
                        </div>
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                                    <!-- END MARK HIGHLIGHTED POST -->

            </div>
            <!-- END FEATURED IMAGE + ICONS -->  
            
            <!-- BEGIN TITLE + DATE -->
            <div class="title-excerpt-wrapper">
                <!-- BEGIN TITLE -->
                <div class="entry-title">
                    <h2>
                        <!-- BEGIN STICKY POST MARKER -->
                                                <!-- END STICKY POST MARKER -->
                        <!-- BEGIN TITLE -->
                        <?php echo $slider_result4['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $slider_result4['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo$slider_result4['Paragraphe']; ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire la suite                    </span>
                    <!-- END READ MORE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?> 
 
            </div>
     
   <div class="post-nav condition_psn_nav">
    <div class="post-nav-inner">
       
       
       <?php
						if($nb_pages != $_GET['page']) {
                   ?>
				
               
                       <a class="page-numbers<?php if($_SERVER['REQUEST_URI'] == "/psn?page=1" OR $_SERVER['REQUEST_URI'] == "/psn") { ?> current<?php } ?>" href="psn?page=1">1</a>  
						<?php } ?>


  <?php for ($i = 2 ; $i <= $nb_pages -1 ; $i++)
{  ?>
      
           		<a class="page-numbers<?= ($_GET['page'] == $i) ? " current" : "" ?>" href="psn?page=<?php echo $i ?>"><?php echo $i ?></a>
						
         <?php } ?>
         
          <?php
                    $ligne1 = $_GET['page'];
					$ligne2 = "1";
						
						
                    ?>
         <?php
						if($nb_pages != $_GET['page']) {
                   ?>
                    <a href="psn?page=<?php echo $ligne1+$ligne2 ?>" class="next page-numbers">
                       &gt;
                    </a>
				<?php } ?>
   </div>
   
   
   
   
</div>
                                                                               
                        <!-- END INDEX LOOP -->
                        
                       
                    
            
<br><br>
        <hr><br><br>
        </div>
        
         <div align="center" style="margin-bottom: 36px;font-family: Ubuntu Mono;letter-spacing: 5.5px;font-size: 18px;color: white;text-shadow: -1px 3px 6px #f7e7e7;">
  <h1>Quelque image...</h1>
 
</div>
        
        
      <div class="shortcode-wrapper">
            
		<style type="text/css">
			#gallery-1 {
				margin: auto;
			}
			#gallery-1 .gallery-item {
				float: left;
				margin-top: 10px;
				text-align: center;
				width: 20%;
			}
			#gallery-1 img {
				border: 2px solid #cfcfcf;
			}
			#gallery-1 .gallery-caption {
				margin-left: 0;
			}
			/* see gallery_shortcode() in wp-includes/media.php */
		</style>
		
		
		
		<div id="gallery-1" class="gallery galleryid-663 gallery-columns-5 gallery-size-thumbnail">
		
		<?php while($galerie_resultat = $galerie->fetch()) { ?>
		
		<dl class="gallery-item">
			<dt class="gallery-icon landscape">
				<a data-size="800x450" href="<?php echo $galerie_resultat['Lien'] ?>"><img width="300" height="300" src="<?php echo $galerie_resultat['Lien'] ?>" class="attachment-thumbnail size-thumbnail" alt=""></a>
			</dt>
			</dl>
			
		<?php } ?>
		
			<br style="clear: both">
		</div>
</div>  
        
         
    </div>    
       
                 <?php if($profilpremiumresult['Premium'] == "oui") { ?>
           
     <?php }else{ ?>  
     
        <div align="center" id="ads2" style="margin-top: -77px;margin-bottom: 74px;">
			<a class="main_banner" href="<?php echo $Pub_result2['Pub'] ?>" style="display:block;" target="_self" data-number="4" title=""><img src="<?php echo $Pub_result2['Image'] ?>" alt="" class="img-responsive"></a>
        </div>
        
	<?php } ?>          

       
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

<script type="application/javascript">
jQuery( "#PS5" ).click(function() {
		jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeIn(600);
	});
</script>

<script type="application/javascript">
jQuery( "#PS4" ).click(function() {
		jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeIn(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
	});
</script>

<script type="application/javascript">
jQuery( "#PS3" ).click(function() {
		jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeIn(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
	});
</script>

<script type="application/javascript">
jQuery( "#PS2" ).click(function() {
		jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeIn(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
	});
</script>

<script type="application/javascript">
jQuery( "#PS1" ).click(function() {
		jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeIn(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
	});
</script>

--

<script type="application/javascript">
jQuery( document ).ready(function($) {
var Select = '#form select';
$(Select).change(function(){
	 if(jQuery('Select option:selected').text() == "PS5"){
        jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeIn(600);
     }
     else{
       
     }
 });

});
</script>

<script type="application/javascript">
jQuery( document ).ready(function($) {
var Select = '#form select';
$(Select).change(function(){
	 if(jQuery('Select option:selected').text() == "PS4"){
        jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeIn(600);
     }
     else{
       
     }
 });

});
</script>

<script type="application/javascript">
jQuery( document ).ready(function($) {
var Select = '#form select';
$(Select).change(function(){
	 if(jQuery('Select option:selected').text() == "PS3"){
        jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeIn(600);
     }
     else{
    
     }
 });

});
</script>

<script type="application/javascript">
jQuery( document ).ready(function($) {
var Select = '#form select';
$(Select).change(function(){
	 if(jQuery('Select option:selected').text() == "PS2"){
        jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeIn(600);
     }
     else{
      
     }
 });

});
</script>

<script type="application/javascript">
jQuery( document ).ready(function($) {
var Select = '#form select';
$(Select).change(function(){
	 if(jQuery('Select option:selected').text() == "PS1"){
        jQuery("#ramdomplateforme-out").fadeOut(600);
		jQuery("#ramdomplateforme-Ps5").fadeOut(600);
		jQuery("#ramdomplateforme-Ps4").fadeOut(600);
		jQuery("#ramdomplateforme-Ps3").fadeOut(600);
		jQuery("#ramdomplateforme-Ps2").fadeOut(600);
		jQuery("#ramdomplateforme-Ps1").fadeIn(600);
     }
     else{
      
     }
 });

});
</script>

</body>
</html>
