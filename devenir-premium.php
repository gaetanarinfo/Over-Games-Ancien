<?php session_start();


?>

<?php require('cnx.php'); ?>

<?php if($result_requeteUsers['Premium'] == "oui") { ?>
die('<META HTTP-equiv="refresh" content=0;URL=index>');
<?php }else{} ?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet2['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet2['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet2['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet2['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet2['Favicon_Page']; ?>">
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

    <!-- BEGIN INDEX TOP CONTENT (only on the front page, hide when paged) -->
                                        <!-- BEGIN INCLUDE FEATURED AREA -->

  
<div align="center">
  
  <div id="premium">OVER GAMES PREMIUM</div>
   <br><br><br>
<div style="
    margin-bottom: 10px;
    border: 1px groove #b78f1b;
    background-color: #0000001c;
    padding: 17px 15px 17px 15px;
    box-shadow: 0 0 11px #675757;
">
		 <span style="font-size: 20px;color: #e0e0e0;font-weight: 600;"><br>
    LE MEILLEUR SUR OVER-GAMES, RIEN QUE POUR VOUS ! ALORS N'ATTENDEZ PLUS.</span>
    <br><br><br><span style="font-size: 13px;color: white;font-weight: 600;">
Avec Over-Games Premium, vous profitez de tous les contenus exclusifs produits par mes soins. Reportages, dossiers, vidéos, articles, garantis sans tops 10 : offrez vous un vrai magazine indépendant en ligne !</span><br><br><br><span style="font-size: 14px;color: #e0e0e0;font-weight: 600;">
    Toutes les publicités sont désactivées quand vous possédez cet abonnement !<br><br></span>	
	</div>
<br><br>
   <hr style="width: 258px;"><br><div align="center" style="width: 258px;"><i style="color: bisque;" class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>

<br><br><br><div style="text-align: center;font-weight: 700;color: white;"><span>DÉMARRER VOTRE SEMAINE GRATUITE<br><br>puis 4,90€ par mois sans engagement
                   <br><br>
            
                <?php if(isset($_SESSION['email'])) { ?>
                   <div align="center" class="btn btn-outline-success" style="margin-top: 15px;">
                    <a href="/Abonnement1" style="font-size: 15px;color: white;font-weight: 700;"> Choisir </a>            
                </div>
                <?php }else{ ?>
                 <div align="center" style="margin-top: 15px;">
                    	<a href="/#widgettitle" class="btn btn-outline-success" style="font-size: 15px;font-weight: 700; color: white; text-decoration: none;"> Choisir </a>            
                </div>
                 <?php } ?>
                
                 <br>
                                <br>
                </span>
</div>
</div>

<hr style="width: 258px;"><br><div align="center" style="width: 258px;"><i style="color: coral;" class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i><br>
    <div style="text-align: center;font-weight: 700;color: white;"><br><br><span>3,33€ PAR MOIS (UN PAIEMENT DE 39,90€)<br><br>Sans publicité<br><br>
Les magazines offert<br><br>
Accès à toute les actualités<br><br>
Premium pendant 1 ans<br><br>


<?php if(isset($_SESSION['email'])) { ?>
                   <div align="center" class="btn btn-outline-info" style="margin-top: 15px;">
                    <a href="/Abonnement2" style="font-size: 15px;color: white;font-weight: 700;"> Choisir </a>            
                </div>
                <?php }else{ ?>
                 <div align="center" class="btn btn-outline-info" style="margin-top: 15px;">
                    <a href="/#widgettitle" style="font-size: 15px;font-weight: 700; color: white; text-decoration: none;"> Choisir </a>            </div>
                 <?php } ?>



                                  
                                <br><br></span>
</div>
</div><hr style="width: 258px;">    <div align="center" style="width: 258px;"><br><i style="color: darkgreen;" class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i><br><br><br><div style="text-align: center;color: white;font-weight: 700;"><span>2,50€ PAR MOIS (UN PAIEMENT DE 59,90€)<br><br>Sans publicité<br><br>
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
                                 <br></span></div></div>
<br>
<hr style="width: 258px;"><br><br><div style="
   height: 235px;
    margin-bottom: 10px;
    border: 1px groove #b78f1b;
    background-color: #0000001c;
    padding: 17px 15px 17px 15px;
    box-shadow: 0 0 11px #675757;
">
		 <div class="col-lg-12">
     <div style="color: white;" align="center">
                           <h4 style="
    font-size: 23px;
    ">Utilisez ici votre code promotionnel
</h4><br>
                       <br><p>Offert par l'un de mes partenaires</p>

                        
                            <div class="input-group" style="width: 21%;">

                          <form method="post" action="code_promo">                     
                                                          
                                                            <input type="text" id="code" required="" name="code" class="login_input" placeholder="Code *">
                                                          <input type="hidden" value="" id="codeid" name="codeid"><br>
                                                          <br><button type="submit" class="btn btn-info">Valider</button> 
                                                        
                                          </form>

                           

                            </div>
 <br>
                               

                           Une question ? Un problème ? Contactez notre service Premium par mail à cette adresse :<br><a href="mailto:premium@gaetan-seigneur.fr"><br>premium@over-games.fr</a>
                            <br>
                        
                        </div>
  </div>	
	</div>


</div>
   <br><br><br>
	<div align="center" style="box-shadow: 0 0 11px #eae1e1;background-color: #00000094;border: none;">
		<iframe src="https://www.youtube-nocookie.com/embed/GOx9_aWJcc0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="width: 100%;height: 615px;"></iframe>
	</div>                
    
</div>
<!-- /.index-main-wrapper -->

        </div>
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>
        
    </div>
   
</div>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

</body>
</html>
