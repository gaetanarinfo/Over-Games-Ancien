<?php session_start();


?>

<?php if($result_requeteUsers['Premium'] == "oui") { ?>

<?php }else{ 

die('<META HTTP-equiv="refresh" content=0;URL=index>');

 } ?>

<?php require('cnx.php'); ?>

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

$achat = $cnx->prepare('SELECT * FROM Actualite WHERE Cat = :Cat ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat->execute(array('Cat' => "Premium"));

$i = $cnx->prepare("SELECT * FROM Actualite WHERE Cat = :Cat ORDER BY id DESC");
$i->execute(array('Cat' => "Premium"));
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
	<title><?php echo $resultat_site_internet5['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet5['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet5['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet5['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet5['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
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
        
        <p align="center">Pour nos membres Premium</p>
        
        <?php if($_GET['code'] == "oui")
    { ?>    
    <div align="center" id="settings-resultat" style="margin-bottom: 37px;margin-top: 18px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Le code a été validé avec succès. Profité maintenant de toutes les actualités.</div>
                                        </div>
     <?php } ?>   
     
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

            <div class="featured-stories-inner" style="background-image:url(<?php echo $slider_result_premium['Image'] ?>);">
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
                    
                    <a href="article?id=<?php echo $slider_result_premium['id'] ?>">
                        <!-- BEGIN CATEGORIES (except 'featured' and 'highlighted') -->
                        <div class="featured-category"><?php echo $slider_result_premium['Cat'] ?></div>                    <!-- END CATEGORIES (except 'featured' and 'highlighted') -->

                        <div class="featured-title-wrapper">
                            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                                                            <div class="comment-count-bubble">
                                    <span>
                                        <?php echo $slider_result_premium['comment'] ?>                                   </span>
                                </div>
                                                        <!-- END COMMENT COUNT (if post has comments) -->
                            <h2><?php echo $slider_result_premium['Titre'] ?></h2>
                            <div class="featured-author-time">Par <?php echo $slider_result_premium['Createur'] ?> // <?php echo $slider_result_premium['Date'] ?></div>
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

        <div class="featured-stories-inner" style="background-image:url(<?php echo $slider_result_premium2['Image'] ?>);">
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
                
                <a href="article?id=<?php echo $slider_result_premium2['id'] ?>">
                    <!-- BEGIN CATEGORIES (except 'featured' and 'highlighted') -->
                    <div class="featured-category"><?php echo $slider_result_premium2['Cat'] ?></div>                    <!-- END CATEGORIES (except 'featured' and 'highlighted') -->

                    <div class="featured-title-wrapper">
                        <!-- BEGIN COMMENT COUNT (if post has comments) -->
                                                    <div class="comment-count-bubble">
                                <span>
                                   <?php echo $slider_result_premium2['comment'] ?>                              </span>
                            </div>
                                                <!-- END COMMENT COUNT (if post has comments) -->
                        <h2><?php echo $slider_result_premium2['Titre'] ?></h2>
                        <div class="featured-author-time">Par <?php echo $slider_result_premium2['Createur'] ?> // <?php echo $slider_result_premium2['Date'] ?></div>
                    </div>
                </a>
                
            </div>
        </div>

    </div>
        <div class="featured-stories-wrapper">

        <div class="featured-stories-inner" style="background-image:url(<?php echo $slider_result_premium3['ImagePetite'] ?>);">
            <div class="featured-stories-bg-gradient">
            
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                           
                    
                                    </div>
                <!-- END CATEGORY MARKERS -->
                
                <!-- BEGIN MARK HIGHLIGHTED POST -->
                                                            <div class="highlighted-post-marker"></div>
                                                    <!-- END MARK HIGHLIGHTED POST -->
                
                <a href="article?id=<?php echo $slider_result_premium3['id'] ?>">
                    <!-- BEGIN CATEGORIES (except 'featured' and 'highlighted') -->
                    <div class="featured-category"><?php echo $slider_result_premium3['Cat'] ?></div>                   <!-- END CATEGORIES (except 'featured' and 'highlighted') -->

                    <div class="featured-title-wrapper">
                        <!-- BEGIN COMMENT COUNT (if post has comments) -->
                                                <!-- END COMMENT COUNT (if post has comments) -->
                        <h2><?php echo $slider_result_premium3['Titre'] ?></h2>
                        <div class="featured-author-time">Par <?php echo $slider_result_premium3['Createur'] ?> // <?php echo $slider_result_premium3['Date'] ?></div>
                    </div>
                </a>
                
            </div>
        </div>

    </div>
        <!-- END LOOP (small featured stories) -->

</div>
        
<div class="index-loop-wrapper">
        <div class="index-loop-wrapper-inner" style="margin-right: 0px !important;">
        

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
     
   <div class="post-nav">
    <div class="post-nav-inner">
       
       
       <?php
						if($nb_pages != $_GET['page']) {
                   ?>
				
               
                       <a class="page-numbers<?php if($_SERVER['REQUEST_URI'] == "/premium?page=1" OR $_SERVER['REQUEST_URI'] == "/premium") { ?> current<?php } ?>" href="premium?page=1">1</a>  
						<?php } ?>


  <?php for ($i = 2 ; $i <= $nb_pages -1 ; $i++)
{  ?>
      
           		<a class="page-numbers<?= ($_GET['page'] == $i) ? " current" : "" ?>" href="premium?page=<?php echo $i ?>"><?php echo $i ?></a>
						
         <?php } ?>
         
          <?php
                    $ligne1 = $_GET['page'];
					$ligne2 = "1";
						
						
                    ?>
         <?php
						if($nb_pages != $_GET['page']) {
                   ?>
                    <a href="premium?page=<?php echo $ligne1+$ligne2 ?>" class="next page-numbers">
                       &gt;
                    </a>
				<?php } ?>
   </div>
</div>
                                                                               
                        <!-- END INDEX LOOP -->
            

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

 <?php if($_GET['code'] == "oui")
    { ?>    

    <script>                                
    setTimeout(function(){
    jQuery("#settings-resultat").fadeIn(700);
    jQuery("#settings-resultat").hide(700);
    window.history.pushState(document.title,document.title,"/premium");
    }, 3000);
</script>
    

    <?php } ?>

</body>
</html>
