
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
                   				<h4 class="widgettitle">Nos derniers tests</h4>               
                   				 <ul>
                    		
                    		<?php while($test_resultat = $test->fetch()) { ?>		
                    								
                    <li>
                            
                       
                        <a class="powerup-latest-widget" href="jeux?item=<?php echo $test_resultat['item'] ?>">
                            <!-- BEGIN featured image -->
                            <div class="featured-image">
   <img style="width: 100px; height: 100px;" src="image/Jaquette/<?php echo $test_resultat['jaquette'] ?>" class="attachment-powerup-widget-thumb size-powerup-widget-thumb wp-post-image" alt="<?php echo $test_resultat['Titre'] ?>">                                                            </div>
                            <!-- END featured image -->
                            <!-- BEGIN title + date -->
                            <div class="powerup-latest-widget-post-title"><?php echo  substr($test_resultat['Titre'], 0, 20).''; ?></div>
                            
                            <div style="top: 40px;" class="powerup-latest-widget-Tags">Plateforme : <?php echo $test_resultat['plateforme'] ?></div>
            
                            <div style="top: 69px !important;" class="powerup-latest-widget-date">Mise en ligne : <?php echo $test_resultat['date'] ?></div>  
                            
                            <!-- END title + date -->
                        </a>
                        
                       
							
                        <!-- BEGIN background line -->
                        <div class="powerup-latest-widget-bg-line"></div>
                        <!-- END background line -->
                    </li>
                    				
                 <?php } ?>
                                   
                                    </ul>
                
                </div>
         
          <div id="powerup_comment_excerpt_widget-2" class="widget powerup_comment_excerpt_widget"><h4 class="widgettitle">Commentaire récent</h4>            
                        <ul class="powerup-custom-comments-widget">
                           
                         <?php while($slider_result_Comment = $slider_Comment->fetch()) { ?>  
                              
                          <li>
                    <a href="article?id=<?php echo $slider_result_Comment['id'] ?>">
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
									
                   				
		 
            
                <?php if($profilpremiumresult['Premium'] == "oui") { ?>
           <br>
     <?php }else{ ?>      
                <div class="sidebar-ad-widget-wrapper">
        <div id="text-3" class="widget widget_text">			<div class="textwidget" style="margin-left: -2px;"><img style="opacity:0.75;margin-bottom:-3px;" src="<?php echo $Pub_result3['Image'] ?>" alt="<?php echo $Pub_result3['Image'] ?>"></div>
		</div>        <!-- BEGIN SPOSORED TEXT INCLUDE -->
        <div class="sponsored-texts">
    Publicité            <span>|</span>
        <a href="<?php echo $Pub_result3['Pub'] ?>">
            Découvrir la pub        </a>
    </div>        <!-- END SPOSORED TEXT INCLUDE -->
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
