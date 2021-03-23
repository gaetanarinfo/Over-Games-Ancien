<?php require_once('cnx.php'); ?>

<?php
$serveur21 = $cnx->prepare('SELECT * FROM Actualite WHERE Categorie LIKE :plateforme OR Categorie2 LIKE :plateforme OR Categorie3 LIKE :plateforme OR Categorie4 LIKE :plateforme OR Categorie5 LIKE :plateforme OR Categorie6 LIKE :plateforme OR Categorie7 LIKE :plateforme OR Categorie8 LIKE :plateforme ORDER BY id DESC');
$serveur21->bindValue(':plateforme', '%'.$_GET['plateforme'].'%');
$serveur21->execute();
?>


				
                  <div class="index-loop-wrapper-inner">
        
            <!-- BEGIN HIGHLIGHTED POSTS MARKER -->
            <div class="necessary-wrapper-for-index">
                                <div class="highlighted-posts-marker">
                   Nos Actualités ! En avant première.                   
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
    <a href="article?id=<?php echo $donnees21['id'] ?>">
        <div class="loop-index-inner">
           
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $donnees21['comment'] ?>                    </span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $donnees21['ImagePetite'] ?>);">
    
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
                        <?php echo $donnees21['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo substr($donnees21['Paragraphe'], 0, 60).'...'; ?>                   <!-- END EXCERPT -->
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
                        <!-- END INDEX LOOP -->
            

        </div>
                  
                  
				
        

<script>
				$(document).ready(function()
				{
					$('#empty-news2').show();
				});
				</script> 