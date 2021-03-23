<?php require_once('cnx.php'); ?>

<?php
$serveur21 = $cnx->prepare('SELECT * FROM Test_Jeux WHERE plateforme LIKE :plateforme ORDER BY id DESC');
$serveur21->bindValue(':plateforme', '%'.$_GET['plateforme'].'%');
$serveur21->execute();
?>


				
                  <div class="index-loop-wrapper-inner">
        
            <!-- BEGIN HIGHLIGHTED POSTS MARKER -->
            <div class="necessary-wrapper-for-index">
                                <div class="highlighted-posts-marker">
                   Nos Test ! En avant première.                   
                </div>
                            </div>
            <!-- END HIGHLIGHTED POSTS MARKER -->

            <!-- BEGIN INDEX LOOP -->
            
            
<div class="blog-index-date">
                                <?php $date1 = date('Y-m-d'); // Date du jour
setlocale(LC_TIME, "fr_FR");
echo utf8_encode(strftime("%A %d %B %G", strtotime($date1))); ?>                           </div>
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($donnees21 = $serveur21->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="jeux?id=<?php echo $donnees21['item'] ?>">
        <div class="loop-index-inner">
           
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $donnees21['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $donnees21['image'] ?>);">
    
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
                        <?php echo $donnees21['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $donnees21['date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo substr($donnees21['Paragraphe'], 0, 130).'...'; ?>                   <!-- END EXCERPT -->
                    <!-- BEGIN READ MORE -->
                    <span class="read-more">
                       Lire le test                    </span>
                    <!-- END READ MORE -->
                    
                     <?php 
		
			//Couleur
	if ($donnees21['note'] == "1") 
	{ 	
		$couleur = "#f5a623 !important;";
		$couleurTexte = "color: #f5a623 !important;";	
	} else if($donnees21['note'] == "2") {
		$couleur = "#23cbf5 !important;";
		$couleurTexte = "color: #23cbf5 !important;";
	} else if($donnees21['note'] == "3") {
		$couleur = "#8c2fec !important;";
		$couleurTexte = "color: #8c2fec !important;";
	} else if($donnees21['note'] == "4") {
		$couleur = "#e8e51a !important;";
		$couleurTexte = "color: #e8e51a !important;";
	} else if($donnees21['note'] == "5") {
		$couleur = "#8a6d3b !important;";
		$couleurTexte = "color: #8a6d3b !important;";
	} else if($donnees21['note'] == "6") {
		$couleur = "#53bf29 !important;";
		$couleurTexte = "color: #53bf29 !important;";
	} else if($donnees21['note'] == "7") {
		$couleur = "#dc5d9c !important;";
		$couleurTexte = "color: #dc5d9c !important;";
	} else if($donnees21['note'] == "8") {
		$couleur = "#5ddcc7 !important;";
		$couleurTexte = "color: #5ddcc7 !important;";
	} else if($donnees21['note'] == "9") {
		$couleur = "#3e3acc !important;";
		$couleurTexte = "color: #3e3acc !important;";
	} else if($donnees21['note'] == "10") {
		$couleur = "#960e0e !important;";
		$couleurTexte = "color: #960e0e !important;";
	}

		
	?>
                    
                 <div class="note" style="margin-left: 0;margin-top: 15px;text-shadow: 2px 2px 3px rgba(163, 155, 155, 0.5);">
                                    
                        <span title="Noté par la rédaction" style="<?php echo $couleurTexte ?> font-weight: 700;font-size: 37px;"><?php echo $donnees21['note'] ?></span><div style="font-weight: 700;font-size: 18px;display: inline-block;">&nbsp;&nbsp;Noté par la rédaction</div>
                            </div>
                            
                            <div style="margin-left: 234px;position: absolute;margin-top: -24px;background-color: <?php echo $couleur ?>border: 1px solid <?php echo $couleur ?>box-shadow: 2px 2px 3px 0px <?php echo $couleur ?>font-weight: bold;padding: 3px 5px;color: white !important;text-decoration: none;border-radius: 4px;"><?php echo $slider_result4['plateforme'] ?></div>
                            
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END TITLE + DATE -->
			
       
        </div>

    </a>
</div>  
 
<?php } ?>                                                                                         
                        <!-- END INDEX LOOP -->
            

        </div>
                  
                  
				
        

<script>
				$(document).ready(function()
				{
					$('#empty-news2').show();
				});
				</script> 