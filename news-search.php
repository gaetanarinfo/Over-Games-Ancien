<?php session_start();


?>

<?php require('cnx.php'); ?>

<?php include('view.php'); ?>

<?php

$serveur13 = $cnx->prepare("SELECT * FROM Actualite WHERE id = :id");
$serveur13->execute(array(':id' => $_GET['id']));
$resultat_recherche2 = $serveur13->fetch();
$serveur13->closeCursor();

?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet14['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet14['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet14['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet14['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet14['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
		
	<style>
	p {
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
		
.bb, .bb::before, .bb::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat 49%/219% rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb::before, .bb::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe 8s linear infinite;
}
.bb::before {
  animation-delay: -4s;
}
.bb:hover::after, .bb:hover::before {
  background-color: rgba(255, 0, 0, 0.3);
}

@keyframes clipMe {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}

/*2*/
.bb2, .bb2::before, .bb2::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb2 {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat 35px 40px rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb2::before, .bb2::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe2 8s linear infinite;
}
.bb2::before {
  animation-delay: -4s;
}
.bb2:hover::after, .bb2:hover::before {
  background-color: rgb(48 255 34 / 30%);
}

@keyframes clipMe2 {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}		
		
/*3*/
.bb3, .bb3::before, .bb3::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb3 {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat -163px 40px rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb3::before, .bb3::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe3 8s linear infinite;
}
.bb3::before {
  animation-delay: -4s;
}
.bb3:hover::after, .bb3:hover::before {
  background-color: rgb(66 183 228 / 30%);
}

@keyframes clipMe3 {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}	

		
.index-loop-wrapper-inner > .blog-index-date:nth-child(2)::before {
    content: 'Dernière publication le :';
    position: absolute;
    bottom: 30px;
    left: 15px;
    font-size: 13px;
    font-weight: 500;
    color: #878788;
    text-transform: none;
}
		
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");

.lumino {
  background: 64% 66% / 164% 124% no-repeat
              radial-gradient(ellipse at bottom, #fff, transparent, transparent);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-size: 10vw;
  font-family: "Source Sans Pro", sans-serif;
  animation: reveal 3000ms ease-in-out forwards 200ms,
             glow 2500ms linear infinite 2000ms;

  @keyframes reveal {
    80%{
      letter-spacing: 8px;
    }
    100% {
      background-size: 300% 300%;
    }
  }
  @keyframes glow {
    40% {
      text-shadow: 0 0 8px #fff;
    }
  }
}  
		

/******************************
 * FLEXBOX STYLES
 ***************************** */
.dice {
  display: -webkit-box;
  display: flex;
  margin-top: 2rem;
  -webkit-box-pack: center;
          justify-content: center;
}

.face {
  display: -webkit-box;
  display: flex;
  width: 3rem;
  height: 3rem;
  margin: 0 0.7rem;
  padding: 0.5rem;
  border-radius: 5px;
  opacity: 0;
}
.face .dot {
  width: 0.8rem;
  height: 0.8rem;
  background: #F44336;
  border-radius: 50%;
}
.face:nth-child(1) {
  border: 2px solid #F44336;
  -webkit-animation: waves 5s linear infinite;
          animation: waves 5s linear infinite;
}
.face:nth-child(1) .dot {
  background: #F44336;
}
.face:nth-child(2) {
  border: 2px solid #E91E63;
  -webkit-animation: waves 5s 0.2s linear infinite;
          animation: waves 5s 0.2s linear infinite;
}
.face:nth-child(2) .dot {
  background: #E91E63;
}
.face:nth-child(3) {
  border: 2px solid #9C27B0;
  -webkit-animation: waves 5s 0.4s linear infinite;
          animation: waves 5s 0.4s linear infinite;
}
.face:nth-child(3) .dot {
  background: #9C27B0;
}
.face:nth-child(4) {
  border: 2px solid #673AB7;
  -webkit-animation: waves 5s 0.6s linear infinite;
          animation: waves 5s 0.6s linear infinite;
}
.face:nth-child(4) .dot {
  background: #673AB7;
}
.face:nth-child(5) {
  border: 2px solid #3F51B5;
  -webkit-animation: waves 5s 0.8s linear infinite;
          animation: waves 5s 0.8s linear infinite;
}
.face:nth-child(5) .dot {
  background: #3F51B5;
}
.face:nth-child(6) {
  border: 2px solid #2196F3;
  -webkit-animation: waves 5s 1s linear infinite;
          animation: waves 5s 1s linear infinite;
}
.face:nth-child(6) .dot {
  background: #2196F3;
}

.first-face {
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
}

.second-face {
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.second-face .dot:last-of-type {
  align-self: flex-end;
}

.third-face {
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.third-face .dot:nth-child(2) {
  align-self: center;
}
.third-face .dot:last-of-type {
  align-self: flex-end;
}

.fourth-face {
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.fourth-face .column {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: justify;
          justify-content: space-between;
}

.fifth-face {
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.fifth-face .column {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.fifth-face .column:nth-child(2) {
  -webkit-box-pack: center;
          justify-content: center;
}

.sixth-face {
  -webkit-box-pack: justify;
          justify-content: space-between;
}
.sixth-face .column {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: justify;
          justify-content: space-between;
}

/****************************************************** */
@-webkit-keyframes waves {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 0;
  }
  4% {
    -webkit-transform: translateY(-25px);
            transform: translateY(-25px);
    opacity: 1;
  }
  8% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  70% {
    opacity: 0;
  }
}
@keyframes waves {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 0;
  }
  4% {
    -webkit-transform: translateY(-25px);
            transform: translateY(-25px);
    opacity: 1;
  }
  8% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
    opacity: 1;
  }
  70% {
    opacity: 0;
  }
}

	
	</style>

		</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>   
    
   
        <div class="sitewrap-inner">
        
        <div class="content-wrapper">		

<!-- BEGIN FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
                        <div class="index-background-element"></div>
            <!-- END FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
            
     

<div class="index-main-wrapper">
    
	<p align="center">En manque d"inspiration - Faite une bonne recherche</p>
  
 
  <hr>
   
   <div class="index-loop-wrapper" style="margin-top: -30px;">
        <div class="index-loop-wrapper-inner">
        
         <?php

if(empty($_GET['id']))
{
	
}else{
	
	?>
	
        
            <!-- BEGIN HIGHLIGHTED POSTS MARKER -->
            <div class="necessary-wrapper-for-index">
                                <div class="highlighted-posts-marker">
                   Nos Actualités ! Bonne recherche.                   
                </div>
                            </div>
            <!-- END HIGHLIGHTED POSTS MARKER -->

            <!-- BEGIN INDEX LOOP -->
            
            
<div class="blog-index-date">
                                <?php $date1 = date('Y-m-d'); // Date du jour
setlocale(LC_TIME, "fr_FR");
echo utf8_encode(strftime("%A %d %B %G", strtotime($date1))); ?>                           </div>
                           
                            <div class="loop-index-top-border"></div>
                            
   
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $resultat_recherche2['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $resultat_recherche2['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php if(empty($resultat_recherche2['ImagePetite'])) { ?><?php echo $resultat_recherche2['Image'] ?><?php }else{ ?><?php echo $resultat_recherche2['ImagePetite'] ?><?php } ?>);">
            
            
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                           
                                           
                                            <?php if($resultat_recherche2['Cat'] == "PREMIUM") { ?>
                    
                   <span class="gk__a-tag is--showed is--top-right" style="
    font-weight: bold;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    pointer-events: none;
    margin-left: -169px;
    margin-top: -2px;
    position: absolute;
    font-weight: bold;
">
					<span class="gk__a-tag__sub js-subscribers-tag" style="
    font-weight: 700;
    display: block;
    color: white;
    letter-spacing: 3px !important;
    width: 81px;
    height: 15px;
    padding: 10px 5px 3px 7px;
    text-transform: uppercase;
    pointer-events: none;
    text-align: center;
    background-color: #13578894;
    box-shadow: 0 0 8px 0 rgb(232 210 210 / 16%);
    font-size: 0.625rem;
    line-height: .625rem;
"><i class="fa fa-lock" aria-hidden="true" style="
    font-size: 9px;
"><span style="
    font-weight: bold;
    text-align: center;
"> Abonné </span></i></span>
											</span>
               <?php } ?>
                    
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
                        <?php echo $resultat_recherche2['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $resultat_recherche2['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo substr($resultat_recherche2['Paragraphe'], 0, 60).'...'; ?>
                    
                                                          <!-- END EXCERPT -->
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
 
                
        <hr style="margin-bottom: -23px;">           
  
  <?php } ?>
    
<?php

if(empty($_GET['mot']))
{
	
	echo "Désolé nous n'avons aucun résultat à votre recherche";
	
}else{ ?>  <? } ?>
  
  <?php

if(empty($_GET['mot']))
{
	
	echo "<div align=\"center\" style=\"margin-top: 49px;width: 100%;\"><span class=\"Youtube\" style=\"font-size: 21px; font-weight: bold; color: #4A4D50;\">Désolé nous n'avons aucun résultat à votre recherche</span></div>";
	
}else{
	
	?>
  
  <?php
        if(isset($_GET['mot']))
{
$mot = $_GET['mot'];
$dn = $cnx->prepare('SELECT * FROM Actualite WHERE Titre LIKE :mot');
$dn->bindValue(':mot', '%'.$mot.'%');
$dn->execute();
 $nb_resultats = $dn->rowCount();
?>
  
  <?php
		   
 if($nb_resultats > 0)
		{
   	while ($row = $dn->fetch())
    {
		$image=$row['Image'];
		$categorie=$row['Categorie'];
		$dnn=$row['jour'];
		$dnn2=$row['mois'];
		$desription=$row['Description'];
		$bold_word='<b>'.$mot.'</b>';
		$final_msg = str_ireplace($mot, $bold_word, $msg);
		?>
		
		  <div align="center" style="margin-top: 48px;margin-bottom: 9px;"><a href="news-search?mot=<?php echo $_GET['mot'] ?>&id=<?php echo $row['id']; ?>"><span class="Youtube" style="font-size: 12px;font-weight: bold;color: #f7fbff;"><span style="color:#676767;" class="fa fa-chevron-right"></span>&nbsp;<?php echo $row['Titre']; ?><br></span></a></div>
		  
<?php
		}
		}
		else
		{
		echo "<div align=\"center\" style=\"margin-top: 49px;width: 100%;\"><span class=\"Youtube\" style=\"font-size: 21px; font-weight: bold; color: #ffffff;\">Désolé nous n'avons aucun résultat à votre recherche</span></div>";
		}
	}
?>
  
  <?php } ?>
  
  
<div class="dice">
  
  <div class="face first-face">
    <div class="dot"></div>  
  </div>
  
  <div class="face second-face">
    <div class="dot"></div>  
    <div class="dot"></div>  
  </div>
  
  <div class="face third-face">
    <div class="dot"></div>  
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  
  <div class="face fourth-face">
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>    
  </div>
  
  <div class="face fifth-face">
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>
    <div class="column">
      <div class="dot"></div>
    </div>
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>    
  </div>
  
  <div class="face sixth-face">
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
      <div class="dot"></div>
    </div>    
  </div>
  
</div>
   
   
    <!-- BEGIN LOOP -->
    
    <!-- END LOOP -->
    </div>
	   </div>  

    <!-- BEGIN SIDEBAR -->
    <div class="sidebar-wrapper" style="margin-top: -77px;">
           
          
           
           <?php if($profilpremiumresult['Premium'] == "oui") { ?>
       
     <?php }else{ ?>  
               
            <div class="sidebar-ad-widget-wrapper">
        <div id="text-3" class="widget widget_text">			<div class="textwidget"><img style="opacity:0.75;margin-bottom:-3px;" alt="<?php echo $Pub_result['Image'] ?>" src="<?php echo $Pub_result['Image'] ?>"></div>
		</div>        <!-- BEGIN SPOSORED TEXT INCLUDE -->
        <div class="sponsored-texts">
    Publicité            <span>|</span>
        <a href="<?php echo $Pub_result['Pub'] ?>">
            Découvrir la pub        </a>
    </div>        <!-- END SPOSORED TEXT INCLUDE -->
    </div>
    
    <?php } ?>

    <?php include('wp-includes/Php/Login_Search.php'); ?>

    </div>
    <!-- END SIDEBAR -->
    
    

</div>
<!-- /.index-main-wrapper -->
        
       
       
        </div>
        <!-- /.content-wrapper -->
        
        
      <?php if($profilpremiumresult['Premium'] == "oui") { ?>
           
     <?php }else{ ?>  
       <br><br>
        <div align="center" id="ads2" style="margin-top: -78px;margin-bottom: 99px;">
			<a class="main_banner" href="<?php echo $Pub_result2['Pub'] ?>" style="display:block;" target="_self" data-number="4" title=""><img src="<?php echo $Pub_result2['Image'] ?>" alt="" class="img-responsive"></a>
        </div>
        
	<?php } ?>
     
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>
        
    </div>
   
</div>



<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

</body>
</html>
