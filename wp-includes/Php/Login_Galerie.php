
      <?php
$characts    = 'abcdefghijklmnopqrstuvwxyz';
$characts   .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
$characts   .= '1234567890'; 
$code_aleatoire      = ''; 
$code_pro      = ''; 
$code_pro2     = ''; 

for($i=0;$i < 10;$i++)    //10 est le nombre de caractères
{ 
$code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); 
}

for($i=0;$i < 8;$i++)    //10 est le nombre de caractères
{ 
$code_pro .= substr($characts,rand()%(strlen($characts)),1); 
}

for($i=0;$i < 8;$i++)    //10 est le nombre de caractères
{ 
$code_pro2 .= substr($characts,rand()%(strlen($characts)),1); 
}

	?>

      <div class="powerup-widgets-wrapper">
       
     
       
       <div id="tag_cloud-2" class="widget widget_tag_cloud">
        <?php if(empty($_SESSION['email'])) { ?> 
        <h4 class="widgettitle" id="widgettitle">Connexion</h4>
        <?php } ?>
        <div class="tagcloud">
        
        
   <div id="success3" style="
    margin-bottom: 20px;
    margin-left: 30px;
    margin-top: 14px;
    display: none;
">
                                        <div style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Mot de passe modifier.</div>
    									</div>   
    									
  
   <div id="success4" style="
    margin-bottom: 20px;
    margin-left: 30px;
    margin-top: 14px;
    display: none;
">
                                        <div style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 55px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Votre inscription à été validé vous pouvez désormais vous connecter au site internet.</div>
    									</div>
    	
        

   <div id="login_valide" style="
    margin-bottom: 20px;
    margin-left: 30px;
    margin-top: 14px;
    display: none;
">
                                        <div style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Connexion au site internet réussi.</div>
    									</div> 
    		
    <div id="login_error" style="
    margin-bottom: 20px;
    margin-left: 30px;
    margin-top: 14px;
    display: none;
">
                                        <div style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color: #D80C10;margin-right: 2px;"></span> Une erreur s'est produite.</div>
    									</div>
   																																					
   																																					<div id="error3" style="
    margin-bottom: 20px;
    margin-left: 30px;
    margin-top: 14px;
    display: none;
">
                                        <div style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color: #D80C10;margin-right: 2px;"></span> Votre clé est invalide.</div>
    									</div>
    																																																																																											<?php if($_GET['inscription'] == "oui") { ?> 	
    																																					<div id="valide" style="
    margin-bottom: 20px;
    margin-left: 30px;
    margin-top: 14px;
">
                                        <div style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 40px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Merci pour votre inscription sur over games.</div>
    									</div>
   																	
   																	<?php } ?>
    																	
    																																																						<?php if($_GET['inscription'] == "non") { ?> 	
     												
    <div id="erreur" style="text-align:center;font-size: 12px;">
    
   <div style="
    margin-bottom: 20px;
    margin-left: 30px;
    margin-top: 14px;
">
                                        <div id="settings-resultat" style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 37px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color: #D80C10;margin-right: 2px;"></span> Votre adresse email ou votre pseudo et déjà enregistré.</div>
    									</div></div> 	
    									
    																	<?php } ?>	
     <?php if(empty($_SESSION['email'])) { ?> 
          
       <form id="form_login" method="post" enctype="multipart/form-data">
     
           <div align="center" id="signinform">
           
<table width="300" border="0" align="center">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="email">Votre adresse email :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="emaill" type="email" required="required" class="login_input" id="emaill" placeholder="Votre adresse email"></div></td>
      
    </tr>
  </tbody>
</table>

<table width="300" border="0">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="password">Votre mot de passe :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="password" type="password" required="required" class="login_input" id="password" placeholder="Votre mot de passe" value=""></div></td>
      
    </tr>
  </tbody>
</table>

<br>
<button type="submit" class="btn btn-outline-primary">Se Connecter</button>
</div>
			</form>
		
 <form id="recoverm" method="post" enctype="multipart/form-data">			
			
<div align="center" id="recover" style="display: none;">
           
<table width="300" border="0" align="center">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="pass3">Nouveau mot de passe :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="pass3" type="text" required="required" class="login_input" id="pass3" placeholder="Nouveau mot de passe"></div></td>
      
    </tr>
  </tbody>
</table>

<table width="300" border="0">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="token">Votre clé de sécurité :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="tok" type="text" required="required" class="login_input" id="tok" placeholder="Votre clé de sécurité" value=""></div></td>
      
    </tr>
  </tbody>
</table>

<br>
<button type="submit" class="btn btn-outline-primary">Valider</button>
</div>
</form>
     
      <form action="/inscription" method="post" enctype="multipart/form-data">			
			
<div align="center" id="inscription" style="display: none;">
           
<table width="300" border="0" align="center">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="pass3">Mot de passe :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="password" type="password" required="required" class="login_input" id="password" placeholder="Mot de passe"></div></td>
      
    </tr>
  </tbody>
</table>

<table width="300" border="0">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="token">Confirmer le mot de passe :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="password2" type="password" required="required" class="login_input" id="password2" placeholder="Confirmer le mot de passe"></div></td>
      
    </tr>
  </tbody>
</table>

<table width="300" border="0">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="token">Adresse email :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="emaill" type="email" required="required" class="login_input" id="emaill" placeholder="Adresse email"></div></td>
      
    </tr>
  </tbody>
</table>

<table width="300" border="0">
  <tbody>
    <tr>
      <th scope="col"><div align="center">
        <label for="token">Pseudo :</label></div></th>
      
    </tr>
    <tr>
      <td><div align="center"><input name="pseudo" type="text" required="required" class="login_input" id="pseudo" placeholder="Pseudo"></div></td>
      
    </tr>
  </tbody>
</table>

<table width="300" border="0">
  <tbody>
 
    <tr>
      <td><div align="center">Captcha : <span style="color: #8e1818;font-weight: bold;font-size: 14px;"><?php echo $code_aleatoire; ?></span><br><input name="texte" type="text" required="required" class="login_input" id="texte" placeholder="Code"></div></td>
      
    </tr>
  </tbody>
</table>
<br>
<table width="300" border="0">
  <tbody>
 
    <tr>
      <td><div align="center">J'ai lu et j'accepte les conditions générales d'utilisation<br>
                                               <input type="checkbox" onclick="myFunction()" required="" id="condition" class="login_input" name="condition" value="oui" style="width: 16px;border: none !important;box-shadow: none;"></div></td>
      
    </tr>
  </tbody>
</table>

<br>
<button type="submit" class="btn btn-outline-primary">S'inscrire</button>
</div>
</form>
      <br>
      <div align="center"><a href="" style="display: inline-block;" id="inscriptionbtn">S'inscrire ?</a>&nbsp;&nbsp;<a href="" id="signin">Mot de passe oublié ?</a></div>
       
       <?php } ?>
        
        </div>
	</div>
 
        
        <div id="recent-posts-3" class="widget widget_recent_entries">
                   				<h4 class="widgettitle">Nos dernière actualités</h4>               
                   				 <ul>
                    		
                    		<?php while($test_resultat = $actus_test->fetch()) { ?>		
                    								
                    <li style="height: 72px;">

                            
                       
                        <a class="powerup-latest-widget" href="article?id=<?php echo $test_resultat['id'] ?>" style="height: 72px;">
                            <!-- BEGIN featured image -->
                            <div class="featured-image" style="height: 72px;">
   <img style="width: 100px;min-height: 72px !important;" src="<?php echo $test_resultat['ImagePetite'] ?>" class="attachment-powerup-widget-thumb size-powerup-widget-thumb wp-post-image" alt="<?php echo $test_resultat['Titre'] ?>">                                                            </div>
                            <!-- END featured image -->
                            <!-- BEGIN title + date -->
                            <div class="powerup-latest-widget-post-title"><?php echo  substr($test_resultat['Titre'], 0, 20).''; ?></div>
                            
                            <div style="top: 30px;" class="powerup-latest-widget-Tags"><?php echo $test_resultat['Cat'] ?></div>
            
                            <div style="top: 50px !important;" class="powerup-latest-widget-date">Mise en ligne : <?php echo $test_resultat['Date'] ?></div>  
                            
                            <!-- END title + date -->
                        </a>
                        
                       
							
                        <!-- BEGIN background line -->
                        <div class="powerup-latest-widget-bg-line" style="height: 72px"></div>
                        <!-- END background line -->
                    </li>
                    				
                 <?php } ?>
                                   
          </ul>
                
        </div>
         
          <div id="powerup_comment_excerpt_widget-2" class="widget powerup_comment_excerpt_widget"><h4 class="widgettitle">Commentaire récent</h4>            
                        <ul class="powerup-custom-comments-widget">
                           
                         <?php while($slider_result_Comment = $slider_Comment_test->fetch()) { ?>  
                              
                          <li>
                    <a href="jeux?item=<?php echo $slider_result_Comment['item'] ?>">
                        <div class="powerup-custom-comments-widget-wrapper">
                            <span class="powerup-widget-comment-author"><?php echo $slider_result_Comment['pseudo'] ?></span>                            <span class="powerup-widget-comment-excerpt"><?php echo substr($slider_result_Comment['message'], 0, 50).'...'; ?></span>
                            <span class="powerup-widget-comment-title"><span class="powerup-widget-comment-title-prefix">Sur : </span> <?php echo $slider_result_Comment['Titre'] ?></span>
                        </div>
                    </a>
                </li>
                        
                         <?php } ?>   
            </ul>

        </div>
                  				
                  					<?php if($_GET['critique'] == "oui")
    { ?>    
			<div id="bulle1">
                                        <div style="color: #ffffff;font-weight: bold;width: 92%;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 55px;background-color: rgb(95 95 95 / 36%);margin-bottom: 30px;"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Votre critique à bien été envoyer vous pouvez désormais la retrouvé dans votre espace personnel</div>
		</div>
	<?php } ?>
									
									<?php if($_GET['critique'] == "non")
    { ?>    
		<div align="center" id="bulle2" style="">
                                        <div id="settings-resultat" style="color: #ffffff;font-weight: bold;width: 217px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 20px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color: #D80C10;margin-right: 2px;"></span> Votre critique n'a pas été posté !</div>
    									</div>
	<?php } ?>
									
      
             
                <div id="recent-posts-3" class="widget widget_recent_entries">
                   				<h4 class="widgettitle">Dernière Vidéo</h4>               
                   				 <ul>
                    		
                    		<?php while($guide_video_resultat = $guide_video->fetch()) { ?>		
                    								
                    <li style="margin: 0px 0 -6px 0 !important;">
                            
                       
                        <a data-toggle="modal" data-target="#Guide_Video-<?php echo $guide_video_resultat['id'] ?>" class="powerup-latest-widget" href="" style="height: 73px;">
                            <!-- BEGIN featured image -->
                            <div class="featured-image" style="height: 73px;">
   <img style="width: 100px;min-height: 73px;" src="<?php echo $guide_video_resultat['image']; ?>" class="attachment-powerup-widget-thumb size-powerup-widget-thumb wp-post-image" alt="<?php echo $guide_video_resultat['titre'] ?>">                                                            </div>
                            <!-- END featured image -->
                            <!-- BEGIN title + date -->
                            
							<div class="powerup-latest-widget-post-title"><span style="color: rgb(44, 128, 153);font-weight: bold;">BANDE ANNONCE</span><br><?php echo substr($guide_video_resultat['titre'], 0, 25).'...';?></div>
                            
                            <div style="top: 47px;" class="powerup-latest-widget-Tags"><?php echo $guide_video_resultat['plateforme'] ?></div>
                            
                            <!-- END title + date -->
                        </a>
     			
                        <!-- BEGIN background line -->
                        <div style="height: 74px;" class="powerup-latest-widget-bg-line"></div>
                        <!-- END background line -->
                    </li>
                    				
                 <?php } ?>
                                   
                  </ul>
                
                </div>
                
                <?php if(!empty($resultat_critique['prenom'])) { ?>
                	<div id="powerup_comment_excerpt_widget-2" class="widget powerup_comment_excerpt_widget"><h4 class="widgettitle">Critique récente</h4>            
                        <ul class="powerup-custom-comments-widget">
                           
                   <?php while($slider_result_Comment2 = $slider_Critique_test->fetch()) { ?>  
                              
                          <li>
                    <a style="cursor: pointer;" data-content="<b><?php echo $slider_result_Comment2['prenom'] ?></b> <span style='text-transform:lowercase;'>a posté un commentaire <?php echo AffDate($slider_result_Comment2['DDate']) ?></span><br><span><b><?php echo $slider_result_Comment2['critique'] ?></b></span><br><a href='jeux?item=<?php echo $slider_result_Comment2['ids'] ?>#avis'><b>Voir ce commentaire</b></a>" data-html="true" data-container="body" data-toggle="popover" data-placement="left" data-target="#note-<?php echo $slider_result_Comment2['id'] ?>">   
                         <div class="powerup-custom-comments-widget-wrapper">
                            <span class="powerup-widget-comment-author"><?php echo $slider_result_Comment2['prenom'] ?></span>                            <span class="powerup-widget-comment-excerpt"><?php echo substr($slider_result_Comment2['critique'], 0, 50).'...'; ?></span>
                        </div>
                    </a>
                </li>
                        
                         <?php } ?>   
            </ul>

        </div>
                <?php } ?>
                
    </div>
    
   <script>
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = "Verif-Account"+"="+"<?php echo $code_aleatoire ?>"+expires+"; path=/";
}

createCookie();
</script> 


<script type="text/javascript">	
			
function CheckValid() {
if (document.getElementById('condition').checked == true) {
	
} else {
alert ("Merci de valider les conditions générales d'utilisation")
}
}
</script>


<?php if($_GET['critique'] == "oui")
    { ?>    

	<script>								
	setTimeout(function(){
	jQuery("#bulle1").fadeOut(700);
	window.history.pushState(document.title,document.title,"/tests");
	}, 2000);
	
</script>

	<?php } ?>

<?php if($_GET['critique'] == "non")
    { ?>    

	<script>								
	setTimeout(function(){
	jQuery("#bulle2").fadeOut(700);
	window.history.pushState(document.title,document.title,"/tests");
	}, 2000);
	
</script>

	<?php } ?>