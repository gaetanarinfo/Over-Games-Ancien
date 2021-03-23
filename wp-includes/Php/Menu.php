
       <!-- BEGIN TABS -->
        <div class="powerup-header-tabs-wrapper">
            <div class="menu-tabs-container"><ul id="menu-tabs" class="menu">
            
            <li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom <?php if($_SERVER['REQUEST_URI'] == "/" OR $_SERVER['REQUEST_URI'] == "/index") { ?>current-menu-item current_page_item<?php } ?> menu-item-home menu-item-649"><a href="/">Accueil</a></li>
            
            <li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/tgs") { ?>current-menu-item current_page_item<?php } ?>"><a href="/tgs"><span class="gk__a-tag is--showed is--top-right">
											<span class="gk__a-tag__tgs" style="
    background-color: transparent !important;
"><div style="
    z-index: 999999;
    background-color: transparent !important;
"></div></span>
					</span></a></li>
					
<?php if($result_requeteUsers['Premium'] == "oui") { ?>

<li id="menu-item-623" class="marked menu-item menu-item-type-custom menu-item-object-custom menu-item-623 <?php if($_SERVER['REQUEST_URI'] == "/premium" OR $_SERVER['REQUEST_URI'] == "/premium?page=". $_GET['page'] ."") { ?>current-menu-item current_page_item<?php } ?>"><a href="/premium">Premium</a></li>

<?php }else{ ?>

<?php } ?>

<li id="menu-item-649" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-622 <?php if($_SERVER['REQUEST_URI'] == "/news" OR $_SERVER['REQUEST_URI'] == "/article?id=". $_GET['id'] ."" OR $_SERVER['REQUEST_URI'] == "/news?page=". $_GET['page'] ."") { ?>current-menu-item current_page_item<?php } ?>"><a href="/news">Actualité</a>

<ul class="sub-menu" style="width: 284px;">

<?php while($resultat_menu_article = $menu_article->fetch()) { ?>

	<li style="width: 280px;" id="menu-item-664" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-664"><a href="article?id=<?php echo $resultat_menu_article['id'] ?>"><?php echo html_entity_decode($resultat_menu_article['Titre'], ENT_QUOTES, "UTF-8"); ?></a></li>
	
<?php } ?>
	
</ul>
</li>

<li id="menu-item-649" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-622 <?php if($_SERVER['REQUEST_URI'] == "/tests" OR $_SERVER['REQUEST_URI'] == "/tests?page=". $_GET['page'] ."" OR $_SERVER['REQUEST_URI'] == "/tests?item=". $_GET['item'] ."" OR $_SERVER['REQUEST_URI'] == "/jeux?item=". $_GET['item'] ."") { ?>current-menu-item current_page_item<?php } ?>"><a href="/tests">Test</a>

<ul class="sub-menu" style="width: 284px;">

<?php while($resultat_menu_test = $menu_test->fetch()) { ?>

	<li style="width: 280px;" id="menu-item-664" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-664"><a href="jeux?item=<?php echo $resultat_menu_test['item'] ?>"><?php echo html_entity_decode($resultat_menu_test['Titre']); ?></a></li>
	
<?php } ?>
	
</ul>

</li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/contact") { ?>current-menu-item current_page_item<?php } ?>"><a href="/contact">Contact</a></li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/bons-plans") { ?>current-menu-item current_page_item<?php } ?>"><a href="/bons-plans">Bons Plans</a></li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/Forum/" OR $_SERVER['REQUEST_URI'] == "/Forum/index") { ?>current-menu-item current_page_item<?php } ?>"><a href="https://games-actus.fr/forum" target="_blank" >Forum</a></li>

<?php if(empty($_SESSION['email'])) { ?>

<?php }else{ ?>
<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-622"><a title=""><i class="fa fa-user"></i></a>

<style>
.test:before {
    width: 165px !important;
}	
	
.test2 > ul li::before {
    width: 165px !important;
}	
</style>

<ul class="sub-menu" style="width: 177px; z-index: 99999;">
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664 test"><div align="center"><a href="/profil?p=<?php echo $_SESSION['pseudo'] ?>" title="Mon Profil"><img style="width: 52px;" src="image/avatar/<?php echo $_SESSION['pseudo'] ?>"></a></div></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="" data-toggle="modal" data-target="#mp_new" title="Envoyer un message">Envoyer un message</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/profil?p=<?php echo $_SESSION['pseudo'] ?>" title="Mon profil">Mon profil</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/mon-compte" title="Modifier mon profil">Modifier mon profil</a></li>
	
	<?php if($_SESSION['rang'] == "Administrateur") { ?>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/add-news" title="Ajouter une actualité">Ajouter une actualité</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/newsletter" title="Ajouter une newsletter">Ajouter une newsletter</a></li>
	
	<?php } ?>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/logout" title="Déconnexion">Déconnexion</a></li>
	
</ul>

</li>
<?php } ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/psn") { ?>current-menu-item current_page_item<?php } ?>"><a href="/psn" title="PS Store"><img src="image/ps.png" style="width: 22px;height: 22px;"></a></li>

<?php if($result_requeteUsers['Premium'] == "oui") { ?>

<?php }else{ ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/devenir-premium" OR $_SERVER['REQUEST_URI'] == "/Abonnement3" OR $_SERVER['REQUEST_URI'] == "/Abonnement1" OR $_SERVER['REQUEST_URI'] == "/Abonnement2") { ?>current-menu-item current_page_item<?php } ?>"><a href="/devenir-premium" title="Devenir Premium"><i class="fa fa-bolt"></i></a></li>

<?php } ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/galerie") { ?>current-menu-item current_page_item<?php } ?>"><a href="/galerie" title="Galerie"><i class="fa fa-picture-o"></i></a></li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649"><a href="/#Twitch" title="Twitch"><i class="fa fa-twitch"></i></a></li>

<?php if(!empty($_SESSION['email'])) { ?>

<li id="menu-item-664" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649"><a style="text-align: center;" href="" data-toggle="modal" data-target="#mp_mp" title="Message Privé ( <?php echo $result_requeteUsersMp['id'] ?> )"><i class="far fa-envelope"></i>&nbsp; <b><?php echo $result_requeteUsersMp['id'] ?></b></a></li>

<li id="menu-item-664" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649"><a style="text-align: center;" href="" data-toggle="modal" data-target="#Liste-Souhaits" title="Mes souhaits ( <?php echo $result_requeteUsersGuide['ids'] ?> )"><i class="fab fa-fantasy-flight-games"></i>&nbsp; <b><?php echo $result_requeteUsersGuide['ids'] ?></b> </a></li>

<?php } ?>

</ul></div>        
</div>
       
       <div class="powerup-header-tabs-wrapper condition_mobile" style="margin-top: -33px;margin-left: 115px; display: none;">
            <div class="menu-tabs-container"><ul id="menu-tabs" class="menu">
            
            <li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649"><a title="Accueil"><i class="fa fa-home"> </i></a>
            
            <ul class="sub-menu" style="width: 191px;">
            
           <li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom <?php if($_SERVER['REQUEST_URI'] == "/" OR $_SERVER['REQUEST_URI'] == "/index") { ?>current-menu-item current_page_item<?php } ?> menu-item-home menu-item-649"><a href="/">Accueil</a></li>   
           
<?php if($result_requeteUsers['Premium'] == "oui") { ?>         
             
               
<li id="menu-item-623" class="marked menu-item menu-item-type-custom menu-item-object-custom menu-item-623 <?php if($_SERVER['REQUEST_URI'] == "/premium" OR $_SERVER['REQUEST_URI'] == "/premium?page=". $_GET['page'] ."") { ?>current-menu-item current_page_item<?php } ?>"><a href="/premium">Premium</a></li>


<?php } ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/tgs") { ?>current-menu-item current_page_item<?php } ?>"><a href="/tgs"><span class="gk__a-tag is--showed is--top-right">
											<span class="gk__a-tag__tgs" style="
    background-color: transparent !important;
"><div style="
    z-index: 999999;
    background-color: transparent !important;
"></div></span>
					</span></a></li>


<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/news" OR $_SERVER['REQUEST_URI'] == "/article?id=". $_GET['id'] ."" OR $_SERVER['REQUEST_URI'] == "/news?page=". $_GET['page'] ."") { ?>current-menu-item current_page_item<?php } ?>"><a href="/news">Actualité</a>
</li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/tests" OR $_SERVER['REQUEST_URI'] == "/tests?page=". $_GET['page'] ."" OR $_SERVER['REQUEST_URI'] == "/tests?item=". $_GET['item'] ."" OR $_SERVER['REQUEST_URI'] == "/jeux?item=". $_GET['item'] ."") { ?>current-menu-item current_page_item<?php } ?>"><a href="/tests">Test</a></li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/bons-plans") { ?>current-menu-item current_page_item<?php } ?>"><a href="/bons-plans">Bons Plans</a></li>


<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/contact") { ?>current-menu-item current_page_item<?php } ?>"><a href="/contact">Contact</a></li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/Forum/" OR $_SERVER['REQUEST_URI'] == "/Forum/index") { ?>current-menu-item current_page_item<?php } ?>"><a href="https://games-actus.fr/forum" target="_blank" >Forum</a></li>

<?php if(empty($_SESSION['email'])) { ?>

<?php }else{ ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-622"><a title="">Mon compte</a>



<ul class="sub-menu" style="width: 191px;">
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664 test"><div align="center"><a href="/profil?p=<?php echo $_SESSION['pseudo'] ?>" title="Mon Profil"><img style="width: 52px;" src="image/avatar/<?php echo $_SESSION['pseudo'] ?>"></a></div></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="" data-toggle="modal" data-target="#Liste-Souhaits" title="Mes souhaits ( <?php echo $result_requeteUsersGuide['ids'] ?> )">Mes souhaits ( <b><?php echo $result_requeteUsersGuide['ids'] ?></b> )</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="" data-toggle="modal" data-target="#mp_mp" title="Message Privé ( <?php echo $result_requeteUsersMp['id'] ?> )">Message Privé ( <b><?php echo $result_requeteUsersMp['id'] ?></b> )</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="" data-toggle="modal" data-target="#mp_new" title="Envoyer un message">Envoyer un message</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/profil?p=<?php echo $_SESSION['pseudo'] ?>" title="Mon profil">Mon profil</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/mon-compte" title="Modifier mon profil">Modifier mon profil</a></li>
	
	<?php if($_SESSION['rang'] == "Administrateur") { ?>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/add-news" title="Ajouter une actualité">Ajouter une actualité</a></li>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/newsletter" title="Ajouter une newsletter">Ajouter une newsletter</a></li>
	
	<?php } ?>
	
	<li style="width: 191px;" id="menu-item-664" class="menu-item test2 menu-item-type-post_type menu-item-object-post menu-item-664"><a style="text-align: center;" href="/logout" title="Déconnexion">Déconnexion</a></li>
	
</ul>

</li>
<?php } ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/psn") { ?>current-menu-item current_page_item<?php } ?>"><a href="/psn" title="PS Store"><img src="image/ps.png" style="width: 22px;height: 22px;"></a></li>

<?php if($result_requeteUsers['Premium'] == "oui") { ?>

<?php }else{ ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/devenir-premium" OR $_SERVER['REQUEST_URI'] == "/Abonnement3" OR $_SERVER['REQUEST_URI'] == "/Abonnement1" OR $_SERVER['REQUEST_URI'] == "/Abonnement2") { ?>current-menu-item current_page_item<?php } ?>"><a href="/devenir-premium" title="Devenir Premium">Compte premium</a></li>

<?php } ?>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649 <?php if($_SERVER['REQUEST_URI'] == "/galerie") { ?>current-menu-item current_page_item<?php } ?>"><a href="/galerie" title="Galerie">Galerie</a></li>

<li id="menu-item-649" class="menu-item test2 menu-item-type-custom menu-item-object-custom menu-item-home menu-item-649"><a href="/#Twitch" title="Twitch"><i class="fa fa-twitch"></i></a></li>
	
</ul>
   
            
            </li>

<style>
.gk__a-tag.is--top-right {
    z-index: 1;
}

.gk__a-tag__tgs {
    display: block;
    width: 50px;
    height: 20px;
    padding: 4px;
    pointer-events: none;
    background-color: #242424;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16);
}
    
    .gk__a-tag__tgs>div {
    display: block;
    width: 100%;
    height: 100%;
    background-image: url(//d3isma7snj3lcx.cloudfront.net/assets/front/img/base/tgs-logo.svg);
    background-repeat: no-repeat;
    background-position: center center;
    -o-background-size: contain;
    background-size: contain;
}
</style>

</ul></div>        
</div>
        <!-- END TABS -->
