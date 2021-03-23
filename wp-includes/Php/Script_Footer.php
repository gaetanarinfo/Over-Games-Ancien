<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js" type="text/javascript" /></script>


<?php if($_GET['inscription'] == "oui") { ?>    
	<script>								
	setTimeout(function(){
	jQuery("#valide").fadeOut(700);
	window.history.pushState(document.title,document.title,"/");
	}, 4000);
</script>

	<?php } ?>	
	
	<?php if($_GET['inscription'] == "non") { ?>    
	<script>								
	setTimeout(function(){
	jQuery("#erreur").fadeOut(700);
	window.history.pushState(document.title,document.title,"/");
	}, 4000);
</script>

	<?php } ?>	

<script>		
	jQuery('#signin').click(function(event) {
       jQuery("#signinform").fadeOut(200);
	   jQuery("#recover").fadeIn(200);	
		jQuery("#inscription").hide(200);
		jQuery("#widgettitle").text("Mot de passe perdu");
		return false;
	});	
	
	jQuery('#inscriptionbtn').click(function(event) {
       jQuery("#signinform").fadeOut(200);
	   jQuery("#recover").fadeOut(200);	
	   jQuery("#inscription").fadeIn(200);
	jQuery("#widgettitle").text("S'inscrire");	
		return false;
	});	
	</script>


<?php if($_GET['login'] == "valide") { ?>    
	<script>								
	setTimeout(function(){
	jQuery("#settings-resultat").fadeOut(700);
	window.history.pushState(document.title,document.title,"/");
	}, 4000);
</script>

	<?php } ?>
	
<?php if($_GET['login'] == "error") { ?>    
	<script>								
	setTimeout(function(){
	jQuery("#error").fadeOut(700);
	window.history.pushState(document.title,document.title,"/");
	}, 4000);
</script>

	<?php } ?>	

	<?php if($_GET['password-recover'] == "non") { ?>    
	<script>								
	setTimeout(function(){
	jQuery("#error2").fadeOut(700);
	window.history.pushState(document.title,document.title,"/");
	}, 4000);
</script>

	<?php } ?>	



<script type='text/javascript' src='wp-content\themes\powerup\js\jquery.scrollbar.min.js?ver=1'></script>
<script type='text/javascript' src='wp-content\themes\powerup\js\scrollbar-behavior.js?ver=1'></script>
<script type='text/javascript' src='wp-content\themes\powerup\js\swiper.min.js?ver=1'></script>

<script type='text/javascript' src='wp-content\themes\powerup\js\notif.js'></script>

<script type='text/javascript' src='wp-content\themes\powerup\js\misc-footer.js?ver=1'></script>

<script type='text/javascript' src='wp-content\themes\powerup\js\jquery.scrollTo-min.js?ver=1'></script>
					

<script type='text/javascript' src='wp-includes\js\wp-embed.min.js?ver=4.7.18'></script>


<?php

	$sessiont = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
	$sessiont->execute(array(':email' => $_SESSION['email']));
	$result_sessiont = $sessiont->fetch();
	
	$Premium = "";
	$Date1 = date('Y-m-d');
	$Date2 = date('H:i:s');
	
	if($Date1 > $result_sessiont['datefinprenium2'] && $Date2 > $result_sessiont['datefinpreniumheure'])
			{
		
				$req22345433 = $cnx->prepare('UPDATE utilisateurs SET Premium = :Premium, datefinprenium = :datefinprenium, datefinprenium2 = :datefinprenium2, datefinpreniumheure = :datefinpreniumheure, datefinpreniumdate = :datefinpreniumdate, TypeAbo = :TypeAbo WHERE email = :email');
				$req22345433->execute(array(
				'Premium' => "non",
				'datefinprenium' => "",
				'datefinprenium2' => "",
				'datefinpreniumheure' => "",
				'datefinpreniumdate' => "",	
				'TypeAbo' => "",		
				'email' => $_SESSION['email']
			));
			}

if(!empty($result_sessiont['connexion']))
{
	

	
	if(date($result_sessiont['connexion']) < date("Y-m-d H:i:s"))
	{
		
	$date1 == "";
	
	$req2 = $cnx->prepare('UPDATE utilisateurs SET connexion = :connexion WHERE email = :email');
			$req2->execute(array(
			'connexion' => $date1,
			'email' => $_SESSION['email']
			));
			
	session_start();
	unset($_SESSION);
	unset($_COOKIE);
	$_SESSION = array();
	session_destroy();
	
	die('<META HTTP-equiv="refresh" content=0;URL=index>');
	
	}
}

	
function compter_visite(){

    global $cnx;
	
	$username = $cnx->prepare("SELECT * FROM stats_visites WHERE ip = :ip");
			$username->execute(array(':ip' => $_SERVER['REMOTE_ADDR']));
			$result_username = $username->fetch();
			
			if($result_username['ip'] != $_SERVER['REMOTE_ADDR'])
			
			{

    $ip   = $_SERVER['REMOTE_ADDR'];
    $date = date('Y-m-d');
	$page = $_SERVER['REQUEST_URI'];
	
    $query = $cnx->prepare("INSERT INTO stats_visites (ip , date_visite , pages_vues, page) VALUES (:ip , :date , 1 , :page)");

    $query->execute(array(
        ':ip'   => $ip,
        ':date' => $date,
		':page' => $page
    ));
			}else{
				
			$req = $cnx->prepare('UPDATE stats_visites SET pages_vues = pages_vues + 1, page = :page WHERE ip = :ip');
			$req->execute(array(
			'ip' => $_SERVER['REMOTE_ADDR'],
			'page' => $_SERVER['REQUEST_URI']
			));
				
			}
	
}

?>
<?php 
echo compter_visite();
?>

   
  
    
    <?php
		$profil2 = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
		$profil2->execute(array(':email' => $_SESSION['email']));
		$result_requeteUsers = $profil2->fetch();
		$profil2->closeCursor();
	?> 

	<?php if(isset($_SESSION['email'])) { ?>
	<?php
	
	$test = $result_requeteUsers['datefinpremium'];
	$test2 = $result_requeteUsers['datefinpremium2'];

	
	$datefinpremium3 = date("Y-m-d H:i:s");
	
	
	if(date($datefinpremium3) > date($test2))
	{
	$req2 = $cnx->prepare('UPDATE utilisateurs SET Premium = :Premium, datefinpremium = :datefinpremium, datefinpremium2 = :datefinpremium2, datefinpremiumheure = :datefinpremiumheure, datefinpremiumdate = :datefinpremiumdate, TypeAbo = :TypeAbo WHERE email = :email');
	$req2->execute(array('email' => $result_requeteUsers['email'], 'Premium' => "non", 'datefinpremium' => "", 'datefinpremium2' => "", 'datefinpremiumheure' => "", 'datefinpremiumdate' => "", 'TypeAbo' => "0"));

	}
	

	
	if(date("d/m/Y H:i:s") > date($promoresult['expire']) && $promoresult['code_utilise'] == "oui")
	{
	$req2 = $cnx->prepare('UPDATE code_promo SET Valable = :Valable WHERE email = :email AND code = :code');
	$req2->execute(array('email' => $result_requeteUsers['email'], 'code' => $_SESSION['code'], 'Valable' => "non"));
		
	

	}
	
	?>
	<?php } ?>

    <div class="Header-Fond" style="background-color: #191919 !important;">
    
    	<?php if(isset($_SESSION['email'])) { ?>
		
		
	<script type="text/JavaScript">
var idtimeCompteur=0;
function EklaDisplayCompteurCompteur5() {
	// délais d'affichage
	var delais = 1;
	// Element contenant l'affichage
	var EklaCompteurAffiche=document.getElementById("Compteur4");
	// HTML d'affichage
	var html = "[m] minute(s) [s] seconde(s)" ;
	// HTML d'affichage si écoulé
	var htmlafter = "" ;
	// Date / heure courante
	var date1 = new Date();
	// Date / heure de fin
	// Attention, le mois commence à 0 pour janvier
	var date2 = new Date('<?php echo $result_requeteUsers['connexion'] ?>');
	// Nombre de secondes entre les dates
	var nbsec = (date2 - date1) / 1000;
	// Nombre de secondes dans une journée
	var nbsecj = 24 * 3600;
	// Pour arrêt compteur si temps écoulé et pas de texte prévu
	var stopcpt=false;
	// Si négatif => temps écoulé
	if (nbsec <= 0) {
		nbsec=-nbsec;
		if (htmlafter!="") 
			{ html=htmlafter; 
			window.location = "https://over-games.fr/logout";
			}
		else
			{stopcpt=true;}
	}
	// Nombre de jours restants
	var j = Math.floor (nbsec / nbsecj);
	// Nombre d'heures restantes
	var h = Math.floor ((nbsec - (j * nbsecj)) / 3600);
	// Nombre de minutes restantes
	var m = Math.floor ((nbsec - ((j * nbsecj + h * 3600))) / 60);
	// Nombre de secondes restantes
	var s = Math.floor (nbsec - ((j * nbsecj + h * 3600 + m * 60)));
	// Si pas de texte après temps écoulé => on met tout à zéro
	if (stopcpt==true) {j=0;h=0;m=0;s=0
	window.location = "https://over-games.fr/logout";
	}

	// Modification du HTML à afficher
	var html = html.replace("[j]",j);
	var html = html.replace("[h]",h);
	var html = html.replace("[m]",m);
	var html = html.replace("[s]",s);
	// Affichage
	if (EklaCompteurAffiche!=null) {EklaCompteurAffiche.innerHTML = html;}
	// Relance du compteur dans x millisecondes
	if (stopcpt==false) {idtimeCompteur=setTimeout ("EklaDisplayCompteurCompteur5();", 1*1000);}
}
EklaDisplayCompteurCompteur5();
		</script>

<?php } ?>


<?php

		$actu4455 = $cnx->prepare("SELECT * FROM Guide_Video ORDER BY id DESC LIMIT 0,7");
		$donnees13 = $cnx->query("SET NAMES 'utf8'");
		$actu4455->execute();

		?>
       
                      <?php
   	while ($donnees13 = $actu4455->fetch())
    {
   ?>     
        
        <div class="modal fade" id="Guide_Video-<?php echo $donnees13['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document" style="width: 890px;">
            <div class="modal-content">
              <div class="modal-header" align="left">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div align="center"><span class="modal-title" id="myModalLabel" style=""><?php echo $donnees13['titre'] ?></span></div>
              </div>
              
              <div class="modal-body"><div class="row-fluid">
	<div class="span12" align="center"><br>
<div align="center" style="box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);webkit-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);-moz-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);height: 467px;width: 853px;">
    
<div class="video-wrapper">
<div class="video-container">
<iframe frameborder="0" style="border:none;width: 852px;height: 494px;" src="<?php echo $donnees13['lien'] ?>"></iframe>
</div>
</div>
</div>
		</div>	
</div>

</div>
              
            </div>
          </div>
        </div>
        
        <?php } ?>
	
<?php
									$achataime3 = $cnx->prepare("SELECT * FROM utilisateurs WHERE email = :email");
									$achataime3->execute(array("email" => $_SESSION['email']));
									$resultat_achat3 = $achataime3->fetch();
									$achataime3->closeCursor();
								?>
                                
                <?php if(!empty($resultat_achat3['liste'])) { ?>
		        <style>
				#theater {
					position: relative;
					border-top: 1px solid #4a4a4a;
					border-bottom: 1px solid #7d7d7d;
					background: url("image/top-radial-halo.png") no-repeat scroll 50% 0,url("image/theater-bg.png") repeat scroll 50% 50%;
					padding: 20px 0;
					background-color: #636363;
					-webkit-box-shadow: 0 1px 15px rgba(0,0,0,.4) inset;
					-moz-box-shadow: 0 1px 15px rgba(0,0,0,.4) inset;
					box-shadow: 0 1px 15px rgba(0,0,0,.4) inset;
					text-shadow: 0 1px 0 rgba(0,0,0,.5);
				}
				.jslcontainer {
				overflow: hidden;
				position: relative;
			}
			.jslview {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				text-align: center;
			}
			.jslitem {
				display: inline-block;
				vertical-align: top;
			}
			.theater-game {
				height: 220px;
			}
			.theater-game, .jslitem .video {
				width: 220px;
			}
			.jslview .theater-game .game-cover, .jslview .game .game-cover, .jslview .played-games .game-cover {
				max-width: 120px;
				margin-left: auto;
				margin-right: auto;
				margin-top: 10px;
				margin-bottom: 10px;
				min-height: 165px;
				position: relative;
			}
			.jslview .theater-game .thumbnail2, .jslview .game .thumbnail, .jslview .played-games .thumbnail2 {
				position: absolute;
				bottom: 0;
				left: 0;
				margin: 0;
				-webkit-box-shadow: 0 0 15px rgba(0,0,0,.3);
				-moz-box-shadow: 0 0 15px rgba(0,0,0,.3);
				box-shadow: 0 0 15px rgba(0,0,0,.3);
			}
			.thumbnail.dark2 {
				webkit-box-shadow: 0 2px 5px rgba(0,0,0,.2),0 1px 1px rgba(0,0,0,.4) inset;
				-moz-box-shadow: 0 2px 5px rgba(0,0,0,.2),0 1px 1px rgba(0,0,0,.4) inset;
				box-shadow: 0 2px 5px rgba(0,0,0,.2),0 1px 1px rgba(0,0,0,.4) inset;
				padding: 0;
				position: relative;
				-webkit-border-radius: 0 2px 2px 0;
				-moz-border-radius: 0 2px 2px 0;
				border-radius: 7px;
			}
			.thumbnail2 {
				-webkit-transition: all .2s ease-in-out;
				-moz-transition: all .2s ease-in-out;
				-ms-transition: all .2s ease-in-out;
				-o-transition: all .2s ease-in-out;
				transition: all .2s ease-in-out;
			}
			.thumbnail2 {
				display: block;
				padding: 2px;
				line-height: 1;
				-webkit-box-shadow: 0 0 4px rgba(0,0,0,.15);
				-moz-box-shadow: 0 0 4px rgba(0,0,0,.15);
				box-shadow: 0 0 4px rgba(0,0,0,.15);
				background-color: #fff;
				position: relative;
			}
			
			.thumbnail2 .ratingss {
				position: absolute;
				right: -7px;
				top: 13px;
				text-decoration: none;
			}
			.ratingss {
				float: left;
				text-align: center;
			}
			.jslview .theater-game .hgroup2 {
				height: 20px;
			}
			.jslview .theater-game .hgroup, .jslview .game .hgroup, .jslview .played-games .hgroup2 {
				height: 40px;
			}
			
			.thumbnail2 .ratingss strong {
				background-color: rgba(0,0,0,.7);
				padding: 3px 12px;
				color: #fff;
				text-shadow: 0 1px 0 rgba(0,0,0,.5);
				box-shadow: 0 1px 0 rgba(255,255,255,.1) inset,0 0 4px rgba(0,0,0,.8);
				margin: 0;
				border-width: 4px;
			}
			.ratingss strong.small {
				font-size: 26px;
				line-height: 35px;
				width: 36px;
				height: 36px;
				border-width: 3px;
				margin: 0 -6px 0 0;
				padding: 0 5px;
			}
			.ratingss strong {
				display: block;
				font-size: 80px;
				line-height: 80px;
				color: rgba(0,0,0,.7);
				text-shadow: 2px 2px 0 rgba(255,255,255,.5),0px 0 1px rgba(0,0,0,.5);
				border-bottom: 5px solid #2A8EDF;
				margin: 0 auto;
				max-width: 50px;
				text-align: center;
			}
			.thumbnail2.dark2>figure img {
				-webkit-border-radius: 0 2px 2px 0;
				-moz-border-radius: 0 2px 2px 0;
				border-radius: 6px;
			}
			img {
				max-width: 100%;
				vertical-align: middle;
				border: 0;
				-ms-interpolation-mode: bicubic;
			}
			
			#theater p.title2 {
				color: #fff;
			}
			.jslview .video .hgroup2 p.title2, .jslview .theater-game .hgroup2 p.title2, .jslview .game .hgroup2 p.title2, .jslview .played-games .hgroup2 p.title2 {
				font-size: 16px;
				line-height: 20px;
				margin-bottom: 5px;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				-o-text-overflow: ellipsis;
				-webkit-text-overflow: ellipsis;
			}
			.jslview .video .hgroup2 p, .jslview .theater-game .hgroup2 p, .jslview .game .hgroup2 p, .jslview .played-games .hgroup2 p {
				font-size: 12px;
			}
			.hgroup2 p.title2 {
				color: black;
				font-size: 13px;
				line-height: 21px;
				margin-top: 0;
				border:none;
				margin: 0;
				font-family: "OpenSansCondensedBold","Helvetica Neue",Helvetica,Arial,sans-serif;
				font-weight: 400!important;
				color: inherit;
				text-transform: uppercase;
				text-rendering: optimizelegibility;
			}
		
			
			@font-face{font-family:'OpenSansCondensedBold';src:url('image/OpenSans-CondBold.ttf');src:url('image/OpenSans-CondBold.ttf?#iefix') format('embedded-opentype'),url('image/OpenSans-CondBold.ttf') format('woff'),url('image/OpenSans-CondBold.ttf') format('truetype'),url('image/OpenSans-CondBold.svg#OpenSansCondensedBold') format('svg');
			}

			game-cover-list, .collection {
    list-style-type: none;
    margin-left: 0;
}
.page-header2 {
    padding-bottom: 10px;
    margin: 18px 0;
}
.page-header2 {
    padding-bottom: 0;
    margin: 0 0 10px!important;
    position: relative;
    border-bottom: 1px solid #dcd8d8;
    -webkit-box-shadow: 0 1px 0 #fff;
    -moz-box-shadow: 0 1px 0 #fff;
    box-shadow: 0 1px 0 #fff;
}
.game-cover-list .game-cover, .collection .game-cover {
    float: left;
    padding: 0 10px 0 0;
}
.game-cover-list .game-content, .collection .game-content {
    margin-left: 80px;
}
.game-cover-list .game-content p.details, .collection .game-content p.details {
    font-size: 11px;
    line-height: 18px;
    color: #6b6b6b;
}
.river article2 .hgroup2+p, .box article2 .hgroup2+p {
    font-size: 12px;
    line-height: 21px;
    text-align: justify;
    text-justify: newspaper;
}

.game-cover-list .game-cover .thumbnail2 figure.small, .collection .game-cover .thumbnail2 figure.small {
    max-height: 200px;
}
@media (min-width: 979px)
.thumbnail2 figure.small {
    max-height: 98px;
    max-width: 100%;
}
.river article2:first-child {
    border-top: 0;
    padding-top: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
.river article2 {
    padding: 20px 0;
}
.river article2, .box article2 {
    border-top: 1px solid #dcd8d8;
    -webkit-box-shadow: 0 1px 0 #fff inset;
    -moz-box-shadow: 0 1px 0 #fff inset;
    box-shadow: 0 1px 0 #fff inset;
}

article2 {
}
.tabWrapper:before, .tabWrapper:after {
    display: table;
    content: "";
}
.tabWrapper:before, .tabWrapper:after {
    display: table;
    content: "";
}
.game-cover-list .game-cover .thumbnail2 figure.small img, .collection .game-cover .thumbnail2 figure.small img {
    width: 60px;
}
.page-header2 h1, .page-header2 h2 {
    font-size: 20px;
    line-height: 20px;
    background-color: #f4f3f3;
    padding: 0 3px 0 6px;
    position: relative;
    border-left: 6px solid #edaf01;
    color: #454545;
}


.user-action div {
    display: inline-block;
    margin: 0 5px 0 0;
    padding: 1px 2px 0 3px;
    cursor: pointer;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    text-shadow: 0 1px rgba(0,0,0,.25);
}
		</style>
        
        <?php if(!empty($_SESSION['email'])) { ?>
        <div class="modal fade" id="Liste-Souhaits" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-left: -60px;">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:662px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">×</span></button>
                <h4 class="modal-title" id="myModalLabel" style="font-size: 14px;">Votre liste de souhaits</h4>
              </div>
              <div class="modal-body">
				<div class="tabWrapper">
                
        <?php
		$achat10 = $cnx->prepare("SELECT * FROM Guide_Achat_Liste WHERE email = :email ORDER BY DDate DESC");
		$actuachat10 = $cnx->query("SET NAMES 'utf8'");
		$achat10->execute(array(":email" => $_SESSION['email']));
		?> 
  
        <div id="main" class="container" style="width:620px;">
	<div class="wrapper row">
		<div class="span8">
	<section id="last-buying-guide" class="frame river game-cover-list">
    
		<div class="tabWrapper">
        <?php while ($donnees3 = $achat10->fetch()) { ?>
																				
		<article2 class="article2" data-support="<?php echo $donnees3['id'] ?>">
			<div class="game-cover">
				<div class="thumbnail2 dark">
					<figure class="small" data-async="overview:<?php echo $donnees3['titre'] ?>"> 
						<img src="<?php if(empty($donnees3['ImageLien'])) { ?>image/Achat/<?php echo $donnees3['Image'] ?><?php }else{ ?><?php echo $donnees3['ImageLien'] ?><?php } ?>">
					</figure>
									</div>
			</div>
			<div class="game-content" style="
    font-weight: 700;
    line-height: 20px;
">
				<div align="left">
																		                                    
																<div class="title2"><a title="Acheter <?php echo $donnees3['titre']; ?> chez notre partenaire." target="_blank" style="color:black;" href="<?php echo $donnees3['lien']; ?>"><?php echo $donnees3['titre']; ?></a></div>
				</div>
				<div class="details">
													<span class="gray">Mise en ligne : <?php echo $donnees3['Date']; ?>								<br>
				<?php if(empty($donnees3['Tags1'])) { }else{ ?>
             Genre : <?php echo $donnees3['Tags1']; ?><?php } ?><br>
														Développé par : <?php echo $donnees3['Developpeur']; ?>											</span></div>
													<div style="margin-top: 4px;margin-left: -4px;">
														<?php if(empty($donnees3['Categorie1'])) { }else{ ?>
              <span class="label label-warning pull-left" style="margin-left: 3px; font-weight:bold; font-size:12px;color:white;"><?php echo $donnees3['Categorie1']; ?></span><?php } ?>
              <?php if(empty($donnees3['Categorie2'])) { }else{ ?>
             <span class="label label-warning pull-left" style="margin-left: 3px; font-weight:bold; font-size:12px;color:white;"><?php echo $donnees3['Categorie2']; ?></span><?php } ?>
              <?php if(empty($donnees3['Categorie3'])) { }else{ ?>
              <span class="label label-warning pull-left" style="margin-left: 3px; font-weight:bold; font-size:12px;color:white;"><?php echo $donnees3['Categorie3']; ?></span><?php } ?>
              <?php if(empty($donnees3['Categorie4'])) { }else{ ?>
              <span class="label label-warning pull-rigleftht" style="margin-left: 3px; font-weight:bold; font-size:12px;color:white;"><?php echo $donnees3['Categorie4']; ?></span><?php } ?>         
               <?php if(empty($donnees3['Categorie5'])) { }else{ ?>
              <span class="label label-warning pull-left" style="margin-left: 3px; font-weight:bold; font-size:12px;color:white;"><?php echo $donnees3['Categorie5']; ?></span><?php } ?>  
              <?php if(empty($donnees3['Categorie6'])) { }else{ ?>
              <span class="label label-warning pull-left" style="margin-left: 3px; font-weight:bold; font-size:12px;color:white;"><?php echo $donnees3['Categorie6']; ?></span><?php } ?>  <br>
</div>	

			</div>
		</article2>
        <hr style="border-top: 1px solid #dcd8d8; -webkit-box-shadow: 0 1px 0 #fff inset; -moz-box-shadow: 0 1px 0 #fff inset; box-shadow: 0 1px 0 #fff inset; margin-top: 12px;">
        <?php } ?>
        <div align="center">
        <a href="remove-ajout-article?page=<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-info">Supprimer votre liste de souhaits</a></div>
		</div>
</section>				

												</div>

	</div>
</div>
 
		</div>
              </div>
              
            </div>
          </div>
        </div>
		<?php } ?>
		<?php } ?>	
		
<?php if(!empty($_SESSION['email'])) { ?>
<div class="modal fade" id="mp_mp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Boite de réception</h4>
              </div>
              <div class="modal-body" style="<?php if(empty($result_requeteUsers['id'])) { ?>height: 256px;<?php }else{ ?>height: auto;<?php } ?>">
				<div class="tabWrapper">
                
        <?php
		$usersall2 = $cnx->prepare("SELECT * FROM mp_prive WHERE destinataire = :destinataire ORDER BY ddate, heure DESC");
		$usersall3 = $cnx->query("SET NAMES 'utf8'");
		$usersall2->execute(array(':destinataire' => $_SESSION['pseudo']));
		$usersall2->execute();
		?> 
  
																		
		<div align="center">
<section id="comments" class="frame river navigable">
	<div class="comment-list fasync" style="margin-top: -21px;" data-action="comments" data-id="155489" data-type="story">
      
      
      <?php 
	
	$profil2 = $cnx->prepare("SELECT * FROM mp_prive WHERE destinataire = :destinataire");
	$profil2->execute(array(':destinataire' => $_SESSION['pseudo']));
	$result_requeteUsers = $profil2->fetch();
	$profil2->closeCursor();
	?>
	
	
	
	 <?php if(empty($result_requeteUsers['id'])) { ?>

	<div align="center"> <img src="image/new-message.png" style="
    width: 30%;
"></div><br><br><br>
			
	<div align="center" style="margin-top: -56px;font-weight: bold;font-size: 17px;">
	<br><br>
		Vous n'avez pas reçu de message pour le moment.
		</div>
	
	<?php }else{ ?>
	
	<style>
		.letter-image {
  position: relative;
  top: 50%;
  left: 18%;
  width: 200px;
  height: 200px;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  cursor: pointer;
			
 animation: 2s animated-mail letter-image infinite;
}

.animated-mail {
  position: absolute;
  height: 150px;
  width: 200px;
  -webkit-transition: .4s;
  -moz-transition: .4s;
  transition: .4s;
}
.animated-mail .body {
  position: absolute;
  bottom: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 0 100px 200px;
  border-color: transparent transparent #e95f55 transparent;
  z-index: 2;
}
.animated-mail .top-fold {
  position: absolute;
  top: 50px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 50px 100px 0 100px;
  -webkit-transform-origin: 50% 0%;
  -webkit-transition: transform .4s .4s, z-index .2s .4s;
  -moz-transform-origin: 50% 0%;
  -moz-transition: transform .4s .4s, z-index .2s .4s;
  transform-origin: 50% 0%;
  transition: transform .4s .4s, z-index .2s .4s;
  border-color: #cf4a43 transparent transparent transparent;
  z-index: 2;
}
.animated-mail .back-fold {
  position: absolute;
  bottom: 0;
  width: 200px;
  height: 100px;
  background: #cf4a43;
  z-index: 0;
}
.animated-mail .left-fold {
  position: absolute;
  bottom: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 50px 0 50px 100px;
  border-color: transparent transparent transparent #e15349;
  z-index: 2;
}
.animated-mail .letter {
  left: 20px;
  bottom: 0px;
  position: absolute;
  width: 160px;
  height: 60px;
  background: white;
  z-index: 1;
  overflow: hidden;
  -webkit-transition: .4s .2s;
  -moz-transition: .4s .2s;
  transition: .4s .2s;
}
.animated-mail .letter .letter-border {
  height: 10px;
  width: 100%;
  background: repeating-linear-gradient(-45deg, #cb5a5e, #cb5a5e 8px, transparent 8px, transparent 18px);
}
.animated-mail .letter .letter-title {
  margin-top: 10px;
  margin-left: 5px;
  height: 10px;
  width: 40%;
  background: #cb5a5e;
}
.animated-mail .letter .letter-context {
  margin-top: 10px;
  margin-left: 5px;
  height: 10px;
  width: 20%;
  background: #cb5a5e;
}
.animated-mail .letter .letter-stamp {
  margin-top: 30px;
  margin-left: 120px;
  border-radius: 100%;
  height: 30px;
  width: 30px;
  background: #cb5a5e;
  opacity: 0.3;
}

.shadow {
  position: absolute;
  top: 200px;
  left: 50%;
  width: 400px;
  height: 30px;
  transition: .4s;
  transform: translateX(-50%);
  -webkit-transition: .4s;
  -webkit-transform: translateX(-50%);
  -moz-transition: .4s;
  -moz-transform: translateX(-50%);
  border-radius: 100%;
  background: radial-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
}

.letter-image:hover .animated-mail {
  transform: translateY(50px);
  -webkit-transform: translateY(50px);
  -moz-transform: translateY(50px);
}
.letter-image:hover .animated-mail .top-fold {
  transition: transform .4s, z-index .2s;
  transform: rotateX(180deg);
  -webkit-transition: transform .4s, z-index .2s;
  -webkit-transform: rotateX(180deg);
  -moz-transition: transform .4s, z-index .2s;
  -moz-transform: rotateX(180deg);
  z-index: 0;
}
.letter-image:hover .animated-mail .letter {
  height: 180px;
}
.letter-image:hover .shadow {
  width: 250px;
}
		 
		 
		</style>
		

<div class="letter-image" style="margin-top: 85px;">
    <div class="animated-mail">
        <div class="back-fold"></div>
        <div class="letter">
            <div class="letter-border"></div>
            <div class="letter-title"></div>
            <div class="letter-context"></div>
            <div class="letter-stamp">
                <div class="letter-stamp-inner"></div>
            </div>
        </div>
        <div class="top-fold"></div>
        <div class="body"></div>
        <div class="left-fold"></div>
    </div>
    <div class="shadow"></div>
</div>
	
	<?php
	while ($donnees3 = $usersall2->fetch()) { 
	?>

		<div align="left" style="margin-top: -23px;"><a title="Profil de <?php echo $donnees3['pseudo'] ?>" href="profil?pseudo=<?php echo $donnees3['pseudo'] ?>">
        			<a href="" data-toggle="modal" data-target="#mp_read" title="Message de <?php echo $donnees3['pseudo'] ?>"><img style="width: 74px;height: 74px;display: block;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;padding-top: 0px;margin-bottom: 27px;border-radius: 13px;box-shadow: 0 0 7px #0000009e;" title="Photo de profil de <?php echo $donnees3['pseudo'] ?>" src="<?php echo $donnees3['avatar'] ?>" alt=""></a>
        		</div>
		<div align="left" class="comment-content" style="margin-top: -101px;margin-left: 95px; font-size: 12px; font-weight: bold;color:rgba(0, 0, 0, 0.74);">
			Message de <?php echo $donnees3['pseudo'] ?><br> <div style="
    padding-top: 8px;
    padding-bottom: 5px;
">Le <?php echo $donnees3['date'] ?> à <?php echo $donnees3['heure'] ?></div>
		</div>
        
    
    <div align="left" style="font-size: 12px;margin-left: 95px;margin-top: 1px;padding-bottom: 8px;">
    <a href="" data-toggle="modal" data-target="#mp_read" title="Message de <?php echo $donnees3['pseudo'] ?>"><?php echo $donnees3['sujet'] ?></a></div>
    
   <?php if($donnees3['lu'] != "oui") { ?><div align="left" style="font-size: 12px;margin-left: 95px;margin-top: 1px;">
    Message non lu</div><?php }else{ ?><div align="left" style="font-size: 12px;margin-left: 95px;margin-top: 1px;">
    Message Lu</div><?php } ?>

   
    <hr>
    <?php } ?><?php } ?>
	


</div>
</section>
</div>

 
              </div>
              
            </div>
          </div>
        </div>
        </div>
<?php } ?>

<?php if(!empty($_SESSION['email'])) { ?>

<div class="modal fade" id="mp_new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Envoyer un message</h4>
              </div>
         <div id="mp_h">
              <div class="modal-body" style="height: 672px;">
				<div class="tabWrapper">
   
																		
		<div align="center">
<section id="comments" class="frame river navigable">

	<div class="comment-list fasync" style="margin-top: -21px;" data-action="comments" data- data-type="story">
     
		<div align="center" style="color: black;font-size: 16px;letter-spacing: 2px;font-weight: 600;margin-bottom: 8px;">
			
			En un seul clic envoyer un message privé.
			
		</div>
   <hr>   
   
   <div align="center" id="message_valide" style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%); display: none;"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Votre message à bien été envoyer.</div>
   
   <div id="message_error" style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%); display: none;"><span class="fa fa-times" style="color : rgba(209,26,29,1.00);margin-right: 2px;"></span> Il y a des erreurs dans votre message.</div>
   
   
<table id="mp_table" width="100%" border="0">
  <tbody>
  
  <form id="mp_j" method="post">
  
   <tr>
       <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;">Destinataire du message :</td>
    </tr>
   
    <tr>
      <td><select name="destinataire" id="destinataire" class="form-control" style="height: 33px;">

                          <?php
											   
		$actu6 = $cnx->prepare("SELECT * FROM utilisateurs ORDER BY id DESC");
$sortiejeux2 = $cnx->query("SET NAMES 'utf8'");
$actu6->execute();									   
											   
											   
   	while ($donnees13 = $actu6->fetch())
    {
   ?>     
                        <option value="<?php echo $donnees13['pseudo'] ?>"><?php echo $donnees13['pseudo'] ?> </option>
                         <?php
   	}
   ?>     
</select><br></td>
    </tr>
    
       <tr>
       <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;">Destinataire du message :</td>
    </tr>
    
    <tr>
      <td><input name="sujet" required maxlength="100" type="text" class="form-control" id="sujet" style="height:20px; width: 541px;"><br></td>
    </tr>
    
       <tr>
       <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;">Message :</td>
    </tr>
    
    <tr>
      <td><button onclick="insertTag('[br]', '', 'messagee');" type="button" data-toggle="tooltip" data-tag="br" class="wrap-tag" data-placement="top" title="" data-original-title="Saut de Ligne" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px; width: 20px;"><i class="fa fa-indent"></i></button>&nbsp;
              
                                      	<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Police Gras" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px; width: 20px;" type="button" value="G" onclick="insertTag('[gras]','[/gras]','messagee');" /><i class="fa fa-bold"></i></button>&nbsp;
                                      	
										<button type="button" value="I" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[italique]','[/italique]','messagee');" /><i class="fa fa-italic"></i></button>&nbsp;
										
										<button type="button" value="Souligné" data-toggle="tooltip" data-placement="top" title="" data-original-title="Souligné" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[souligné]','[/souligné]','messagee');" /><i class="fa fa-underline"></i></button>&nbsp;
										
										<button type="button" value="Strike" data-toggle="tooltip" data-placement="top" title="" data-original-title="Strike" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[s]','[/s]','messagee');" /><i class="fa fa-strikethrough"></i></button>&nbsp;
										
										<button type="button" value="Lien" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[url]','[/url]','messagee');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Lien Url" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien Texte" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[lien=]','[/lien]','messagee');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Image" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[img width=..px' + ' height=..px]','[/img]','messagee');"/><i class="fa fa-camera"></i></button>&nbsp;
										
										<button type="button" value="Code" data-toggle="tooltip" data-placement="top" title="" data-original-title="Style" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[code]','[/code]','messagee');" /><i class="fa fa-code"></i></button>&nbsp;
										
										<button type="button" value="Email" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[email=]','[/email]','messagee');" /><i class="fa fa-envelope"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Vidéo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vidéo" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[video]','[/video]','messagee');" /><i class="fa fa-video-camera"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="SWF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swf" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[swf width=' + ' height=]','[/swf]','messagee');" /><i class="fa fa-play-circle-o"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste simple" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces]','[/puces]','messagee');" /><i class="fa fa-list-ol"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste numéroté" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces2]','[/puces2]','messagee');" /><i class="fa fa-list-ul"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement gauche" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[left]','[/left]','messagee');" /><i class="fa fa-align-left"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement centré" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[center]','[/center]','messagee');" /><i class="fa fa-align-center"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement droite" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[right]','[/right]','messagee');" /><i class="fa fa-align-right"></i></button>&nbsp;

                                      <input data-toggle="tooltip" data-placement="top" title="" data-original-title="Couleur" style="height: 17px; font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" type="color" id="colore" onchange="insertTag('[color=' + this.value + ']','[/color]', 'messagee');">&nbsp;

										<button type="button" value="cite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Citation" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[cite]','[/cite]','messagee');" /><i class="fa fa-list-alt"></i></button>&nbsp;

										<button type="button" value="bande" data-toggle="tooltip" data-placement="top" title="" data-tag="bande" data-original-title="Catégorie" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[bande]','[/bande]','messagee');" /><i class="fa fa-filter"></i></button>&nbsp;
										                                         
                                                                                                    
                                           <button type="button" value="hr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Séparateur" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[hr]','','messagee')" class="fa fa-arrows-h" /><i class="fa fa-arrows-hist-alt"></i></button>
                                               
                                               
                                               <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Taille" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 43px;border-radius: 4px;height: 20px;" onchange="insertTag('[taille=' + this.options[this.selectedIndex].value + ']', '[/taille]', 'messagee');">
										<option value="" class="selected" selected="selected"></option>
										<?php
										
										foreach(range(0, 100) as $taille)
										   {
										   echo '<option style="font-size:'.$taille.'px;" value="'.$taille.'">'.$taille.'</option>';
										   } ?>
										
										
									</select>&nbsp;   
                
                                      
                                      <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Police de Texte" style="font-size:14px;font-weight: bold;margin-bottom: 6px;border-radius: 4px;height: 20px;width: 151px;" onchange="insertTag('[font=' + this.options[this.selectedIndex].value + ']', '[/font]', 'messagee');">
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Arial" style="font-family:Arial; font-size: 14px;">Arial</option>
										<option value="Century Gothic" style="font-family:Century Gothic; font-size: 14px;">Century Gothic</option>
										<option value="Comic Sans MS" style="font-family:Comic Sans MS; font-size: 14px;">Comic Sans MS</option>
										<option value="Courier New" style="font-family:Courier New; font-size: 14px;">Courier New</option>
										<option value="Andale Mono" style="font-family:Andale Mono; font-size: 14px;">Andale Mono</option>
										<option value="Georgia" style="font-family:Georgia; font-size: 14px;">Georgia</option>
										<option value="Helvetica" style="font-family:Helvetica; font-size: 14px;">Helvetica</option>
										<option value="Impact" style="font-family:Impact; font-size: 14px;; font-size: 14px;">Impact</option>
										<option value="Lucida" style="font-family:Lucida; font-size: 14px;">Lucida</option>
										<option value="Lucida Grande" style="font-family:Lucida Grande; font-size: 14px;">Lucida Grande</option>
										<option value="Palatino" style="font-family:Palatino; font-size: 14px;">Palatino</option>
										<option value="Tahoma" style="font-family:Tahoma; font-size: 14px;">Tahoma</option>
										<option value="Times New Roman" style="font-family:Times New Roman; font-size: 14px;">Times New Roman</option>
										<option value="Verdana" style="font-family:Verdana; font-size: 14px;">Verdana</option>
										<option value="Trebuchet MS" style="font-family:Trebuchet MS; font-size: 14px;">Trebuchet MS</option>							
									</select>
                                       <br><br>
                                        <textarea required name="messagee" class="form-control" id="messagee" style="height: 250px;text-align: center;font-weight: bold;font-size: 12px; width: 541px;" onselect="preview(this, 'previewDiv');" onkeyup="preview(this, 'previewDiv');"></textarea><br>
                                        <br>
                                        <div align="center" style="color: black;" id="viewDiv"></div>
                                        
                                        <br><br>
                                        
                                        <div align="center"><button type="button" class="btn btn-success pull-center" value="Visualiser" onclick="view('messagee','viewDiv');" />Visualiser</button>&nbsp;&nbsp;<button class="btn btn-warning pull-center" type="submit">Envoyer le message</button></div>   </td>
    </tr>
    </form>
  </tbody>
</table>
	
	<script>
		jQuery('#mp_j').submit(function(evt) {
		jQuery('#message_valide').hide();
		jQuery('#message_error').hide();
		
		jQuery.ajax({
		type 		: 'POST',
		url 		: '../message-prive.php',
		data        : "&sujet1="+jQuery("#sujet").val()+"&destinataire1="+jQuery("#destinataire").val()+"&messagee1="+jQuery("#messagee").val(), 
		dataType 	: 'json',
		success 	: function(data) {
		
		if (!data.success) {
		
		jQuery('#mp_table').hide(200);
			
		jQuery('#mp_h').css("height", "129px");	
			
		jQuery('#message_valide').show(300);
			
		jQuery('#message_valide').fadeIn(200).append(data.posted3);
			
		} else {
		
			
		jQuery('#message_error').show();
			
		jQuery('#message_error').fadeIn(200).append(data.posted3);
  	
		}
		}
		});
		return false;
		});	
	</script>  
	  

	<script>
		
		
												function insertTag(startTag, endTag, textareaId, tagType) {
													var field  = document.getElementById(textareaId); 
													var scroll = field.scrollTop;
													field.focus();

													/* === Partie 1 : on récupère la sélection === */
													if (window.ActiveXObject) {
															var textRange = document.selection.createRange();            
															var currentSelection = textRange.text;
													} else {
															var startSelection   = field.value.substring(0, field.selectionStart);
															var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
															var endSelection     = field.value.substring(field.selectionEnd);               
													}

													/* === Partie 2 : on analyse le tagType === */
													if (tagType) {
															switch (tagType) {
																	case "lien":
																		endTag = "</lien>";
																		if (currentSelection) { // Il y a une sélection
																				if (currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
																						// La sélection semble être un lien. On demande alors le libellé
																						var label = prompt("Quel est le libellé du lien ?") || "";
																						startTag = "<lien url=\"" + currentSelection + "\">";
																						currentSelection = label;
																				} else {
																						// La sélection n'est pas un lien, donc c'est le libelle. On demande alors l'URL
																						var URL = prompt("Quelle est l'url ?");
																						startTag = "<lien url=\"" + URL + "\">";
																				}
																		} else { // Pas de sélection, donc on demande l'URL et le libelle
																				var URL = prompt("Quelle est l'url ?") || "";
																				var label = prompt("Quel est le libellé du lien ?") || "";
																				startTag = "<lien url=\"" + URL + "\">";
																				currentSelection = label;                     
																		}
																break;
																	case "cit":
															endTag = "</cit>";
															if (currentSelection) { // Il y a une sélection
																	if (currentSelection.length > 30) { // La longueur de la sélection est plus grande que 30. C'est certainement la citation, le pseudo fait rarement 20 caractères
																			var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																			startTag = "<cit nom=\"" + auteur + "\">";
																	} else { // On a l'Auteur, on demande la citation
																			var citation = prompt("Quelle est la citation ?") || "";
																			startTag = "<cit nom=\"" + currentSelection + "\">";
																			currentSelection = citation;    
																	}
															} else { // Pas de selection, donc on demande l'Auteur et la Citation
																	var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																	var citation = prompt("Quelle est la citation ?") || "";
																	startTag = "<cit nom=\"" + auteur + "\">";
																	currentSelection = citation;    
															}
													break;
															}
													}

													/* === Partie 3 : on insère le tout === */
													if (window.ActiveXObject) {
															textRange.text = startTag + currentSelection + endTag;
															textRange.moveStart("character", -endTag.length - currentSelection.length);
															textRange.moveEnd("character", -endTag.length);
															textRange.select();     
													} else {
															field.value = startSelection + startTag + currentSelection + endTag + endSelection;
															field.focus();
															field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
													} 

													field.scrollTop = scroll;     
											}
			
												function getXMLHttpRequest() {
													var xhr = null;

													if (window.XMLHttpRequest || window.ActiveXObject) {
														if (window.ActiveXObject) {
															try {
																xhr = new ActiveXObject("Msxml2.XMLHTTP");
															} catch(e) {
																xhr = new ActiveXObject("Microsoft.XMLHTTP");
															}
														} else {
															xhr = new XMLHttpRequest();
														}
													} else {
														alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
														return null;
													}

													return xhr;
												}
												
												function view(textareaId, viewDiv){
												var content = encodeURIComponent(document.getElementById(textareaId).value);
												var xhr = getXMLHttpRequest();

												if (xhr && xhr.readyState != 0) {
													xhr.abort();
													delete xhr;
												}

												xhr.onreadystatechange = function() {
													if (xhr.readyState == 4 && xhr.status == 200){
														document.getElementById(viewDiv).innerHTML = xhr.responseText;
													} else if (xhr.readyState == 3){
														document.getElementById(viewDiv).innerHTML = "<div style=\"text-align: center;\">Chargement en cours...</div>";
													}
												}

												xhr.open("POST", "view.php", true);
												xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
												xhr.send("string=" + content);
											}
											
		
		
												function insertTag(startTag, endTag, textareaId, tagType) {
													var field  = document.getElementById(textareaId); 
													var scroll = field.scrollTop;
													field.focus();

													/* === Partie 1 : on récupère la sélection === */
													if (window.ActiveXObject) {
															var textRange = document.selection.createRange();            
															var currentSelection = textRange.text;
													} else {
															var startSelection   = field.value.substring(0, field.selectionStart);
															var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
															var endSelection     = field.value.substring(field.selectionEnd);               
													}

													/* === Partie 2 : on analyse le tagType === */
													if (tagType) {
															switch (tagType) {
																	case "lien":
																		endTag = "</lien>";
																		if (currentSelection) { // Il y a une sélection
																				if (currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
																						// La sélection semble être un lien. On demande alors le libellé
																						var label = prompt("Quel est le libellé du lien ?") || "";
																						startTag = "<lien url=\"" + currentSelection + "\">";
																						currentSelection = label;
																				} else {
																						// La sélection n'est pas un lien, donc c'est le libelle. On demande alors l'URL
																						var URL = prompt("Quelle est l'url ?");
																						startTag = "<lien url=\"" + URL + "\">";
																				}
																		} else { // Pas de sélection, donc on demande l'URL et le libelle
																				var URL = prompt("Quelle est l'url ?") || "";
																				var label = prompt("Quel est le libellé du lien ?") || "";
																				startTag = "<lien url=\"" + URL + "\">";
																				currentSelection = label;                     
																		}
																break;
																	case "cit":
															endTag = "</cit>";
															if (currentSelection) { // Il y a une sélection
																	if (currentSelection.length > 30) { // La longueur de la sélection est plus grande que 30. C'est certainement la citation, le pseudo fait rarement 20 caractères
																			var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																			startTag = "<cit nom=\"" + auteur + "\">";
																	} else { // On a l'Auteur, on demande la citation
																			var citation = prompt("Quelle est la citation ?") || "";
																			startTag = "<cit nom=\"" + currentSelection + "\">";
																			currentSelection = citation;    
																	}
															} else { // Pas de selection, donc on demande l'Auteur et la Citation
																	var auteur = prompt("Quel est l'auteur de la citation ?") || "";
																	var citation = prompt("Quelle est la citation ?") || "";
																	startTag = "<cit nom=\"" + auteur + "\">";
																	currentSelection = citation;    
															}
													break;
															}
													}

													/* === Partie 3 : on insère le tout === */
													if (window.ActiveXObject) {
															textRange.text = startTag + currentSelection + endTag;
															textRange.moveStart("character", -endTag.length - currentSelection.length);
															textRange.moveEnd("character", -endTag.length);
															textRange.select();     
													} else {
															field.value = startSelection + startTag + currentSelection + endTag + endSelection;
															field.focus();
															field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
													} 

													field.scrollTop = scroll;     
											}
			
												function getXMLHttpRequest() {
													var xhr = null;

													if (window.XMLHttpRequest || window.ActiveXObject) {
														if (window.ActiveXObject) {
															try {
																xhr = new ActiveXObject("Msxml2.XMLHTTP");
															} catch(e) {
																xhr = new ActiveXObject("Microsoft.XMLHTTP");
															}
														} else {
															xhr = new XMLHttpRequest();
														}
													} else {
														alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
														return null;
													}

													return xhr;
												}
												
												function view(textareaId, viewDiv2){
												var content = encodeURIComponent(document.getElementById(textareaId).value);
												var xhr = getXMLHttpRequest();

												if (xhr && xhr.readyState != 0) {
													xhr.abort();
													delete xhr;
												}

												xhr.onreadystatechange = function() {
													if (xhr.readyState == 4 && xhr.status == 200){
														document.getElementById(viewDiv2).innerHTML = xhr.responseText;
													} else if (xhr.readyState == 3){
														document.getElementById(viewDiv2).innerHTML = "<div style=\"text-align: center;\">Chargement en cours...</div>";
													}
												}

												xhr.open("POST", "view.php", true);
												xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
												xhr.send("string=" + content);
											}
												</script>

</div>
</section>
</div>

 
              </div>
              
            </div>
            </div>
          </div>
        </div>
        </div>
<?php } ?>

<?php
$gallerie1 = $cnx->prepare("SELECT * FROM galerie ORDER BY id DESC LIMIT 0,3");
$gallerie1->execute();
$gallerie1result = $gallerie1->fetch();
$gallerie1->closeCursor();	
 ?> 
 
<div class="modal fade in" id="gallerie_<?php echo $gallerie1result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-left: 15px;">
          <div class="modal-dialog" role="document" style="width: 890px;">
            <div class="modal-content">
              
              
              <div class="modal-body" style="padding: 0px;"><div class="row-fluid">
	<div class="span12" align="center">
<div align="center" style="box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);webkit-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);-moz-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);height: 471px;width: 888px;">
    
<div class="video-wrapper">
<div class="video-container" style="padding-top: 0px;margin: -14px auto 25px 0;border-radius: 5px;">

  <div style="position: absolute;top: 432px;color: white;left: 10px;">
                                                <span style="font-size: 11px;float: left;display: block;margin-top: -5px;margin-bottom: 8px;font-weight: bold;">Votez pour cette image&nbsp;</span>	
         
 <?php
 $actu4 = $cnx->prepare("SELECT * FROM gallerie_ratings WHERE ip = :ip AND item = :item");
$actu4->execute(array(':item' => $gallerie1result['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
$acturesult4 = $actu4->fetch();
$actu4->closeCursor();	
 ?>                            

<?php $rating = $gallerie1result['rating']; ?>              		
 
<div id="ratings">   
<?php if($rating > "20.5") { ?>   
<div class="etoile_gallerie2" title="20/100"></div>
<?php }else{ ?>
<div class="etoile_gallerie" title="20/100"></div>
<?php } ?>                               
<?php if($rating > "40.5") { ?> 
<div class="etoile_gallerie2" title="40/100"></div>
<?php }else{ ?>
<div class="etoile_gallerie" title="40/100"></div>
<?php } ?>              
<?php if($rating > "60.5") { ?> 
<div class="etoile_gallerie2" title="60/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie"title="60/100"></div> 
<?php } ?>  
<?php if($rating > "80.5") { ?> 
<div class="etoile_gallerie2" title="80/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie" title="80/100"></div> 
<?php } ?>  
<?php if($rating > "90.9") { ?> 
<div class="etoile_gallerie2" title="100/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie" title="100/100"></div>
<?php } ?>
<?php if($acturesult4['ip'] != $_SERVER['REMOTE_ADDR']) { ?> 
<a href="" id="voteplus" title="Ajouter votre vote"><div class="vote_gallerie"></div></a> 
<?php }else{ ?>
<a href="" id="votemoins"><div class="vote_gallerie2" title="Supprimer votre vote"></div></a>
<?php } ?>
</div>     
</div>                                            

<span style="position: absolute;font-weight: 600;font-size: 21px;letter-spacing: 3px;left: 10px;top: 10px;text-shadow: 0 0 9px #a79a9a;color: #ffffff;font-family: 'bourgeois-bold';text-transform: uppercase;"><?php echo $gallerie1result['titre'] ?></span>
<a class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true" style="top: 11px;left: 860px;font-size: 20px;position: absolute;color: #000000;"></i></a>
<img src="https://over-games.fr/<?php echo $gallerie1result['image'] ?>" style="width: 100%;">

</div>
</div>
</div>
		</div>	
</div>

</div>
              
            </div>
          </div>
        </div>
        
<script>
    jQuery(document).ready(function(evt){
      jQuery("#voteplus").click(function() {
	
         jQuery("#ratings").load("rating-gallerie?id=<?php echo $gallerie1result['id']; ?>")
         
      	return false;
      	
	  }) 
	  
	 var compteurClic1 = "<?php echo $gallerie1result['rating']; ?>";  
	 
	 jQuery("#voteplus").on('click',function() {
	 
	    compteurClic1++;
	    
	   jQuery("#hearth_<?php echo $gallerie1result['id']; ?>").text(compteurClic1);
	   
	  return false;
	  });
	  
    })
</script>

<script>
    jQuery(document).ready(function(evt){
      jQuery("#votemoins").click(function() {
         jQuery("#ratings").load("rating-delete-gallerie?id=<?php echo $gallerie1result['id']; ?>")
      	return false;
	  })
	  
	  var compteurClic1_1 = "<?php echo $gallerie1result['rating']; ?>";  
	 
	 jQuery("#votemoins").on('click',function() {
	 
	    compteurClic1_1--;
	    
	   jQuery("#hearth_<?php echo $gallerie1result['id']; ?>").text(compteurClic1_1);
	   
	  return false;
	  });
	  
    })
	</script>
	
	<?php
$gallerie2 = $cnx->prepare("SELECT * FROM galerie ORDER BY id DESC LIMIT 1,3");
$gallerie2->execute();
$gallerie1result2 = $gallerie2->fetch();
$gallerie2->closeCursor();	
 ?> 
 
<div class="modal fade in" id="gallerie_<?php echo $gallerie1result2['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-left: 15px;">
          <div class="modal-dialog" role="document" style="width: 890px;">
            <div class="modal-content">
              
              
              <div class="modal-body" style="padding: 0px;"><div class="row-fluid">
	<div class="span12" align="center">
<div align="center" style="box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);webkit-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);-moz-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);height: 471px;width: 888px;">
    
<div class="video-wrapper">

<div class="video-container" style="padding-top: 0px;margin: -14px auto 25px 0;border-radius: 5px;">

  <div style="position: absolute;top: 432px;color: white;left: 10px;">
                                                <span style="font-size: 11px;float: left;display: block;margin-top: -5px;margin-bottom: 8px;font-weight: bold;">Votez pour cette image&nbsp;</span>	
         
 <?php
 $actu5 = $cnx->prepare("SELECT * FROM gallerie_ratings WHERE ip = :ip AND item = :item");
$actu5->execute(array(':item' => $gallerie1result2['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
$acturesult4 = $actu5->fetch();
$actu5->closeCursor();	
 ?>                            

<?php $rating = $gallerie1result2['rating']; ?>              		
 
<div id="ratings2">   
<?php if($rating > "20.5") { ?>   
<div class="etoile_gallerie2" title="20/100"></div>
<?php }else{ ?>
<div class="etoile_gallerie" title="20/100"></div>
<?php } ?>                               
<?php if($rating > "40.5") { ?> 
<div class="etoile_gallerie2" title="40/100"></div>
<?php }else{ ?>
<div class="etoile_gallerie" title="40/100"></div>
<?php } ?>              
<?php if($rating > "60.5") { ?> 
<div class="etoile_gallerie2" title="60/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie"title="60/100"></div> 
<?php } ?>  
<?php if($rating > "80.5") { ?> 
<div class="etoile_gallerie2" title="80/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie" title="80/100"></div> 
<?php } ?>  
<?php if($rating > "90.9") { ?> 
<div class="etoile_gallerie2" title="100/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie" title="100/100"></div>
<?php } ?>
<?php if($acturesult4['ip'] != $_SERVER['REMOTE_ADDR']) { ?> 
<a href="" id="voteplus2" title="Ajouter votre vote"><div class="vote_gallerie"></div></a> 
<?php }else{ ?>
<a href="" id="votemoins2"><div class="vote_gallerie2" title="Supprimer votre vote"></div></a>
<?php } ?>
</div>     
</div>                                            

<span style="position: absolute;font-weight: 600;font-size: 21px;letter-spacing: 3px;left: 10px;top: 10px;text-shadow: 0 0 9px #a79a9a;color: #ffffff;font-family: 'bourgeois-bold';text-transform: uppercase;"><?php echo $gallerie1result2['titre'] ?></span>
<a class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true" style="top: 11px;left: 860px;font-size: 20px;position: absolute;color: #000000;"></i></a>
<img src="https://over-games.fr/<?php echo $gallerie1result2['image'] ?>" style="width: 100%;">

</div>
</div>
</div>
		</div>	
</div>

</div>
              
            </div>
          </div>
        </div>
        
        <script>
    jQuery(document).ready(function(evt){
      jQuery("#voteplus2").click(function() {
         jQuery("#ratings2").load("rating-gallerie?id=<?php echo $gallerie1result2['id']; ?>")
      	return false;
	  })
	  
	  var compteurClic2 = "<?php echo $gallerie1result2['rating']; ?>";  
	 
	 jQuery("#voteplus2").on('click',function() {
	 
	    compteurClic2++;
	    
	   jQuery("#hearth_<?php echo $gallerie1result2['id']; ?>").text(compteurClic2);
	   
	  return false;
	  });
	  
	 
	  
    })
</script>

<script>
    jQuery(document).ready(function(evt){
      jQuery("#votemoins2").click(function() {
         jQuery("#ratings2").load("rating-delete-gallerie?id=<?php echo $gallerie1result2['id']; ?>")
      	return false;
	  })
	  
	  var compteurClic2_2 = "<?php echo $gallerie1result2['rating']; ?>";  
	 
	 jQuery("#votemoins2").on('click',function() {
	 
	    compteurClic2_2--;
	    
	   jQuery("#hearth_<?php echo $gallerie1result2['id']; ?>").text(compteurClic2_2);
	   
	  return false;
	  });
	  
    })
	</script>
	
<?php
$gallerie3 = $cnx->prepare("SELECT * FROM galerie ORDER BY id DESC LIMIT 2,3");
$gallerie3->execute();
$gallerie1result3 = $gallerie3->fetch();
$gallerie3->closeCursor();	
 ?> 
 
<div class="modal fade in" id="gallerie_<?php echo $gallerie1result3['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; padding-left: 15px;">
          <div class="modal-dialog" role="document" style="width: 890px;">
            <div class="modal-content">
              
              
              <div class="modal-body" style="padding: 0px;"><div class="row-fluid">
	<div class="span12" align="center">
<div align="center" style="box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);webkit-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);-moz-box-shadow: 0 0 18px rgba(80, 80, 80, 0.62);height: 471px;width: 888px;">
    
<div class="video-wrapper">
<div class="video-container" style="padding-top: 0px;margin: -14px auto 25px 0;border-radius: 5px;">

  <div style="position: absolute;top: 432px;color: white;left: 10px;">
                                                <span style="font-size: 11px;float: left;display: block;margin-top: -5px;margin-bottom: 8px;font-weight: bold;">Votez pour cette image&nbsp;</span>	
         
 <?php
 $actu5 = $cnx->prepare("SELECT * FROM gallerie_ratings WHERE ip = :ip AND item = :item");
$actu5->execute(array(':item' => $gallerie1result3['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
$acturesult4 = $actu5->fetch();
$actu5->closeCursor();	
 ?>                            

<?php $rating = $gallerie1result3['rating']; ?>              		
 
<div id="ratings3">   
<?php if($rating > "20.5") { ?>   
<div class="etoile_gallerie2" title="20/100"></div>
<?php }else{ ?>
<div class="etoile_gallerie" title="20/100"></div>
<?php } ?>                               
<?php if($rating > "40.5") { ?> 
<div class="etoile_gallerie2" title="40/100"></div>
<?php }else{ ?>
<div class="etoile_gallerie" title="40/100"></div>
<?php } ?>              
<?php if($rating > "60.5") { ?> 
<div class="etoile_gallerie2" title="60/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie"title="60/100"></div> 
<?php } ?>  
<?php if($rating > "80.5") { ?> 
<div class="etoile_gallerie2" title="80/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie" title="80/100"></div> 
<?php } ?>  
<?php if($rating > "90.9") { ?> 
<div class="etoile_gallerie2" title="100/100"></div>  
<?php }else{ ?>
<div class="etoile_gallerie" title="100/100"></div>
<?php } ?>
<?php if($acturesult4['ip'] != $_SERVER['REMOTE_ADDR']) { ?> 
<a href="" id="voteplus3" title="Ajouter votre vote"><div class="vote_gallerie"></div></a> 
<?php }else{ ?>
<a href="" id="votemoins3"><div class="vote_gallerie2" title="Supprimer votre vote"></div></a>
<?php } ?>
</div>     
</div>                                            

<span style="position: absolute;font-weight: 600;font-size: 21px;letter-spacing: 3px;left: 10px;top: 10px;text-shadow: 0 0 9px #a79a9a;color: #ffffff;font-family: 'bourgeois-bold';text-transform: uppercase;"><?php echo $gallerie1result3['titre'] ?></span>
<a class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true" style="top: 11px;left: 860px;font-size: 20px;position: absolute;color: #000000;"></i></a>
<img src="https://over-games.fr/<?php echo $gallerie1result3['image'] ?>" style="width: 100%;">

</div>
</div>
</div>
		</div>	
</div>

</div>
              
            </div>
          </div>
        </div>
        
        <script>
    jQuery(document).ready(function(evt){
      jQuery("#voteplus3").click(function() {
         jQuery("#ratings3").load("rating-gallerie?id=<?php echo $gallerie1result3['id']; ?>")
      	return false;
	  })
	  
	   var compteurClic3 = "<?php echo $gallerie1result3['rating']; ?>";  
	 
	 jQuery("#voteplus3").on('click',function() {
	 
	    compteurClic3++;
	    
	   jQuery("#hearth_<?php echo $gallerie1result3['id']; ?>").text(compteurClic3);
	   
	  return false;
	  });
	  
    })
</script>

<script>
    jQuery(document).ready(function(evt){
      jQuery("#votemoins3").click(function() {
         jQuery("#ratings3").load("rating-delete-gallerie?id=<?php echo $gallerie1result3['id']; ?>")
      	return false;
	  })
	  
	   var compteurClic3_3 = "<?php echo $gallerie1result3['rating']; ?>";  
	 
	 jQuery("#votemoins3").on('click',function() {
	 
	    compteurClic3_3--;
	    
	   jQuery("#hearth_<?php echo $gallerie1result3['id']; ?>").text(compteurClic3_3);
	   
	  return false;
	  });
	  
    })
	</script>	
      

<?php if(!empty($_SESSION['email'])) { ?>
<div class="modal fade" id="mp_read" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Lire le message</h4>
              </div>
              <div class="modal-body" style="height: auto;">
				<div class="tabWrapper">
                
        <?php
		$usersall2 = $cnx->prepare("SELECT * FROM mp_prive WHERE destinataire = :destinataire ORDER BY ddate, heure DESC");
		$usersall3 = $cnx->query("SET NAMES 'utf8'");
		$usersall2->execute(array(':destinataire' => $_SESSION['pseudo']));
		$usersall2->execute();
		?> 
  
																		
		<div align="center">
<section id="comments" class="frame river navigable">
	<div class="comment-list fasync" style="margin-top: -21px;" data-action="comments" data-id="155489" data-type="story">
      
      <?php require_once('view.php'); ?>
      
      <?php 
	
	$profilread = $cnx->prepare("SELECT * FROM mp_prive WHERE destinataire = :destinataire");
	$profilread->execute(array(':destinataire' => $_SESSION['pseudo']));
	?>

	
	<?php
	while ($donnees3 = $profilread->fetch()) { 
	?>

	<table width="100%" border="0">
  <tbody>
    <tr>
      <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;">Pseudo du destinataire :</td>
    </tr>
    
    <tr>
      <td>
      
      <div style="border-radius: 0px;color: white;font-weight: bold;width: auto;margin-top: 0px;text-align: center;margin-bottom: 14px;font-size: 16px;padding: 7px 12px 0px 0px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);background-color: rgba(0, 0, 0, 0.36);-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);height: 30px;">
		  <?php echo $donnees3['pseudo'] ?></div>
      
      </td>
    </tr>
    
    <tr>
      <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;">Adresse email du destinataire :</td>
    </tr>
    
    <tr><td> <div style="border-radius: 0px;color: white;font-weight: bold;width: auto;margin-top: 0px;text-align: center;margin-bottom: 14px;font-size: 16px;padding: 7px 12px 0px 0px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);background-color: rgba(0, 0, 0, 0.36);-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);height: 30px;">
                                        
										                                        
										  <div style=""><?php echo $donnees3['email'] ?></div>
                                          </div></td></tr>
    
    <tr>
      <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;">Sujet du message :</td>
    </tr>
    
    <tr><td><div style="border-radius: 0px;color: white;font-weight: bold;width: auto;margin-top: 0px;text-align: center;margin-bottom: 14px;font-size: 16px;padding: 7px 12px 0px 0px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);background-color: rgba(0, 0, 0, 0.36);-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);height: 30px;"><?php echo $donnees3['sujet']; ?></div></td></tr>
    <tr>
      <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;">Message du destinataire :</td>
    </tr>
    
   <tr><td><div style="border-radius: 0px;color: white;font-weight: bold;width: auto;margin-top: 0px;text-align: center;margin-bottom: 14px;font-size: 16px;padding: 7px 12px 0px 0px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);background-color: rgba(0, 0, 0, 0.36);-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.36);height: 30px;"><?php echo parseZCode($donnees3['message']); ?></div><br></td></tr>
   
   <tr>
      <td style="font-weight: bold; font-size: 15px; color: black; padding-bottom: 13px;"><div align="center"><a class="btn btn-warning" title="Marquer comme lu" href="/read-mp?id=<?php echo $donnees3['id'] ?>">Marquer comme lu</a> &nbsp; &nbsp;<a class="btn btn-warning" href="/remove-mp?id=<?php echo $donnees3['id'] ?>" title="Supprimer le message<">Supprimer le message</a></div></td>
    </tr>
   
  </tbody>
</table>

	
	<?php } ?>
	
</div>
</section>
</div>

 
              </div>
              
            </div>
          </div>
        </div>
        </div>
<?php } ?>


	<script>
	
			jQuery('#form_login').submit(function(b){
				jQuery('#login_valide').hide();
				 jQuery('#login_error').hide();
				jQuery.ajax({
								type 		: 'POST',
		url 		: '../account.php',
		data        : "&email1="+jQuery("#emaill").val()+"&password1="+jQuery("#password").val(), 
		dataType 	: 'json', 
						dataType:'json',
						success:function(a)
						{
							if(!a.success){
								jQuery('#login_error').show();
								jQuery('#login_error').fadeIn(1000).append(a.posted)
								
								function reloadjs(){
									jQuery('#login_error').hide(200);
								}
								setTimeout(reloadjs,900)
								
							}else{
									jQuery('#login_valide').show();
																														jQuery('#login_valide').fadeIn(1000).append(a.posted);
																														function reloadjs(){
									location.reload()}setTimeout(reloadjs,900)}}});return false});
	</script>
	
	
	
	
<script>
	
					jQuery('#recoverm').submit(function(evt) {
		jQuery('#success3').hide();
		jQuery('#error3').hide();
		
		jQuery.ajax({
		type 		: 'POST',
		url 		: '../password-recover.php',
		data        : "&pass2="+jQuery("#pass3").val()+"&token="+jQuery("#tok").val(), 
		dataType 	: 'json',
		success 	: function(data) {
		
		if (!data.success3) {
		
		jQuery('#error3').show();
		jQuery('#error3').fadeIn(1000).append(data.posted3);
			
		function reloadjs(){
									jQuery('#error3').hide(200);
			jQuery('#recoverm').hide(200);
			jQuery('#form_login').show(200);
								}
								setTimeout(reloadjs,900)	
			
		} else {
		jQuery('#success3').show();
		jQuery('#success3').fadeIn(1000).append(data.posted3);
			
			function reloadjs(){
									jQuery('#success3').hide(200);
								}
								setTimeout(reloadjs,900)
    
	
		}
		}
		});
		return false;
		});	
	</script>
	
<script>
jQuery('#btn_newsletter').click(function(evt) {
	
	jQuery('#btn_newsletter').fadeOut(200);
	jQuery('#table_news').fadeIn(200);
	
});	
</script>

<script>
	
		jQuery('#newsl').submit(function(evt) {
		jQuery('#success5').hide();
		jQuery('#error5').hide();
		
		jQuery.ajax({
		type 		: 'POST',
		url 		: '../newsletter-log.php',
		data        : "&emailnews="+jQuery("#emailn").val(), 
		dataType 	: 'json',
		success 	: function(data) {
		
		if (!data.success5) {
		
		jQuery('#error5').show();
			
		function reloadjs(){
									jQuery('#error5').hide(200);
			
								}
								setTimeout(reloadjs,900)	
			
		} else {
			
		jQuery('#success5').show();
	
			function reloadjs(){
									jQuery('#table_news').hide(200);
								}
								setTimeout(reloadjs,900)
    
	
		}
		}
		});
		return false;
		});	
	</script>
	
<!-- wp_footer --> 
