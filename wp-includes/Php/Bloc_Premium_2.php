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
	</style>
 

 <div align="center">
  <br>
  <div id="premium">OVER GAMES PREMIUM</div>
   <br><br><br>
<div style="margin-bottom: 10px;border: 1px groove #b78f1b;background-color: #0000001c;padding: 17px 15px 17px 15px;box-shadow: 0 0 11px #675757;">
		 <span style="font-size: 20px;color: #e0e0e0;font-weight: 600;"><br>
    LE MEILLEUR SUR OVER-GAMES, RIEN QUE POUR VOUS ! ALORS N'ATTENDEZ PLUS.</span>
    <br><br><br><span style="font-size: 13px;color: white;font-weight: 600;">
Avec Over-Games Premium, vous profitez de tous les contenus exclusifs produits par mes soins. Reportages, dossiers, vidéos, articles, garantis sans tops 10 : offrez vous un vrai magazine indépendant en ligne !</span><br><br><br><span style="font-size: 14px;color: #e0e0e0;font-weight: 600;">
    Toutes les publicités sont désactivées quand vous possédez cet abonnement !<br><br></span>	
	</div>
<br>
  
   <div style="display: inline-block;margin-right: 20px;width: 263px;background-color: #242425d1;padding: 15px 15px 1px 15px;box-shadow: 0px 0px 4px #f3f3f3;border-radius: 5px;">
      <i style="color: bisque;" class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>
      <br><br>
     <span><b>DÉMARRER VOTRE SEMAINE GRATUITE</b><br><br>puis 4,90€ par mois sans engagement<br><br><br><br><br><br><br>
                   <br>
                   <?php if(isset($_SESSION['email'])) { ?>
                   <div align="center" class="btn btn-outline-success" style="margin-top: 15px;">
                    	<a href="/Abonnement1" style="font-size: 15px;font-weight: 700;color: white; text-decoration: none;"> Choisir </a>            
                </div>
                <?php }else{ ?>
                <div align="center" style="margin-top: 15px;">
                    	<a href="/#widgettitle" class="btn btn-outline-success" style="font-size: 15px;font-weight: 700; color: white; text-decoration: none;"> Choisir </a>            
                </div>
                <?php } ?>
                <br><br>
                </span>

</div>
     
<div style="display: inline-block;margin-right: 20px;width: 263px;background-color: #242425d1;padding: 15px 15px 1px 15px;box-shadow: 0px 0px 4px #f3f3f3;border-radius: 5px;">
      <i style="color: coral;" class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>
      <br><br>
      <span><b>3,33€ PAR MOIS (UN PAIEMENT DE 39,90€)</b><br><br>Sans publicité<br><br>
Les magazines offert<br><br>
Accès à toute les actualités<br><br>
Premium pendant 1 ans<br><br>
                   <?php if(isset($_SESSION['email'])) { ?>
                   <div align="center" class="btn btn-outline-info" style="margin-top: 15px;">
                    <a href="/Abonnement2" style="font-size: 15px;font-weight: 700; color: white; text-decoration: none;"> Choisir </a>            
                </div>
                <?php }else{ ?>
                <div align="center" class="btn btn-outline-info" style="margin-top: 15px;">
                    <a href="/#widgettitle" style="font-size: 15px;font-weight: 700; color: white; text-decoration: none;"> Choisir </a>            
                </div>
                <?php } ?>
                <br><br></span>

</div>

<div style="display: inline-block;width: 263px;background-color: #242425d1;padding: 15px 15px 1px 15px;box-shadow: 0px 0px 4px #f3f3f3;border-radius: 5px;">
         
      <i style="color: darkgreen;" class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>
      <br><br>
     <span><b>2,50€ PAR MOIS (UN PAIEMENT DE 59,90€)</b><br><br>Sans publicité<br><br>
Les magazines offert<br><br>
Accès à toute les actualités<br><br>
Premium pendant 2 ans<br><br>
                    <?php if(isset($_SESSION['email'])) { ?>
                   <div align="center" class="btn btn-outline-warning" style="margin-top: 15px;">
                    <a href="/Abonnement3" style="font-size: 15px;color: white;font-weight: 700;"> Choisir </a>            
                </div>
                <?php }else{ ?>
                <div align="center" class="btn btn-outline-warning" style="margin-top: 15px;">
                    <a href="/#widgettitle" style="font-size: 15px;font-weight: 700; color: white; text-decoration: none;"> Choisir </a>            
                </div>
                 <?php } ?>
                <br><br></span>
</div>
   
<br><br><br>
<div style="margin-bottom: 10px;height: 307px;border: 1px groove #b78f1b;background-color: #0000001c;padding: 17px 15px 17px 15px;box-shadow: 0 0 11px #675757;">
		 <div class="col-lg-12">
     <div style="color: white;" align="center">
                           <h4 style="
    font-size: 23px;
    ">Utilisez ici votre code promotionnel
</h4><br>
                       <br><p>Offert par l'un de mes partenaires</p>

                        <?php if(empty($_SESSION['code'])) { ?>

                            <div class="input-group" style="width: 21%;">

                         <form method="post" action="code_promo_2">                        
                                                          
                                                            <input type="text" id="code" required name="code" class="login_input" placeholder="Code *">
                                                          <input type="hidden" value="<?php echo $_GET['id'] ?>" id="codeid"  name="codeid"><br>
                                                          <br><button type="submit" class="btn btn-info">Valider</button> 
                                                        
                                          </form>

                           

                            </div>
 <br>
                             <?php }else{ ?>
							<br>
                          <p style="color: darkolivegreen; font-size: 16px; font-weight: bold;">Un code et déjà utilisé merci de patienter !</p>
							<br>
                          <?php } ?>  

                           Une question ? Un problème ? Contactez notre service Premium par mail à cette adresse :<br><a href="mailto:premium@gaetan-seigneur.fr"><br>premium@over-games.fr</a>
                            <br>
                        
                        </div>
  </div>	
	</div>


</div>