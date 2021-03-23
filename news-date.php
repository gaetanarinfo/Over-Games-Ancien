<?php require_once('cnx.php'); ?>

<?php
$errors3 = array(); //To store errors
    $form_data3 = array(); //Pass back the data to `form.php`
    
    
    /* Validate the form on server side */
    if (empty($_GET['date'])) { //Name cannot be empty
        $errors3['date'] = 'email cannot be blank';
    }
    
    if (!empty($errors3)) { //If errors in validation
    	
    } else { //If not, process the form, and return true on success
?>

<?php

$form_data3['success3'] = true;
	
$date3 = $_GET['date'];
$serveur6 = $cnx->prepare('SELECT * FROM Actualite WHERE DDate LIKE :DDate ORDER BY id DESC LIMIT 0,20000');
$serveur6->bindValue(':DDate', '%'.$date3.'%');
$serveur6->execute();
$nb_resultats = $serveur6->rowCount();

}
?><div id="datepasse"></div>

<?php
				$serveur7 = $cnx->prepare("SELECT * FROM Actualite WHERE DDate LIKE :Date");
				$serveur7->bindValue(':Date', '%'.$date3.'%');
				$serveur7->execute();
				$aime_resultat2 = $serveur7->fetch();
				$serveur7->closeCursor();
				?>

  
				<script>
				jQuery(document).ready(function()
				{
					
					
					jQuery('#empty-news').hide();
					jQuery('#empty-news2').hide();
				});
				</script>

			<div class="index-loop-wrapper-inner">
        
            <!-- BEGIN HIGHLIGHTED POSTS MARKER -->
            <div class="necessary-wrapper-for-index">
                                <div class="highlighted-posts-marker">
                   Nos Actualités ! En avant première.                   
                </div>
                            </div>
            <!-- END HIGHLIGHTED POSTS MARKER -->

            <!-- BEGIN INDEX LOOP -->
            
            
<div class="blog-index-date"><?php echo $aime_resultat2['Date'] ?></div>
                           
                            <div class="loop-index-top-border"></div>
                            
<?php while($donnees21 = $serveur6->fetch()) { ?>     
                                        
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
				jQuery(document).ready(function()
				{
				jQuery('#content').delay('#datee').hide();
				jQuery('#datepasse').html("<?php echo $nb_resultats['date']; ?>");
				});
				</script>