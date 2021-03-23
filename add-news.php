<?php session_start();


?>

<?php require('cnx.php'); ?>
<?php require_once('logged-admin.php'); ?>

<?php	

	
if(!empty($_POST))
	{	

	$Titre = stripslashes($_POST['Titre']);
	$Titre2 = stripslashes($_POST['Titre2']);
	$Description = stripslashes($_POST['Description']);
	$DescriptionPremium = stripslashes($_POST['DescriptionPremium']);
	$CourtDescriptionPremium = stripslashes($_POST['CourtDescriptionPremium']);
	$Image = stripslashes($_POST["image"]);
	$ImagePetite = stripslashes($_POST["ImagePetite"]);
	$Date = stripslashes($_POST['Date']);
	$Heure = stripslashes($_POST['Heure']);
	$DDate = addslashes($_POST['DDate']);
	$Tags = stripslashes($_POST['Tags']);
	$widht = stripslashes($_POST['widht']);
	$Cat = stripslashes($_POST['Cat']);
	$Paragraphe = stripslashes($_POST['Paragraphe']);	
	$ImgJeux = stripslashes($_POST['ImgJeux']);
	$BonPlans = stripslashes($_POST['BonPlans']);
	$BonPlansLien = stripslashes($_POST['BonPlansLien']);	
	$Createur = "Gaëtan";
	
	$comparateur = stripslashes($_POST['comparateur']);	
		
	$NewJeux = stripslashes($_POST['NewJeux']);
	$SortieJeux = stripslashes($_POST['SortieJeux']);
	$NomJeux = stripslashes($_POST['NomJeux']);
	$ImgJeux = stripslashes($_POST['ImgJeux']);
	
	$Categorie = stripslashes($_POST['Categorie']);
	$Categorie2 = stripslashes($_POST['Categorie2']);
	$Categorie3 = stripslashes($_POST['Categorie3']);
	$Categorie4 = stripslashes($_POST['Categorie4']);
	$Categorie5 = stripslashes($_POST['Categorie5']);
	$Categorie6 = stripslashes($_POST['Categorie6']);
	$Categorie7 = stripslashes($_POST['Categorie7']);
	$Categorie8 = stripslashes($_POST['Categorie8']);
            
    $q = array('BonPlansLien'=>$BonPlansLien, 'BonPlans'=>$BonPlans, 'Cat'=>$Cat, 'Paragraphe'=>$Paragraphe, 'Titre'=>$Titre, 'Titre2'=>$Titre2, 'Description'=>$Description, 'Image'=>$Image, 'ImagePetite'=>$ImagePetite, 'Date'=>$Date, 'Heure'=>$Heure, 'DDate'=>$DDate, 'Tags'=>$Tags, 'Categorie'=>$Categorie, 'Categorie2'=>$Categorie2, 'Categorie3'=>$Categorie3, 'Categorie4'=>$Categorie4, 'Categorie5'=>$Categorie5, 'Categorie6'=>$Categorie6, 'Categorie7'=>$Categorie7, 'Categorie8'=>$Categorie8, 'widht'=>$widht, 'Createur'=>$Createur, 'NewJeux'=>$NewJeux, 'SortieJeux'=>$SortieJeux, 'NomJeux'=>$NomJeux, 'ImgJeux'=>$ImgJeux, 'DescriptionPremium'=>$DescriptionPremium, 'CourtDescriptionPremium'=>$CourtDescriptionPremium, 'comparateur'=>$comparateur);
    $sql = 'INSERT INTO Actualite (BonPlansLien, BonPlans, Cat, Paragraphe, Titre, Titre2, Description, Image, ImagePetite, Date, Heure, DDate, Tags, Categorie, Categorie2, Categorie3, Categorie4, Categorie5, Categorie6, Categorie7, Categorie8, widht, Createur, NewJeux, SortieJeux, NomJeux, ImgJeux, DescriptionPremium, CourtDescriptionPremium, comparateur) VALUES (:BonPlansLien, :BonPlans, :Cat, :Paragraphe, :Titre, :Titre2, :Description, :Image, :ImagePetite, :Date, :Heure, :DDate, :Tags, :Categorie, :Categorie2, :Categorie3, :Categorie4, :Categorie5, :Categorie6, :Categorie7, :Categorie8, :widht, :Createur, :NewJeux, :SortieJeux, :NomJeux, :ImgJeux, :DescriptionPremium, :CourtDescriptionPremium, :comparateur)';
    $req = $cnx->prepare($sql);
    $req->execute($q);
	
	
	die('<META HTTP-equiv="refresh" content=0;URL=add-news?news=oui>');
		
	}else{
	
	}

?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet15['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet15['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet15['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet15['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet15['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	<link rel="stylesheet" href="wp-content/themes/powerup/bootstrapcss"/>
	
	<style>	p {
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
	</style>
	
		<style>
    .pm__funnel__p, .pm__funnel__p--black, .pm__funnel__p--yellow {
    margin: 0 auto 1.25rem;
    text-align: center;
    color: #999;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
    .row--nmrg {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -webkit-flex: 0 1 auto;
    -moz-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
    .gk__form__button--inline {
    padding: 0 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #444;
    border: 1px solid #f5a623;
    border-radius: 0 4px 4px 0;
    background-color: #fff;
    font-size: .875rem;
    line-height: .875rem;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}

.gk__form__button, .gk__form__button--inline {
    height: 34px;
}
    .gk__form__control--button {
    margin-right: 0;
    padding: 8px 0 8px 8px;
    border-width: 1px 0 1px 1px;
    border-radius: 4px 0 0 4px;
}

.gk__form__control, .gk__form__control--block, .gk__form__control--button {
    font-size: .875rem;
    display: inline-block;
    width: 100%;
    height: 34px;
    padding: .625rem;
    color: #191919;
    border-width: 1px;
    border-style: solid;
    border-color: #989898;
    border-radius: 4px;
    outline: none;
    background-color: #fcfcfc;
    font-size: .875rem;
    line-height: 18px;
    letter-spacing: .01rem;
    font-family: "Roboto",sans-serif;
}
    .gk__form__label, .gk__form__label--full, .gk__form__span--full, label--full, .gk__form__span, .gk__form__label--export-collection, .gk__form__span--export-collection, label--export-collection, label {
    display: inline-block;
    color: #242424;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
    .pm__form__group {
    margin: 1.25rem 0;
}
    .pm__funnel__p, .pm__funnel__p--black, .pm__funnel__p--yellow {
    margin: 0 auto 1.25rem;
    text-align: center;
    color: #999;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
    
.pm__t2 {
    color: #2196f3;
    -webkit-font-smoothing: antialiased;
    font-size: 1.5rem;
    line-height: 2rem;
    letter-spacing: 0rem;
    font-family: "Open Sans Light",sans-serif;
    font-weight: 300;
}
    .pm__promo-code>header {
    margin-bottom: 1.25rem;
}

.pm__promo-code>header {
    margin-bottom: 1.25rem;
}
		   .pm__list-body__logo {
    height: 45px;
    margin: 0.25rem;
    background-image: url(/image/logo-premium.png);
    background-repeat: no-repeat;
    background-position: center center;
}
										.pm__t1--underline {
    position: relative;
    margin-bottom: 1.25rem;
    padding-bottom: 1.25rem;
    text-align: center;
}

.pm__t1, .pm__t1--line, .pm__t1--center, .pm__t1--underline {
    color: #292725;
    -webkit-font-smoothing: antialiased;
    font-size: 26px;
    line-height: 3rem;
    letter-spacing: 0pxrem;
    font-family: "Open Sans Light",sans-serif;
    font-weight: 300;
}
										.pm__t1--underline:before {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
    width: 174px;
    height: 1px;
    margin: 0 auto;
    content: '';
    background-color: #2196f3;
}
	.pm__about p strong {
    color: #2196f3;
}

.pm__about p strong {

    color: #2196f3;
}
										.pm__about {
    max-width: 524px;
    margin: 0 auto;
    margin-bottom: 2.5rem;
    text-align: center;
}

										.pm__container {
    width: 100%;
    max-width: 1280px;
    margin: 0 auto;
}

										.pm__block {
    padding: 1.25rem 0;
}

.pm__theme--day .pm__t1, .pm__theme--day .pm__t1--line, .pm__theme--day .pm__t1--center, .pm__theme--day .pm__t1--underline {
    color: #292725;
}

.pm__t1--center {
    text-align: center;
}

.pm__t1, .pm__t1--line, .pm__t1--center, .pm__t1--underline {
    color: #292725;
    -webkit-font-smoothing: antialiased;
    font-size: 2.25rem;
    line-height: 3rem;
    letter-spacing: 0pxrem;
    font-family: "Open Sans Light",sans-serif;
    font-weight: 300;
}
										.pm__pricing {
    margin: 1.25rem 0;
}

.center-xs {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
}

.row--nmrg {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -webkit-flex: 0 1 auto;
    -moz-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}


.pm__pricing__item {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 202px;
    height: 330px;
    margin: 1.25rem;
    padding: 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    border: 2px solid #2196f3;
    border-radius: 10px;
    background-color: #fff;
}
		
		.entry-content img {
    width: 28%;
    height: auto;
}

.column {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -moz-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}		
										
	.pm__pricing__info {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    height: 90px;
    padding-bottom: 1.25rem;
}
										
	.pm__pricing__info__title {
    margin-top: auto;
    color: #030000;
    font-size: 1.125rem;
    line-height: 1.25rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
	
										.pm__pricing__feature-list {
    position: relative;
    padding: 10px 0;
}


.gk__list {
    list-style-type: none;
}
										
	.gk__list>li:first-child {
    margin-top: 0;
}


.pm__pricing__feature {
    color: #999;
    font-size: .875rem;
    line-height: 1.125rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}

										.middle-xs {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.flex-card {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -moz-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-flex-basis: 1;
    -ms-flex-preferred-size: 1;
    flex-basis: 1;
    -webkit-transition: all ease .5s;
    -o-transition: all ease .5s;
    transition: all ease .5s;
    -webkit-flex-shrink: 1;
    -ms-flex-negative: 1;
    flex-shrink: 1;
}
										
.pm__pricing__action {
    width: 100%;
    margin-top: 1.25rem;
    padding: .625rem 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #2196f3;
    border: 1px solid #2196f3;
    border-radius: 8px;
    outline: none;
    background-color: #fff;
    font-size: 1.125rem;
    line-height: 1.125rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
										
										.pm__pricing__info__title {
    margin-top: auto;
    color: #030000;
    font-size: 1.125rem;
    line-height: 1.25rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
										.pm__pricing__info__price span {
    font-size: 1.125rem;
    line-height: 0;
    vertical-align: super;
}
										
										.pm__pricing__info__p, .pm__pricing__info__p--top {
    color: #030000;
    font-size: .875rem;
    line-height: .875rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}

.pm__pricing__info__p--top {
    margin-top: auto;
}

.pm__pricing__info__p, .pm__pricing__info__p--top {
    color: #030000;
    font-size: .875rem;
    line-height: .875rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
										.pm__pricing__info__price {
    margin-top: auto;
    color: #030000;
    font-size: 1.5rem;
    line-height: 2.2rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
					
										.pm__pricing__info__p, .pm__pricing__info__p--top {
    color: #030000;
    font-size: .875rem;
    line-height: .875rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
										
										.pm__pricing__info {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    height: 90px;
    padding-bottom: 1.25rem;
}
										.pm__pricing__feature-list {
    position: relative;
    padding: 10px 0;
}
										
										.gk__list>li:last-child {
        margin-bottom: 0;
    padding-bottom: 10px;
}


.gk__list>li {
    margin: 0 0 .625rem 0;
}

.pm__pricing__feature {
    color: #999;
    font-size: .875rem;
    line-height: 1.125rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
										
										.middle-xs {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
										.pm__pricing__offer {
    color: #030000;
    font-size: 1rem;
    line-height: 1.125rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
										
										.pm__pricing__item {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 202px;
    height: 330px;
    margin: 1.25rem;
    padding: 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    border: 2px solid #2196f3;
    border-radius: 10px;
    background-color: #fff;
}
										
										.pm__pricing__feature-list:before {
    top: 0;
}

.pm__pricing__feature-list:before, .pm__pricing__feature-list:after {
    position: absolute;
    right: 0;
    left: 0;
    width: 85px;
    height: 1px;
    margin: 0 auto;
    content: '';
    background-color: #2196f3;
}

.pm__pricing__feature-list:before {
    top: 0;
}


										
.pm__pricing__feature-list:before, .pm__pricing__feature-list:after {
    position: absolute;
    right: 0;
    left: 0;
    width: 85px;
    height: 1px;
    margin: 0 auto;
    content: '';
    background-color: #2196f3;
}
										.pm__pricing__item {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 202px;
    height: 330px;
    margin: 1.25rem;
    padding: 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    border: 2px solid #2196f3;
    border-radius: 10px;
    background-color: #fff;
										}
.column {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -moz-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}

										
.pm__pricing__item {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 202px;
    height: 330px;
    margin: 1.25rem;
    padding: 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    border: 2px solid #2196f3;
    border-radius: 10px;
    background-color: #fff;
}
										
										.pm__pricing__action:active {
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #fff;
    background-color: #f6b03b;
}

.pm__pricing__action:hover, .pm__pricing__action:focus {
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #fff;
    background-color: #2196f3;
}

.pm__pricing__action:active {
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #fff;
    background-color: #f6b03b;
}

.pm__pricing__action:hover, .pm__pricing__action:focus {
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #fff;
    background-color: #2196f3;
}

.pm__pricing__action {
    width: 100%;
    margin-top: 1.25rem;
    padding: .625rem 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #2196f3;
    border: 1px solid #2196f3;
    border-radius: 8px;
    outline: none;
    background-color: #fff;
    font-size: 1.125rem;
    line-height: 1.125rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}

.pm__pricing__action {
    width: 100%;
    margin-top: 1.25rem;
    padding: .625rem 1.25rem;
    cursor: pointer;
    -webkit-transition: all ease .2s;
    -o-transition: all ease .2s;
    transition: all ease .2s;
    color: #2196f3;
    border: 1px solid #2196f3;
    border-radius: 8px;
    outline: none;
    background-color: #fff;
    font-size: 1.125rem;
    line-height: 1.125rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
										.offer4
										{
											webkit-box-shadow: 0 0 10px rgba(0,0,0,.5);
    -moz-box-shadow: 0 0 10px rgba(0,0,0,.5);
    box-shadow: 0 0 10px rgba(0,0,0,.5);
										}
										
										.pm__about__footer {
								margin: 5rem 0 0 0;
								padding: 5rem 0;
								text-align: center;
								background-color: #f5a623;
								background-image: url(/image/pm-footer-background.svg);
								background-repeat: repeat-x;
								background-position: center bottom;
								-o-background-size: 1900px;
								background-size: 1900px;
							}
										
										.pm__about__footer__title {
    margin: 0 0 1.875rem 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 2.25rem;
    line-height: 2.25rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
		  </style>
		  
		  <style>
    .pm__overlay-paywall, .pm__overlay-paywall--last {
    position: fixed;
    z-index: 210;
    bottom: 2.5rem;
    left: 52.5%;
    width: 100%;
    max-width: 1310px;
    height: 130px;
    padding: 0 2.5rem;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    pointer-events: none;
}
    .pm__overlay-paywall__inner {
    position: relative;
    overflow: hidden;
    width: 100%;
    max-width: 1100px;
    height: 100%;
    padding: 1.875rem;
    -webkit-transition: max-width .25s ease-in-out;
    -o-transition: max-width .25s ease-in-out;
    transition: max-width .25s ease-in-out;
    pointer-events: all;
    border: solid 2px #e9e9e9;
    border-radius: .625rem;
    background-color: #fff;
    box-shadow: 0 3px 6px 0 rgba(36,36,36,0.2);
}
    
    .pm__overlay-paywall__inner__logo {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 30px;
    width: 180px;
    height: 100%;
    -webkit-transition: opacity .25s ease-in-out .25s;
    -o-transition: opacity .25s ease-in-out .25s;
    transition: opacity .25s ease-in-out .25s;
    background-image: url(/image/logo-premium.png);
    background-repeat: no-repeat;
    background-position: center center;
    -o-background-size: contain;
    background-size: contain;
}
    
    .pm__overlay-paywall__inner__gift {
    position: absolute;
    z-index: 1;
    top: 28px;
    left: 0;
    width: 100%;
    padding: 0 350px 0 240px;
    -webkit-transition: opacity .25s ease-in-out .25s;
    -o-transition: opacity .25s ease-in-out .25s;
    transition: opacity .25s ease-in-out .25s;
}
    
    .pm__overlay-paywall__inner__gift__img {
    height: 46px;
}
    
    .pm__overlay-paywall__inner__gift__img__inner {
    display: block;
    width: 87px;
    margin: -25px auto;
}
    
    .pm__overlay-paywall__inner__gift__text {
    z-index: 1;
    margin: 2.625rem 0 0 0;
    text-align: center;
    color: #030000;
    font-size: .875rem;
    line-height: 1.125rem;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
    
.pm__overlay-paywall__inner__gift__text a:link, .pm__overlay-paywall__inner__gift__text a:visited, .pm__overlay-paywall__inner__gift__text a:focus, .pm__overlay-paywall__inner__gift__text a:active {
    display: none;
}
.pm__overlay-paywall__inner__gift__text a:link, .pm__overlay-paywall__inner__gift__text a:visited, .pm__overlay-paywall__inner__gift__text a:focus, .pm__overlay-paywall__inner__gift__text a:active {
    display: block;
    margin: .3125rem 0 0 0;
    text-decoration: none;
    color: #737373;
}
    
.pm__overlay-paywall__inner__try {
    position: absolute;
    z-index: 10;
    top: 0;
    right: 30px;
    width: 320px;
    height: 100%;
    padding: 1.875rem;
}
    
.pm__button:link, .pm__button:visited, .pm__button:focus, .pm__button:active {
	font-weight: bold;
    display: block;
    width: 100%;
    padding: .9375rem 1.25rem;
    cursor: pointer;
    -webkit-transition: border-color ease .2s;
    -o-transition: border-color ease .2s;
    transition: border-color ease .2s;
    text-decoration: none;
    color: #ffffff;
    border: 2px solid #47474761;
    border-radius: 8px;
    background-color: #2b95e9;
    font-size: 1rem;
    line-height: .75rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
	
.pm__button:hover {
	font-weight: bold;
    display: block;
    width: 100%;
    padding: .9375rem 1.25rem;
    cursor: pointer;
    -webkit-transition: max-width .25s ease-in-out;
    -o-transition: max-width .25s ease-in-out;
    transition: max-width .25s ease-in-out;
    text-decoration: none;
    color: #ffffff;
    border: 2px solid #47474761;
    border-radius: 8px;
    background-color: #2b95e9;
    font-size: 1rem;
    line-height: .75rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
	opacity: 0.5;
}
.pm__button {
    text-align: center;
} 
    
.pm__overlay-paywall__inner__collapse-button {
    position: absolute;
    z-index: 10;
    top: 0;
    right: 0;
    width: 30px;
    height: 100%;
    cursor: pointer;
    border-left: solid 2px #e9e9e9;
}
    
.pm__overlay-paywall__inner__collapse-button::before {
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 1.5rem;
    text-align: center;
    font-family: Glyphicons Halflings;
    font-size: 20px;
    font-weight: normal;
    font-style: normal;
    line-height: 1.5rem;
    content: "\e014";
    vertical-align: middle;
    text-transform: none;
    text-rendering: auto;
    speak: none;
    -webkit-font-smoothing: antialiased;
    margin: auto;
    transition: transform 0.25s ease-in-out 0s;
    font-variant: normal;
}    
			  
			  .pr__header__main__body__info--game, .pr__header__main__body__info--platform {
    margin-top: .3125rem;
    display: block;
}
.pr__header__main__body__info, .pr__header__main__body__info--game, .pr__header__main__body__info--platform {
    font-size: .75rem;
    line-height: 18px;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
.pr__header__main__body__info__key {
    color: #fff;
}
.pr__header__main__body__info__separator {
    color: #fff;
    font-weight: bold;
}
.pr__header__main__body__info__key {
    color: #fff;
    font-weight: bold;
}
.pr__header__main__body__info ul li, .pr__header__main__body__info--game ul li, .pr__header__main__body__info--platform ul li {
    display: inline-block;
    color: white;
    font-weight: bold;
}
.pr__header__main__body__info ul, .pr__header__main__body__info--game ul, .pr__header__main__body__info--platform ul {
    display: inline-block;
    list-style: none;
}
.links-premium
{
	cursor: pointer;
	position: absolute;
	z-index: 50;
	left: 74%;
	width: 154px;
	height: 124px;
}

.gk__text__box {
    position: relative;
    margin: .625rem 0;
    padding: 1.25rem;
    margin-left: -45px;
    width: 776px;
    border: 1px solid #2196f3;
    border-radius: .41667rem;
    background-color: #edeceb;
    font-size: 1rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
.gk__text__box>.gk__text__video {
    margin-top: 1.25rem;
    padding: 0;
    background-color: transparent;
    background-image: none;
}

.gk__text__video {
    padding: 0 2.5rem 0 2.5rem;
}

.gk__text__container--full {
    margin: 1.25rem -1.25rem 0 -1.25rem;
}
.ed__news .gk__text__p {
    margin-top: 1.25rem;
}
.gk__text__p, .gk__text__p+aside {
    position: relative;
    margin-top: 1.5rem;
}
.gk__text__p, .gk__text__link {
    font-size: 1rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

.gk__text__container img {
    max-width: 100%;
    height: auto;
}

.js-slideshow {
    cursor: pointer;
}

.gk__text__img--left {
    float: left;
    margin: .5rem 1.875rem 1.25rem 0;
}

.gk__text__p, .gk__text__p+aside {
    position: relative;
    margin-top: 0.5rem;
}

.gk__text__square--full {
    margin-top: 1.5rem;
    padding: .625rem .5rem;
    background-color: #242424;
}

.gk__text__square--full span {
    color: #2692e9;
}

.ed__news .gk__text__p {
    margin-top: 1.25rem;
}

.gk__text__square--full p, .gk__text__square--full dl>dd, .gk__text__square--full ul>li, .gk__text__square--full ol>li {
    color: #fff;
}


.gk__text__square__container>p {
    margin: .625rem 0 0 0;
    padding: 0;
    text-align: justify;
    text-justify: newspaper;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

.gk__text__p, .gk__text__link {
    font-size: 13px !important;
    line-height: 1.5rem !important;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

.gk__text__square__title {
        color: #ffffff;
    font-size: 1.125rem;
    line-height: 3.5rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
}

.gk__text__container {
        margin: -30px auto;
}

.gk__text__container img {
    max-width: 100%;
    height: auto;
}
.js-slideshow {
    cursor: pointer;
}

.gk__text__img--right {
    float: right;
    margin: -0.5rem 0 1.25rem 1.875rem;
}

.gk__text__container img {
    max-width: 100%;
    height: auto;
}

.js-slideshow {
    cursor: pointer;
}

.gk__text__img--left {
    float: left;
    margin: 7px 1.875rem 1.25rem 0;
}

 .gk__text__p.gk__text__square--stroke, .gk__text__p+aside.gk__text__square--stroke {
    margin-top: 2.5rem;
}

.gk__text__p, .gk__text__p+aside {
    position: relative;
    margin-top: 1.5rem;
}
    .gk__text__table td {
    padding: .625rem;
}
    .gk__text__table tr:nth-child(odd) {
    background: #f4f3f3;
}
    .gk__text__table thead {
    height: 1.25rem;
}
    .gk__text__table {

    width: 100%;
    margin: 1.25rem 0;
    text-align: center;
}
    .gk__text__square__container {
        padding: 0 0 0 28px;
    margin-top: 42px;
}
    .gk__text__square__title--instroke {
    position: absolute;
    top: -1.875rem;
    right: 1.875rem;
    padding: .625rem;
    color: #428bca;
    background-color: #291717e3;
    font-size: 1.5rem;
    line-height: 2rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
    .gk__text__square--stroke {
    position: relative;
    margin-top: 2.5rem;
    text-align: justify;
    text-justify: newspaper;
    color: #666;
    border: 1px solid #428bca;
}

.gk__text__table tr:nth-child(even) {
    background: #e8e7e6;
}

.gk__text__p, .gk__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}
.gk__text__square--left {
    position: relative;
    z-index: 2;
    float: left;
    margin: 0 1.875rem .625rem 0;
}
.gk__text__square, .gk__text__square--left, .gk__text__square--right {
    padding: 0;
    color: #636363;
    background-color: #edeceb;
}

.gk__text__square__title {
        color: #ffffff;
    font-size: 1.125rem;
    line-height: 3.5rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
}

.ed__news .gk__text__p {
    margin-top: 1.25rem;
}
.gk__text__square__container>p {
    margin: .625rem 0 0 0;
    padding: 0;
    text-align: justify;
    text-justify: newspaper;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
.gk__text__p, .gk__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}
.gk__text__p, .gk__text__link {
    font-size: 1rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

.gk__text__img--center>img {
    display: block;
    max-width: 100%;
    height: auto;
    margin: 0 auto;
}

.gk__text__img--center {
    display: block;
    margin: 2.5rem auto;
}

.gk__text__list {
    margin: 1.25rem 0;
    margin-right: 41px;
    list-style: none;
    font-size: 1rem;
    line-height: 22px;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

gk__text__square__container>dl>dd, .gk__text__square__container>ul>li, .gk__text__square__container>ol>li {
    display: inline;
    font-size: .875rem;
    line-height: 1.25rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
.gk__text__list li {
    margin-top: .41667rem;
}

.gk__text__square__container>dl, .gk__text__square__container>ul, .gk__text__square__container>ol {
    min-width: 6.25rem;
    margin-top: .625rem;
}

.gk__text__container img {
    max-width: 100%;
    height: auto;
}

#info
{
	font-size: 18px;
	color: #555;
	text-align: center;
	margin-bottom: 25px;
}


.scrollbar
{
	
}

.force-overflow
{
	min-height: 450px;
}

#wrapper
{
	text-align: center;
	width: 500px;
	margin: auto;
}

/*
 *  STYLE 7
 */

#style-7::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
	border-radius: 10px;
}

#style-7::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-image: -webkit-gradient(linear,
									   left bottom,
									   left top,
									   color-stop(0.44, rgb(122,153,217)),
									   color-stop(0.72, rgb(73,125,189)),
									   color-stop(0.86, rgb(28,58,148)));
}

.gk__progression-bar {
    position: fixed;
    z-index: 311;
    top: 0;
    left: 0;
    width: 0;
    height: 3px;
    -webkit-transition: width .3s;
    -o-transition: width .3s;
    transition: width .3s;
    background: #2b95e9;
}
</style>
	
	<style>
    
    .gk__pt.has--tbs .gk__pt__inr {
    border: 1px solid #e7e7e7;
    border-radius: 0 3px 3px 3px;
}
.gk__pt__inr {
    position: relative;
    background-color: #fff;
}
    .gk__pt__tbs__drpdwn-m {
    position: absolute;
    z-index: 3;	
    top: 0;
    left: 0;
    display: none;
    width: 100%;
    height: 100%;
    border-radius: 0 0 3px 3px;
    background-color: #fff;
}
    .gk__pt__tbs__drpdwn-m__lst {
    list-style: none;
}
    .gk__pt__lst {
    overflow: hidden;
    list-style: none;
	margin-left: -40px;	
}
    .gk__pt.has--tbs .gk__pt__lst__itm {
    padding: 0 6px;
}
.gk__pt__lst__itm {
    position: relative;
    z-index: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    height: 40px;
    padding: 0 4px;
    cursor: pointer;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
	background-color: #fef5e6;
}
    .gk__pt__lst__itm__lnk {
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 40px;
    background-color: transparent;
}
    
    .gk__pt__lst__itm:first-of-type .gk__pt__slr {
    font-weight: bold;
    color: #030000;
    font-size: .875rem;
    line-height: .875rem;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
.gk__pt__slr {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    -webkit-box-flex: 1;
    -webkit-flex: 1 0 114px;
    -moz-box-flex: 1;
    -ms-flex: 1 0 114px;
    flex: 1 0 114px;
    height: 100%;
    margin: 0 4px 0 0;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
    color: #333;
    min-width: 150px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: .875rem;
    line-height: .875rem;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
    .gk__pt__slr i, .gk__pt__slr img {
    top: 0;
    width: 16px;
    height: 16px;
    margin: 0 6px 0 0;
}
.merchant-steam {
    width: 16px;
    height: 16px;
    background-position: -68px -32px;
}
.merchant {
    position: relative;
    display: inline-block;
    background-image: url(//d3isma7snj3lcx.cloudfront.net/assets/front/img/icons/merchant.png);
    background-repeat: no-repeat;
}
    .gk__pt__lst__itm:first-of-type .gk__pt__prc {
    color: #030000;
    font-size: 1.25rem;
    line-height: 40px;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
.gk__pt__prc {
    font-weight: bold;
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    min-width: 114px;
    height: 100%;
    margin: 0 8px 0 0;
    text-align: center;
    color: #242424;
    background-color: #fef5e6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 1rem;
    line-height: 40px;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
    .gk__pt__prc::after {
    content: " €";
}
    .gk__pt__cta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    min-width: 109px;
    height: 100%;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
    .gk__pt__cta__btn {
    font-weight: bold;
    width: 100%;
    height: 32px;
    color: white;
    text-align: center;
    text-transform: uppercase;
    border-radius: 3px;
    background-color: #2b95e9;
    font-size: .75rem;
    line-height: 32px;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
    .gk__pt__cta__btn:before {
    content: 'Voir l\'offre';
}
    .gk__pt__cta__btn::after {
   font-family: FontAwesome;
    font-size: 32.9px;
    font-weight: normal;
    margin-left: 9px;
    font-style: normal;
    content: "\f105";
    vertical-align: middle;
    -webkit-font-smoothing: antialiased;
}
	
	.gk__button__comment {
  	width: 800px !important;
    padding: 2.25rem;
    border-width: 1px 0;
    border-color: #dddddc;
    border-style: solid;
    margin-top: 0.625rem;
    margin-left: 15%;
}
	.gk__button__comment__inner:link, .gk__button__comment__inner:visited, .gk__button__comment__inner:focus, .gk__button__comment__inner:active {
    font-weight: bold;
    display: block;
    width: 100%;
    text-transform: uppercase;
    max-width: 360px;
    padding: 0 1.25rem;
    margin: 0 auto;
    cursor: pointer;
    -webkit-transition: border-color ease .2s;
    -o-transition: border-color ease .2s;
    transition: border-color ease .2s;
    text-decoration: none;
    color: #030000;
    border-radius: 3px;
    background-color: #f5a623;
    border: 2px solid #f5a623;
    font-size: .875rem;
    line-height: 1.875rem;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
	
    .gk__breadcrumb > ol > li a:link::after, .gk__breadcrumb > ol > li a:visited::after {
    color: rgb(46, 150, 233);
    display: inline-block;
    font-family: fontgamekult;
    font-size: 0.75rem;
    font-weight: bold;
    font-style: normal;
    line-height: 0.875rem;
    content: ">";
    vertical-align: middle;
    text-transform: none;
    text-rendering: auto;
    speak: none;
    -webkit-font-smoothing: antialiased;
    margin: 0px 0px 0px 0.3125rem;
    font-variant: normal normal;
}
    .gk__breadcrumb>ol>li a:link, .gk__breadcrumb>ol>li a:visited {
    color: #444;
    text-decoration: none;
}
    .gk__breadcrumb>ol>li {
    color: #444;
    display: inline;
    font-size: .75rem;
    line-height: .875rem;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
    .gk__breadcrumb>ol {
    display: block;
    margin: 0 -71px;
    max-width: 1220px;
}
    .gk__breadcrumb {
    position: relative;
    list-style-type: none;
    padding: .41667rem 1.25rem .41667rem 2.5rem;
    background-color: #ececec;
    box-shadow: 0 3px 4px 0 rgba(0,0,0,0.12);
    z-index: 2;
}
	p+.gk__text__subhead:before {
    display: block;
}
	.gk__text__subhead:before {
     display: block;
    width: 20%;
    height: 2px;
    margin-top: -0.25rem;
    margin-right: auto;
    margin-bottom: 1.5rem;
    margin-left: auto;
    content: '';
    background-color: #0e75b9;
}
.gk__text__container+.gk__text__container .gk__text__subhead, .gk__text__container--full+.gk__text__container .gk__text__subhead {
    margin-top: 2.5rem;
}
.gk__text__subhead {
    clear: both;
    margin-top: 0;
    color: #030000;
    font-size: 1.3125rem;
    line-height: 2rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
    .ed__show__player__container {
    margin-right: -1.25rem;
    margin-left: -1.25rem;
    padding: 0 1.25rem 1.25rem 1.25rem;
    background-color: #242424;
}
    .pr__game-h__sm .gk__helpers__category {
    width: 100%;
    padding: 0;
    background-color: transparent;
}
    .pr__game-h__sm__details__platforms li {
    display: inline-block;
    padding-right: 3px;
    color: #aeaeae;
    font-size: .75rem;
    line-height: 12px;
    letter-spacing: .01rem;
    font-family: "Roboto",sans-serif;
}
    .pr__game-h__sm__details__platforms {
    line-height: 12px;
    float: left;
    clear: both;
    list-style-type: none;
}
    .pr__game-h__sm__details span {
    vertical-align: baseline;
}

.pr__game-h__sm__details__release {
    float: left;
    clear: both;
    margin: 5px 0;
    list-style-type: none;
    font-size: .75rem;
    line-height: 12px;
    letter-spacing: .01rem;
    font-family: "Roboto",sans-serif;
}
    pr__game-h__sm .gk__helpers__category {
    width: 100%;
    padding: 0;
    background-color: transparent;
}

.pr__game-h__sm__details span {
    vertical-align: baseline;
}


    .pr__game-h__sm__details__title {
    float: left;
    text-transform: uppercase;
}

.gk__helpers__fat-title-s, .gk__helpers__fat-title-s--complementary {
    font-size: 12px;
    line-height: 0px;
    font-family: sans-serif;
    font-weight: bold;
}
    .pr__game-h__sm__details {
    float: left;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -moz-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding: 0 10px;
}
    .pr__game-h__sm figure img {
    width: 100%;
    height: auto;
    border-radius: 6px;
}

.gk__text__container img {
    max-width: 100%;
    height: auto;
}
    .pr__game-h__sm figure {
    font-size: 0;
    width: 80px;
    height: 80px;
}

.pr__game-h__sm figure {
    position: relative;
}
    .pr__game-h__sm {
    padding-right: 10px;
}

.between-xs {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.row--nowrap {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
}
    .ed__news__details {
    margin-top: .9375rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -moz-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
    .gs__video-player iframe, .gs__video-player object, .gs__video-player embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.gs__text__container--full iframe, .gs__text__container--full img {
    max-width: 100%;
    height: auto;
    border: none;
}
    .gs__video-player {
    position: relative;
    height: 0;
    margin: 1.25rem 0;
    padding-top: 1.25rem;
    padding-bottom: 56.25%;
}
    .gs__text__video {
    padding: 0 2.5rem 0 2.5rem;
}
    .gs__text__container--full {
    margin: 1.25rem -1.25rem 0 -1.25rem;
}
    .ed__news .gs__text__p {
    margin-top: 1.25rem;
}

.gs__text__square--full p, .gk__text__square--full dl>dd, .gk__text__square--full ul>li, .gk__text__square--full ol>li {
    color: #fff;
}

.gs__text__square__container>p {
    margin: .625rem 0 0 0;
    padding: 0;
    text-align: justify;
    text-justify: newspaper;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

.gs__text__p, .gs__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}

.gs__text__p, .gs__text__link {
    font-size: 1rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
    .gs__text__square--full span {
    color: #f5a623;
}

.gs__text__square__title {
    color: #030000;
    font-size: 1.125rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
    .gs__text__square__container {
    padding: 1.25rem;
}
    .gs__text__p, .gs__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}

.gs__text__square--full {
    margin-top: 2.5rem;
    padding: .625rem 2.5rem;
    background-color: #242424;
}
    .gs__text__container img {
    max-width: 100%;
    height: auto;
}

.js-slideshow {
    cursor: pointer;
}

.gs__text__img--right {
    float: right;
    margin: .5rem 0 1.25rem 1.875rem;
}
    .gs__text__square, .gs__text__square--left, .gs__text__square--right {
    padding: 0;
    color: #666;
    background-color: #edeceb;
}
    ed__news .gs__text__p {
    margin-top: 1.25rem;
}

.gs__text__square__container>p {
    margin: .625rem 0 0 0;
    padding: 0;
    text-align: justify;
    text-justify: newspaper;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

.gs__text__p, .gs__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}

.gs__text__p, .gs__text__link {
    font-size: 1rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
    .gs__text__square__title {
    color: #030000;
    font-size: 1.125rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
    .gs__text__square__container {
    padding: 1.25rem;
}
    .gs__text__square>img, .gs__text__square--left>img, .gs__text__square--right>img {
    display: block;
    width: 100%;
    height: auto;
    -o-object-fit: cover;
    object-fit: cover;
}

.gs__text__container img {
    max-width: 100%;
    height: auto;
}
  .gs__text__p, .gs__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}

.gs__text__square--right {
    position: relative;
    z-index: 2;
    float: right;
    margin: 2.5rem 0 1.25rem 1.875rem;
}

.gs__text__square, .gs__text__square--left, .gs__text__square--right {
    padding: 0;
    color: #666;
    background-color: #edeceb;
}  
    .gs__text__container img {
    max-width: 100%;
    height: auto;
}

.js-slideshow {
    cursor: pointer;
}

.gs__text__img--left {
    float: left;
    margin: .5rem 1.875rem 1.25rem 0;
}
    .ed__news .gk__text__p {
    margin-top: 1.25rem;
}

.gs__text__p, .gk__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}

.gs__text__p, .gk__text__link {
    font-size: 1rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
    .gs__text__container+.gk__text__container .gk__text__subhead, .gk__text__container--full+.gk__text__container .gk__text__subhead {
    margin-top: 2.5rem;
}

.gs__text__subhead {
    clear: both;
    margin-top: 0;
    color: #030000;
    font-size: 1.3125rem;
    line-height: 2rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
    .gs__text__img--center {
    display: block;
    margin: 2.5rem auto;
}
    .gs__text__container+.gs__text__container .gs__text__subhead, .gs__text__container--full+.gs__text__container .gs__text__subhead {
    margin-top: 2.5rem;
}

.gs__text__subhead {
    clear: both;
    margin-top: 0;
    color: #030000;
    font-size: 1.3125rem;
    line-height: 2rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
}
    .ed__news .gs__text__p {
    margin-top: 1.25rem;
}
.gs__text__p, .gs__text__p+aside {
    position: relative;
    margin-top: 2.5rem;
}
.gs__text__p, .gs__text__link {
    font-size: 14px;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
    .gs__text__list {
    margin: 1.25rem 0;
    list-style: none;
    font-size: 1rem;
    line-height: 22px;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
    .gs__text__header, .gs__text__header--buyersguide {
    font-weight: bold;
    font-size: 1rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
    .gs__text__container {
    max-width: 800px;
    margin: 0 auto;
}
    .gs__subtitle {
    display: block;
    margin: .41667rem 0 .9375rem 0;
    color: #242424;
    font-size: 1.125rem;
    line-height: 1.4rem;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
    .ed__news__title {
    padding-bottom: 0;
    color: #242424;
    font-size: 38px;
    line-height: 42px;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
    .ed__news__header__content__native {
    position: relative;
    display: block;
    width: 100%;
    margin: 0 auto .625rem auto;
    padding: .625rem;
    background-color: #0e75b9;
    font-size: .875rem;
    line-height: 1rem;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
    .ed__news__header__cover+.ed__news__header__content, .ed__news__header__cover--legacy+.ed__news__header__content {
    max-width: 52.5rem;
    margin-top: -50px;
    padding: 1.25rem 1.25rem 0 1.25rem;
}

.ed__news__header__content {
    position: relative;
    background-color: #fff;
}

.gs__text__container {
    max-width: 800px;
    margin: 0 auto;
}
    .ed__news__header__cover, .ed__news__header__cover--legacy {
    margin-top: -1.25rem;
    margin-left: -1.25rem;
    padding: 150px 40px;
    background-repeat: none;
    background-position: center center;
    -o-background-size: cover;
    background-size: cover;
}

.ed__news__header {
    position: relative;
    width: -webkit-calc(100% + 2.5rem);
    width: calc(100% + 2.5rem);
}
    .gs__block__col>section:last-child {
    margin-bottom: 0;
}

.gs__block__col>section:first-of-type {
    margin-top: 0;
}

section.ed__news__panel--with-cover {
    margin: 0 0 1.25rem 0;
    padding: 0 1.25rem;
}

.gs__panel, section>.gs__panel--tip, .gs__panel--npdg, .gs__panel--nbkg, .gs__panel--mrg, .gs__panel--full, .gs__technical-list, .ed__guide__nav, section.ed__news__panel--with-cover, section.ed__news__panel {
    margin-right: auto;
    margin-left: auto;
    padding: 1.25rem;
    background-color: #fff;
}

.gs__block__col>section {
    margin: 1.25rem 0;
}
    .ed__news {
    padding-top: 1.25rem;
}
.gs__block {
    padding: 0 1.25rem;
}
.row, .gs__block {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -webkit-flex: 0 1 auto;
    -moz-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin-right: -.625rem;
    margin-left: -.625rem;
}
	
	 .merchant-gog {
    width: 16px;
    height: 16px;
    background-position: -52px -32px;
}
    .gk__text__row {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
}
.gk__text__container {
       margin: -30px auto;
}
    .gk__prices-tabs__title {
    margin-bottom: .625rem;
	 font-size: 19px !important;
    font-weight: 600 !important;
}
.gk__t4, .gk__t4--mrg, .ed__guide__nav__title {
    font-size: 1.125rem;
    line-height: 18px;
    letter-spacing: 0rem;
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
    .gk__pt.has--tbs .gk__pt__tbs {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
}
.gk__pt__tbs {
    position: relative;
    z-index: 1;
    display: none;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    height: 32px;
    margin: 0 0 -1px 0;
	margin-top: 25px;
}
    .gk__pt__tbs__lst {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;

    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -moz-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    list-style: none;
}
nav, ol, ul {
    list-style: none;
}
    .is--active.gk__pt__tbs__lst__itm {
    cursor: default;
    color: #333;
    border-width: 1px 1px 0 1px;
    background-color: #fff;
}
.gk__pt__tbs__lst__itm, .gk__pt__tbs__lst__itm.is--active {
    font-weight: 500;
    margin: 0 2.625rem 0 0;
    padding: 0 0.9375rem;
    cursor: pointer;
    text-transform: uppercase;
    color: #636363;
    border: 1px solid #e7e7e7;
    border-radius: 3px 3px 0 0;
    background-color: #f5f5f5;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    font-size: .875rem;
    line-height: 32px;
    margin-left: -40px;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
    .gk__pt__tbs__drpdwn-btn {
    font-weight: 500;
    position: relative;
    width: 32px;
    height: 32px;
    cursor: pointer;
    text-align: center;
    color: #191919;
    border: 1px solid #e7e7e7;
    border-radius: 3px 3px 0 0;
    background-color: #fff;
    font-size: 1rem;
    line-height: 32px;
    letter-spacing: 0rem;
    font-family: "Roboto",sans-serif;
}
	
.merchant{position:relative;display:inline-block;background-image:url("//d3isma7snj3lcx.cloudfront.net/assets/front/img/icons/merchant.png");background-repeat:no-repeat}.merchant-gamesplanet{width:16px;height:16px;background-position:0 0}.merchant-dlgamer{width:16px;height:16px;background-position:0 -16px}.merchant-gamesrocket{width:16px;height:16px;background-position:0 -32px}.merchant-fnac{width:16px;height:16px;background-position:0 -48px}.merchant-auchan{width:16px;height:16px;background-position:0 -64px}.merchant-priceminister{width:16px;height:16px;background-position:0 -80px}.merchant-cultura{width:16px;height:16px;background-position:0 -96px}.merchant-gamersgate{width:16px;height:16px;background-position:0 -112px}.merchant-carrefour{width:16px;height:16px;background-position:0 -128px}.merchant-amazon{width:16px;height:16px;background-position:0 -144px}.merchant-ldlc{width:16px;height:16px;background-position:0 -160px}.merchant-twogame{width:16px;height:16px;background-position:0 -176px}.merchant-greenmangaming{width:16px;height:16px;background-position:0 -192px}.merchant-micromania{width:16px;height:16px;background-position:0 -208px}.merchant-cdiscount{width:16px;height:16px;background-position:0 -224px}.merchant-boulanger{width:16px;height:16px;background-position:0 -240px}.merchant-rueducommerce{width:16px;height:16px;background-position:0 -256px}.merchant-steam{width:16px;height:16px;background-position:0 -272px}.merchant-gog{width:16px;height:16px;background-position:0 -288px}.merchant-zavvi{width:16px;height:16px;background-position:0 -304px}.merchant-fnacmarketplace{width:16px;height:16px;background-position:0 -320px}.merchant-grosbill{width:16px;height:16px;background-position:0 -336px}.merchant-microsoftstore{width:16px;height:16px;background-position:0 -352px}.merchant-toysrus{width:16px;height:16px;background-position:0 -368px}.merchant-ubisoft{width:16px;height:16px;background-position:0 -384px}.merchant-starselect{width:16px;height:16px;background-position:0 -400px}.merchant-topachat{width:16px;height:16px;background-position:0 -416px}.merchant-materielnet{width:16px;height:16px;background-position:0 -432px}.merchant-gamecash{width:16px;height:16px;background-position:0 -448px}.merchant-darty{width:16px;height:16px;background-position:0 -464px}.merchant-mistergooddeal{width:16px;height:16px;background-position:0 -480px}.merchant-playstationstore{width:16px;height:16px;background-position:0 -496px}.merchant-base{width:16px;height:16px;background-position:0 -512px}.merchant-365games{width:16px;height:16px;background-position:0 -528px}.merchant-shop4fr{width:16px;height:16px;background-position:0 -544px}.merchant-voidu{width:16px;height:16px;background-position:0 -560px}.merchant-smidistri{width:16px;height:16px;background-position:0 -576px}.merchant-sonvideo{width:16px;height:16px;background-position:0 -592px}.merchant-nintendoeshop{width:16px;height:16px;background-position:0 -608px}.merchant-crucial{width:16px;height:16px;background-position:0 -624px}.merchant-alternate{width:16px;height:16px;background-position:0 -640px}.merchant-leclerc{width:16px;height:16px;background-position:0 -656px}
</style>
	

	</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>   
    
   
        <div class="sitewrap-inner">
        
        
        
        <div class="content-wrapper">	
        
        	<p align="center">Ajouter des milliers d'actualités</p>	
        	
        	<hr>
        	
        	 <?php if($_GET['news'] == "oui")
    { ?>    
    <div align="center" id="settings-resultat2" style="margin-bottom: 37px;margin-top: 37px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;"></span> Votre actualité a bien été ajouter.</div>
                                        </div>
     <?php } ?>
     
      <?php if($_GET['news'] == "non")
    { ?>    
    <div align="center" id="settings-resultat" style="margin-bottom: 37px;margin-top: 37px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color : rgba(209,26,29,1.00);margin-right: 2px;"></span> Il y a des erreurs dans votre formulaire.</div>
                                        </div>
     <?php } ?>
     

<div align="center" style="margin-top: 23px;padding-left: 20px; padding-right: 40px;">
<table style="width: 100% !important;" border="0" align="center">
 <form action="add-news" method="post">
  <tbody>
    <tr>
      <td style="font-weight: bold; font-size: 15px; color: white; padding-bottom: 13px;">Le titre</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="Titre" type="text" required="required" class="form-control" id="Titre" placeholder="Le titre"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Le sous titre</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="Titre2" type="text" required="required" class="form-control" id="Titre2" placeholder="Le sous titre"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Catégorie</td>
    </tr>
    <tr>
      <td><select style="width: 102.5%;" name="Cat" required id="Cat" title="Cat" class="form-control">
													 	<option value="">Catégorie</option>
                                                      <option value="NEWS">NEWS</option>
													<option value="PREVIEW">PREVIEW</option>
													<option value="LES BONS PLANS">LES BONS PLANS</option>
                                                   <option value="PREMIUM">PREMIUM</option>
                                                   <option value="PLAYSTATION 5 / PS5">PLAYSTATION 5 / PS5</option>
													 <option value="JUSTE UN DOIGT">JUSTE UN DOIGT</option>
                                                   <option value="XBOX SERIES">XBOX SERIES X</option>
                                                    </select></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Image de l'actualité</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="image" type="text" class="form-control" id="image" placeholder="L'image de l'actualité">
      </td>
    </tr>
    
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Image de l'actualité petite</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="ImagePetite" type="text" class="form-control" id="ImagePetite" placeholder="L'image de l'actualité">
      
     </td>
    </tr>
    
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Lien du Bon Plan</td>
    </tr>
    <tr>
      <td><input style="height: 20px" name="BonPlansLien" type="text" class="form-control" id="BonPlansLien" placeholder="Lien du Bon Plan"></td>
    </tr>
    <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La date</td>
    </tr>
    
    <tr>
      <td><?php 	
													setlocale(LC_TIME, "fr_FR");
													?>
													
                                                    <input style="height: 20px" name="Date" type="text" required class="form-control" id="Date" placeholder="dimanche 3 septembre 2017" value="<?php echo utf8_encode(strftime('%A %d %B %Y')) ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">L'heure de l'actualité</td>
    </tr>
     
     <tr>
      <td><input style="height: 20px" name="Heure" type="time" required class="form-control" id="Heure" placeholder="L'heure de l'actualité" value="<?php echo date('H:i') ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La Ddate de l'actualité</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="DDate" type="text" required class="form-control" id="DDate" placeholder="2017-09-03 20:11" value="<?php echo date('Y-m-d G:i') ?>"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Les Tags</td>
    </tr>
     
     <tr>
      <td><input style="height: 20px" name="Tags" type="text" required="required" class="form-control" id="Tags" placeholder="Les tags"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La première catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie" type="text"  class="form-control" id="Categorie"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La deuxième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie2" type="text"  class="form-control" id="Categorie2"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La troisième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie3" type="text"  class="form-control" id="Categorie3"></td>
    </tr>
    
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La quatrième catégorie</td>
    </tr>
    
    <tr>
      <td><input style="height: 20px" name="Categorie4" type="text"  class="form-control" id="Categorie4"></td>
    </tr>
    
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La cinquième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie5" type="text"  class="form-control" id="Categorie5"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La sixième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie6" type="text"  class="form-control" id="Categorie6"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La septième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie7" type="text"  class="form-control" id="Categorie7"></td>
    </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La huitième catégorie</td>
    </tr>
     
      <tr>
      <td><input style="height: 20px" name="Categorie8" type="text"  class="form-control" id="Categorie8"></td>
    </tr>
    
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Taille de l'image</td>
    </tr><tr>
     
     <tr><td><input style="height: 20px" name="widht" type="number" min="1" max="999" required class="form-control" value="603" id="widht" placeholder="Taille de l'image"></td></tr>

      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Petite image du jeux</td> 
    </tr>
     
     <tr>
     	<td><input style="height: 20px" name="ImgJeux" type="text" class="form-control" id="ImgJeux" placeholder="Petite image du jeux"></td>
     </tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Titre du jeux</td>
    </tr>
     
     <tr><td><input style="height: 20px" name="NomJeux" type="text" class="form-control" id="NomJeux" placeholder="Titre du jeux"></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Sortie du jeux</td>
    </tr>
     
     <tr><td><input style="height: 20px" name="SortieJeux" type="text" class="form-control" id="SortieJeux" placeholder="20 octobre 2017"></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Un Jeux ?</td>
    </tr>
     
     <tr><td style="color: white; font-weight: bold;">Oui <input id="NewJeux" name="NewJeux" type="radio" value="1" checked> / Non <input id="NewJeux" name="NewJeux" type="radio" value="0"></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Un Bon Plans ?</td>
    </tr>
     
     <tr><td style="color: white; font-weight: bold;">Oui <input id="BonPlans" name="BonPlans" type="radio" value="oui"> / Non <input id="BonPlans" name="BonPlans" type="radio" value="non" checked></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Paragraphe</td>
    </tr>
     
     <tr><td><textarea name="Paragraphe" class="form-control" id="Paragraphe" style="text-align: center; height: 100px;" placeholder="Le Paragraphe"></textarea></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Courte Description Premium</td>
    </tr>
     
     <tr><td><textarea name="CourtDescriptionPremium" class="form-control" id="CourtDescriptionPremium" style="text-align: center; height: 100px;" placeholder="Courte Description Premium"></textarea></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">Comparateur</td>
    </tr>
     
     <tr><td><textarea name="comparateur" class="form-control" id="comparateur" style="text-align: center; height: 100px;" placeholder="Comparateur"></textarea></td></tr>
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La Description de l'actualité</td>
    </tr>
     
     <tr><td><button onclick="insertTag('[br]', '', 'Description');" type="button" data-toggle="tooltip" data-tag="br" class="wrap-tag" data-placement="top" title="" data-original-title="Saut de Ligne" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px; width: 20px;"><i class="fa fa-indent"></i></button>&nbsp;
              
                                      	<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Police Gras" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px; width: 20px;" type="button" value="G" onclick="insertTag('[gras]','[/gras]','Description');" /><i class="fa fa-bold"></i></button>&nbsp;
                                      	
										<button type="button" value="I" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[italique]','[/italique]','Description');" /><i class="fa fa-italic"></i></button>&nbsp;
										
										<button type="button" value="Souligné" data-toggle="tooltip" data-placement="top" title="" data-original-title="Souligné" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[souligné]','[/souligné]','Description');" /><i class="fa fa-underline"></i></button>&nbsp;
										
										<button type="button" value="Strike" data-toggle="tooltip" data-placement="top" title="" data-original-title="Strike" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[s]','[/s]','Description');" /><i class="fa fa-strikethrough"></i></button>&nbsp;
										
										<button type="button" value="Lien" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[url]','[/url]','Description');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Lien Url" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien Texte" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[lien=]','[/lien]','Description');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Image" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[img width=..px' + ' height=..px]','[/img]','Description');"/><i class="fa fa-camera"></i></button>&nbsp;
										
										<button type="button" value="Code" data-toggle="tooltip" data-placement="top" title="" data-original-title="Style" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[code]','[/code]','Description');" /><i class="fa fa-code"></i></button>&nbsp;
										
										<button type="button" value="Email" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[email=]','[/email]','Description');" /><i class="fa fa-envelope"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Vidéo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vidéo" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[video]','[/video]','Description');" /><i class="fa fa-video-camera"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="SWF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swf" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[swf width=' + ' height=]','[/swf]','Description');" /><i class="fa fa-play-circle-o"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste simple" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces]','[/puces]','Description');" /><i class="fa fa-list-ol"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste numéroté" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces2]','[/puces2]','Description');" /><i class="fa fa-list-ul"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement gauche" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[left]','[/left]','Description');" /><i class="fa fa-align-left"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement centré" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[center]','[/center]','Description');" /><i class="fa fa-align-center"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement droite" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[right]','[/right]','Description');" /><i class="fa fa-align-right"></i></button>&nbsp;

                                      <input data-toggle="tooltip" data-placement="top" title="" data-original-title="Couleur" style="height: 17px; font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" type="color" id="colore" onchange="insertTag('[color=' + this.value + ']','[/color]', 'Description');">&nbsp;

										<button type="button" value="cite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Citation" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[cite]','[/cite]','Description');" /><i class="fa fa-list-alt"></i></button>&nbsp;

										<button type="button" value="bande" data-toggle="tooltip" data-placement="top" title="" data-tag="bande" data-original-title="Catégorie" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[bande]','[/bande]','Description');" /><i class="fa fa-filter"></i></button>&nbsp;
										                                         
                                                                                                    
                                           <button type="button" value="hr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Séparateur" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[hr]','','Description')" class="fa fa-arrows-h" /><i class="fa fa-arrows-hist-alt"></i></button>
                                               
                                               
                                               <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Taille" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 43px;border-radius: 4px;height: 20px;" onchange="insertTag('[taille=' + this.options[this.selectedIndex].value + ']', '[/taille]', 'Description');">
										<option value="" class="selected" selected="selected"></option>
										<?php
										
										foreach(range(0, 100) as $taille)
										   {
										   echo '<option style="font-size:'.$taille.'px;" value="'.$taille.'">'.$taille.'</option>';
										   } ?>
										
										
									</select>&nbsp;   
                
                                      
                                      <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Police de Texte" style="font-size:14px;font-weight: bold;margin-bottom: 6px;border-radius: 4px;height: 20px;width: 151px;" onchange="insertTag('[font=' + this.options[this.selectedIndex].value + ']', '[/font]', 'Description');">
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
                                       <br>
                                        <textarea name="Description" class="form-control" id="Description" style="height: 269px;" placeholder="La description" onselect="preview(this, 'previewDiv');" onkeyup="preview(this, 'previewDiv');"></textarea>
                                       
                                        <div id="previewDiv"></div><br><br><div align="center"><button type="button" style="font-weight: bold;" class="btn btn-success pull-center" value="Visualiser" onclick="view('Description','viewDiv');" />Visualiser</button></div><br><br><div align="center" style="color: white;" id="viewDiv"></div></td></tr>
     
     
     <tr>
      <td style="font-weight: bold;font-size: 15px;color: white;padding-bottom: 13px;padding-top: 13px;">La Description de l'actualité Premium</td>
    </tr>
    
    
    
    <tr><td><button onclick="insertTag('[br]', '', 'DescriptionPremium');" type="button" data-toggle="tooltip" data-tag="br" class="wrap-tag" data-placement="top" title="" data-original-title="Saut de Ligne" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;"><i class="fa fa-indent"></i></button>&nbsp;
              
                                      	<button data-toggle="tooltip" data-placement="top" title="" data-original-title="Police Gras" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" type="button" value="G" onclick="insertTag('[gras]','[/gras]','DescriptionPremium');" /><i class="fa fa-bold"></i></button>&nbsp;
                                      	
										<button type="button" value="I" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[italique]','[/italique]','DescriptionPremium');" /><i class="fa fa-italic"></i></button>&nbsp;
										
										<button type="button" value="Souligné" data-toggle="tooltip" data-placement="top" title="" data-original-title="Souligné" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[souligné]','[/souligné]','DescriptionPremium');" /><i class="fa fa-underline"></i></button>&nbsp;
										
										<button type="button" value="Strike" data-toggle="tooltip" data-placement="top" title="" data-original-title="Strike" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[s]','[/s]','DescriptionPremium');" /><i class="fa fa-strikethrough"></i></button>&nbsp;
										
										<button type="button" value="Lien" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[url]','[/url]','DescriptionPremium');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Lien Url" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lien Texte" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[lien=]','[/lien]','DescriptionPremium');" /><i class="fa fa-chain"></i></button>&nbsp;
										
										<button type="button" value="Image" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[img width=..px' + ' height=..px]','[/img]','DescriptionPremium');"/><i class="fa fa-camera"></i></button>&nbsp;
										
										<button type="button" value="Code" data-toggle="tooltip" data-placement="top" title="" data-original-title="Style" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[code]','[/code]','DescriptionPremium');" /><i class="fa fa-code"></i></button>&nbsp;
										
										<button type="button" value="Email" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[email=]','[/email]','DescriptionPremium');" /><i class="fa fa-envelope"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Vidéo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vidéo" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[video]','[/video]','DescriptionPremium');" /><i class="fa fa-video-camera"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="SWF" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swf" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[swf width=' + ' height=]','[/swf]','DescriptionPremium');" /><i class="fa fa-play-circle-o"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste simple" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces]','[/puces]','DescriptionPremium');" /><i class="fa fa-list-ol"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Puces2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Liste numéroté" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[puces2]','[/puces2]','DescriptionPremium');" /><i class="fa fa-list-ul"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement gauche" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[left]','[/left]','DescriptionPremium');" /><i class="fa fa-align-left"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Center" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement centré" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[center]','[/center]','DescriptionPremium');" /><i class="fa fa-align-center"></i></button>&nbsp;
                                     	
                                     	<button type="button" value="Right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alignement droite" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[right]','[/right]','DescriptionPremium');" /><i class="fa fa-align-right"></i></button>&nbsp;

                                      <input data-toggle="tooltip" data-placement="top" title="" data-original-title="Couleur" style="height: 17px;font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" type="color" id="colore" onchange="insertTag('[color=' + this.value + ']','[/color]', 'DescriptionPremium');">&nbsp;

										<button type="button" value="cite" data-toggle="tooltip" data-placement="top" title="" data-original-title="Citation" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[cite]','[/cite]','DescriptionPremium');" /><i class="fa fa-list-alt"></i></button>&nbsp;

										<button type="button" value="bande" data-toggle="tooltip" data-placement="top" title="" data-tag="bande" data-original-title="Catégorie" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[bande]','[/bande]','DescriptionPremium');" /><i class="fa fa-filter"></i></button>&nbsp;
										                                         
                                                                                                    
                                           <button type="button" value="hr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Séparateur" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 20px;" onclick="insertTag('[hr]','','DescriptionPremium')" class="fa fa-arrows-h" /><i class="fa fa-arrows-hist-alt"></i></button>
                                               
                                               
                                               <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Taille" style="font-size:12px;font-weight: bold;margin-bottom: 6px; width: 43px;border-radius: 4px;height: 20px;" onchange="insertTag('[taille=' + this.options[this.selectedIndex].value + ']', '[/taille]', 'DescriptionPremium');">
										<option value="" class="selected" selected="selected"></option>
										<?php
										
										foreach(range(0, 100) as $taille)
										   {
										   echo '<option style="font-size:'.$taille.'px;" value="'.$taille.'">'.$taille.'</option>';
										   } ?>
										
										
									</select>&nbsp;   
                
                                      
                                      <select data-toggle="tooltip" data-placement="top" title="" data-original-title="Police de Texte" style="font-size:14px;font-weight: bold;margin-bottom: 6px;border-radius: 4px;height: 20px;width: 151px;" onchange="insertTag('[font=' + this.options[this.selectedIndex].value + ']', '[/font]', 'DescriptionPremium');">
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
                                       <br>
                                        <textarea name="DescriptionPremium" class="form-control" id="DescriptionPremium" style="height: 269px;" placeholder="La Description Premium de L'actualité" onselect="preview2(this, 'previewDiv2');" onkeyup="preview2(this, 'previewDiv2');"></textarea>
                                       
                                        <div id="previewDiv2"></div><br><br><div align="center"><button style="font-weight: bold;" type="button" class="btn btn-success pull-center" value="Visualiser" onclick="view('DescriptionPremium','viewDiv2');" />Visualiser</button></div> <br><br><div align="center" style="color: white;" id="viewDiv2"></div></td></tr>
   
    <tr><td><br><div align="center"><button style="font-weight: bold;" class="btn btn-warning pull-center" type="submit">Mettre en ligne</button</div></td></tr>
    
</form>
  </tbody>
	
</table>
</div>
    
 
    </div> 
    
        <!-- /.content-wrapper -->
        
   
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

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
																				if (currentSelection.indexOf("http://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
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
																				if (currentSelection.indexOf("http://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
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

<?php if($_GET['news'] == "non")
    { ?>    

    <script>                                
    setTimeout(function(){
    jQuery("#settings-resultat").fadeOut(700);
    window.history.pushState(document.title,document.title,"/add-news");
    }, 3000);
</script>
    

    <?php } ?>

<?php if($_GET['news'] == "oui")
    { ?>    

    <script>                                
    setTimeout(function(){
    jQuery("#settings-resultat2").fadeOut(700);
    window.history.pushState(document.title,document.title,"/add-news");
    }, 3000);
</script>
    

    <?php } ?>


</body>
</html>
