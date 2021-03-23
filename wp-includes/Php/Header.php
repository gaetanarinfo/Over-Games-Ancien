<style>
	
	@media only screen and (max-width: 900px) {
		.condition
		{
			display: none !important;
		  }
		}
	</style>

<!-- BEGIN TOP ANCHOR -->
<div class="top-anchor"></div>
<!-- END TOP ANCHOR -->

<!-- BEGIN SHOW STYLED SCROLLBAR BACKGROUND -->
    <div class="powerup-styled-scrollbar-track" id="scroll"></div>
<!-- END SHOW STYLED SCROLLBAR BACKGROUND -->
	

<div id="sitewrap" class="sitewrap">
   	
    <!-- BEGIN HEADER -->
<div class="powerup-header-background"></div>
<!-- BEGIN LOGO -->


<div class="powerup-logo-wrapper"> 
			
    <a href="index" title="<?php echo $resultat_site_internet['Titre_Page_Head']; ?>" rel="home">
                    <img style="width:18%;" src="<?php echo $resultat_site_internet['Logo_Page']; ?>" alt="<?php echo $resultat_site_internet['Titre_Page_Head']; ?>">
            </a>
            
<style>

.promo_over:hover{
background-color: #2a7d4773;
    font-style: italic;
    padding: 10px 16px 10px 16px;
    border-radius: 10px;
    font-weight: bold;
    font-size: 14px;
    color: #a2da94;
    border: 3px solid #2a7d4773;
    border-top-right-radius: 25px;
     border-bottom-left-radius: 25px;
}

.promo_over{
background-color: #35d66e73;font-style: italic;padding: 10px 16px 10px 16px;border-radius: 10px;font-weight: bold;font-size: 14px;color: white;border: 3px solid #35d66e3d;
}
</style>           

<?php if($profilpremiumresult['essais'] == "non") { ?> 
            
            <div class="condition" style="left: 43px;top: 33px;display: inline-block;position: relative;font-size: 16px;font-weight: bold;color: white;"><div style="display: inline-block;margin-right: 15px;background-color: #287390;padding: 7px 7px 7px 7px;font-style: italic;border-top-left-radius: 10px;border-bottom-right-radius: 10px;font-weight: bold;font-size: 16px;"> 1€ </div>Découvrez Over-Games : profitez d’une période d’essai d’un mois<div style="display: inline-block;margin-left: 15px;"> 
            
            <?php if(!empty($_SESSION['email'])) { ?>
            <a class="promo_over" href="Abonnement4">Découvrir pour 1€</a> 
            <?php }else{ ?>
            <a class="promo_over" href="#form_login">Découvrir pour 1€</a>
            <?php } ?>
            
            </div></div>
            
<?php }else if(empty($profilpremiumresult['essais'])) { ?>
  <div class="condition" style="left: 43px;top: 33px;display: inline-block;position: relative;font-size: 16px;font-weight: bold;color: white;"><div style="display: inline-block;margin-right: 15px;background-color: #287390;padding: 7px 7px 7px 7px;font-style: italic;border-top-left-radius: 10px;border-bottom-right-radius: 10px;font-weight: bold;font-size: 16px;"> 1€ </div>Découvrez Over-Games : profitez d’une période d’essai d’un mois<div style="display: inline-block;margin-left: 15px;"> 
            
            <?php if(!empty($_SESSION['email'])) { ?>
            <a class="promo_over" href="Abonnement4">Découvrir pour 1€</a> 
            <?php }else{ ?>
            <a class="promo_over" href="#form_login">Découvrir pour 1€</a>
            <?php } ?>
            
            </div></div>
<?php } ?>
 
</div>

<div class="powerup-header-wrapper">
    <!-- BEGIN NAVIGATION BAR -->
    <div class="powerup-main-nav-wrapper">
        <!-- BEGIN MENU BUTTON + TABS PREFIX -->
        <div class="powerup-main-nav-button-prefix-wrapper">
            <div class="powerup-menu-button-wrapper">
                <div class="powerup-menu-tooltip"></div>
                <div class="powerup-menu-button-wrapper-inner">
                    <div class="powerup-menu-button"></div>
                    <div class="powerup-menu-button-middle"></div>
                </div>
                <div class="powerup-menu-button-text">
                                            Nouveauté                                    </div>
            </div>
                          
                    </div>
        <!-- END MENU BUTTON + TABS PREFIX -->
       
       	<?php include('Menu.php'); ?>
    </div>
    <!-- END NAVIGATION BAR -->
    
    <!-- BEGIN QUICKLINK + SEARCH -->
    <div class="powerup-header-search-quicklink-wrapper">
        <!-- BEGIN SEARCH -->
        <div class="powerup-header-search-wrapper">
            <div class="powerup-search-wrapper">
                <!-- BEGIN SEARCH FORM -->
<form action="/news-search" method="get" id="searchform" enctype="multipart/form-data" target="_blank" accept-charset="UTF-8">
    <input type="text" name="mot" id="mot" required="required" placeholder="Rechercher...">
    <div class="search-button-wrapper"><input type="submit" id="searchsubmit" value=""></div>
</form>
<!-- END SEARCH FORM -->            </div>
        </div>
        <!-- END SEARCH -->
    </div>
    <!-- END QUICKLINK + SEARCH -->
</div>
<!-- END HEADER -->    
