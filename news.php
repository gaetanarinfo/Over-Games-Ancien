<?php session_start();


?>

<?php require('cnx.php'); ?>

<?php

function Pagination($page_actuelle, $nb_pages, $vers=3, $premier=1){
   
	$pagination = '';

	$lien = preg_replace('`%([^d])`', '%%$1', $page2);
	if (!preg_match('`(?<!%)%d`', $page2) ) $page2 .= '%d';

	return $pagination;

}

if ($nb_pages > 1) {

if ( ($page_actuelle-$vers) > $premier+1 )
$pagination .= '…';

$debut = ($page_actuelle-$vers)>$premier ? $page_actuelle-$vers : $premier+1;
$fin = ($page_actuelle+$vers)<=($nb_pages-$premier) ? 
	$page_actuelle+$vers : $nb_pages-$vers;

for ( $i=$debut ; $i<=$fin ; $i++ ) {

	$pagination .= ' ';
	if ( $i==$page_actuelle )
		$pagination .= ''.$i.'';
	else
		$pagination .= ''.$i.'';
	}
	if ( ($page_actuelle+$around) < $nb_pages-$premier )
	$pagination .= '…';


}


// Lien précédent
if ( $page_actuelle > 1 )
	$pagination .= '« Précédent';
else
	$pagination .= '« Précédent';

// Lien début
for ( $i=1 ; $i<=$premier ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien fin
$debut = $nb_pages-$premier+1;
if( $debut <= $premier ) $debut = $premier+1;
for ( $i=$debut ; $i<=$nb_pages ; $i++ ) {
	$pagination .= ' ';
	$pagination .= ($page_actuelle==$i) ? ''.$i.'' : ''.$i.'';
}

// Lien suivant
if ( $page_actuelle < $nb_pages )
	$pagination .= ' Suivant »';
else
	$pagination .= ' Suivant »';
	
	
	if( isset($_GET['page']) && is_numeric($_GET['page']))
	$page = $_GET['page'];
else
	$page = 1;

$pagination = 36;

$limite = ($page - 1) * $pagination;

$achat = $cnx->prepare('SELECT * FROM Actualite ORDER BY id DESC LIMIT ' . $limite . ', ' . $pagination);
$achat->execute();

$i = $cnx->prepare("SELECT * FROM Actualite ORDER BY id DESC");
$i->execute();
$x = $i->rowCount();

$nb_pages = ceil($x / $pagination);
if ($nb_pages>1){
	$paginations .= '' . pagination($page, $nb_pages) . '';
}
?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet6['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet6['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet6['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet6['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet6['Favicon_Page']; ?>">
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
    
	<p align="center">Nos actualités en temp réel - Bonne lecture</p>
  
   <?php if($_GET['code'] == "non")
    { ?>    
     <div align="center" id="settings-resultat2" style="padding-top:5px;margin-top: 15px;margin-bottom: -12px;text-shadow: 0 0 black;">
                                        <div id="settings-resultat2" style="color: #ffffff;font-weight: bold;width: 40%;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 30px;background-color: rgb(95 95 95 / 36%);margin-bottom: 30px;"><span class="fa fa-times" style="color: #C0191B;margin-right: 2px;" aria-hidden="true"></span> Le code et faux ou invalide merci de recommencer.</div>
                      </div>
     <?php } ?>  
  <hr>
     <div class="lumino" align="center" style="font-size: 39px; letter-spacing: 2px; font-weight: 700;">
        Le trailer du jour
    </div>
     
     <br><br>
	<div align="center"><div align="center"><iframe style="width: 756px;height: 455px;" frameborder="0" src="<?php echo $resultat_trailer['Lien'] ?>"></iframe></div></div>  
   <br>
   
   <hr>
   
   
    <!-- BEGIN LOOP -->
    <div id="content" class="index-loop-wrapper" style="margin-top: -30px; display: none;">
        
    </div>
    
    <div id="datee" class="index-loop-wrapper" style="margin-top: -30px; display: none;"></div>
    
    <div id="ramdomplateforme" class="index-loop-wrapper" style="margin-top: -30px;">
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
                            
<?php while($slider_result4 = $achat->fetch()) { ?>     
                                        
<div class="loop-index-wrapper">
    <a href="article?id=<?php echo $slider_result4['id'] ?>">
        <div class="loop-index-inner">
            
            <!-- BEGIN COMMENT COUNT (if post has comments) -->
                            <div class="comment-count-bubble">
                    <span>
                      <?php echo $slider_result4['comment'] ?>                    </span>
                </div>
                       
                        <style>
							.bubble2::after {
    content: '';
    border-color: transparent;
    background-color: transparent;
} 
						  }
			</style>
                       
                       <div class="comment-count-bubble bubble2" style="top: 101px;border: none;width: auto;padding: 0px 8px 0px 9px;left: 9px;background-color: #0e0a0bb5;">
                    <span><?php echo $slider_result4['Cat'] ?></span>
                </div>
                        <!-- END COMMENT COUNT (if post has comments) -->

            <!-- BEGIN FEATURED IMAGE + ICONS -->        
            <div class="featured-image" style="background-image:url(<?php echo $slider_result4['ImagePetite'] ?>);">
            
            
    
                <!-- BEGIN CATEGORY MARKERS -->
                <div class="category-markers-wrapper">
                                           
                                           
                                            <?php if($slider_result4['Cat'] == "PREMIUM") { ?>
                    
                   <span class="gk__a-tag is--showed is--top-right" style="
    font-weight: bold;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    pointer-events: none;
    margin-left: -169px;
    margin-top: -2px;
    position: absolute;
    font-weight: bold;
">
					<span class="gk__a-tag__sub js-subscribers-tag" style="
    font-weight: 700;
    display: block;
    color: white;
    letter-spacing: 3px !important;
    width: 81px;
    height: 15px;
    padding: 10px 5px 3px 7px;
    text-transform: uppercase;
    pointer-events: none;
    text-align: center;
    background-color: #13578894;
    box-shadow: 0 0 8px 0 rgb(232 210 210 / 16%);
    font-size: 0.625rem;
    line-height: .625rem;
"><i class="fa fa-lock" aria-hidden="true" style="
    font-size: 9px;
"><span style="
    font-weight: bold;
    text-align: center;
"> Abonné </span></i></span>
											</span>
               <?php } ?>
                    
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
                        <?php echo $slider_result4['Titre'] ?> 
                                             <!-- END TITLE -->
                    </h2>
                    
                </div>
                <!-- END TITLE -->
                
                <!-- BEGIN CONTENT -->
                <div class="post-excerpt">
                    <!-- BEGIN TIME + DATE -->
                    <span class="post-date">
                        <?php echo $slider_result4['Date'] ?> 
                    </span>
                    <!-- END TIME + DATE -->
                    <!-- BEGIN EXCERPT -->
                    <?php echo substr($slider_result4['Paragraphe'], 0, 200).'...'; ?>
                    
                                                          <!-- END EXCERPT -->
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
                       <div class="post-nav">
    <div class="post-nav-inner">
       
       
       <?php
						if($nb_pages != $_GET['page']) {
                   ?>
				
               
                       <a class="page-numbers<?php if($_SERVER['REQUEST_URI'] == "/news?page=1" OR $_SERVER['REQUEST_URI'] == "/news") { ?> current<?php } ?>" href="news?page=1">1</a>  
						<?php } ?>


  <?php for ($i = 2 ; $i <= $nb_pages -31 ; $i++)
{  ?>
      
           		<a class="page-numbers<?= ($_GET['page'] == $i) ? " current" : "" ?>" href="news?page=<?php echo $i ?>"><?php echo $i ?></a>
						
         <?php } ?>
         
          <?php
                    $ligne1 = $_GET['page'];
					$ligne2 = "1";
						
						
                    ?>
         <?php
						if($nb_pages != $_GET['page']) {
                   ?>
                    <a href="news?page=<?php echo $ligne1+$ligne2 ?>" class="next page-numbers">
                       &gt;
                    </a>
				<?php } ?>
   </div>
</div>
                                                                                               
                        <!-- END INDEX LOOP -->
            

        </div>
    </div>
    <!-- END LOOP -->
    
    

    <!-- BEGIN SIDEBAR -->
    <div class="sidebar-wrapper" style="margin-top: -77px;">
           
           <div id="date2" style="
    margin-bottom: 22px;
"><div class="widgettitle" style="color: aliceblue;position: relative;display: inline-block;color: #fff;font-weight: bold;margin: 0 0 8px 0px;">Trier par Date :
</div><br>
    <form method="get" action="" id="ddate">
<div class="input-group" style="width: 88%;display: inline-block;"> <input min="2016-01-25" name="ddatee" type="date" class="form-control" id="ddatee" style="
    width: 246px;
    height: 18px;
    display: inline-block;
">  </div><div class="input-group-btn" style="
    display: inline-block;
"> <button style="color: white;font-size: 12px;margin-top: -26px;height: 32px;" title="Valider la date" type="submit" class="btn btn-info" aria-label="calendar"><i class="fa fa-search" aria-hidden="true"></i></button></div></form></div>
           
<?php if($profilpremiumresult['Premium'] == "oui") { ?>
          
     <?php }else{ ?>         
            <div class="sidebar-ad-widget-wrapper">
        <div id="text-3" class="widget widget_text">			<div class="textwidget"><html><head><script type="text/javascript" async="" src="//tpc.googlesyndication.com/sodar/UFYwWwmt.js"></script><script>var inDapIF=true,inGptIF=true;</script><script src="https://s0.2mdn.net/879366/express_html_inpage_rendering_lib_200_270.js" type="text/javascript" crossorigin="anonymous"></script><script type="text/javascript" charset="UTF-8" src="//www.googletagservices.com/activeview/js/current/rx_lidar.js?cache=r20110914"></script></head><body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="jar"><!--Creative 309040879 served by pubmatic Prebid.js Header Bidding--><script>window.dicnf = {};</script><script data-jc="42" data-jc-version="r20201014">(function(){/*  Copyright The Closure Library Authors. SPDX-License-Identifier: Apache-2.0 */ 'use strict';window.viewReq=[];const c=a=>{fetch(a,{keepalive:!0,credentials:"include",redirect:"follow",method:"get",mode:"no-cors"}).catch(()=>{{const b=new Image;b.src=a.replace("&amp;","&");viewReq.push(b)}})};window.vu=a=>{if(window.fetch)c(a);else{{const b=new Image;b.src=a.replace("&amp;","&");viewReq.push(b)}}};}).call(this);</script><script>vu("https://securepubads.g.doubleclick.net/pcs/view?xai\x3dAKAOjssHlYwbkP3OOWwzV7e4gMq_va75abvW8RV8VIEn7zGM7opSJbtpePr8iz53UWIh_dr-0fZBW2tE9eIMPGo8NaNpeIF49tSJpnrnPtPnhWIJTivWH-QhaAO5qtsUdlL60DPUyxm_Dh5L4Xd6lEnQlHfF17bpHrDHEZGypUZXTZFAWQvoc33YdTutp_KlTJ46D02FZkJOWCLSR4ZjPQ9QbTZoVi0jhBnbA58meRCEPHGB1WwESa1NbttL7J-BhKkynv-rOSzr8HwURThIEuyBFLxGkl_qnnQd9qNVeGyYXCWc\x26sai\x3dAMfl-YRIg50hyVeEl1SeuIX-CdvcAWpLXd2noV2INviIG-FNso99SsbsYEwMw3RS4dpzY2Lsky0Zke6t7P63GVd2eTfU09e2u7-u-OxPa8zp8njt1uKXaq_bBI3c1PnVQwZO91b0\x26sig\x3dCg0ArKJSzJPXzCcF0wBXEAE\x26urlfix\x3d1\x26adurl\x3d")</script><div class="GoogleActiveViewInnerContainer" style="left:0px;top:0px;width:100%;height:100%;position:fixed;pointer-events:none;z-index:-9999;"></div><div style="display:inline" class="GoogleActiveViewElement" data-google-av-cxn="https://pagead2.googlesyndication.com/pcs/activeview?xai=AKAOjsswG4WetZW87eZz2aqDBweKCA8NDtleNjK4ZlU7leS8MCxhZHgysY3wHCY4NjC-BYunvvpuEsGm9ZUyJ8w-PO7PGiU-4CskLPXYjsHAEck&amp;sig=Cg0ArKJSzDc0qy_HUkHUEAE" data-google-av-adk="2365789258" data-google-av-metadata="la=0&amp;xdi=0&amp;" data-google-av-override="-1" data-google-av-dm="2" data-google-av-immediate="" data-google-av-aid="0" data-google-av-naid="1" data-google-av-slift="" data-google-av-cpmav="" data-google-av-btr="https://securepubads.g.doubleclick.net/pcs/view?xai=AKAOjsuNoty0e0F7WYnLbCi-nj_KmnAkOiatSM3CjNL-scFmo3t6ePw2nOVpmh1cPQuiynwkNyokOpXadETXHS-8AD2g8ySADV6Ku7WizAdJI-CLWPSAvEfoVgDrk0PvUf_kLnPjT4RwW0-apv5rJuNAu6uknt4vecDLtB8VxcrGMfAWgQCII0yQsChdd3ZuYg52Z_U7YfF8NSMUlTIbfcvy1zvQ_MfJb5Qz_g_3sSt3tIzTVhE15nAHuGh8th24QExmTL2QpK5Go2xTjuF1BCb5Qqu91_50IiE0fx-UB7blfl0gJqI&amp;sai=AMfl-YTQpcC8oqg0BhQ1KaJLv5sHRjXHQh9NBQJd3H0FkHC-jNvIy5AHdUqPKOQ8ozPMjLbhDLg4gCqULCzSQrykzdGZ-_Yd84NGnBlcW1YXJnYyD3nDDC3y7nbnAjkD27kh-e_y&amp;sig=Cg0ArKJSzNO0tnRFGkFjEAE&amp;urlfix=1&amp;adurl=" data-google-av-itpl="19" data-google-av-rs="4"><script src="https://cdn.jsdelivr.net/npm/prebid-universal-creative@latest/dist/creative.js"></script>
<script>
    var ucTagData = {};
        ucTagData.adServerDomain = "";
        ucTagData.pubUrl = "https://www.gamekult.com/";
        ucTagData.targetingMap = {"abflooradx":["fixed"],"adstack":["legacy"],"amznbid":["2"],"amznp":["2"],"browser_version":["86"],"content_class":["home"],"content_keywords":["//d3isma7snj3lcx","100","alt","audi","brillez","challenge","class","cloudfront","consoles","course","dans","des","electrique","gamekult","gran","header","href","jeux","joueurs","logo","l’univers","net/assets/front/img/base/logo/logo","participer","paul","pour","ricard","src","svg","tout","tron","turismo","une","veritable","video"],"hb_adid":["487d82e1db949d3"],"hb_bid_cpm_neteuros":["1.69"],"hb_crid_pubmatic":["309040879"],"hb_exclu":["1"],"hb_pb_pubmatic":["1.71"],"hb_size_pubmatic":["300x250"],"iabconsentstring":["CO7d4t-O7d4t-AHABBENA7CsAP_AAH_AAAAAGstD_TrMYyNj2XZ9Nps0aYxexMSXo2wCjAaJAWgBAQKAIJQGwmAQpAHgBCAKIAAEIiJBAAIlDCHACQAA4IABASAAIAiABBIIICIAgEAQAwAICBBCCMAAAQKYgAAEEAUAmwoAAAoiQAAAAAAAAgZIACYKkwBAkJYQEk0KRQogAhEABUAIAKIAIEAaAABAAAghAISQAAAAAAAAAgAAAAiAkEAAAAAAUAAAAHggAABAAAAAAAAAAgAIgAAQAAAAAAAAAIAgAAEAIAAAAQABQCBAAAAAAJAA.f_gAD_gAAAAA"],"iabgdprapplies":["1"],"impid":["1603007576011534-42770505"],"ishome":["1"],"last_adunit":["300_atf"],"maxbid":["0171"],"pageview":["13"],"placeholderid":["div-gpt-ad-300_atf"],"platform":["desktop"],"rank":["13"],"rellift":["172"],"segment":["4s"],"session":["2"],"size":["300x250"],"stack":["prebid"],"ufloor":["0.30"],"url":["/"],"visitor":["1603007576011534"],"wave":["1"]};
        ucTagData.adId = "";
        ucTagData.cacheHost = "";
        ucTagData.cachePath = "";
        ucTagData.uuid = "";
        ucTagData.mediaType = "";
        ucTagData.env = "";
        ucTagData.size = "300x250";
        ucTagData.hbPb = "1.71";

    try {
        ucTag.renderAd(document, ucTagData);
    } catch (e) {
        console.log(e);
    }
</script><span class="PubAPIAd" id="D36DC49F-7CCF-4001-97F6-EB1ABF8A20A1"><div style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://pagead2.googlesyndication.com/pagead/gen_204?id=xbid&amp;dbm_b=AKAmf-CyY9koVht1BYdkWwvoL-mEilLcx7Mw5nrgsnna2UyTK7CUS1Yq0UJTjI5XyWLPh4bAMq3jNRrS29Lk8-3BvZnuuEZkkkNYuI8mOl5qxk7k9BB0SIs" border="0" width="1" height="1" alt="" style="display:none"></div><iframe title="Blank" src="https://googleads.g.doubleclick.net/xbbe/pixel?d=CMrGkwIQp-6YAhjvra6TATAB&amp;v=APEucNVrYd02yjsDmF0Fqyp0FrKM66ORGcscCPpmxXyGFwCQ_TCq_Hf9Z4RiijDAVNRJxpzVQwR5tCRQIR0p7i_RtW0jsOp5cBNKFjEmPtVifk6qAsTtn8b2ofdAomtRdw6dC8rWapNpvBG3bk99zpku8vZOi7FhjD7jDzjbhyeRn9kTAGBjIM2Aet7OBDlfnvNAidQNd2sYGUU0Jb1UXPNcNqq13wHWBZIVh41vqLs0KnchKMyqcQUu6cECIXSjmpJZwshSbVUBNRTHZ8PTivWjCxFyVXz6atuu-Mc9iYiyZKZifjoT0sjDwxPj49hp2br1UnsgPy_kVxv8KU6Tc57mpMZDP-F2UEkbxppxbPaf_SbMrXmQC5c7QN-xSSd8HAbzgaVEYW48XjMxxbn8D3bSM_5id33g_7lePRl7FCvVLKkcstBLuYY03aYDao6vVINYuLaSS0VHRkabO1VBsc-RnTLc9RaNN9Un42L5QiDhmosORo8PEnDLxcsc6UP5LgM6suNwaGKUVVBZkBijIvnZElE9AwXJYkLEkjXIpHT8Vrjx1TZlnhIkXdXKQMYu4tyy7vpZdnmyT0ydPW7JH1WTHYldW3T5sEp9UAH2o9xyKNxOyRwQWpHhe7tugMic4iw8WCRisQLkcdpyJe1FNGYm8LdfttA4j21g_CEWgH5RYkhqN_DaWr_loAtl_UGyZ3gA-ThS75BzudPz6NvlcnoDtkZaMItLcNCkJZWHd6R_xwv7P0wM65-nqIKCcGgOpEF9MgEmCz2NJn28ExiwpNl7v6Q2dL3jgB3QUCtryDA2CmNAmVgFDNmnV8u9bHnRkJZ20dLGIcEh0G_bJGkY53Q4PnWjOIxz0_e5HKhhem0Hg0K6d7EIm2Iw9dAlfh-DNKjKCcPPp1aQ-VzPlo56__A7uCQNH2se4V-H7p0-vptMIepSnYR-YT50sBHev722T1JJGL6H21cwOZj0OqaOJt-iCzO4w0vYfnACVOO87c8jt23CVc6aelo" style="display:none" aria-hidden="true"></iframe><div><div style="position:relative; display:inline-block;"><script data-jc="75" data-jc-version="r20201014">(function(){/*  Copyright The Closure Library Authors. SPDX-License-Identifier: Apache-2.0 */ var k=this||self;var l=Array.prototype.forEach?function(a,b){Array.prototype.forEach.call(a,b,void 0)}:function(a,b){for(var d=a.length,c="string"===typeof a?a.split(""):a,e=0;e<d;e++)e in c&&b.call(void 0,c[e],e,a)},m=Array.prototype.map?function(a,b){return Array.prototype.map.call(a,b,void 0)}:function(a,b){for(var d=a.length,c=Array(d),e="string"===typeof a?a.split(""):a,f=0;f<d;f++)f in e&&(c[f]=b.call(void 0,e[f],f,a));return c},n=Array.prototype.reduce?function(a,b,d){return Array.prototype.reduce.call(a,b, d)}:function(a,b,d){var c=d;l(a,function(e,f){c=b.call(void 0,c,e,f,a)});return c};function p(a){for(var b=[],d=0;d<a;d++)b[d]="";return b};function q(a){q[" "](a);return a}q[" "]=function(){};function r(a,b){if(a)for(var d in a)Object.prototype.hasOwnProperty.call(a,d)&&b.call(void 0,a[d],d,a)}var t=/https?:\/\/[^\/]+/;function v(a){return(a=t.exec(a))&&a[0]||""};var w=/^https?:\/\/(\w|-)+\.cdn\.ampproject\.(net|org)(\?|\/|$)/;function x(a){a=a||y();for(var b=new z(k.location.href,!1),d=null,c=a.length-1,e=c;0<=e;--e){var f=a[e];!d&&w.test(f.url)&&(d=f);if(f.url&&!f.b){b=f;break}}e=null;f=a.length&&a[c].url;0!=b.depth&&f&&(e=a[c]);return new A(b,e,d)} function y(){var a=k,b=[],d=null;do{var c=a;try{var e;if(e=!!c&&null!=c.location.href)b:{try{q(c.foo);e=!0;break b}catch(h){}e=!1}var f=e}catch(h){f=!1}if(f){var g=c.location.href;d=c.document&&c.document.referrer||null}else g=d,d=null;b.push(new z(g||""));try{a=c.parent}catch(h){a=null}}while(a&&c!=a);c=0;for(a=b.length-1;c<=a;++c)b[c].depth=a-c;c=k;if(c.location&&c.location.ancestorOrigins&&c.location.ancestorOrigins.length==b.length-1)for(a=1;a<b.length;++a)g=b[a],g.url||(g.url=c.location.ancestorOrigins[a- 1]||"",g.b=!0);return b}function A(a,b,d){this.c=a;this.f=b;this.a=d}function z(a,b){this.url=a;this.b=!!b;this.depth=null};function B(a,b,d,c,e){var f=[];r(a,function(g,h){(g=C(g,b,d,c,e))&&f.push(h+"="+g)});return f.join(b)}function C(a,b,d,c,e){if(null==a)return"";b=b||"&";d=d||",$";"string"==typeof d&&(d=d.split(""));if(a instanceof Array){if(c=c||0,c<d.length){for(var f=[],g=0;g<a.length;g++)f.push(C(a[g],b,d,c+1,e));return f.join(d[c])}}else if("object"==typeof a)return e=e||0,2>e?encodeURIComponent(B(a,b,d,c,e+1)):"...";return encodeURIComponent(String(a))};function D(a,b){this.a=a;this.depth=b}function E(){function a(h,u){return null==h?u:h}var b=y(),d=Math.max(b.length-1,0),c=x(b);b=c.c;var e=c.f,f=c.a,g=[];f&&g.push(new D([f.url,f.b?2:0],a(f.depth,1)));e&&e!=f&&g.push(new D([e.url,2],0));b.url&&b!=f&&g.push(new D([b.url,0],a(b.depth,d)));c=m(g,function(h,u){return g.slice(0,g.length-u)});!b.url||(f||e)&&b!=f||(e=v(b.url))&&c.push([new D([e,1],a(b.depth,d))]);c.push([]);return m(c,function(h){return F(d,h)})} function F(a,b){var d=n(b,function(e,f){return Math.max(e,f.depth)},-1),c=p(d+2);c[0]=a;l(b,function(e){return c[e.depth+1]=e.a});return c}function G(){var a=E();return m(a,function(b){return C(b)})};function H(a){try{var b=G();b.pop();for(var d=2083-a.length-5,c=0;c<b.length;c++){var e=encodeURIComponent(b[c]);if(e.length<=d)return setTimeout(function(){var f=void 0===f?.01:f;if(!(Math.random()>f)){var g=document.currentScript;g=(g=void 0===g?null:g)&&75==g.getAttribute("data-jc")?g:document.querySelector('[data-jc="75"]');f="https://pagead2.googlesyndication.com/pagead/gen_204?id=jca&jc=75&version="+(g&&g.getAttribute("data-jc-version")||"unknown")+"&sample="+f;g=window;var h;if(h=g.navigator)h= g.navigator.userAgent,h=/Chrome/.test(h)&&!/Edge/.test(h)?!0:!1;h&&g.navigator.sendBeacon?g.navigator.sendBeacon(f):(g.google_image_requests||(g.google_image_requests=[]),h=g.document.createElement("img"),h.src=f,g.google_image_requests.push(h))}},0),a+"&rfl="+e}return a}catch(f){}return a}var I=["rfl"],J=k;I[0]in J||"undefined"==typeof J.execScript||J.execScript("var "+I[0]);for(var K;I.length&&(K=I.shift());)I.length||void 0===H?J[K]&&J[K]!==Object.prototype[K]?J=J[K]:J=J[K]={}:J[K]=H;}).call(this);</script><script>var url = 'https://googleads.g.doubleclick.net/dbm/ad?dbm_c=AKAmf-BuTf3Ibhc0xXDmXy4V97f_SiyC5S1yWhII1w45s8NbhcaFr2MmOjtEMbXyazUMaYL8Q4Esu48IUKITu5Bbb7bRthWRRK9pvwPvo8nReugZUvD5PgxrtHs4hX8twwlbmZfxljEFYDdX-Xljc0Cv2GOjvQof4w&cry=1&dbm_d=AKAmf-AUNHgyK2EsHqb6zSOgr6jZz64wzxflulGnNmhk7GjWk-4x24HzSLusQeBPVHL4sHB4Mfp0_HarD6T1RHH1eYryHTpVFSvmK-q0y8vGnXVLsHmz4q9kZqy3I4s4jfusy--EQFA9d0AFj-KKf_XpGylsE2vfsCFZJGYbMw3apM5uVL4HNqudmP1UHLsKs5wmovzaHP6_1tG8JXDV-83pJ2GlCSNG-iiMTqY-q6dGyH4DdaOvXU3bVgoP1xQG4P5LeAgP5dgx_jj_B0Uxoe_dDeV11pL0eyOu5FvQ2-oI1gzNf_l_cJRDKS-dNNqVW_XpVn5Xs3nh8klbDexSZM0IvSBUxio4sTXByU4d-MDKbK6O966EtmLmZaPHFwwRh6xabvZfFF-Byu7A58117Xi8sGgWHik1JBDYJCAJRgASl69dEKZMVXFoRN8dZejwRHdt7p6ehGaN0sFtxpSBxmthhjp2rp-2CTerJARgVuyHS9VNvqZRgVQongaBfkRojsMv-3jbnR7KLZgFLxqy8IKCdtU-fRzKIUpv9TYTS_zAKEciIVeFcx5EMFmP-QZopMPm9kUl92fRa55eGu3aHR0VMRT9MpreVUCJtHk7QUGZwzGl-Inm23UKemtdLARjanv8GnPQWDHEpaoz4lO1_LOZ4F5XpCuuPK3HWI3Go-HfHaYtKG70EFMUt9p6DKGEgCr50mE7XUq7ssdRtPzseJsV3a7zyrARl4v62KTLXY8J91SeGqDWIj1PfL15vHx6lF14R3-_vZNaQ-9Wl9b3fPu-o9zDM3YZVBgtg18WddVygsa3yw75O_Te99pg4Xj_XVcndOqbzDvnDM5loUCjfuHzNGPVI48rMZ-heyZtjFzk7BgO7ystqauIaiovKLZj3_wg9gYdghk-6_mgqOsHqDHq4OS_Emv3RWbLYElEQQeIm7V7f-jYZikO0rBz7IHbbCoqo4mcIqGXL0x40UX_uW6IQefLw808KC2Aerw6MKvn1GoY2P_uJ6sSsUGUQzV73k6zcnJ7OJUsiy-GlIX-pKRU0-Eq8Xh5JmA20C3RhZzQcVqWgBg1XX9NdGrWTIAqqDQdNP8KeBJzKy2XJycA9Qs7aZQEQ0iTVEc3qusZyoneAOj8HbNXDAOXb0qL-utT59SwcE1iUI_ILRVGoMwTl82T4biuF-svvCNdRxv7BUAepJJBeMTuEZzfty5avwnyzMpVR4u_-qScx6JBempNrC0NNT_SYPDPMHruOH9MKmpoIWhXfwBqRDoEmui8o8laYeQEYSFKMhckuiUXtuJ5HG8wUHTS_IMFtGzT2sU1LItIqma_WhURf_WKOPXGqlRTPOxmZoX1w9WYUGEu5By5BZ6cIz--sGPR52CgLJ8YGZXmea_m7aRh-famiomwDm0PfQcoZsUg9Hlu6SUvZE8jYAM3nMmGqWv4ghuvs498ZXFKsr8IHOGWyMIF06wtj9KCctb2cnJqPdsW-ZeFL3bXEjuPt6NM8EzZRMLJ0PxWN-bLEDIaEaONRtYda6jEWka84663M9CCVeC2Ljz9K2Eq8YawiCffpfK6BUE3LD_BoNr2NEjCdie2xu8u7c-Bbktj9ugOhw-dt9iFzLwiGkdvSfam_MV-bs5lySfVezHxaqSj857ore9Gv6XgLB1GUIOJsug0ud3W_FK2bqreQILUZmDHx3Blcvc3kI4z5likzW1h81-GxvTbaRU8i1TsBwBZPwx4778rwvV67EDSe2C7UkWBu-gmTOkQ0SSlGzYw9HXcCKYWsbQDwTansAbI_MXSOoIqT2e25byzCYUo9J3Q2XpowWmrbYWoineas7J9k6oaJlMNovUc-qAr5XfMuzcy-BhUS7BMQq9a08erTSANrPXNCVxcWuUVspveM_YNqYh9Vh9cMwjpAuj3qm1dqjwX4Yuk82JxMg31iV-21dfclG1kSZBlyk7n43bEHKexEttcfrR8gtbwk8GEoedAkCgQBDSxcPQXDMu5yMzpAf60jbwh6N5Mt9DTeScvZizZ2XLxMz-7kCsR44JiXyBwXG37xc0nZ1FASbl0QOkCz1VpcRTCzQNQGlQdtMKkS5IrlGcdvrygeRzC1SVi3S-qFrHgWoraiAJhHk4JZ91AhMhZQdp7iVpwa_-hPpzDlngBxElGG7GmBzPx26p1oACdIQTdkYDANA6-yKmJCK_8izSHdMDVdKoFsveC_Q6CAz0Zcu_79nBMzH072BvqDp05gj4zodqpwcZtwhepQyyNqtLdtqx-6DECTm5inemZ4iudIUcL_mQRp7EpD5KKqX3toXsAVqfnY89Y6fk6Kgjp0-u3RkWJdezrDH9lrGR-h-W9GielRbtkLIFuRWJHvjSOD9we0j7Yp7unsw4vdvMmxneDqyp9DSTeKJ-s81xHpABm8LshfQDv-d25Hmc-fj3j3kPM6YBlmUWy6WyI-HrZWG7KUQE123olX3kGxkv9tPahuLWeo2AVNAL3hdUOjy6H3LRKMfRdnS9Ete47XNM4FGbrD849klyyYfgm_4P66tAcs3iqrs0rsFjtqy8wkSbh4Pu03BKCqK2GjHzR_nRxFVwZ_cgPdNXhkoHsavDv4zXE1PMdHNoTkksKV6S0z69kcART8hZS0p9bA1nd4BFYV68llnqNutlIiIKHFGX84LYWc9zPrUiUDMeBzqTTc85tmXLQ4juE0b_VZtxhdSwTtDNT1LS2rE31gX0B0CFJ8Wx4ZImY1IquC3ddc7eAnlwDbW_-29gP6lL5KyyARP3oZZ4SudMG5Lshm-Ho3lPe1g6oxxjcbuoyRSCWn-npEHrhdUKx6JScyhSCoIwDonA53_hQg-kyq-LW4lhpbWhibhdG5W7y6ZffcC-PZJCaK1PzDBSUIfOymyVHCqh0ymfp8z334iue8nOHNGIOdPXWjGS8VWr3xXLki-GTUGkvRoF9BOsGc7lq2cgrlk1L91lss-Tmst-s-2B53ZLW-IU3GuXBaMRyYYHTnw9-gYWDazKcp2ECA6Q7x_SSNrxtyn6z0GC5ogQE4I2B-WAsh0XtpmreGeeE01c_xaUMG9fiXHw3eY9gH_PebTx-slTrpNU-9DcPTBJAbJmglRZr8AKmdcV4VSfkCPJwfFvl4VdpS5sdfkTiVqmr4BdbzOVveNOHmg-ri_I-jORqmd8IDW03kgdLVLdoOVYRAQd2ZNV5YSvL6zbtZdFo-VZZCh-YvIAwg6fDn48IdSQrsTEgeogNEn-e_LGFlKMPJFapriW7vU1i0GU3wgDIhYiwj17E1IgVLsx6vnt6zdr1PpAQF2iQ5iPzKQlArzmaJGkJWQfVOl5ZeNUe7N-GfzlPEGxiCZ_yBZA5hi41kBWi5fhRn733j8xgcTMheHs5sdfzgIkwCBujHwz_qEyFjxqggumzXoWW0CqNZ20zxdFnyzFt1MW53wMW4yw8Cz-ZZNRYKKpBvavCFF8vVkjCP7wm2wsNOxMte2Cs2IBTfDBgGFCCbGC01NZtUYdZfIJpQDnGg2T0IjAxSZXnVZMPzhL2-rIu0eOLc5pn4YYtc2e9JDaS6PAlxu0RmVNUsbT6pmyaNda0BW9p3EOYrr9-GzVCwpNsg3M8fGCl_-opsCEQgxc9HaHzSTkUoqF7m0ixrE6zSRi5w091mRC7NC5uTC0dyZE4Ep_xuDtBabJGNPP6D7l0ouuypWAwA4NOL48FcYNmSDTWASneriBMbGo62ByDIEgN6Zy3st3fiENG3_VzI7qF2k5CwxzUYxsjq_GYiSrSFvT_4q2k2QdSm9B02aTKnhQgjNozEe6nYG0ADhSBW7eDBDoyQfEiAj1ZaCv48dL7nh3NZrv0dDF8uwMzBvaxyRCGWZ6IfJmxDbkP1iAu1K3kPxMwMv8Cbvdc9il7iT2OleapGaRci0dCN5fdt3aZt61qJ9OyPiFBkbuRBwBM6xk_tXofWQYRLjDCYvAbUa7dli5TeO9E3juZUXV_ZHvu8r2zzj2u10GXbI7GX1WxBKX-4Gdqg5OIKYQEerlzh0HXayE8P7KJrUoUk2Ozed3VwdMLLFhKpdWpcEp1ohekefxmdFP9jcgk32NHeIGCrjmR2mHRi5yq5zYJWY2l6UvxUYGzvM9Y9cvfnd4oEoQivWsfhRpr9SKv4Eyxabz3ZxKzgFsz31KrOEGiZiv3dpouZjVV&pr=6:2.249692&cid=CAASEuRo8WfkzxjmmSuIRmC6GJ6_sA&xfc=https%3A%2F%2Fclicktrack.pubmatic.com%2FAdServer%2FAdDisplayTrackerServlet%3FclickData%3DJnB1YklkPTE1Nzk5NyZzaXRlSWQ9NjI3Mjk2JmFkSWQ9MjM3MjM3NiZrYWRzaXplaWQ9OSZ0bGRJZD01OTkyNzAyMiZjYW1wYWlnbklkPTIyOTg3JmNyZWF0aXZlSWQ9MCZ1Y3JpZD0xMTg1NjE4Mjc0MTQzMDg2MDQ5MSZhZFNlcnZlcklkPTI0MyZpbXBpZD1EMzZEQzQ5Ri03Q0NGLTQwMDEtOTdGNi1FQjFBQkY4QTIwQTEmcGFzc2JhY2s9MA%3D%3D_url%3D';document.write('<script src="' + (window.rfl ? window.rfl(url) : url) + '"></s' + 'cript>');</script><script src="https://googleads.g.doubleclick.net/dbm/ad?dbm_c=AKAmf-BuTf3Ibhc0xXDmXy4V97f_SiyC5S1yWhII1w45s8NbhcaFr2MmOjtEMbXyazUMaYL8Q4Esu48IUKITu5Bbb7bRthWRRK9pvwPvo8nReugZUvD5PgxrtHs4hX8twwlbmZfxljEFYDdX-Xljc0Cv2GOjvQof4w&amp;cry=1&amp;dbm_d=AKAmf-AUNHgyK2EsHqb6zSOgr6jZz64wzxflulGnNmhk7GjWk-4x24HzSLusQeBPVHL4sHB4Mfp0_HarD6T1RHH1eYryHTpVFSvmK-q0y8vGnXVLsHmz4q9kZqy3I4s4jfusy--EQFA9d0AFj-KKf_XpGylsE2vfsCFZJGYbMw3apM5uVL4HNqudmP1UHLsKs5wmovzaHP6_1tG8JXDV-83pJ2GlCSNG-iiMTqY-q6dGyH4DdaOvXU3bVgoP1xQG4P5LeAgP5dgx_jj_B0Uxoe_dDeV11pL0eyOu5FvQ2-oI1gzNf_l_cJRDKS-dNNqVW_XpVn5Xs3nh8klbDexSZM0IvSBUxio4sTXByU4d-MDKbK6O966EtmLmZaPHFwwRh6xabvZfFF-Byu7A58117Xi8sGgWHik1JBDYJCAJRgASl69dEKZMVXFoRN8dZejwRHdt7p6ehGaN0sFtxpSBxmthhjp2rp-2CTerJARgVuyHS9VNvqZRgVQongaBfkRojsMv-3jbnR7KLZgFLxqy8IKCdtU-fRzKIUpv9TYTS_zAKEciIVeFcx5EMFmP-QZopMPm9kUl92fRa55eGu3aHR0VMRT9MpreVUCJtHk7QUGZwzGl-Inm23UKemtdLARjanv8GnPQWDHEpaoz4lO1_LOZ4F5XpCuuPK3HWI3Go-HfHaYtKG70EFMUt9p6DKGEgCr50mE7XUq7ssdRtPzseJsV3a7zyrARl4v62KTLXY8J91SeGqDWIj1PfL15vHx6lF14R3-_vZNaQ-9Wl9b3fPu-o9zDM3YZVBgtg18WddVygsa3yw75O_Te99pg4Xj_XVcndOqbzDvnDM5loUCjfuHzNGPVI48rMZ-heyZtjFzk7BgO7ystqauIaiovKLZj3_wg9gYdghk-6_mgqOsHqDHq4OS_Emv3RWbLYElEQQeIm7V7f-jYZikO0rBz7IHbbCoqo4mcIqGXL0x40UX_uW6IQefLw808KC2Aerw6MKvn1GoY2P_uJ6sSsUGUQzV73k6zcnJ7OJUsiy-GlIX-pKRU0-Eq8Xh5JmA20C3RhZzQcVqWgBg1XX9NdGrWTIAqqDQdNP8KeBJzKy2XJycA9Qs7aZQEQ0iTVEc3qusZyoneAOj8HbNXDAOXb0qL-utT59SwcE1iUI_ILRVGoMwTl82T4biuF-svvCNdRxv7BUAepJJBeMTuEZzfty5avwnyzMpVR4u_-qScx6JBempNrC0NNT_SYPDPMHruOH9MKmpoIWhXfwBqRDoEmui8o8laYeQEYSFKMhckuiUXtuJ5HG8wUHTS_IMFtGzT2sU1LItIqma_WhURf_WKOPXGqlRTPOxmZoX1w9WYUGEu5By5BZ6cIz--sGPR52CgLJ8YGZXmea_m7aRh-famiomwDm0PfQcoZsUg9Hlu6SUvZE8jYAM3nMmGqWv4ghuvs498ZXFKsr8IHOGWyMIF06wtj9KCctb2cnJqPdsW-ZeFL3bXEjuPt6NM8EzZRMLJ0PxWN-bLEDIaEaONRtYda6jEWka84663M9CCVeC2Ljz9K2Eq8YawiCffpfK6BUE3LD_BoNr2NEjCdie2xu8u7c-Bbktj9ugOhw-dt9iFzLwiGkdvSfam_MV-bs5lySfVezHxaqSj857ore9Gv6XgLB1GUIOJsug0ud3W_FK2bqreQILUZmDHx3Blcvc3kI4z5likzW1h81-GxvTbaRU8i1TsBwBZPwx4778rwvV67EDSe2C7UkWBu-gmTOkQ0SSlGzYw9HXcCKYWsbQDwTansAbI_MXSOoIqT2e25byzCYUo9J3Q2XpowWmrbYWoineas7J9k6oaJlMNovUc-qAr5XfMuzcy-BhUS7BMQq9a08erTSANrPXNCVxcWuUVspveM_YNqYh9Vh9cMwjpAuj3qm1dqjwX4Yuk82JxMg31iV-21dfclG1kSZBlyk7n43bEHKexEttcfrR8gtbwk8GEoedAkCgQBDSxcPQXDMu5yMzpAf60jbwh6N5Mt9DTeScvZizZ2XLxMz-7kCsR44JiXyBwXG37xc0nZ1FASbl0QOkCz1VpcRTCzQNQGlQdtMKkS5IrlGcdvrygeRzC1SVi3S-qFrHgWoraiAJhHk4JZ91AhMhZQdp7iVpwa_-hPpzDlngBxElGG7GmBzPx26p1oACdIQTdkYDANA6-yKmJCK_8izSHdMDVdKoFsveC_Q6CAz0Zcu_79nBMzH072BvqDp05gj4zodqpwcZtwhepQyyNqtLdtqx-6DECTm5inemZ4iudIUcL_mQRp7EpD5KKqX3toXsAVqfnY89Y6fk6Kgjp0-u3RkWJdezrDH9lrGR-h-W9GielRbtkLIFuRWJHvjSOD9we0j7Yp7unsw4vdvMmxneDqyp9DSTeKJ-s81xHpABm8LshfQDv-d25Hmc-fj3j3kPM6YBlmUWy6WyI-HrZWG7KUQE123olX3kGxkv9tPahuLWeo2AVNAL3hdUOjy6H3LRKMfRdnS9Ete47XNM4FGbrD849klyyYfgm_4P66tAcs3iqrs0rsFjtqy8wkSbh4Pu03BKCqK2GjHzR_nRxFVwZ_cgPdNXhkoHsavDv4zXE1PMdHNoTkksKV6S0z69kcART8hZS0p9bA1nd4BFYV68llnqNutlIiIKHFGX84LYWc9zPrUiUDMeBzqTTc85tmXLQ4juE0b_VZtxhdSwTtDNT1LS2rE31gX0B0CFJ8Wx4ZImY1IquC3ddc7eAnlwDbW_-29gP6lL5KyyARP3oZZ4SudMG5Lshm-Ho3lPe1g6oxxjcbuoyRSCWn-npEHrhdUKx6JScyhSCoIwDonA53_hQg-kyq-LW4lhpbWhibhdG5W7y6ZffcC-PZJCaK1PzDBSUIfOymyVHCqh0ymfp8z334iue8nOHNGIOdPXWjGS8VWr3xXLki-GTUGkvRoF9BOsGc7lq2cgrlk1L91lss-Tmst-s-2B53ZLW-IU3GuXBaMRyYYHTnw9-gYWDazKcp2ECA6Q7x_SSNrxtyn6z0GC5ogQE4I2B-WAsh0XtpmreGeeE01c_xaUMG9fiXHw3eY9gH_PebTx-slTrpNU-9DcPTBJAbJmglRZr8AKmdcV4VSfkCPJwfFvl4VdpS5sdfkTiVqmr4BdbzOVveNOHmg-ri_I-jORqmd8IDW03kgdLVLdoOVYRAQd2ZNV5YSvL6zbtZdFo-VZZCh-YvIAwg6fDn48IdSQrsTEgeogNEn-e_LGFlKMPJFapriW7vU1i0GU3wgDIhYiwj17E1IgVLsx6vnt6zdr1PpAQF2iQ5iPzKQlArzmaJGkJWQfVOl5ZeNUe7N-GfzlPEGxiCZ_yBZA5hi41kBWi5fhRn733j8xgcTMheHs5sdfzgIkwCBujHwz_qEyFjxqggumzXoWW0CqNZ20zxdFnyzFt1MW53wMW4yw8Cz-ZZNRYKKpBvavCFF8vVkjCP7wm2wsNOxMte2Cs2IBTfDBgGFCCbGC01NZtUYdZfIJpQDnGg2T0IjAxSZXnVZMPzhL2-rIu0eOLc5pn4YYtc2e9JDaS6PAlxu0RmVNUsbT6pmyaNda0BW9p3EOYrr9-GzVCwpNsg3M8fGCl_-opsCEQgxc9HaHzSTkUoqF7m0ixrE6zSRi5w091mRC7NC5uTC0dyZE4Ep_xuDtBabJGNPP6D7l0ouuypWAwA4NOL48FcYNmSDTWASneriBMbGo62ByDIEgN6Zy3st3fiENG3_VzI7qF2k5CwxzUYxsjq_GYiSrSFvT_4q2k2QdSm9B02aTKnhQgjNozEe6nYG0ADhSBW7eDBDoyQfEiAj1ZaCv48dL7nh3NZrv0dDF8uwMzBvaxyRCGWZ6IfJmxDbkP1iAu1K3kPxMwMv8Cbvdc9il7iT2OleapGaRci0dCN5fdt3aZt61qJ9OyPiFBkbuRBwBM6xk_tXofWQYRLjDCYvAbUa7dli5TeO9E3juZUXV_ZHvu8r2zzj2u10GXbI7GX1WxBKX-4Gdqg5OIKYQEerlzh0HXayE8P7KJrUoUk2Ozed3VwdMLLFhKpdWpcEp1ohekefxmdFP9jcgk32NHeIGCrjmR2mHRi5yq5zYJWY2l6UvxUYGzvM9Y9cvfnd4oEoQivWsfhRpr9SKv4Eyxabz3ZxKzgFsz31KrOEGiZiv3dpouZjVV&amp;pr=6:2.249692&amp;cid=CAASEuRo8WfkzxjmmSuIRmC6GJ6_sA&amp;xfc=https%3A%2F%2Fclicktrack.pubmatic.com%2FAdServer%2FAdDisplayTrackerServlet%3FclickData%3DJnB1YklkPTE1Nzk5NyZzaXRlSWQ9NjI3Mjk2JmFkSWQ9MjM3MjM3NiZrYWRzaXplaWQ9OSZ0bGRJZD01OTkyNzAyMiZjYW1wYWlnbklkPTIyOTg3JmNyZWF0aXZlSWQ9MCZ1Y3JpZD0xMTg1NjE4Mjc0MTQzMDg2MDQ5MSZhZFNlcnZlcklkPTI0MyZpbXBpZD1EMzZEQzQ5Ri03Q0NGLTQwMDEtOTdGNi1FQjFBQkY4QTIwQTEmcGFzc2JhY2s9MA%3D%3D_url%3D"></script><div id="ad_unit"><script>(function() {(function(){/*Copyright The Closure Library Authors.SPDX-License-Identifier: Apache-2.0*/var g=this||self,k=function(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var e=c.slice();e.push.apply(e,arguments);return a.apply(this,e)}};var l=function(a){a=a?a.toLowerCase():"";switch(a){case "normal":return"normal";case "lightbox":return"lightbox";case "push_down":return"push_down"}return null};var m=function(a,b){for(var c in a)b.call(void 0,a[c],c,a)};var n={i:"ad_container_id",A:"hideObjects",G:"mtfTop",F:"mtfLeft",K:"zindex",m:"mtfDuration",J:"wmode",H:"preferFlash",s:"as_kw",u:"as_lat",v:"as_lng",B:"mtfIFPath",o:"expansionMode",I:"mtfRenderFloatInplace",j:"debugjs",C:"dcapp",g:"breakoutiframe",D:"inMobileAdSdk"},q=function(a){m(a,function(b,c){if(c.toLowerCase()in p){var e=p[c.toLowerCase()];c in a&&delete a[c];a[e]=b}})},p=function(){var a={};m(n,function(b){a[b.toLowerCase()]=b});return a}();var u=function(a){this.a=a;a:{for(c in a.displayConfigParameters){b:if(a=r,"string"===typeof a)a="string"!==typeof c||1!=c.length?-1:a.indexOf(c,0);else{for(var b=0;b<a.length;b++)if(b in a&&a[b]===c){a=b;break b}a=-1}if(!(0<=a)){var c=!0;break a}}c=!1}this.f=c},r=["ad_container_id"],v=function(a){return a.f?a.a.displayConfigParameters:a.a.creativeParameters},w=function(a,b){for(var c=0;c<a.a.primaryFiles.length;++c)if(a.a.primaryFiles[c].type==b)return!0;return!1};var x={pattern:/rendering_lib_((?:[0-9_]+)|(?:latest))\.js$/,c:"rendering_lib_db_$1.js"},y={pattern:/\/[a-z_0-9]+_rendering_lib/,c:"/iframe_buster"},z={pattern:/(.*\/)(.*_)rendering_lib_((?:[0-9_]+)|(?:latest))\.js$/,c:"$1inapp_html_inpage_rendering_lib_$3.js"},A={pattern:/\/[0-9]+\/[a-z_0-9]+rendering_lib.+$/,c:"/ads/studio/cached_libs/modernizr_2.8.3_ec185bb44fe5e6bf7455d6e8ef37ed0e_no-classes.js"},E=function(a){var b=v(a),c=a.a.renderingLibraryData,e=c.renderingLibrary,d=c.version;if(!/express|image_gallery|dfa7banner|inapp/.test(e)&&("latest"==d||0<=B(d,"200_74"))){if(d=!w(a,"FLASH")){a:{for(d=0;d<a.a.primaryFiles.length;++d){var f=a.a.primaryFiles[d].expandingDisplayProperties;if(f&&"lightbox"==l(f.expansionMode)){d=!0;break a}}d=!1}d=!d}d=d&&null!=window.mraid}else d=!1;d&&(e=e.replace(z.pattern,z.c));"true"==b.debugjs&&(e=e.replace(x.pattern,x.c));(b=g.self==g.top)||(b=window.Y&&window.Y.SandBox&&window.Y.SandBox.vendor,d=window.$sf&&window.$sf.ext,f=window.$WLXRmAd,b=!!(window.IN_ADSENSE_IFRAME||b||d||f));if(!b){a:if(b=v(a).breakoutiframe)b=!!b&&"true"==b.toLowerCase();else{b=a.a.primaryFiles;for(d=0;d<b.length;d++){f=b[d].renderAs;var h=0==(parseInt(b[d].width,10)||0)&&0==(parseInt(b[d].height,10)||0);if("EXPANDABLE"==f||"FLOATING"==f&&!h){b=!0;break a}}b=!1}b=!b}if(b||a.a.previewMode){a:{a=e;b=C();for(d=0;d<b.renderingLibraries.length;d++)if(f=b.renderingLibraries[d],f.url==a&&f.bootstrapFunction){a=f;break a}a=null}a?a.bootstrapFunction():(a=C(),D(e,!1,void 0,void 0,void 0,!0),a.renderingLibraries.push({version:c.version,url:e,loading:!0,bootstrapFunction:null}))}else c=e.replace(y.pattern,y.c),D(c,!0)},B=function(a,b){a=F(a);b=F(b);for(var c=Math.min(a.length,b.length),e=0;e<c;e++)if(a[e]!=b[e])return a[e]-b[e];return a.length-b.length},F=function(a){a=a.split("_");for(var b=[],c=0;c<a.length;c++)b.push(parseInt(a[c],10));return b},D=function(a,b,c,e,d,f){var h=document.createElement("script");h.src=a;h.type=c?c:"text/javascript";h.async=!!b;f&&(h.crossOrigin="anonymous");e&&(h.onload=e);d&&(h.onerror=d);var t;(a=document.getElementsByTagName("head"))&&0!=a.length?t=a[0]:t=document.documentElement;t.appendChild(h)},C=function(){return window.dclkStudioV3=window.dclkStudioV3||{creatives:[],renderingLibraries:[],creativeCount:1,startTimes:{}}},G=function(a){try{if(null!=(a["cps-top-iframe-beacon"]?a["cps-top-iframe-beacon"]:null))return!0}catch(b){}return a==a.parent?!1:G(a.parent)},H=function(a){if(null!=a){q(a.creativeParameters);if(null!=a.html5Features)for(var b=0;b<a.html5Features.length;++b)"CSS_ANIMATIONS"==a.html5Features[b]&&(a.html5Features[b]="Modernizr.cssanimations");!a.previewMode&&G(g)&&(a.previewMode=!0);a=new u(a);b=C();b.creatives.push(a.a);var c=a.a.creativeParameters;c.creative_unique_id=c.cid+"_"+b.creativeCount++;b.startTimes[c.creative_unique_id]=Date.now();b=v(a).ad_container_id;a:if((c=v(a).mtfRenderFloatInplace)&&"true"==c.toLowerCase())c=!0;else{c=a.a.primaryFiles;for(var e=0;e<c.length;e++){var d=c[e].renderAs;if("EXPANDABLE"==d||"BANNER"==d){c=!0;break a}}c=!1}!c||b&&""!=b||(b="dclk-studio-creative_"+(new Date).getTime(),c=a.a,document.write(['<div id="',b,'"></div>'].join("")),c.creativeParameters.ad_container_id=b,c.creativeParameters.generate_ad_slot="true",null==c.displayConfigParameters&&(c.displayConfigParameters={}),c.displayConfigParameters.ad_container_id=b);c=a.a;b=c.renderingLibraryData;e=b.version;if(w(a,"HTML5")&&!("latest"==e||0<=B(e,"200_108"))&&(c=c.html5Features,!("Modernizr"in g)&&Array.isArray(c)&&0<c.length)){e=!1;for(d=0;d<c.length;d++)if("svgFilters"!=c[d]&&"svgFeImage"!=c[d]){e=!0;break}e&&D(b.renderingLibrary.replace(A.pattern,A.c),!1)}b=v(a);c=b.inMobileAdSdk;"1"==b.dcapp||"1"==c||/Android ([2-3]|4\.[0-3])/.test(navigator.userAgent)?(b=k(E,a),window.mraid?(D("mraid.js",!1,"text/x-do-not-download",null,null),E(a)):D("mraid.js",!1,"text/javascript",b,b)):E(a)}},I=["studio","rendering","BowResponse","processCreativeData"],J=g;I[0]in J||"undefined"==typeof J.execScript||J.execScript("var "+I[0]);for(var K;I.length&&(K=I.shift());)I.length||void 0===H?J[K]&&J[K]!==Object.prototype[K]?J=J[K]:J=J[K]={}:J[K]=H;}).call(this);var creativeData = {width: '300',height: '250',slotWidth: '300',slotHeight: '250',renderingLibraryData: {version: '200_270',renderingLibrary: 'https://s0.2mdn.net/879366/express_html_inpage_rendering_lib_200_270.js'},impressionUrl: 'https://googleads4.g.doubleclick.net/pcs/view?xai\x3dAKAOjstyQzi05jhVxA3FyJJVxPTMxyEvwX3990s2gvc3FUdat5L_8-epkFXKnv4tIONR0-zMU09bPeNkqDMD1NIUV-EgBWZ0HmYZ7k86N8t7WKQkXPsGpnPSnmd7blICWdxw_I8RZ3ZElhFXMFdKJUaUQXmPGSaETKQ_F2_HEB0AV5gIQJPWbsLDA32jc-62pykVstuC1XpcxZC3Hjn6J3A18MsSbfGRikkMOrtcf0ACfBdi14uRoAlu4r3Un8qf2Iw4maw4aIgOkh0Xnq2IF5vuAKQF7lyHQWR-yOHIq3vQAJsc3LPjgkcP2zOdqZjP6tYf6EFnOsUWmzdc2QCoSgs7QI6-5LH4ubkR1mJONEvdmPtKzB52avgPJmcjrxSlrfdiVqmizOHo0GkENRpCXuV1zY09jDOhBUIImbymYHZMxHJtAVAM5hZrRcVdFMZ1t8z6VTRFFYZMDCyo0AcCGqSeOFCVj3hJGZy3mlr2JYMQruZZaZbHW472mTB9GKxV3O_7t2Xewvs71JvES4lLiD7IN0_lPSrBmvHfdBe3e6w58sTZOj-e97fU01W1Xy_djcETn5n6BX_h67nUhW_idm4Tm_pWSt9JuIKKI7bfNSNWPPt2gpX1hL4B9rGRyNqA1RImANumypzQ1AYjgfvQkxGupyWtCQdZaobpEml0h4IlkAO78Xhp2CsCsPTSsdqLm0Jc7T4B6DPB0lLAtYwtxasFgErEACZw3dHZSwAAIG6xqUSST7zYXJ0G9duqPbw2tv0jRE0AaAqbrsPdSf8x2oQYcpSXC0Tsrh86HCD8XFR_69HFcDU1m2Xk0Xp85wDgXfDmZfMNccfEzO6hiuR9HyTKsE2Mrkj63tLmXuJEtindqWneLGKkFIV_8lK9yQ_jpZGgPZekdyDUBZ3Eq4OtgISQMRaY5jdqsPl3C2pB4wHWWoqgIGnSmRWVkth5jQtLHZkxXcc1BAhSkiqReeRrYx68wOJHCZIzAxhoBvS-zWL3J-3wmmHHKTUbXb5y7cwPsCNCmsCDaGjhneAaF5UgF7rvj6qShAR2ZQ5kwy5kq9d9K0kHKtOU_ZrQPByNmkA-hQGsYgtr_oU1TQ\x26sai\x3dAMfl-YQyNvJwQZT06e4uArUJpsg4V2pRienqrD8KmicGYhx1ld-GDz_lgNnZplZQhgTK917iX9ZoeFlQM2SJG3fkQmjPOmY1zcvpu2_aM1UVmGuFh2N_1OSND7ZHtBP2g8FPugiaiC_ABtVDpsJZVcWMMesyjeyGfA\x26sig\x3dCg0ArKJSzLOQfrYbXiaXEAE\x26pr\x3d6:2.249692\x26urlfix\x3d1\x26adurl\x3d',eventTrackingBaseUrl: 'https://ade.googlesyndication.com/ddm/activity/dc_oe\x3dChMI96Ol--G97AIVQRgbCh0_0Qv3EAAYACDHtLxCQhMIs6Cw-uG97AIVk2TgCh2BjA9B',customEventTrackingBaseUrl: 'https://ad.doubleclick.net/activity;src\x3d9451871;pid\x3d284825531;aid\x3d478608857;ko\x3d0;cid\x3d139401799;rid\x3d139492659;rv\x3d1;',clickUrl: 'https://adclick.g.doubleclick.net/pcs/click?xai\x3dAKAOjssUJIDRNQieiw3vjTG-Ap84iYdSerDvFpfOGpWzwDMbxdVEtAffvSVJyNiOmanTOqR0_Ug7uKvemkWrvJgPKspjkXwlEyjsOou_PkD2Fge9elHjTsmXwBt7J0HDGqvOPSFanR76rxcL4fcHnfZ2S2bbzUCker-e2q4ZDb9MnsDLkpr72t8VYQoBsRFWqVSu84F2N3jBoETEvEIdFyvmOPiK-Nx72D1AZHvM-jagnMNwa3JLudm_NO1EvMGvJzViGOD7QK-bHbBKaly32R9FDejO-hAk_DpCuGUOUz-eQQjKAdnGIr10rPx_SDUlfTFUV5m2YapAG9Xa-vNEgr8L1XMhwfytK7iySMV49YzzSrntgQ3eL_c9mW0yJOCeP9PPpcwe5BKYkXVTWG3sUr_WzKb9h4TZhCsoerlhZ0FbNepDd_VYhqWhLMDBC4f8bXSZ1r2TYhM54EfB5sxfae0LsRoGqo_N7bOkEJkcnv_JAHWUowr0gm8he9yMBYRny4ueodT-ApakF8d-5d_YYFZv3kwUB_nbOOweqF0yfwfLNRagnfFcjsC4sxjXaKIMcOnrRS0GID9OrK4kbKOgoZ_qU4vQMa6HI9E4RZm2rm8voQGrErfA5qi8TMq2DO_GNOdjRJkzcCXCKkDnbc1oPdnU6vlEr3y96BKmVVHpmFI3T9Fddq_prUrlLGRZMz4juye6vktk_6kANtoRI5bb7Aq6_MrZ7S1O8yvlnSqQGU3v_O7iyUcPUrpYaIWvRMiIk0UFahKtmb45H7uybncrjdOTjk_fKh98A6DGxyScymcJHFJRulNhmm7Hrl-CHEaQ4wAczNjEaLonE4dDGLvK6UVDdOOI5ws2OTWbdTw9b2IQmJvgfMD5s9v205vAKCGgEH4pfKgAR91q80AU0dudlgODct1bBJwNZ2okQuGoW8MDp_ROveT6Y-kVZ-B5Vj8Bf0D6X1OIG1H8KMNNa9HtWWi1Z8ThVuZYCkvKkNQ7JgSNQORn15HP2G_SA8HsBCc7Stt_MBYIsgLm_T6YUvjDzmBawwg6MyjL-oYDQ8LY5vbCYRvFufM87NukueO8-YaANpxPf2kVPF3CFg\x26sai\x3dAMfl-YR6_7Fic4TH55CUAFrSL1TVvBzkTe4EXp5iwg3EfiHyqqDQNFpDXr2XRurb98iH921ukuD538tBLX-LDjKygnNMrIfI_UyCWHzPav5htuNOlHnNSAWPaD9u6U1D2-K5m4ha5Awb-Jo_S4_-UQFc4wnpEFODez88hGlewh4ZNPb_GEg\x26sig\x3dCg0ArKJSzJ5EdshtOrL9EAE\x26pr\x3d6:2.249692\x26urlfix\x3d1\x26rm_eid\x3d[rm_exit_id]\x26adurl\x3dhttps://clicktrack.pubmatic.com/AdServer/AdDisplayTrackerServlet%3FclickData%3DJnB1YklkPTE1Nzk5NyZzaXRlSWQ9NjI3Mjk2JmFkSWQ9MjM3MjM3NiZrYWRzaXplaWQ9OSZ0bGRJZD01OTkyNzAyMiZjYW1wYWlnbklkPTIyOTg3JmNyZWF0aXZlSWQ9MCZ1Y3JpZD0xMTg1NjE4Mjc0MTQzMDg2MDQ5MSZhZFNlcnZlcklkPTI0MyZpbXBpZD1EMzZEQzQ5Ri03Q0NGLTQwMDEtOTdGNi1FQjFBQkY4QTIwQTEmcGFzc2JhY2s9MA%3D%3D_url%3D',thirdPartyUrls: [],clickString: 'BJGcPYgKMX_fqNcGwbL-ir7gPAAAAABABOAHgBAKIBfDR7wqgBkc',activeViewUrlPrefix: 'https://pagead2.googlesyndication.com/pcs/activeview?xai\x3dAKAOjsu12Dcpy4LCBIES7WQpu44v60Rp9pvM1ZDeZE-uui6yhkQvMIuD2HU7QodIhCQW-LBhUDJT61pnZfN3xhwUIs-kH-CNdJTdrA\x26sig\x3dCg0ArKJSzOngab_Cj7XbEAE',activeViewMetadata: 'la\x3d0\x26',activeViewAttributes: {'active_view_class_name': 'GoogleActiveViewElement','data-google-av-cxn': 'https://pagead2.googlesyndication.com/pcs/activeview?xai\x3dAKAOjsu12Dcpy4LCBIES7WQpu44v60Rp9pvM1ZDeZE-uui6yhkQvMIuD2HU7QodIhCQW-LBhUDJT61pnZfN3xhwUIs-kH-CNdJTdrA\x26sig\x3dCg0ArKJSzOngab_Cj7XbEAE','data-google-av-adk': '0','data-google-av-metadata': 'la\x3d0\x26','data-google-av-override': '-1','data-google-av-immediate': 'true','data-google-av-aid': '0','data-google-av-naid': '1','data-google-av-slift': '','data-google-av-cpmav': '','data-google-av-btr': '','data-google-av-itpl': '34','data-google-av-rs': '6','data-google-av-dm':'2'},lidarScriptUrl: '//www.googletagservices.com/activeview/js/current/rx_lidar.js?cache=r20110914',dynamicData: '',creativeParameters: {'CREATIVE_PARAMETER_ASSETS_DATA': '{\\\x2215784771578564186738/index.html\\\x22:\\\x22sadbundle/15784771578564186738/index.html\\\x22,\\\x22default-300x250_std_male_fr.jpg\\\x22:\\\x22simgad/7826707910076259004\\\x22}', 'CREATIVE_PARAMETER_VIDEO_ASSETS_DATA': '[]', 'CREATIVE_PARAMETER_VIDEO_DATA': '[]', 'CREATIVE_PARAMETER_LAYOUT_CONFIG': '', 'sid': '5404552', 'aid': '478608857', 'buy': '22800624', 'cid': '139401799', 'pid': '284825531', 'rv': '1', 'adv': '9451871', 'exit_suffix': 'dclid\x3d%edclid!', 'geo': 'ct\x3dFR\x26st\x3d\x26city\x3d0\x26dma\x3d0\x26zp\x3d72100\x26bw\x3d4', 'displayHTML5': 'true', 'CREATIVE_PARAMETER_EXPERIMENTS': '{ \\\x22add_sodar_interaction_signals\\\x22 : true, \\\x22append_spam_signals_to_click_url\\\x22 : true, \\\x22disable_h5_mraid_imp_ping\\\x22 : true }', 'CREATIVE_PARAMETER_IS_B2R_ELIGIBLE': 'true'},previewMode: false,html5Features: [],translated_layout: false,primaryFiles: [{type: 'HTML5',renderAs: 'BANNER',width: '300',height: '250',url: 'https://s0.2mdn.net/sadbundle/15784771578564186738/index.html',hideFlashObjects: false,zIndex: '',customCss: ''}, {type: 'IMAGE',renderAs: 'BACKUP_IMAGE',width: '300',height: '250',url: 'https://s0.2mdn.net/simgad/7826707910076259004',hideFlashObjects: false,zIndex: '',customCss: ''}],standardEvents: [{name: 'DISPLAY_TIMER',reportingId: '2'}, {name: 'INTERACTION_TIMER',reportingId: '3'}, {name: 'INTERACTIVE_IMPRESSION',reportingId: '4'}, {name: 'FULL_SCREEN_VIDEO_PLAYS',reportingId: '5'}, {name: 'FULL_SCREEN_VIDEO_COMPLETES',reportingId: '6'}, {name: 'FULL_SCREEN_AVERAGE_VIEW_TIME',reportingId: '7'}, {name: 'MANUAL_CLOSE',reportingId: '8'}, {name: 'BACKUP_IMAGE_IMPRESSION',reportingId: '9'}, {name: 'EXPAND_TIMER',reportingId: '10'}, {name: 'VIDEO_PLAY',reportingId: '11'}, {name: 'VIDEO_VIEW_TIMER',reportingId: '12'}, {name: 'VIDEO_COMPLETE',reportingId: '13'}, {name: 'VIDEO_INTERACTION',reportingId: '14'}, {name: 'VIDEO_PAUSE',reportingId: '15'}, {name: 'VIDEO_MUTE',reportingId: '16'}, {name: 'VIDEO_REPLAY',reportingId: '17'}, {name: 'VIDEO_MIDPOINT',reportingId: '18'}, {name: 'FULL_SCREEN_VIDEO',reportingId: '19'}, {name: 'VIDEO_STOP',reportingId: '20'}, {name: 'VIDEO_ABANDON',reportingId: '22'}, {name: 'VIDEO_UNMUTE',reportingId: '149645'}, {name: 'FULL_SCREEN',reportingId: '286263'}, {name: 'DYNAMIC_CREATIVE_IMPRESSION',reportingId: '536393'}, {name: 'HTML5_CREATIVE_IMPRESSION',reportingId: '871060'}, {name: 'VIDEO_FIRST_QUARTILE',reportingId: '960584'}, {name: 'VIDEO_THIRD_QUARTILE',reportingId: '960585'}, {name: 'LARGE_SCROLL',reportingId: '200035'}, {name: 'SMALL_SCROLL',reportingId: '200036'}, {name: 'SCROLL',reportingId: '200037'}, {name: 'ENGAGEMENT',reportingId: '200038'}],exitEvents: [{name: 'clickTag',reportingId: '7193942',destinationUrl: 'https://www.ubisoft.com/fr-fr/game/assassins-creed/valhalla/buy?ncid\x3d22-4043---1-exdp-66-12-ACV_Previews--2-1-8-1020-6-2---ID_95094-----webkitpreviews\x26maltcode\x3dbrands_C2W_exdp_other___ACU__Pre__\x26addinfo\x3dprogrammaticdisplay',targetWindow: '_blank',windowProperties: '',backUpExit: false}, {name: 'backup image click through url',reportingId: '7193945',destinationUrl: 'https://www.ubisoft.com/fr-fr/game/assassins-creed/valhalla/buy?ncid\x3d22-4043---1-exdp-66-12-ACV_Previews--2-1-8-1020-6-2---ID_95094-----webkitpreviews\x26maltcode\x3dbrands_C2W_exdp_other___ACU__Pre__\x26addinfo\x3dprogrammaticdisplay',targetWindow: '_blank',windowProperties: '',backUpExit: true}],timerEvents: [],counterEvents: []};try {studio.rendering.BowResponse.processCreativeData(creativeData);} catch (e) {/* ignore errors but don't kill js execution. */}})();</script><div id="dclk-studio-creative_1603011170994" style="display: inline-block; vertical-align: top;"><div id="DfaVisibilityIdentifier_1603011171238" class="GoogleActiveViewClass GoogleActiveViewElement" data-google-av-cxn="https://pagead2.googlesyndication.com/pcs/activeview?xai=AKAOjsu12Dcpy4LCBIES7WQpu44v60Rp9pvM1ZDeZE-uui6yhkQvMIuD2HU7QodIhCQW-LBhUDJT61pnZfN3xhwUIs-kH-CNdJTdrA&amp;sig=Cg0ArKJSzOngab_Cj7XbEAE" data-google-av-adk="0" data-google-av-metadata="la=0&amp;" data-google-av-override="-1" data-google-av-immediate="true" data-google-av-aid="0" data-google-av-naid="1" data-google-av-slift="" data-google-av-cpmav="" data-google-av-btr="" data-google-av-itpl="34" data-google-av-rs="6" data-google-av-dm="2" style="position: relative; width: 300px; height: 250px; box-sizing: content-box;" data-creative-load-listener=""><iframe data-creative-load-listener="" id="200_270_express_html_inpage_0.if" src="https://s0.2mdn.net/sadbundle/15784771578564186738/index.html" width="300" height="250" frameborder="0" scrolling="no" allowfullscreen="true" style="width: 300px; height: 250px;"></iframe></div></div><script data-jc="86" src="https://pagead2.googlesyndication.com/pagead/js/r20201014/r20110914/elements/html/omrhp.js" async="" data-jc-version="r20201014"></script><script>window.dicnf = {umi: true,eavp: true,ebrp: true,apfa: true,atsb: true,bvst: 'r20201014',eeid: 'YgKMX_fqNcGwbL-ir7gP',};(function(){/*  Copyright The Closure Library Authors. SPDX-License-Identifier: Apache-2.0 */ function g(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}var m=this||self;function n(a,b){return"&adurl="==a.substring(a.length-7)?a.substring(0,a.length-7)+b+"&adurl=":a+b};var p=m.dicnf||{};function t(a,b,c){a.addEventListener&&a.addEventListener(b,c,!1)};function w(a){this.a=a||m.document||document};function x(a){for(var b=m,c=0;b&&40>c++&&!a(b);)a:{try{var d=b.parent;if(d&&d!=b){b=d;break a}}catch(e){}b=null}}function z(a,b){if(a)for(var c in a)Object.prototype.hasOwnProperty.call(a,c)&&b.call(void 0,a[c],c,a)}var A=[];function B(){var a=A;A=[];var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];a=b?b.call(a):{next:g(a)};for(b=a.next();!b.done;b=a.next()){b=b.value;try{b()}catch(c){}}} function D(a,b){"complete"===a.readyState||"interactive"===a.readyState?(A.push(b),1==A.length&&(window.Promise?Promise.resolve().then(B):window.setImmediate?setImmediate(B):setTimeout(B,0))):a.addEventListener("DOMContentLoaded",b)};var E=["FRAME","IMG","IFRAME"],F=/^[01](px)?$/; function G(a,b){var c;var d=void 0===d?!0:d;var e=void 0===e?!1:e;var f=void 0===f?!1:f;if(a="string"===typeof a?document.getElementById(a):a){c||(c=function(y,T,U){y.addEventListener(T,U)});for(var h=!1,l=function(y){h||(h=!0,b(y))},r,u,q=0;q<E.length;++q)if(E[q]==a.tagName){u=3;r=[a];break}r||(r=a.querySelectorAll(E.join(",")),u=2);var v=0;a=!1;for(q=0;q<r.length;q++){var k=r[q];if(f||!("IMG"!=k.tagName||!k.complete||k.naturalWidth&&k.naturalHeight?F.test(k.getAttribute("width"))&&F.test(k.getAttribute("height")): 1)){if("IMG"==k.tagName)var C=k.naturalWidth&&k.naturalHeight?!0:!1;else try{C="complete"===(k.readyState?k.readyState:k.contentWindow&&k.contentWindow.document&&k.contentWindow.document.readyState)?!0:!1}catch(y){C=void 0===e?!1:e}C?a=!0:(v++,c(k,"load",function(){v--;v||l(u)}))}}r=null;if(0===v&&!a&&"complete"===m.document.readyState)u=5;else if(v||!a){c(m,"load",function(){l(4)});return}d&&l(u)}};function H(a,b,c){if(a)for(var d=0;null!=a&&500>d&&!c(a);++d)a=b(a)}function I(a,b){H(a,function(c){try{return c===c.parent?null:c.parent}catch(d){}return null},b)}function J(a,b){if("IFRAME"==a.tagName)b(a);else{a=a.querySelectorAll("IFRAME");for(var c=0;c<a.length&&!b(a[c]);++c);}}function K(a){return(a=a.ownerDocument)&&(a.parentWindow||a.defaultView)||null} function L(a,b,c){try{var d=JSON.parse(c.data)}catch(h){}if("object"===typeof d&&d&&"creativeLoad"===d.type){var e=K(a);if(c.source&&e){var f;I(c.source,function(h){try{if(h.parent===e)return f=h,!0}catch(l){}});f&&J(a,function(h){if(h.contentWindow===f)return b(d),!0})}}} function aa(a,b){var c="string"===typeof a?document.getElementById(a):a;if(c)if(c.onCreativeLoad)c.onCreativeLoad(b);else{var d=b?[b]:[],e=function(f){for(var h=0;h<d.length;++h)try{d[h](1,f)}catch(l){}d={push:function(l){l(1,f)}}};c.onCreativeLoad=function(f){d.push(f)};c.setAttribute("data-creative-load-listener","");c.addEventListener("creativeLoad",function(f){e(f.detail)});m.addEventListener("message",function(f){L(c,e,f)})}};function M(a){var b=this;this.b=!1;this.a=[];a(function(c){N(b,c)})}function N(a,b){if(!a.b)if(b instanceof M)O(b,function(c){N(a,c)});else{a.b=!0;a.c=b;for(b=0;b<a.a.length;++b)P(a,a.a[b]);a.a=[]}}function P(a,b){a.b?b(a.c):a.a.push(b)}function O(a,b){new M(function(c){P(a,function(d){c(b(d))})})}function ba(a){var b=a.length,c=0;return new M(function(d){if(0==b)d([]);else for(var e=[],f={f:0};f.f<b;f={f:f.f},++f.f)O(a[f.f],function(h){return function(l){e[h.f]=l;++c==b&&d(e)}}(f))})} function Q(){var a,b=new M(function(c){a=c});return new ca(b,a)}function ca(a,b){this.promise=a;this.a=b};function R(a){return{visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[a.visibilityState||a.webkitVisibilityState||a.mozVisibilityState||""]||0}function da(a){var b;a.visibilityState?b="visibilitychange":a.mozVisibilityState?b="mozvisibilitychange":a.webkitVisibilityState&&(b="webkitvisibilitychange");return b};function S(a,b,c){a.google_image_requests||(a.google_image_requests=[]);var d=a.document.createElement("img");c&&(d.referrerPolicy="no-referrer");d.src=b;a.google_image_requests.push(d)}var ea=function(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}(function(){return"referrerPolicy"in m.document.createElement("img")});function V(){this.a=m.document;this.b=null;fa(this)}function fa(a){var b=[];if(p.umi){var c=new M(function(e){a.b=e});b.push(c)}if(p.ebrpfa){var d=Q();b.push(d.promise);D(a.a,function(){G(a.a.body,d.a)})}3==R(a.a)&&3==R(a.a)&&b.push(ha(a));a.c=ba(b)}function ha(a){return new M(function(b){var c=da(a.a);if(c){var d=function(){if(3!=R(a.a)){var e=a.a;e.removeEventListener&&e.removeEventListener(c,d,!1);b()}};t(a.a,c,d)}})}V.a=void 0;V.b=function(){return V.a?V.a:V.a=new V};function ia(a,b){this.v=a;this.h=this.c=this.a=!1;this.C=1;this.g=p.eavp?1:0;this.b=p.ebrp?1:0;this.F=!!p.opxb;this.s=this.i=null;this.u=Q();this.A=(new Date).getTime();this.o=this.B=null;this.D=(Math.random()+"").slice(-5);this.j=!1;this.l=null;this.m=0;ja(this,b)}var W;function X(a,b){b&&0!==a.b&&(a.o=(new Date).getTime()-a.A,O(ka(a,b),function(c){c&&(a.i=c);a.h=!0;Y(a)}))} function ja(a,b){X(a,b);0!==a.b||0!==a.g?la(a)?O(ma(a),function(){Z(a)}):Z(a):a.l=1;O(V.b().c,function(){a.a=!0;Y(a)});na(a);Y(a)}function ka(a,b){return new M(function(c){function d(e,f){a.s=e;c(f)}aa(b,d);G(b,d)})}function la(a){a.j=oa();a.l=a.j?4:1;return a.j}function ma(a){return new M(function(b){function c(){a.l=3;b()}var d=m.omrhp;"function"===typeof d?d(c):(d=m.document.querySelector("script[data-jc='86']"))&&d.addEventListener("load",function(){m.omrhp(c)})})}function Z(a){a.c=!0;Y(a)} function Y(a){if(a.a){var b=null,c=0;2!==a.C?b=0:1===a.g&&a.a&&a.c?b=12:1===a.b&&a.a&&a.c&&a.h&&(b=11);if(null!=b){0===b?1===a.b&&a.a&&a.c&&a.h?c=2:1===a.g&&a.a&&a.c&&(c=1):12===b&&1===a.b&&a.a&&a.c&&a.h&&(c=2);var d=b,e=c;if(!a.F||0!==d||0!==e){var f=(new Date).getTime();c=pa(a,d,e,f);0===d&&(a.C=2,a.B=f);if(12===d||e)a.g=2;if(11===d||2===e)a.b=2;if(c)if(p.atsb){if(d=m.navigator)d=m.navigator.userAgent,d=/Chrome/.test(d)&&!/Edge/.test(d)?!0:!1;d&&m.navigator.sendBeacon?m.navigator.sendBeacon(c): S(m,c,!1)}else S(m,c,!1)}0===b&&a.u.a()}}}function pa(a,b,c,d){if(""===a.v)return null;var e={omid:a.j?1:0,rm:a.l,ctpt:d-a.A};0!==b&&(e.vt=b,e.dtpt=d-(a.B||0));0!==c&&(e.cbvp=c);a.s&&(e.dett=a.s);a.i&&(e.beid=a.i.eventId,e.vend=a.i.vendor);null!=a.o&&(e.cstd=a.o);(b=p.bvst)&&(e.cisv=b+("."+a.D));0!==a.m&&(e.vwbs=a.m);var f="";z(e,function(h,l){f+="&"+l+"="+encodeURIComponent(h)});return n(a.v,f)} function na(a){var b=p.eeid;if(b&&(b=m["bllsn"+b],"function"===typeof b))try{b(function(c){c&&(a.m=c.block?2:1)})}catch(c){}}function oa(){var a=m.omid3p,b=!!a&&"function"===typeof a.registerSessionObserver&&"function"===typeof a.addEventListener;b||x(function(c){try{var d=c.frames?!!c.frames.omid_v1_present:!1}catch(e){d=!1}d&&(b=!0);return b});return b};window.btrp=function(a,b){var c=W=new ia(a,b);return function(d){X(c,d)}};window.pdib3=function(a,b){O(W.u.promise,function(){if(b)if(ea())S(window,a,!0);else{var c=m.document;if(c.body){var d=c.getElementById("goog-srcless-iframe");if(!d){d=(new w(c)).a;var e="IFRAME";"application/xhtml+xml"===d.contentType&&(e=e.toLowerCase());d=d.createElement(e);d.style.display="none";d.id="goog-srcless-iframe";c.body.appendChild(d)}c=d}else c=null;c&&c.contentWindow&&S(c.contentWindow,a,!0)}else S(m,a,!1)})}; window.vv=function(){var a=V.b();if(!a.b)throw Error("aiv::err");a.b()};}).call(this);window.stcc = btrp("https://googleads4.g.doubleclick.net/pcs/view?xai\x3dAKAOjstyQzi05jhVxA3FyJJVxPTMxyEvwX3990s2gvc3FUdat5L_8-epkFXKnv4tIONR0-zMU09bPeNkqDMD1NIUV-EgBWZ0HmYZ7k86N8t7WKQkXPsGpnPSnmd7blICWdxw_I8RZ3ZElhFXMFdKJUaUQXmPGSaETKQ_F2_HEB0AV5gIQJPWbsLDA32jc-62pykVstuC1XpcxZC3Hjn6J3A18MsSbfGRikkMOrtcf0ACfBdi14uRoAlu4r3Un8qf2Iw4maw4aIgOkh0Xnq2IF5vuAKQF7lyHQWR-yOHIq3vQAJsc3LPjgkcP2zOdqZjP6tYf6EFnOsUWmzdc2QCoSgs7QI6-5LH4ubkR1mJONEvdmPtKzB52avgPJmcjrxSlrfdiVqmizOHo0GkENRpCXuV1zY09jDOhBUIImbymYHZMxHJtAVAM5hZrRcVdFMZ1t8z6VTRFFYZMDCyo0AcCGqSeOFCVj3hJGZy3mlr2JYMQruZZaZbHW472mTB9GKxV3O_7t2Xewvs71JvES4lLiD7IN0_lPSrBmvHfdBe3e6w58sTZOj-e97fU01W1Xy_djcETn5n6BX_h67nUhW_idm4Tm_pWSt9JuIKKI7bfNSNWPPt2gpX1hL4B9rGRyNqA1RImANumypzQ1AYjgfvQkxGupyWtCQdZaobpEml0h4IlkAO78Xhp2CsCsPTSsdqLm0Jc7T4B6DPB0lLAtYwtxasFgErEACZw3dHZSwAAIG6xqUSST7zYXJ0G9duqPbw2tv0jRE0AaAqbrsPdSf8x2oQYcpSXC0Tsrh86HCD8XFR_69HFcDU1m2Xk0Xp85wDgXfDmZfMNccfEzO6hiuR9HyTKsE2Mrkj63tLmXuJEtindqWneLGKkFIV_8lK9yQ_jpZGgPZekdyDUBZ3Eq4OtgISQMRaY5jdqsPl3C2pB4wHWWoqgIGnSmRWVkth5jQtLHZkxXcc1BAhSkiqReeRrYx68wOJHCZIzAxhoBvS-zWL3J-3wmmHHKTUbXb5y7cwPsCNCmsCDaGjhneAaF5UgF7rvj6qShAR2ZQ5kwy5kq9d9K0kHKtOU_ZrQPByNmkA-hQGsYgtr_oU1TQ\x26sai\x3dAMfl-YQyNvJwQZT06e4uArUJpsg4V2pRienqrD8KmicGYhx1ld-GDz_lgNnZplZQhgTK917iX9ZoeFlQM2SJG3fkQmjPOmY1zcvpu2_aM1UVmGuFh2N_1OSND7ZHtBP2g8FPugiaiC_ABtVDpsJZVcWMMesyjeyGfA\x26sig\x3dCg0ArKJSzLOQfrYbXiaXEAE\x26pr\x3d6:2.249692\x26urlfix\x3d1\x26adurl\x3d", document.getElementById("gcc_YgKMX_fqNcGwbL-ir7gP"));</script><noscript style="display: none;"><a target="_blank" href="https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjssUJIDRNQieiw3vjTG-Ap84iYdSerDvFpfOGpWzwDMbxdVEtAffvSVJyNiOmanTOqR0_Ug7uKvemkWrvJgPKspjkXwlEyjsOou_PkD2Fge9elHjTsmXwBt7J0HDGqvOPSFanR76rxcL4fcHnfZ2S2bbzUCker-e2q4ZDb9MnsDLkpr72t8VYQoBsRFWqVSu84F2N3jBoETEvEIdFyvmOPiK-Nx72D1AZHvM-jagnMNwa3JLudm_NO1EvMGvJzViGOD7QK-bHbBKaly32R9FDejO-hAk_DpCuGUOUz-eQQjKAdnGIr10rPx_SDUlfTFUV5m2YapAG9Xa-vNEgr8L1XMhwfytK7iySMV49YzzSrntgQ3eL_c9mW0yJOCeP9PPpcwe5BKYkXVTWG3sUr_WzKb9h4TZhCsoerlhZ0FbNepDd_VYhqWhLMDBC4f8bXSZ1r2TYhM54EfB5sxfae0LsRoGqo_N7bOkEJkcnv_JAHWUowr0gm8he9yMBYRny4ueodT-ApakF8d-5d_YYFZv3kwUB_nbOOweqF0yfwfLNRagnfFcjsC4sxjXaKIMcOnrRS0GID9OrK4kbKOgoZ_qU4vQMa6HI9E4RZm2rm8voQGrErfA5qi8TMq2DO_GNOdjRJkzcCXCKkDnbc1oPdnU6vlEr3y96BKmVVHpmFI3T9Fddq_prUrlLGRZMz4juye6vktk_6kANtoRI5bb7Aq6_MrZ7S1O8yvlnSqQGU3v_O7iyUcPUrpYaIWvRMiIk0UFahKtmb45H7uybncrjdOTjk_fKh98A6DGxyScymcJHFJRulNhmm7Hrl-CHEaQ4wAczNjEaLonE4dDGLvK6UVDdOOI5ws2OTWbdTw9b2IQmJvgfMD5s9v205vAKCGgEH4pfKgAR91q80AU0dudlgODct1bBJwNZ2okQuGoW8MDp_ROveT6Y-kVZ-B5Vj8Bf0D6X1OIG1H8KMNNa9HtWWi1Z8ThVuZYCkvKkNQ7JgSNQORn15HP2G_SA8HsBCc7Stt_MBYIsgLm_T6YUvjDzmBawwg6MyjL-oYDQ8LY5vbCYRvFufM87NukueO8-YaANpxPf2kVPF3CFg&amp;sai=AMfl-YR6_7Fic4TH55CUAFrSL1TVvBzkTe4EXp5iwg3EfiHyqqDQNFpDXr2XRurb98iH921ukuD538tBLX-LDjKygnNMrIfI_UyCWHzPav5htuNOlHnNSAWPaD9u6U1D2-K5m4ha5Awb-Jo_S4_-UQFc4wnpEFODez88hGlewh4ZNPb_GEg&amp;sig=Cg0ArKJSzJ5EdshtOrL9EAE&amp;pr=6:2.249692&amp;urlfix=1&amp;rm_eid=7193945&amp;adurl=https://clicktrack.pubmatic.com/AdServer/AdDisplayTrackerServlet%3FclickData%3DJnB1YklkPTE1Nzk5NyZzaXRlSWQ9NjI3Mjk2JmFkSWQ9MjM3MjM3NiZrYWRzaXplaWQ9OSZ0bGRJZD01OTkyNzAyMiZjYW1wYWlnbklkPTIyOTg3JmNyZWF0aXZlSWQ9MCZ1Y3JpZD0xMTg1NjE4Mjc0MTQzMDg2MDQ5MSZhZFNlcnZlcklkPTI0MyZpbXBpZD1EMzZEQzQ5Ri03Q0NGLTQwMDEtOTdGNi1FQjFBQkY4QTIwQTEmcGFzc2JhY2s9MA%3D%3D_url%3Dhttps://www.ubisoft.com/fr-fr/game/assassins-creed/valhalla/buy?ncid=22-4043---1-exdp-66-12-ACV_Previews--2-1-8-1020-6-2---ID_95094-----webkitpreviews&amp;maltcode=brands_C2W_exdp_other___ACU__Pre__&amp;addinfo=programmaticdisplay"><img src="https://s0.2mdn.net/simgad/7826707910076259004" width="300" height="250" border="0" /></a><img width="0px" height="0px" style="visibility:hidden" border="0" src="" alt="" /></noscript><style>div{margin:0;padding:0;}.abgcp{height:15px;padding-right:1px;padding-top:1px;padding-left:9px;padding-bottom:13px;right:0px;top:0px;position:absolute;width:31px;z-index:2147483646;}.abgc{display:block;height:15px;position:absolute;right:1px;top:1px;text-rendering:geometricPrecision;z-index:2147483646;}.abgb{display:inline-block;height:15px;}.abgc,.abgcp,.jar .abgc,.jar .abgcp,.jar .cbb{opacity:1;}.abgc{cursor:pointer;}.cbb{cursor:pointer;height:15px;width:15px;z-index:2147483646;background-color:#ffffff;opacity:0;}.cbb svg{position:absolute;top:0;right:0;height:15px;width:15px;stroke:#00aecd;stroke-width:1.25;}.abgb{position:absolute;right:16px;top:0px;}.cbb{position:absolute;right:0px;top:0px;}.abgs{display:none;height:100%;}.abgl{text-decoration:none;}.abgs svg,.abgb svg{display:inline-block;height:15px;width:auto;vertical-align:top;}.abgc .il-wrap{background-color:#ffffff;height:15px;white-space:nowrap;}.abgc .il-wrap.exp{border-bottom-left-radius:5px;}.abgc .il-text,.abgc .il-icon{display:inline-block;}.abgc .il-text{padding-right:1px;padding-left:5px;height:15px;width:55px;}.abgc .il-icon{height:15px;width:15px;}.abgc .il-text svg{fill:#000000;}.abgc .il-icon svg{fill:#00aecd}</style><div id="abgcp" class="abgcp"><div id="abgc" class="abgc" dir="ltr" aria-hidden="true"><div id="abgb" class="abgb"><div class="il-wrap"><div class="il-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 15 15"><circle cx="6" cy="6" r="0.67"></circle><path d="M4.2,11.3Q3.3,11.8,3.3,10.75L3.3,4.1Q3.3,3.1,4.3,3.5L10.4,7.0Q12.0,7.5,10.4,8.0L6.65,10.0L6.65,7.75a0.65,0.65,0,1,0,-1.3,0L5.35,10.75a0.9,0.9,0,0,0,1.3,0.8L12.7,8.2Q13.7,7.5,12.7,6.7L3.3,1.6Q2.2,1.3,1.8,2.5L1.8,12.5Q2.2,13.9,3.3,13.3L4.8,12.5A0.3,0.3,0,1,0,4.2,11.3Z"></path></svg></div></div></div><div id="abgs" class="abgs"><a id="abgl" class="abgl" href="https://adssettings.google.com/whythisad?reasons=AB3afGEAAASQW1tbW251bGwsWzIsNTNdXSxbbnVsbCwiaHR0cHM6Ly9nb29nbGVhZHMuZy5kb3VibGVjbGljay5uZXQvcGFnZWFkL2NvbnZlcnNpb24vP2FpPUNvTkxtWUFLTVg3UHdPcFBKZ1FlQm1iNklCTHkwMzlSZnFvVGgxdWdNdmRyX2o4UWNFQUVneTRuV0kyRDd5WWlEcUFxZ0FmZTk1TjRDeUFFSnFRSmtVbGNOZXFpelBxZ0RBYW9FdUFGUDBPOVNYNS1JQTh0VHlNSlJwOS1VOVE2VGZNQkttOUQzQnpLUW0zZjNnc1RKN3hPNXFFZVFmU3ozckZ1Y0JZTzVRajBXUHYwN0dVM2NXUzNSWGphLW1TcEtZVFc5WllZNEFCSEdENFd0WHZUNFl2Qmh3XzdtWmNlWXdCeC1mM1p3NFh0Mjd3ZVJQQndEYURPSkhFQXYxOUI2N3dIZXo4VThtUnNRamotXzdESVVzRWFnTXM1bVplb2dOcFprY29aMl9UQWpjX2hGUTltMVF1YnNHWThEVFp0U19kVzROcEVQellGUnFNY2JIa2hBSy1BenJQVk13QVRWdW9DZm5BUGdCQU9RQmdHZ0JqMkFCX0hCbTZFQnFBZU96aHVvQjlYSkc2Z0hrOWdicUFlNkJxZ0g4TmticUFmeTJSdW9CLXpWRzZnSHByNGJxQWZzMVJ1b0JfUFJHNmdIbHRnYnFBZkMyaHZZQndEU0NBa0lnT0dBRUJBQkdCX3lDQTFpYVdSa1pYSXROakkzTWprMmdBb0V5QXNCNEFzQmdBd0JzQk9Md2Q4SjBCTUEyQk1LMkJRQlx1MDAyNnNpZ2g9UEVKRmc1UUpueG9cdTAwMjZjaWQ9Q0FBU0V1Um84V2ZrenhqbW1TdUlSbUM2R0o2X3NBIixbbnVsbCxudWxsLG51bGwsImh0dHBzOi8vZGlzcGxheWFkcy1mb3JtYXRzLmdvb2dsZXVzZXJjb250ZW50LmNvbS9hZHMvcHJldmlldy9jb250ZW50LmpzP2NsaWVudD13dGFcdTAwMjZvYmZ1c2NhdGVkQ3VzdG9tZXJJZD0xMTExOTg1ODkzXHUwMDI2Y3JlYXRpdmVJZD00NzMwNDUyNzIyMjFcdTAwMjZ2ZXJzaW9uSWQ9MFx1MDAyNmFkR3JvdXBDcmVhdGl2ZUlkPTQ0MDQxNjA5MjcxNFx1MDAyNmh0bWxQYXJlbnRJZD1wcmV2LTBcdTAwMjZoZWlnaHQ9MFx1MDAyNndpZHRoPTBcdTAwMjZzaWc9QUNpVkJfenRHd2RSUWlxX1c1QzRfNERSaXJLZXJQQjRLUSJdLG51bGwsbnVsbCwxLCI4N2VMVnhrMmZtZ0lxb1RoMXVnTUVNYXN3SmNxR0kzcXVLRUJJZ3QxWW1semIyWjBMbU52YlRJSENBVVRHTDBqRkVJWFkyRXRjSFZpTFRZek5qSXhNVEU1TkRJeU1EUXdNelpJRWxnQVlKUUVjQUY2QmdnRUVnSUhLQSIsIjExMzIzNTc3OTI2Il1dXSxbbnVsbCxudWxsLDFdXWyXt8qxvTWt8PzCzS3pGaSOt7lH6mXwvGu1IRHWdpSJl-OPunYxEY6YY2tZmzUcEbj_Ij5rF1iJC5A1pgoAiglmXUe8hnaef-dPnxs2Rf3UqAL12PCULLEoU9Cjk4DS99IH3Xo6Ee2Sck4hpccGEpzJJygZjUn9mtn0hziI8bpfKLinN-ONvH6DFhSPjLtPIIf8XJ7HyoBT7TJd-uLk_0Kxii2MVwvGS7QfkrZFdrRvGaK6ZIE8imFemySBa6Jbb-Gd4o1cfDsfIN2P7T0a5P6kIqq0UwUIRIGFKhmqWoqDbi1ftKnXPPgZ9zft2tN5dgqyoKdqKqd9JYs501OosSM,PDoUQWgC-Jj1_-wkYCPY4g&amp;source=display" target="_blank"></a></div><div id="cbb" class="cbb" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 15 15"><path d="M3.25,3.25l8.5,8.5M11.75,3.25l-8.5,8.5"></path></svg></div></div></div><style>.mute_panel{z-index:2147483646;}.abgac{position:absolute;left:0px;top:0px;z-index:2147483646;display:none;width:100%;height:100%;background-color:#FAFAFA;}.mlsc{height:100%;display:flex;justify-content:center;align-items:center;}.mls{animation:mlskf 2s linear infinite;height:50%;width:50%;}.mlsd{stroke-dasharray:1,189;stroke-dashoffset:0;animation:mlsdkf 1.4s ease-in-out infinite;}@keyframes mlskf{100%{transform:rotate(360deg);}}@keyframes mlsdkf{0%{stroke-dasharray:1,189;stroke-dashoffset:0;}50%{stroke-dasharray:134,189;stroke-dashoffset:-53px;}100%{stroke-dasharray:134,189;stroke-dashoffset:-188px;}}</style><div id="mute_panel" class="mute_panel" aria-hidden="true"><div id="abgac" class="abgac" aria-hidden="true"><div id="mlsc" class="mlsc"><svg class="mls" viewBox="50 50 100 100"><circle class="mlsd" cx="100" cy="100" r="30" fill="none" stroke="#9E9E9E" stroke-width="3"></circle></svg></div></div></div><script data-jc="60" src="https://pagead2.googlesyndication.com/pagead/js/r20201014/r20110914/abg_lite.js" data-jc-version="r20201014"></script><script>document.write('\n\x3cscript\x3ebuildAttribution([[null,\x22https://googleads.g.doubleclick.net/pagead/images/mtad/x_blue.png\x22,null,\x22https://googleads.g.doubleclick.net/pagead/images/mtad/x_blue.png\x22,\x22https://googleads.g.doubleclick.net/pagead/conversion/?ai\x3dCoNLmYAKMX7PwOpPJgQeBmb6IBLy039RfqoTh1ugMvdr_j8QcEAEgy4nWI2D7yYiDqAqgAfe95N4CyAEJqQJkUlcNeqizPqgDAaoEuAFP0O9SX5-IA8tTyMJRp9-U9Q6TfMBKm9D3BzKQm3f3gsTJ7xO5qEeQfSz3rFucBYO5Qj0WPv07GU3cWS3RXja-mSpKYTW9ZYY4ABHGD4WtXvT4YvBhw_7mZceYwBx-f3Zw4Xt27weRPBwDaDOJHEAv19B67wHez8U8mRsQjj-_7DIUsEagMs5mZeogNpZkcoZ2_TAjc_hFQ9m1QubsGY8DTZtS_dW4NpEPzYFRqMcbHkhAK-AzrPVMwATVuoCfnAPgBAOQBgGgBj2AB_HBm6EBqAeOzhuoB9XJG6gHk9gbqAe6BqgH8NkbqAfy2RuoB-zVG6gHpr4bqAfs1RuoB_PRG6gHltgbqAfC2hvYBwDSCAkIgOGAEBABGB_yCA1iaWRkZXItNjI3Mjk2gAoEyAsB4AsBgAwBsBOLwd8J0BMA2BMK2BQB\\u0026sigh\x3dPEJFg5QJnxo\\u0026cid\x3dCAASEuRo8WfkzxjmmSuIRmC6GJ6_sA\x22,\x2287eLVxk2fmgIqoTh1ugMEMaswJcqGI3quKEBIgt1Ymlzb2Z0LmNvbTIHCAUTGL0jFEIXY2EtcHViLTYzNjIxMTE5NDIyMDQwMzZIElgAYJQEcAF6BggEEgIHKA\x22,[\x22user_feedback_menu_interaction\x22,\x22\x22,0],null,null,null,null,\x22What was wrong with this ad?\x22,null,\x22https://googleads.g.doubleclick.net/pagead/images/mtad/back_blue.png\x22,\x22Thanks for the feedback!\x22,\x22We’ll review this ad to improve the experience in the future.\x22,\x22Thanks for the feedback!\x22,\x22We’ll use your feedback to review ads on this site.\x22,null,null,null,\x22Closing ad: %1$d\x22,\x22Choisir sa pub\x22,\x22https://googleads.g.doubleclick.net/pagead/images/mtad/ad_choices_blue.png\x22,\x22https://www.google.com/url?ct\x3dabg\\u0026q\x3dhttps://www.google.com/adsense/support/bin/request.py%3Fcontact%3Dabg_afc%26url%3Dhttps://www.gamekult.com/%26gl%3DFR%26hl%3Den%26ai0%3D\\u0026usg\x3dAFQjCNEYxiPiNVIpvobqqbnYwwSEla3aDw\x22,\x22https://googleads.g.doubleclick.net/pagead/images/mtad/x_blue.png\x22,0,[[\x22Send feedback\x22,[\x22user_feedback_menu_option\x22,\x221\x22,1],[\x22What was wrong with this ad?\x22,[[\x22Ad was inappropriate\x22,[\x22mute_survey_option\x22,\x228\x22,1]],[\x22Seen this ad multiple times\x22,[\x22mute_survey_option\x22,\x222\x22,1]],[\x22Not interested in this ad\x22,[\x22mute_survey_option\x22,\x227\x22,1]],[\x22Ad covered content\x22,[\x22mute_survey_option\x22,\x223\x22,1]]]],[\x22user_feedback_undo\x22,\x221\x22,1]]],[\x22https://googleads.g.doubleclick.net/pagead/images/adchoices/iconx2-000000.png\x22,\x22AdChoices\x22,\x22Ad closed by %1$s\x22,null,\x22https://www.gstatic.com/images/branding/googlelogo/2x/googlelogo_dark_color_84x28dp.png\x22,\x22Send feedback\x22,\x22Thanks. Feedback improves Google ads\x22,null,null,null,null,null,null,\x22See my Google ad settings\x22,null,\x22https://www.gstatic.com\x22,\x2244723264\x22,\x22Ads by %1$s\x22,\x22Ad settings\x22,\x22https://adssettings.google.com\x22,\x22Political Ad\x22,null,null,1],\x22AB3afGEAAASQW1tbW251bGwsWzIsNTNdXSxbbnVsbCwiaHR0cHM6Ly9nb29nbGVhZHMuZy5kb3VibGVjbGljay5uZXQvcGFnZWFkL2NvbnZlcnNpb24vP2FpPUNvTkxtWUFLTVg3UHdPcFBKZ1FlQm1iNklCTHkwMzlSZnFvVGgxdWdNdmRyX2o4UWNFQUVneTRuV0kyRDd5WWlEcUFxZ0FmZTk1TjRDeUFFSnFRSmtVbGNOZXFpelBxZ0RBYW9FdUFGUDBPOVNYNS1JQTh0VHlNSlJwOS1VOVE2VGZNQkttOUQzQnpLUW0zZjNnc1RKN3hPNXFFZVFmU3ozckZ1Y0JZTzVRajBXUHYwN0dVM2NXUzNSWGphLW1TcEtZVFc5WllZNEFCSEdENFd0WHZUNFl2Qmh3XzdtWmNlWXdCeC1mM1p3NFh0Mjd3ZVJQQndEYURPSkhFQXYxOUI2N3dIZXo4VThtUnNRamotXzdESVVzRWFnTXM1bVplb2dOcFprY29aMl9UQWpjX2hGUTltMVF1YnNHWThEVFp0U19kVzROcEVQellGUnFNY2JIa2hBSy1BenJQVk13QVRWdW9DZm5BUGdCQU9RQmdHZ0JqMkFCX0hCbTZFQnFBZU96aHVvQjlYSkc2Z0hrOWdicUFlNkJxZ0g4TmticUFmeTJSdW9CLXpWRzZnSHByNGJxQWZzMVJ1b0JfUFJHNmdIbHRnYnFBZkMyaHZZQndEU0NBa0lnT0dBRUJBQkdCX3lDQTFpYVdSa1pYSXROakkzTWprMmdBb0V5QXNCNEFzQmdBd0JzQk9Md2Q4SjBCTUEyQk1LMkJRQlx1MDAyNnNpZ2g9UEVKRmc1UUpueG9cdTAwMjZjaWQ9Q0FBU0V1Um84V2ZrenhqbW1TdUlSbUM2R0o2X3NBIixbbnVsbCxudWxsLG51bGwsImh0dHBzOi8vZGlzcGxheWFkcy1mb3JtYXRzLmdvb2dsZXVzZXJjb250ZW50LmNvbS9hZHMvcHJldmlldy9jb250ZW50LmpzP2NsaWVudD13dGFcdTAwMjZvYmZ1c2NhdGVkQ3VzdG9tZXJJZD0xMTExOTg1ODkzXHUwMDI2Y3JlYXRpdmVJZD00NzMwNDUyNzIyMjFcdTAwMjZ2ZXJzaW9uSWQ9MFx1MDAyNmFkR3JvdXBDcmVhdGl2ZUlkPTQ0MDQxNjA5MjcxNFx1MDAyNmh0bWxQYXJlbnRJZD1wcmV2LTBcdTAwMjZoZWlnaHQ9MFx1MDAyNndpZHRoPTBcdTAwMjZzaWc9QUNpVkJfenRHd2RSUWlxX1c1QzRfNERSaXJLZXJQQjRLUSJdLG51bGwsbnVsbCwxLCI4N2VMVnhrMmZtZ0lxb1RoMXVnTUVNYXN3SmNxR0kzcXVLRUJJZ3QxWW1semIyWjBMbU52YlRJSENBVVRHTDBqRkVJWFkyRXRjSFZpTFRZek5qSXhNVEU1TkRJeU1EUXdNelpJRWxnQVlKUUVjQUY2QmdnRUVnSUhLQSIsIjExMzIzNTc3OTI2Il1dXSxbbnVsbCxudWxsLDFdXWyXt8qxvTWt8PzCzS3pGaSOt7lH6mXwvGu1IRHWdpSJl-OPunYxEY6YY2tZmzUcEbj_Ij5rF1iJC5A1pgoAiglmXUe8hnaef-dPnxs2Rf3UqAL12PCULLEoU9Cjk4DS99IH3Xo6Ee2Sck4hpccGEpzJJygZjUn9mtn0hziI8bpfKLinN-ONvH6DFhSPjLtPIIf8XJ7HyoBT7TJd-uLk_0Kxii2MVwvGS7QfkrZFdrRvGaK6ZIE8imFemySBa6Jbb-Gd4o1cfDsfIN2P7T0a5P6kIqq0UwUIRIGFKhmqWoqDbi1ftKnXPPgZ9zft2tN5dgqyoKdqKqd9JYs501OosSM,PDoUQWgC-Jj1_-wkYCPY4g\x22,\x22https://adssettings.google.com/whythisad?reasons\x3dAB3afGEAAASQW1tbW251bGwsWzIsNTNdXSxbbnVsbCwiaHR0cHM6Ly9nb29nbGVhZHMuZy5kb3VibGVjbGljay5uZXQvcGFnZWFkL2NvbnZlcnNpb24vP2FpPUNvTkxtWUFLTVg3UHdPcFBKZ1FlQm1iNklCTHkwMzlSZnFvVGgxdWdNdmRyX2o4UWNFQUVneTRuV0kyRDd5WWlEcUFxZ0FmZTk1TjRDeUFFSnFRSmtVbGNOZXFpelBxZ0RBYW9FdUFGUDBPOVNYNS1JQTh0VHlNSlJwOS1VOVE2VGZNQkttOUQzQnpLUW0zZjNnc1RKN3hPNXFFZVFmU3ozckZ1Y0JZTzVRajBXUHYwN0dVM2NXUzNSWGphLW1TcEtZVFc5WllZNEFCSEdENFd0WHZUNFl2Qmh3XzdtWmNlWXdCeC1mM1p3NFh0Mjd3ZVJQQndEYURPSkhFQXYxOUI2N3dIZXo4VThtUnNRamotXzdESVVzRWFnTXM1bVplb2dOcFprY29aMl9UQWpjX2hGUTltMVF1YnNHWThEVFp0U19kVzROcEVQellGUnFNY2JIa2hBSy1BenJQVk13QVRWdW9DZm5BUGdCQU9RQmdHZ0JqMkFCX0hCbTZFQnFBZU96aHVvQjlYSkc2Z0hrOWdicUFlNkJxZ0g4TmticUFmeTJSdW9CLXpWRzZnSHByNGJxQWZzMVJ1b0JfUFJHNmdIbHRnYnFBZkMyaHZZQndEU0NBa0lnT0dBRUJBQkdCX3lDQTFpYVdSa1pYSXROakkzTWprMmdBb0V5QXNCNEFzQmdBd0JzQk9Md2Q4SjBCTUEyQk1LMkJRQlx1MDAyNnNpZ2g9UEVKRmc1UUpueG9cdTAwMjZjaWQ9Q0FBU0V1Um84V2ZrenhqbW1TdUlSbUM2R0o2X3NBIixbbnVsbCxudWxsLG51bGwsImh0dHBzOi8vZGlzcGxheWFkcy1mb3JtYXRzLmdvb2dsZXVzZXJjb250ZW50LmNvbS9hZHMvcHJldmlldy9jb250ZW50LmpzP2NsaWVudD13dGFcdTAwMjZvYmZ1c2NhdGVkQ3VzdG9tZXJJZD0xMTExOTg1ODkzXHUwMDI2Y3JlYXRpdmVJZD00NzMwNDUyNzIyMjFcdTAwMjZ2ZXJzaW9uSWQ9MFx1MDAyNmFkR3JvdXBDcmVhdGl2ZUlkPTQ0MDQxNjA5MjcxNFx1MDAyNmh0bWxQYXJlbnRJZD1wcmV2LTBcdTAwMjZoZWlnaHQ9MFx1MDAyNndpZHRoPTBcdTAwMjZzaWc9QUNpVkJfenRHd2RSUWlxX1c1QzRfNERSaXJLZXJQQjRLUSJdLG51bGwsbnVsbCwxLCI4N2VMVnhrMmZtZ0lxb1RoMXVnTUVNYXN3SmNxR0kzcXVLRUJJZ3QxWW1semIyWjBMbU52YlRJSENBVVRHTDBqRkVJWFkyRXRjSFZpTFRZek5qSXhNVEU1TkRJeU1EUXdNelpJRWxnQVlKUUVjQUY2QmdnRUVnSUhLQSIsIjExMzIzNTc3OTI2Il1dXSxbbnVsbCxudWxsLDFdXWyXt8qxvTWt8PzCzS3pGaSOt7lH6mXwvGu1IRHWdpSJl-OPunYxEY6YY2tZmzUcEbj_Ij5rF1iJC5A1pgoAiglmXUe8hnaef-dPnxs2Rf3UqAL12PCULLEoU9Cjk4DS99IH3Xo6Ee2Sck4hpccGEpzJJygZjUn9mtn0hziI8bpfKLinN-ONvH6DFhSPjLtPIIf8XJ7HyoBT7TJd-uLk_0Kxii2MVwvGS7QfkrZFdrRvGaK6ZIE8imFemySBa6Jbb-Gd4o1cfDsfIN2P7T0a5P6kIqq0UwUIRIGFKhmqWoqDbi1ftKnXPPgZ9zft2tN5dgqyoKdqKqd9JYs501OosSM,PDoUQWgC-Jj1_-wkYCPY4g\\u0026source\x3ddisplay\x22,\x22Why this ad?\x22,1],null,null,0,null,0,0,1,0,0,0,1,0,0,0,null,0,1,0,null,[[\x22jake_ui_extension\x22,\x22jake_default_ui\x22]],250,300,0,null,null,0,null,null,\x22right\x22,0]);\x3c/script\x3e');</script>
<script>buildAttribution([[null,"https://googleads.g.doubleclick.net/pagead/images/mtad/x_blue.png",null,"https://googleads.g.doubleclick.net/pagead/images/mtad/x_blue.png","https://googleads.g.doubleclick.net/pagead/conversion/?ai=CoNLmYAKMX7PwOpPJgQeBmb6IBLy039RfqoTh1ugMvdr_j8QcEAEgy4nWI2D7yYiDqAqgAfe95N4CyAEJqQJkUlcNeqizPqgDAaoEuAFP0O9SX5-IA8tTyMJRp9-U9Q6TfMBKm9D3BzKQm3f3gsTJ7xO5qEeQfSz3rFucBYO5Qj0WPv07GU3cWS3RXja-mSpKYTW9ZYY4ABHGD4WtXvT4YvBhw_7mZceYwBx-f3Zw4Xt27weRPBwDaDOJHEAv19B67wHez8U8mRsQjj-_7DIUsEagMs5mZeogNpZkcoZ2_TAjc_hFQ9m1QubsGY8DTZtS_dW4NpEPzYFRqMcbHkhAK-AzrPVMwATVuoCfnAPgBAOQBgGgBj2AB_HBm6EBqAeOzhuoB9XJG6gHk9gbqAe6BqgH8NkbqAfy2RuoB-zVG6gHpr4bqAfs1RuoB_PRG6gHltgbqAfC2hvYBwDSCAkIgOGAEBABGB_yCA1iaWRkZXItNjI3Mjk2gAoEyAsB4AsBgAwBsBOLwd8J0BMA2BMK2BQB\u0026sigh=PEJFg5QJnxo\u0026cid=CAASEuRo8WfkzxjmmSuIRmC6GJ6_sA","87eLVxk2fmgIqoTh1ugMEMaswJcqGI3quKEBIgt1Ymlzb2Z0LmNvbTIHCAUTGL0jFEIXY2EtcHViLTYzNjIxMTE5NDIyMDQwMzZIElgAYJQEcAF6BggEEgIHKA",["user_feedback_menu_interaction","",0],null,null,null,null,"What was wrong with this ad?",null,"https://googleads.g.doubleclick.net/pagead/images/mtad/back_blue.png","Thanks for the feedback!","We’ll review this ad to improve the experience in the future.","Thanks for the feedback!","We’ll use your feedback to review ads on this site.",null,null,null,"Closing ad: %1$d","Choisir sa pub","https://googleads.g.doubleclick.net/pagead/images/mtad/ad_choices_blue.png","https://www.google.com/url?ct=abg\u0026q=https://www.google.com/adsense/support/bin/request.py%3Fcontact%3Dabg_afc%26url%3Dhttps://www.gamekult.com/%26gl%3DFR%26hl%3Den%26ai0%3D\u0026usg=AFQjCNEYxiPiNVIpvobqqbnYwwSEla3aDw","https://googleads.g.doubleclick.net/pagead/images/mtad/x_blue.png",0,[["Send feedback",["user_feedback_menu_option","1",1],["What was wrong with this ad?",[["Ad was inappropriate",["mute_survey_option","8",1]],["Seen this ad multiple times",["mute_survey_option","2",1]],["Not interested in this ad",["mute_survey_option","7",1]],["Ad covered content",["mute_survey_option","3",1]]]],["user_feedback_undo","1",1]]],["https://googleads.g.doubleclick.net/pagead/images/adchoices/iconx2-000000.png","AdChoices","Ad closed by %1$s",null,"https://www.gstatic.com/images/branding/googlelogo/2x/googlelogo_dark_color_84x28dp.png","Send feedback","Thanks. Feedback improves Google ads",null,null,null,null,null,null,"See my Google ad settings",null,"https://www.gstatic.com","44723264","Ads by %1$s","Ad settings","https://adssettings.google.com","Political Ad",null,null,1],"AB3afGEAAASQW1tbW251bGwsWzIsNTNdXSxbbnVsbCwiaHR0cHM6Ly9nb29nbGVhZHMuZy5kb3VibGVjbGljay5uZXQvcGFnZWFkL2NvbnZlcnNpb24vP2FpPUNvTkxtWUFLTVg3UHdPcFBKZ1FlQm1iNklCTHkwMzlSZnFvVGgxdWdNdmRyX2o4UWNFQUVneTRuV0kyRDd5WWlEcUFxZ0FmZTk1TjRDeUFFSnFRSmtVbGNOZXFpelBxZ0RBYW9FdUFGUDBPOVNYNS1JQTh0VHlNSlJwOS1VOVE2VGZNQkttOUQzQnpLUW0zZjNnc1RKN3hPNXFFZVFmU3ozckZ1Y0JZTzVRajBXUHYwN0dVM2NXUzNSWGphLW1TcEtZVFc5WllZNEFCSEdENFd0WHZUNFl2Qmh3XzdtWmNlWXdCeC1mM1p3NFh0Mjd3ZVJQQndEYURPSkhFQXYxOUI2N3dIZXo4VThtUnNRamotXzdESVVzRWFnTXM1bVplb2dOcFprY29aMl9UQWpjX2hGUTltMVF1YnNHWThEVFp0U19kVzROcEVQellGUnFNY2JIa2hBSy1BenJQVk13QVRWdW9DZm5BUGdCQU9RQmdHZ0JqMkFCX0hCbTZFQnFBZU96aHVvQjlYSkc2Z0hrOWdicUFlNkJxZ0g4TmticUFmeTJSdW9CLXpWRzZnSHByNGJxQWZzMVJ1b0JfUFJHNmdIbHRnYnFBZkMyaHZZQndEU0NBa0lnT0dBRUJBQkdCX3lDQTFpYVdSa1pYSXROakkzTWprMmdBb0V5QXNCNEFzQmdBd0JzQk9Md2Q4SjBCTUEyQk1LMkJRQlx1MDAyNnNpZ2g9UEVKRmc1UUpueG9cdTAwMjZjaWQ9Q0FBU0V1Um84V2ZrenhqbW1TdUlSbUM2R0o2X3NBIixbbnVsbCxudWxsLG51bGwsImh0dHBzOi8vZGlzcGxheWFkcy1mb3JtYXRzLmdvb2dsZXVzZXJjb250ZW50LmNvbS9hZHMvcHJldmlldy9jb250ZW50LmpzP2NsaWVudD13dGFcdTAwMjZvYmZ1c2NhdGVkQ3VzdG9tZXJJZD0xMTExOTg1ODkzXHUwMDI2Y3JlYXRpdmVJZD00NzMwNDUyNzIyMjFcdTAwMjZ2ZXJzaW9uSWQ9MFx1MDAyNmFkR3JvdXBDcmVhdGl2ZUlkPTQ0MDQxNjA5MjcxNFx1MDAyNmh0bWxQYXJlbnRJZD1wcmV2LTBcdTAwMjZoZWlnaHQ9MFx1MDAyNndpZHRoPTBcdTAwMjZzaWc9QUNpVkJfenRHd2RSUWlxX1c1QzRfNERSaXJLZXJQQjRLUSJdLG51bGwsbnVsbCwxLCI4N2VMVnhrMmZtZ0lxb1RoMXVnTUVNYXN3SmNxR0kzcXVLRUJJZ3QxWW1semIyWjBMbU52YlRJSENBVVRHTDBqRkVJWFkyRXRjSFZpTFRZek5qSXhNVEU1TkRJeU1EUXdNelpJRWxnQVlKUUVjQUY2QmdnRUVnSUhLQSIsIjExMzIzNTc3OTI2Il1dXSxbbnVsbCxudWxsLDFdXWyXt8qxvTWt8PzCzS3pGaSOt7lH6mXwvGu1IRHWdpSJl-OPunYxEY6YY2tZmzUcEbj_Ij5rF1iJC5A1pgoAiglmXUe8hnaef-dPnxs2Rf3UqAL12PCULLEoU9Cjk4DS99IH3Xo6Ee2Sck4hpccGEpzJJygZjUn9mtn0hziI8bpfKLinN-ONvH6DFhSPjLtPIIf8XJ7HyoBT7TJd-uLk_0Kxii2MVwvGS7QfkrZFdrRvGaK6ZIE8imFemySBa6Jbb-Gd4o1cfDsfIN2P7T0a5P6kIqq0UwUIRIGFKhmqWoqDbi1ftKnXPPgZ9zft2tN5dgqyoKdqKqd9JYs501OosSM,PDoUQWgC-Jj1_-wkYCPY4g","https://adssettings.google.com/whythisad?reasons=AB3afGEAAASQW1tbW251bGwsWzIsNTNdXSxbbnVsbCwiaHR0cHM6Ly9nb29nbGVhZHMuZy5kb3VibGVjbGljay5uZXQvcGFnZWFkL2NvbnZlcnNpb24vP2FpPUNvTkxtWUFLTVg3UHdPcFBKZ1FlQm1iNklCTHkwMzlSZnFvVGgxdWdNdmRyX2o4UWNFQUVneTRuV0kyRDd5WWlEcUFxZ0FmZTk1TjRDeUFFSnFRSmtVbGNOZXFpelBxZ0RBYW9FdUFGUDBPOVNYNS1JQTh0VHlNSlJwOS1VOVE2VGZNQkttOUQzQnpLUW0zZjNnc1RKN3hPNXFFZVFmU3ozckZ1Y0JZTzVRajBXUHYwN0dVM2NXUzNSWGphLW1TcEtZVFc5WllZNEFCSEdENFd0WHZUNFl2Qmh3XzdtWmNlWXdCeC1mM1p3NFh0Mjd3ZVJQQndEYURPSkhFQXYxOUI2N3dIZXo4VThtUnNRamotXzdESVVzRWFnTXM1bVplb2dOcFprY29aMl9UQWpjX2hGUTltMVF1YnNHWThEVFp0U19kVzROcEVQellGUnFNY2JIa2hBSy1BenJQVk13QVRWdW9DZm5BUGdCQU9RQmdHZ0JqMkFCX0hCbTZFQnFBZU96aHVvQjlYSkc2Z0hrOWdicUFlNkJxZ0g4TmticUFmeTJSdW9CLXpWRzZnSHByNGJxQWZzMVJ1b0JfUFJHNmdIbHRnYnFBZkMyaHZZQndEU0NBa0lnT0dBRUJBQkdCX3lDQTFpYVdSa1pYSXROakkzTWprMmdBb0V5QXNCNEFzQmdBd0JzQk9Md2Q4SjBCTUEyQk1LMkJRQlx1MDAyNnNpZ2g9UEVKRmc1UUpueG9cdTAwMjZjaWQ9Q0FBU0V1Um84V2ZrenhqbW1TdUlSbUM2R0o2X3NBIixbbnVsbCxudWxsLG51bGwsImh0dHBzOi8vZGlzcGxheWFkcy1mb3JtYXRzLmdvb2dsZXVzZXJjb250ZW50LmNvbS9hZHMvcHJldmlldy9jb250ZW50LmpzP2NsaWVudD13dGFcdTAwMjZvYmZ1c2NhdGVkQ3VzdG9tZXJJZD0xMTExOTg1ODkzXHUwMDI2Y3JlYXRpdmVJZD00NzMwNDUyNzIyMjFcdTAwMjZ2ZXJzaW9uSWQ9MFx1MDAyNmFkR3JvdXBDcmVhdGl2ZUlkPTQ0MDQxNjA5MjcxNFx1MDAyNmh0bWxQYXJlbnRJZD1wcmV2LTBcdTAwMjZoZWlnaHQ9MFx1MDAyNndpZHRoPTBcdTAwMjZzaWc9QUNpVkJfenRHd2RSUWlxX1c1QzRfNERSaXJLZXJQQjRLUSJdLG51bGwsbnVsbCwxLCI4N2VMVnhrMmZtZ0lxb1RoMXVnTUVNYXN3SmNxR0kzcXVLRUJJZ3QxWW1semIyWjBMbU52YlRJSENBVVRHTDBqRkVJWFkyRXRjSFZpTFRZek5qSXhNVEU1TkRJeU1EUXdNelpJRWxnQVlKUUVjQUY2QmdnRUVnSUhLQSIsIjExMzIzNTc3OTI2Il1dXSxbbnVsbCxudWxsLDFdXWyXt8qxvTWt8PzCzS3pGaSOt7lH6mXwvGu1IRHWdpSJl-OPunYxEY6YY2tZmzUcEbj_Ij5rF1iJC5A1pgoAiglmXUe8hnaef-dPnxs2Rf3UqAL12PCULLEoU9Cjk4DS99IH3Xo6Ee2Sck4hpccGEpzJJygZjUn9mtn0hziI8bpfKLinN-ONvH6DFhSPjLtPIIf8XJ7HyoBT7TJd-uLk_0Kxii2MVwvGS7QfkrZFdrRvGaK6ZIE8imFemySBa6Jbb-Gd4o1cfDsfIN2P7T0a5P6kIqq0UwUIRIGFKhmqWoqDbi1ftKnXPPgZ9zft2tN5dgqyoKdqKqd9JYs501OosSM,PDoUQWgC-Jj1_-wkYCPY4g\u0026source=display","Why this ad?",1],null,null,0,null,0,0,1,0,0,0,1,0,0,0,null,0,1,0,null,[["jake_ui_extension","jake_default_ui"]],250,300,0,null,null,0,null,null,"right",0]);</script></div><script type="text/javascript">(function() {if (!window.GoogleTyFxhY || typeof window.GoogleTyFxhY.push !== 'function') {window.GoogleTyFxhY = [];}window.GoogleTyFxhY.push({'_scs_': 'BxmO5YgKMX_fqNcGwbL-ir7gPAAAAADgB4AQC','_bgu_': 'https://pagead2.googlesyndication.com/bg/36t2pzUCsky2p8StOfRDuZ2SQrRQGkwFUvrIpVyovYo.js','_bgp_': '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\x3d\x3d','_ifr_': 'false'});var gsodar = document.createElement('script');gsodar.type = 'text/javascript';gsodar.async = true;gsodar.src = '//tpc.googlesyndication.com/sodar/UFYwWwmt.js';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(gsodar, s);})();</script></div></div><iframe width="0" scrolling="no" height="0" frameborder="0" src="https://ads.pubmatic.com/AdServer/js/showad.js#PIX&amp;ptask=DSP&amp;SPug=1&amp;fp=1&amp;mpc=10&amp;u=336D18A8-723E-4A8B-AEED-1740CB3D0FD3&amp;p=157997&amp;s=627296&amp;d=3&amp;cp=0&amp;sc=1&amp;rs=0&amp;os=0&amp;gdpr=1&amp;gdpr_consent=CO7d4t-O7d4t-AHABBENA7CsAP_AAH_AAAAAGstD_TrMYyNj2XZ9Nps0aYxexMSXo2wCjAaJAWgBAQKAIJQGwmAQpAHgBCAKIAAEIiJBAAIlDCHACQAA4IABASAAIAiABBIIICIAgEAQAwAICBBCCMAAAQKYgAAEEAUAmwoAAAoiQAAAAAAAAgZIACYKkwBAkJYQEk0KRQogAhEABUAIAKIAIEAaAABAAAghAISQAAAAAAAAAgAAAAiAkEAAAAAAUAAAAHggAABAAAAAAAAAAgAIgAAQAAAAAAAAAIAgAAEAIAAAAQABQCBAAAAAAJAA.f_gAD_gAAAAA" style="position:absolute;top:-15000px;left:-15000px" vspace="0" hspace="0" marginwidth="0" marginheight="0" allowtransparency="true" name="synciframe"></iframe><iframe width="0" scrolling="no" height="0" frameborder="0" src="https://aktrack.pubmatic.com/AdServer/AdDisplayTrackerServlet?operId=1&amp;pubId=157997&amp;siteId=627296&amp;adId=2372376&amp;adType=10&amp;adServerId=243&amp;kefact=2.249692&amp;kaxefact=2.249692&amp;kadNetFrequecy=0&amp;kadwidth=300&amp;kadheight=250&amp;kadsizeid=9&amp;kltstamp=1603011169&amp;indirectAdId=0&amp;adServerOptimizerId=2&amp;ranreq=0.1&amp;kpbmtpfact=2.249692&amp;dcId=3&amp;tldId=59927022&amp;passback=0&amp;svr=BID22432U&amp;adsver=_4071972720&amp;adsabzcid=0&amp;ekefact=YQKMX2F4AQBtUZsQAAekM4WbQ-tTK8EmhXJybk0m-z_ruZU4&amp;ekaxefact=YQKMX454AQA-IHHxY7lE4IHQFidaKatd03nnpZWP_va7o0nA&amp;ekpbmtpfact=YQKMX7x4AQDdGOWS2xaYIPE1fJwrkcjPhHd93f8npD5r4Eko&amp;enpp=YQKMX9F4AQBa0pKjxd679f2LnnUa0UJNkhLNk8QTa4PhbVcc&amp;pubBuyId=23965&amp;crID=309040879&amp;lpu=ubisoft.com&amp;ucrid=11856182741430860491&amp;campaignId=22987&amp;creativeId=0&amp;pctr=0.000000&amp;wDSPByrId=4514634&amp;wDspId=80&amp;wbId=3&amp;wrId=0&amp;wAdvID=2723&amp;wDspCampId=42897114&amp;isRTB=1&amp;rtbId=DCFCE977-7388-43A5-8298-84B1B494CA8A&amp;imprId=D36DC49F-7CCF-4001-97F6-EB1ABF8A20A1&amp;oid=D36DC49F-7CCF-4001-97F6-EB1ABF8A20A1&amp;cntryId=77&amp;pageURL=https%3A%2F%2Fwww.gamekult.com%2F&amp;sec=1&amp;pmc=1&amp;pAuSt=3" style="position:absolute;top:-15000px;left:-15000px" vspace="0" hspace="0" marginwidth="0" marginheight="0" allowtransparency="true" name="pbeacon"></iframe></span> <!-- PubMatic Ad Ends --></div><script src="https://www.googletagservices.com/activeview/js/current/osd_listener.js?cache=r20110914"></script><script type="text/javascript">osdlfm(-1,'','BmmprYgKMX6S1E9Gj-waFlrWYCQAAAAAQATgByAEJwAIC4AIA4AQBoAYWiAcB0ggHCICAgBAQAg','',2365789258,true,'la\x3d0\x26xdi\x3d0\x26',3,'','https://pagead2.googlesyndication.com/pcs/activeview?xai\x3dAKAOjsswG4WetZW87eZz2aqDBweKCA8NDtleNjK4ZlU7leS8MCxhZHgysY3wHCY4NjC-BYunvvpuEsGm9ZUyJ8w-PO7PGiU-4CskLPXYjsHAEck\x26sig\x3dCg0ArKJSzDc0qy_HUkHUEAE','');</script><div style="bottom:0;right:0;width:100px;height:100px;background:initial !important;position:absolute !important;max-width:100% !important;max-height:100% !important;pointer-events:none !important;image-rendering:pixelated !important;z-index:2147483647;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAWBAMAAACrl3iAAAAABlBMVEUAAAD+AciWmZzWAAAAAnRSTlMAApidrBQAAAB3SURBVBjTbZABDsAwCALZD/z/a5eJCCYzzVpXSq8A//Ww8KC/0wHVuzVD3aj6GNx9iqKqovN+3JDeON4mQZKo6qvgxiHpf2YuUXA1fvnK9fS0K4o2HhyOcdYdlzSUTpCmNxOSEz0THByBbN7YJhNsocCdoJLpYy9T8gYiGAMhpQAAAABJRU5ErkJggg==') !important;"></div><iframe src="//tpc.googlesyndication.com/sodar/Enqz_20U.html" width="0" height="0" style="display: none;"></iframe></body></html></div>
		</div>        <!-- BEGIN SPOSORED TEXT INCLUDE -->
        <div class="sponsored-texts">
    Publicité            <span>|</span>
        <a target="_blank" href="https://www.ubisoft.com/fr-fr/game/assassins-creed/valhalla/buy?ncid=22-4043---1-exdp-66-12-ACV_Previews--2-1-8-1020-6-2---ID_95094-----webkitpreviews&maltcode=brands_C2W_exdp_other___ACU__Pre__&addinfo=programmaticdisplay&dclid=CKuZv8DivewCFUYVBgAdHmUChQ">
            Découvrir la pub        </a>
    </div>        <!-- END SPOSORED TEXT INCLUDE -->
    </div>
<?php } ?>

    <?php include('wp-includes/Php/Login_News.php'); ?>

    </div>
    <!-- END SIDEBAR -->
    
    

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

<?php if($_GET['code'] == "non")
    { ?>    

  <script>                
  setTimeout(function(){
  jQuery("#settings-resultat2").fadeIn(700);
  jQuery("#settings-resultat2").hide(700);
  window.history.pushState(document.title,document.title,"/news");
  }, 3000);
</script>

  <?php } ?>
	
<script>

	jQuery('#ddate').submit(function(evt) {
	
		jQuery.ajax({
		type 		: 'GET',
		url 		: 'news-date.php',
		data        : "&date="+jQuery("#ddatee").val(), 
		success 	: function(data) {
		
		if (!data.success3) {	
		jQuery("#datee").show();
        jQuery("#datee").load("news-date.php"+"?date="+jQuery("#ddatee").val());
		jQuery("#ramdomplateforme").hide();
		jQuery("#content").removeClass("fullwidth").delay(10).queue(function(a){
		jQuery("#content").show();
		jQuery(this).addClass("fullwidth");
		a()});
		}
		}
		});
		return false;
		});		
</script>	
<script>
	
jQuery(document).ready(function(){
jQuery('#content').removeClass('fullwidth');
jQuery('a#PC').click(function(){
jQuery('#content').removeClass('fullwidth').delay(10).queue(function(a){
jQuery('#content').show();
jQuery(this).addClass('fullwidth');a()});
jQuery('#content').load('news-plateforme?plateforme=PC');
jQuery('#content').show();
jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
jQuery(this).addClass('fullwidth');return false});
jQuery('a#PS3').click(function(){
jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PS3');
jQuery('#content').show();
jQuery(this).addClass('fullwidth');return false});

jQuery('a#X360').click(function(){
jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=X360');
jQuery('#content').show();
jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
jQuery(this).addClass('fullwidth');return false});

jQuery('a#PS5').click(function(){
jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PS5');
jQuery('#content').show();
jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
jQuery(this).addClass('fullwidth');return false});

jQuery('a#WiiU').click(function(){
jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=WiiU');
jQuery('#content').show();
jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
jQuery(this).addClass('fullwidth');return false});

jQuery('a#PSP').click(function(){
jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PSP');
jQuery('#content').show();
jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
jQuery(this).addClass('fullwidth');return false});
jQuery('a#PSV').click(function(){
jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PSV');
jQuery('#content').show();
jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
jQuery(this).addClass('fullwidth');return false});
jQuery('a#DS').click(function(){
	jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=DS');
	jQuery('#content').show();
	jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
	jQuery(this).addClass('fullwidth');return false});
	jQuery('a#3DS').click(function(){
		jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=3DS');
	jQuery('#content').show();
	jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
	jQuery(this).addClass('fullwidth');return false});
	jQuery('a#IPHONE').click(function(){
		jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=IP');
	jQuery('#content').show();
	jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
	jQuery(this).addClass('fullwidth');return false});
	jQuery('a#PS2').click(function(){
		jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PS2');
		jQuery('#content').show();
		jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
		jQuery(this).addClass('fullwidth');return false});
		jQuery('a#PS4').click(function(){
			jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PS4');
		jQuery('#content').show();
		jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
		jQuery(this).addClass('fullwidth');return false});
		jQuery('a#XONE').click(function(){
			jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=XBOX');
			jQuery('#content').show();
			jQuery('#datee').hide();
jQuery('#ramdomplateforme').hide();
			jQuery(this).addClass('fullwidth');return false});
			jQuery('a#AND').click(function(){
				jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=AND');
			jQuery('#content').show();
			jQuery('#datee').hide();
			
jQuery('#ramdomplateforme').hide();
			jQuery(this).addClass('fullwidth');return false});
			jQuery('a#Switch').click(function(){
				jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=Switch');
			jQuery('#content').show();
			jQuery('#datee').hide();
			
			jQuery('#ramdomplateforme').hide();
			jQuery(this).addClass('fullwidth');return false});
			jQuery('a#PS1').click(function(){
			jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PS1');
			jQuery('#content').show();
			jQuery('#datee').hide();
			
			jQuery('#ramdomplateforme').hide();
			jQuery(this).addClass('fullwidth');return false});
			jQuery('a#Wii').click(function(){
			jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=Wii');
			jQuery('#content').show();
			jQuery('#datee').hide();
			
			jQuery('#ramdomplateforme').hide();
			jQuery(this).addClass('fullwidth');return false});
			jQuery('a#PS2').click(function(){
				jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=PS2');
			jQuery('#content').show();
			jQuery('#datee').hide();
			jQuery(this).addClass('fullwidth');return false});
			jQuery('a#XONE').click(function(){
				jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=XONE');
			jQuery('#content').show();
			jQuery('#datee').hide();
			jQuery(this).addClass('fullwidth');return false});
			jQuery('a#XBOXSX').click(function(){
				jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=XBOXSX');
			jQuery('#content').show();
			jQuery('#datee').hide();
			jQuery(this).addClass('fullwidth');return false});
	
			jQuery('a#Stadia').click(function(){
				jQuery('#content').fadeIn(500).load('news-plateforme?plateforme=Stadia');
			jQuery('#ramdomplateforme').hide();
			jQuery('#content').show();
			jQuery('#datee').hide();
			jQuery(this).addClass('fullwidth');return false})});
	</script>

<?php include('wp-includes/Php/Script_Footer.php'); ?>


</body>
</html>
