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

$pagination = 6;

$limite = ($page - 1) * $pagination;

$premium_lecture_seul = $cnx->prepare('SELECT * FROM Lecture_Seul ORDER BY article DESC LIMIT ' . $limite . ', ' . $pagination);
$premium_lecture_seul->execute();

$i = $cnx->prepare("SELECT * FROM Lecture_Seul ORDER BY article DESC");
$i->execute();
$x = $i->rowCount();

$nb_pages = ceil($x / $pagination);
if ($nb_pages>1){
	$paginations .= '' . pagination($page, $nb_pages) . '';
}
?>

<div class="index-loop-wrapper" style="margin-top: auto; margin-bottom: 18px;">
        <div class="index-loop-wrapper-inner" style="margin-right: 0px;">
           
            <!-- BEGIN INDEX LOOP -->
            
            
<div class="blog-index-date" style="margin-top: -11px; background-repeat: no-repeat; background: none;">
                              Lecture Seule [Version Premium]                          </div>
                           
                            <div class="loop-index-top-border"></div>
                                                
<?php while($resultat_premium_lecture_seul = $premium_lecture_seul->fetch()) { ?>	
                                        
<div class="loop-index-wrapper">
    <a href="https://games-actus.fr/lecture-seule?article=<?php echo $resultat_premium_lecture_seul['article'] ?>">
        <div class="loop-index-inner">
 
            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(https://games-actus.fr/<?php echo $resultat_premium_lecture_seul['Jaquette'] ?>);">
            
            <div class="category-markers-wrapper">
                                            <div class="premium-post-marker"><i class="fas fa-bolt" aria-hidden="true" style="margin-left: 9px;color: #ce8520;margin-top: 7px;"></i></div>
                    
                                    </div>
            
            <div class="highlighted-post-marker-premium"></div>
    
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
                        <?php echo $resultat_premium_lecture_seul['Titre'] ?> Premium
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $resultat_premium_lecture_seul['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo html_entity_decode($resultat_premium_lecture_seul['Paragraphe'], ENT_QUOTES, "UTF-8"); ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire la suite                    </span>
                       <br>
                       <div align="right" class="btn btn-outline-success" style="margin-top: 8px;">
                    <span style="font-size: 15px;font-weight: 700;"><?php echo $resultat_premium_lecture_seul['Temp_Lecture'] ?>&nbsp;&nbsp;</span>
                    <span class=""> <i class="fa fa-lock" aria-hidden="true"></i></span>
                </div>
                    <!-- END READ MORE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?> 

<div class="post-nav">
    <div class="post-nav-inner">
       
       
       <?php
						if($nb_pages != $_GET['page']) {
                   ?>
				
               
                       <a class="page-numbers<?php if($_SERVER['REQUEST_URI'] == "/index?page=1" OR $_SERVER['REQUEST_URI'] == "/") { ?> current<?php } ?>" href="index?page=1">1</a>  
						<?php } ?>


  <?php for ($i = 2 ; $i <= $nb_pages -0 ; $i++)
{  ?>
      
           		<a class="page-numbers<?= ($_GET['page'] == $i) ? " current" : "" ?>" href="index?page=<?php echo $i ?>"><?php echo $i ?></a>
						
         <?php } ?>
         
          <?php
                    $ligne1 = $_GET['page'];
					$ligne2 = "1";
						
						
                    ?>
         <?php
						if($nb_pages != $_GET['page']) {
                   ?>
                    <a href="index?page=<?php echo $ligne1+$ligne2 ?>" class="next page-numbers">
                       &gt;
                    </a>
				<?php } ?>
   </div>
</div>

        </div>
    </div>
