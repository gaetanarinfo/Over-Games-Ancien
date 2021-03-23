<?php session_start();


?>

<?php require('cnx.php'); ?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet27['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet27['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet27['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet27['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet27['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>

		
	<style>
	p {
  margin-top: -35px;		
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 3s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
   font-weight : bold;
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}	
		
.bb, .bb::before, .bb::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat 49%/219% rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb::before, .bb::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe 8s linear infinite;
}
.bb::before {
  animation-delay: -4s;
}
.bb:hover::after, .bb:hover::before {
  background-color: rgba(255, 0, 0, 0.3);
}

@keyframes clipMe {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}

/*2*/
.bb2, .bb2::before, .bb2::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb2 {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat 35px 40px rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb2::before, .bb2::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe2 8s linear infinite;
}
.bb2::before {
  animation-delay: -4s;
}
.bb2:hover::after, .bb2:hover::before {
  background-color: rgb(48 255 34 / 30%);
}

@keyframes clipMe2 {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}		
		
/*3*/
.bb3, .bb3::before, .bb3::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.bb3 {
  width: 200px;
  height: 200px;
  margin: auto;
  background: url(image/PinClipart.com_gaming-clip-art_624934.png) no-repeat -163px 40px rgba(0, 0, 0, 0.1);
  color: #69ca62;
  box-shadow: inset 0 0 0 1px rgba(105, 202, 98, 0.5);
}
.bb3::before, .bb3::after {
  content: '';
  z-index: -1;
  margin: -5%;
  box-shadow: inset 0 0 0 2px;
  animation: clipMe3 8s linear infinite;
}
.bb3::before {
  animation-delay: -4s;
}
.bb3:hover::after, .bb3:hover::before {
  background-color: rgb(66 183 228 / 30%);
}

@keyframes clipMe3 {
  0%, 100% {
    clip: rect(0px, 220px, 2px, 0px);
  }
  25% {
    clip: rect(0px, 2px, 220px, 0px);
  }
  50% {
    clip: rect(218px, 220px, 220px, 0px);
  }
  75% {
    clip: rect(0px, 220px, 220px, 218px);
  }
}	

		
.index-loop-wrapper-inner > .blog-index-date:nth-child(2)::before {
    content: 'Dernière publication le :';
    position: absolute;
    bottom: 30px;
    left: 15px;
    font-size: 13px;
    font-weight: 500;
    color: #878788;
    text-transform: none;
}
		
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro");

.lumino {
  background: 64% 66% / 164% 124% no-repeat
              radial-gradient(ellipse at bottom, #fff, transparent, transparent);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-size: 10vw;
  font-family: "Source Sans Pro", sans-serif;
  animation: reveal 3000ms ease-in-out forwards 200ms,
             glow 2500ms linear infinite 2000ms;

  @keyframes reveal {
    80%{
      letter-spacing: 8px;
    }
    100% {
      background-size: 300% 300%;
    }
  }
  @keyframes glow {
    40% {
      text-shadow: 0 0 8px #fff;
    }
  }
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
    
	<p align="center">Chaînes live qui pourraient vous plaire</p>
  
   
   <hr>
   
   
    <!-- BEGIN LOOP -->
    
<div align="center" class="index-loop-wrapper" style="margin-bottom: -19px;">


<style>
.badge_live{
cursor: pointer;
}
.badge_live:hover{
opacity: 0.4;
animation: 1s opacity;
cursor: pointer;
}
</style>
    
        
       <div style="width: 335px;margin-right: 12px;background-position: center center;background-size: auto 100%;background-repeat: repeat;position: relative;height: 188px;background-image: url(https://static-cdn.jtvnw.net/jtv_user_pictures/a0ce839b-8417-4fae-872f-c0ca2e2e51e3-profile_banner-480.jpeg);display: inline-block;"><a class="btn btn-success" style="font-weight: bold;width: auto;height: auto;position: absolute;color: white;top: 147px;left: 7px;" href="https://www.twitch.tv/solaryfortnite">Suivre SolaryFortnite   &nbsp;<i class="fa fa-heart" aria-hidden="true" style="
    color: #bd0e0e;
"></i></a><a class="badge_live" id="badge_live_1" style="position: absolute;top: 7px;left: 7px;" title="Regarder le live"><img src="https://cdn0.iconfinder.com/data/icons/social-network-9/50/16-512.png" style="
    width: 52px;
"></a>

</div>
       
        <div style="width: 335px;margin-right: 12px;background-position: center center;background-size: auto 100%;background-repeat: repeat;position: relative;background-image: url(https://static-cdn.jtvnw.net/jtv_user_pictures/64a08399-ce84-46c7-9ef2-58acdb04e77f-profile_banner-480.jpeg);height: 188px;display: inline-block;"><a class="btn btn-success" style="font-weight: bold;width: auto;height: auto;position: absolute;color: white;top: 147px;left: 7px;" href="https://www.twitch.tv/ogaminglol">Suivre OgamingLOL   &nbsp;<i class="fa fa-heart" aria-hidden="true" style="
    color: #bd0e0e;
"></i></a><a class="badge_live" style="position: absolute;top: 7px;left: 7px;" id="badge_live_2" title="Regarder le live"><img src="https://cdn0.iconfinder.com/data/icons/social-network-9/50/16-512.png" style="
    width: 52px;
"></a></div>
       
        
       	<div style="width: 335px;margin-right: 12px;background: url(https://static-cdn.jtvnw.net/jtv_user_pictures/64a3ab7e-e72c-4cb7-a260-c488fbb604c3-profile_banner-480.png);background-position: center center;background-size: auto 100%;background-repeat: repeat;position: relative;height: 188px;display: inline-block;"><a class="btn btn-success" style="font-weight: bold;width: auto;height: auto;position: absolute;color: white;top: 147px;left: 7px;" href="https://www.twitch.tv/lestream">Suivre lestream   &nbsp;<i class="fa fa-heart" aria-hidden="true" style="
    color: #bd0e0e;
"></i></a><a class="badge_live" style="position: absolute;top: 7px;left: 7px;" id="badge_live_3" title="Regarder le live"><img src="https://cdn0.iconfinder.com/data/icons/social-network-9/50/16-512.png" style="
    width: 52px;
"></a></div>
       
       <br><br><br>
       <div align="center">
       	<div style="display: inline-block;width: 347px;">
       		<img style="width: 50px;border-radius: 25px;" src="https://static-cdn.jtvnw.net/jtv_user_pictures/41bcfffb-29d4-433e-a13e-6fdf40bebc89-profile_image-50x50.png"><br>
       		<br><div style="font-size: 12px;font-weight: 600;color: white;letter-spacing: 2px;">SolaryFortnite</div>
       		<br><div style="display: inline-block;margin-right: 5px;"><div style="font-size: 11px;font-weight: 600;width: 63.25px;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Français</div></div><div style="display: inline-block;margin-right: 5px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Jeux de tir
</div></div><div style="display: inline-block;margin-right: 5px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Action
</div></div><div style="display: inline-block;margin-right: 5px;margin-top: 10px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Survival
</div></div>
       	</div>
       	
       	<div style="display: inline-block;width: 347px;">
       		<img style="width: 50px;border-radius: 25px;" src="https://static-cdn.jtvnw.net/jtv_user_pictures/8dbce7bb-bb6e-4a3b-8121-ff262b717c81-profile_image-70x70.png"><br><br>
       		<div style="font-size: 12px;font-weight: 600;color: white;letter-spacing: 2px;">OgamingLoL</div>
       		<br><div style="display: inline-block;margin-right: 5px;"><div style="font-size: 11px;font-weight: 600;width: 63.25px;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Français</div></div><div style="display: inline-block;margin-right: 5px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Action</div></div><div style="display: inline-block;margin-right: 5px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Esport
</div></div><br><div style="display: inline-block;margin-top: 10px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">MOBA</div></div>
       	</div>
       	
       	<div style="display: inline-block;width: 347px;">
       		<img style="width: 50px;border-radius: 25px;" src="https://static-cdn.jtvnw.net/jtv_user_pictures/c0f93540-556a-44a6-9c74-ea0fafea8115-profile_image-70x70.png"><br>
       		<br><div style="font-size: 12px;font-weight: 600;color: white;letter-spacing: 2px;">lestream</div><br>
       		<div style="display: inline-block;margin-right: 5px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">Français</div></div>
       		<br><div style="display: inline-block;margin-top: 10px;"><div style="font-size: 11px;font-weight: 600;width: auto;letter-spacing: 2px;color: white;padding: 5px 15px 5px 15px;background-color: #5f9ea061;border-radius: 12px;">IRL</div></div>
       	</div>
       	
       	
       	<div id="badge_live_1_1" style="display: none;">
       	<br><br><br>
       	<!-- Add a placeholder for the Twitch embed -->
<div id="twitch-embed"></div>

<!-- Load the Twitch embed script -->
<script src="https://player.twitch.tv/js/embed/v1.js"></script>

<!-- Create a Twitch.Player object. This will render within the placeholder div -->
<script type="text/javascript">
  new Twitch.Player("twitch-embed", {
    channel: "solaryfortnite",
    width: "708px",
    height: "400px",
    autoplay: false
  });
</script>

</div>
       	
       	<div id="badge_live_2_2" style="display: none;">
       	<br><br><br>
       	<!-- Add a placeholder for the Twitch embed -->
<div id="twitch-embed2"></div>

<!-- Load the Twitch embed script -->
<script src="https://player.twitch.tv/js/embed/v1.js"></script>

<!-- Create a Twitch.Player object. This will render within the placeholder div -->
<script type="text/javascript">
  new Twitch.Player("twitch-embed2", {
    channel: "ogaminglol",
    width: "708px",
    height: "400px",
    autoplay: false
  });
</script>

       	</div>
       	
       	<div id="badge_live_3_3" style="display: none;">
       	<br><br><br>
       	<!-- Add a placeholder for the Twitch embed -->
<div id="twitch-embed3"></div>

<!-- Load the Twitch embed script -->
<script src="https://player.twitch.tv/js/embed/v1.js"></script>

<!-- Create a Twitch.Player object. This will render within the placeholder div -->
<script type="text/javascript">
  new Twitch.Player("twitch-embed3", {
    channel: "lestream",
    width: "708px",
    height: "400px",
    autoplay: false
  });
</script>
       	</div>
       	
       	
<script>
		jQuery(document).ready(function(){
		jQuery('#badge_live_1').click(function(){
			jQuery('#badge_live_1_1').fadeIn(200);
			jQuery('#badge_live_2_2').fadeOut(200);
			jQuery('#badge_live_3_3').fadeOut(200);
		return false})});
		
		jQuery(document).ready(function(){
		jQuery('#badge_live_2').click(function(){
			jQuery('#badge_live_2_2').fadeIn(200);
			jQuery('#badge_live_3_3').fadeOut(200);
			jQuery('#badge_live_1_1').fadeOut(200);
		return false})});
		
		jQuery(document).ready(function(){
		jQuery('#badge_live_3').click(function(){
			jQuery('#badge_live_2_2').fadeOut(200);
			jQuery('#badge_live_3_3').fadeIn(200);
			jQuery('#badge_live_1_1').fadeOut(200);
		return false})});
</script>       	
       	
       	
       </div>
        
     
            <!-- BEGIN HIGHLIGHTED POSTS MARKER -->
           
    <!-- END SIDEBAR -->
    
    

</div>
        
       
    

</div>
<!-- /.index-main-wrapper -->
        
       
       
        </div>
        <!-- /.content-wrapper -->
        
        
      <?php if($profilpremiumresult['Premium'] == "oui") { ?>
           
     <?php }else{ ?>  
       <br><br>
        <div align="center" id="ads2" style="margin-top: -78px;margin-bottom: 99px;">
			<a class="main_banner" href="<?php echo $Pub_result2['Pub'] ?>" style="display:block;" target="_self" data-number="4" title=""><img src="<?php echo $Pub_result2['Image'] ?>" alt="" class="img-responsive"></a>
        </div>
        
	<?php } ?>
     
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>
        
    </div>
   
</div>



<?php include('wp-includes/Php/Footer.php'); ?>


<?php include('wp-includes/Php/Script_Footer.php'); ?>


</body>
</html>
