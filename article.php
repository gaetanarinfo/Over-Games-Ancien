<?php session_start();


?>

<?php require('cnx.php'); ?>
<?php include('Requete.php'); ?>
<?php include('view.php'); ?>

<?php if($_GET['id'] == "" OR $resultat_site_internet7_2['id'] != $_GET['id'])
{
	die('<META HTTP-equiv="refresh" content=0;URL=/news>');
}

?>	

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet7['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet7_2['Titre']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet7_2['Paragraphe']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet7['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet7['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="identifier-url" content="https://over-games.fr/article?id=<?php echo $resultat_site_internet7_2['id']; ?>">
	
	<meta property="og:site_name" content="OverGames72">
		<meta property="og:title" content="<?php echo $resultat_site_internet7_2['Titre']; ?>">
		<meta property="og:description" content="<?php echo $resultat_site_internet7_2['Paragraphe']; ?>">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://over-games.fr/article?id=<?php echo $resultat_site_internet7_2['id']; ?>">
		<meta property="og:image" content="<?php if(empty($resultat_site_internet7_2['ImagePetite'])) { ?><?php echo $resultat_site_internet7_2['ImagePetite']; ?><?php }else{ ?><?php echo $resultat_site_internet7_2['ImagePetite']; ?><?php } ?>">
        
        <meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="Gaetan seigneur">
        <meta name="twitter:site" content="Over-Games">
        <meta name="twitter:title" content="<?php echo $resultat_site_internet7_2['Titre']; ?>">
        <meta name="twitter:description" content="<?php echo $resultat_site_internet7_2['Paragraphe']; ?>">
        <meta name="twitter:url" content="https://over-games.fr/article?id=<?php echo $resultat_site_internet7_2['id']; ?>">
        <meta name="twitter:image:src" content="<?php if(empty($resultat_site_internet7_2['ImagePetite'])) { ?><?php echo $resultat_site_internet7_2['ImagePetite']; ?><?php }else{ ?><?php echo $resultat_site_internet7_2['ImagePetite']; ?><?php } ?>">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
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
    background-color: #1c1c1d;
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
    margin-bottom: 27px;
    margin-top: -1.5rem;
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
    margin-bottom: 27px;
    margin-top: -1.5rem;
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
        padding: 28px;
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
    margin-bottom: 27px;
    margin-top: -1.5rem;
}
    .gk__text__table td {
    padding: .625rem;
}
    .gk__text__table tr:nth-child(odd) {
    background: #1c1c1d;
}
    .gk__text__table thead {
    height: 1.25rem;
}
    .gk__text__table {

        width: 94%;
    margin: 0.25rem -69px 0px 29px;
    text-align: center;
}
    .gk__text__square__container {
            padding: 0 0 0 0px;
    margin-top: -18px;
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
    background: #1c1c1d;
}

.gk__text__p, .gk__text__p+aside {
    position: relative;
    margin-bottom: 27px;
    margin-top: -1.5rem;
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
    background-color: #1c1c1d;
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
        padding: 28px;
    text-align: justify;
    text-justify: newspaper;
    font-size: .875rem;
    line-height: 1.5rem;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}
.gk__text__p, .gk__text__p+aside {
    position: relative;
    margin-bottom: 27px;
    margin-top: -1.5rem;
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
   margin: 0.25rem 0;
    margin-right: -8px;
    list-style: none;
    font-size: 1rem;
    line-height: 22px;
    letter-spacing: 0rem;
    font-family: Arial,Helvetica,sans-serif;
}

gk__text__square__container>dl>dd, .gk__text__square__container>ul>li, .gk__text__square__container>ol>li {
    
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
    color: white;
    margin-top: 2.625rem;
    font-weight: bold;
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
    background-color: #1c1c1d;
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
    background-color: #1c1c1d;
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
        
        <?php if($_GET['commentaire'] == "oui")
    { ?>   
<div id="commentaire" style="margin-bottom: -32px;margin-top: 27px;" align="center">
                                        <div style="color: #ffffff;font-weight: bold;width: 232px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;" aria-hidden="true"></span> Votre commentaire à bien été posté</div>
    									</div>
	<?php } ?>
       
        <?php if($_GET['code'] == "oui")
    { ?>   	
	<div align="center" id="settings-resultat" style="margin-bottom: -32px;margin-top: 27px;" >
		
	 
                                        <div style="color: #ffffff;font-weight: bold;width: 468px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-check" style="color: rgb(127, 214, 74);margin-right: 2px;" aria-hidden="true"></span> Le code a été validé avec succès. Profité maintenant de toutes les actualités.</div>
    									</div>
     <?php } ?>    
		
		 <?php if($_GET['code'] == "non")
    { ?>    
			<div align="center" id="settings-resultat2" style="margin-bottom: -32px;margin-top: 27px;">
                                        <div style="color: #ffffff;font-weight: bold;width: 315px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgb(134 114 114 / 36%) 0px 0px 10px;height: 18px;background-color: rgb(95 95 95 / 36%);"><span class="fa fa-times" style="color: rgb(179, 11, 11);margin-right: 2px;" aria-hidden="true"></span></span> Le code et faux ou invalide merci de recommencer.</div>
    									</div>
     <?php } ?>    
        
        <div class="content-wrapper">		
   

<!-- BEGIN FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
     <div class="index-background-element"></div>
 
	<div class="powerup-single-wrapper">
    <div class="powerup-single-wrapper-inner" style="margin-right: -8px; border-right: none;">

        <!-- BEGIN FEATURED IMAGE -->
                                    <div class="featured-image">
                    <!-- BEGIN FEATURED IMAGE -->
                    <a>
                        <img width="720" height="405" title="<?php echo $resultat_site_internet7_2['Titre']; ?>" src="<?php echo $resultat_site_internet7_2['Image']; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $resultat_site_internet7_2['Titre']; ?>">                    </a>
                    <!-- END FEATURED IMAGE -->
                </div>
                            <!-- END FEATURED IMAGE -->
        
        <!-- BEGIN CUSTOM FIELD FOR EMBEDDABLE CONTENT -->
				<div class="featuredembed-container"></div>
		<!-- END CUSTOM FIELD FOR EMBEDDABLE CONTENT -->
		
		<!-- BEGIN SHORTCODE OUTSIDE THE LOOP -->
		<div class="shortcode-wrapper"></div>
		<!-- END SHORTCODE OUTSIDE THE LOOP -->

        <!-- BEGIN CONTENT -->
        <div class="entry-content-wrapper">
            <div class="entry-content">
                <!-- BEGIN DATE -->
                <div class="post-date">
                    Posté il y a <?php echo AffDate($resultat_site_internet7_2['DDate']); ?><span>|</span>
                    Par <?php echo $resultat_site_internet7_2['Createur']; ?>
                </div>
                <!-- END DATE -->
				
               <?php if($resultat_site_internet7_2['NewJeux'] == "0") { ?>

  				<br><br>
  				
  				<?php }else{ ?>
                <!-- BEGIN POST CAT -->
                <div class="post-author" style="margin-top: 20px;margin-bottom: 20px;">
                    <!-- BEGIN AUTHOR AVATAR -->
                    <a href="" rel="author">
                        <img alt="" style="background-color: transparent; width: 90px !important; height: 90px !important;" src="<?php if(empty($resultat_site_internet7_2['ImgJeux'])) { ?>image/Achat/nocover.png<?php }else{ ?><?php echo $resultat_site_internet7_2['ImgJeux']; ?><?php } ?>" class="avatar avatar-74 photo">                    </a>
                    <!-- END AUTHOR AVATAR -->
                    <!-- BEGIN AUTHOR DESCRIPTION -->
                    <div class="author-desc-wrapper">
                       <span class="author-position"><?php if(empty($resultat_site_internet7_2['NomJeux'])) { ?>Aucun Nom pour ce jeux<?php }else{ ?><b><?php echo $resultat_site_internet7_2['NomJeux']; ?></b><?php } ?></span>
                        <div class="author-description">
                            <b><?php echo $resultat_site_internet7_2['Tags']; ?></b><br>
                            <?php if(empty($resultat_site_internet7_2['SortieJeux'])) { ?>La date de sortie de ce jeux et inconnu<?php }else{ ?><?php echo $resultat_site_internet7_2['SortieJeux']; ?><?php } ?>   <br>
                             <?php if(empty($resultat_site_internet7_2['Categorie'])) { }else{ ?>
              <div style="cursor: pointer;margin-top: 4px;text-decoration: none;"><a class="TagsConsole label pull-left" style="margin-left: 0px; margin-top: 3px; font-weight:bold; font-size:12px;"><?php echo $resultat_site_internet7_2['Categorie']; ?><?php } ?></a>
              <?php if(empty($resultat_site_internet7_2['Categorie2'])) { }else{ ?>
             <a class="TagsConsole label pull-left" style="margin-left: 7px; margin-top: 3px; font-weight:bold; font-size:12px;"><?php echo $resultat_site_internet7_2['Categorie2']; ?><?php } ?></a>
              <?php if(empty($resultat_site_internet7_2['Categorie3'])) { }else{ ?>
              <a class="TagsConsole label pull-left" style="margin-left: 7px; margin-top: 3px; font-weight:bold; font-size:12px;"><?php echo $resultat_site_internet7_2['Categorie3']; ?><?php } ?></a>
              <?php if(empty($resultat_site_internet7_2['Categorie4'])) { }else{ ?>
              <a class="TagsConsole label pull-left" style="margin-left: 7px; margin-top: 3px; font-weight:bold; font-size:12px; "><?php echo $resultat_site_internet7_2['Categorie4']; ?><?php } ?></a>         
               <?php if(empty($resultat_site_internet7_2['Categorie5'])) { }else{ ?>
              <a class="TagsConsole label pull-left" style="margin-left: 7px; margin-top: 3px; font-weight:bold; font-size:12px; "><?php echo $resultat_site_internet7_2['Categorie5']; ?><?php } ?></a>  
              <?php if(empty($resultat_site_internet7_2['Categorie6'])) { }else{ ?>
              <a class="TagsConsole label pull-left" style="margin-left: 7px; margin-top: 3px; font-weight:bold; font-size:12px; "><?php echo $resultat_site_internet7_2['Categorie6']; ?><?php } ?></a>          
               <?php if(empty($resultat_site_internet7_2['Categorie7'])) { }else{ ?>
              <a class="TagsConsole label pull-left" style="margin-left: 7px; margin-top: 3px; font-weight:bold; font-size:12px; "><?php echo $resultat_site_internet7_2['Categorie7']; ?><?php } ?></a>    
              <?php if(empty($resultat_site_internet7_2['Categorie8'])) { }else{ ?>
              <a class="TagsConsole label pull-left" style="margin-left: 7px; margin-top: 3px; font-weight:bold; font-size:12px; "><?php echo $resultat_site_internet7_2['Categorie8']; ?><?php } ?></a>  </div>                      </div>
                    </div>
                    <!-- END AUTHOR DESCRIPTION -->
                </div>
                <!-- END POST CAT -->
                
                <div class="tiny-divider"></div>
               	<?php } ?>

                <!-- BEGIN CONTENT  -->
                <article id="post-658" class="post-658 post type-post status-publish format-standard has-post-thumbnail hentry category-highlighted category-images category-news category-video tag-bonfire-themes tag-powerup tag-wordpress">
                    <!-- BEGIN TITLE -->
                    <div class="entry-title">
                        <a title="<?php echo $resultat_site_internet7_2['Titre'] ?>" rel="bookmark">
                            <h1><?php echo $resultat_site_internet7_2['Titre'] ?></h1>
                             <h2 style="font-size: 1.125rem;line-height: 1.4rem;margin-bottom: -10px;letter-spacing: 0rem;margin-top: 0px;font-weight: 400;"><?php echo $resultat_site_internet7_2['Titre2'] ?></h2>
                        </a>
                    </div>
                    <!-- END TITLE -->
        			<hr>
                    <!-- BEGIN CONTENT -->    
                    <?php if($resultat_site_internet7_2['Cat'] == "PREMIUM") { ?>
                                
									<?php if(date("d/m/Y H:i:s") < $promoresult['expire'] && $promoresult['Valable'] == "oui") { ?>
						<div align="center"><?php echo parseZCode($resultat_site_internet7_2['DescriptionPremium']) ?></div>
                  
                  <?php }else{ ?>

									<?php if($result_requeteUsers['Premium'] == "oui") { ?>
                  
                  <div align="center"> <?php echo parseZCode($resultat_site_internet7_2['DescriptionPremium']); ?> </div>
                   <?php }else{ ?>
                   <b><?php echo parseZCode($resultat_site_internet7_2['CourtDescriptionPremium']); ?></b>
                   
                   <p align="center" style="font-size: 22px;font-weight: 700;margin-top: 20px;padding-top: 13px;color: chocolate;padding-bottom: 38px;"><span class="fa fa-star" aria-hidden="true" style="top: 3px;"></span>  Pour lire la suite de l'article merci d'acheter un abonnement  <span class="fa fa-star" aria-hidden="true" style="top: 3px;"></span></p>
                   
                   <?php include('wp-includes/Php/Bloc_Premium.php'); ?>
                   
                   <?php } ?>
                                  	
                               <?php } ?>   
                               	
                            <?php }else{ ?>
                            
                            <div align="center"> <?php echo parseZCode($resultat_site_internet7_2['Description']); ?> </div>     
                                      
                            <?php } ?> 
                   
                    <!-- END CONTENT -->

                    <!-- BEGIN NAVIGATION -->
                    <div class="link-pages">
                  </div>
                    <!-- END NAVIGATION -->
                </article>
                <!-- END CONTENT -->
                
                <!-- BEGIN EDIT LINK -->
                                <!-- END EDIT LINK -->
                
                <!-- BEGIN AUTHOR, AVATAR, DESCRIPTION -->
                <div class="post-author">
                    <!-- BEGIN AUTHOR AVATAR -->
                    <a href="profil?pseudo=<?php echo $resultat_site_internet7_2['pseudo'] ?>" rel="author">
                        <img alt="" style="background-color: transparent;" src="image/avatar/<?php echo $resultat_site_internet7_2['pseudo'] ?>" class="avatar avatar-74 photo" height="74" width="74">                    </a>
                    <!-- END AUTHOR AVATAR -->
                    <!-- BEGIN AUTHOR DESCRIPTION -->
                    <div class="author-desc-wrapper">
                        <span class="author-name"><a href="profil?pseudo=<?php echo $resultat_site_internet7_2['Createur'] ?>" rel="author"><?php echo $resultat_site_internet7_2['Createur'] ?></a></span><span class="author-position">, Rédacteur et développeur</span>
                        <div class="author-description">
                            Créateur d'Over Games et Games Actus, rédacteur et développeur en chef de c'est magnifique projet. Suivez nous sur <a href="https://twitter.com/overgames72">Twitter</a>, Bonne lecture :)                        </div>
                            <div class="post-tag">
                    Site internet : <a rel="site" href="https://over-games.fr" title="Over Games">Over Games</a>, <a href="https://games-actus.fr" rel="site" title="Games Actus">Games Actus</a>              </div>
                    
                      <?php if($_SESSION['rang'] == "Administrateur") { ?><div class="post-tag">
						  <a href="edit-news?id=<?php echo $_GET['id'] ?>" title="Modifier l'article" target="">Modifier l'article</a>
                   </div>
                   <?php } ?>
                   
                    </div>
                    <!-- END AUTHOR DESCRIPTION -->
                </div>
                <!-- END AUTHOR, AVATAR, DESCRIPTION -->
                
                <!-- BEGIN TINY DIVIDER -->
                <div class="tiny-divider"></div>
                <!-- END TINY DIVIDER -->

                <!-- BEGIN POST TAGS -->
                <div class="post-tag" style="display: inline-block;">
                    Tag : <a rel="tag"><?php echo $resultat_site_internet7_2['Tags'] ?></a><span>               </div>
                    
					<div align="right" style="display: inline-block; float: right;"><span>Partager sur : </span>&nbsp;<a style="text-decoration: none;" href="//twitter.com/intent/tweet?original_referer=<?php echo $_SERVER['REQUEST_URI']; ?>&amp;url=https://over-games.fr<?php echo $_SERVER['REQUEST_URI']; ?>&amp;text=<?php echo $resultat_site_internet7_2['Titre']; ?> à lire @OverGames72" title="Partager sur Twitter" target="_blank">
                        <span class="icon-twitter"></span>
                    </a>&nbsp;<a style="text-decoration: none;" href="http://www.facebook.com/share.php?u=https://over-games.fr/article?id=<?php echo $resultat_site_internet7_2['id'] ?>" onclick="return xt_click(this,'C','','sharepage::partage_facebook','A');return false;" title="Partager sur Facebook" target="_blank">
                        <span class="icon-facebook2"></span>
                    </a></div>
                    
                    
                    <br>
                    
                    <div style="margin-top: 30px;">
                                                <span style="font-size:11px;float: left;display: block;margin-top: -4px;font-weight: bold;">Qualité de l'actualité :&nbsp;</span>	
                                                
  <?php 
			$actu4 = $cnx->prepare("SELECT * FROM ratings WHERE ip = :ip AND id = :id");
$actu4->execute(array(':id' => $_GET['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
$acturesult4 = $actu4->fetch();
$actu4->closeCursor();			
						?>                                              		
                                                
<?php $rating = $resultat_site_internet7_2['rating']; ?>              		
 
<div id="ratings">   
<?php if($rating > "20.5") { ?>   
<div class="etoile2" title="20/100"></div>
<?php }else{ ?>
<div class="etoile" title="20/100"></div>
<?php } ?>                               
<?php if($rating > "40.5") { ?> 
<div class="etoile2" title="40/100"></div>
<?php }else{ ?>
<div class="etoile" title="40/100"></div>
<?php } ?>              
<?php if($rating > "60.5") { ?> 
<div class="etoile2" title="60/100"></div>  
<?php }else{ ?>
<div class="etoile"title="60/100"></div> 
<?php } ?>  
<?php if($rating > "80.5") { ?> 
<div class="etoile2" title="80/100"></div>  
<?php }else{ ?>
<div class="etoile" title="80/100"></div> 
<?php } ?>  
<?php if($rating > "90.9") { ?> 
<div class="etoile2" title="100/100"></div>  
<?php }else{ ?>
<div class="etoile" title="100/100"></div>
<?php } ?>
<?php if($acturesult4['ip'] != $_SERVER['REMOTE_ADDR']) { ?> 
<a href="" id="voteplus" title="Ajouter votre vote"><div class="vote"></div></a> 
<?php }else{ ?>
<a href="" id="votemoins"><div class="vote2" title="Supprimer votre vote"></div></a>
<?php } ?>
</div>     
 </div>
               
             
                <!-- END POST TAGS -->

            </div>
            
              <?php if($profilpremiumresult['Premium'] == "oui") { ?>
          
     <?php }else{ ?>  
       
        <div align="center" id="ads2" style="margin-bottom: -4px;margin-top: 24px;">
			<a class="main_banner" href="<?php echo $Pub_result4['Pub'] ?>" style="display:block;" target="_self" data-number="4" title=""><img src="<?php echo $Pub_result4['Image'] ?>" alt="" class="img-responsive"></a>
        </div>
        
       <?php } ?>  
            
            
        </div>
        <!-- END CONTENT -->

        <!-- BEGIN RELATED STORIES -->
              <br>
               <hr>
                <div class="related-stories-wrapper" style="margin-top: 20px;margin-bottom: 0px;">
			
            <h3>Ça peut vous intéresser aussi</h3>
            <br>
               
               <?php while($resultat_sli_article = $sli_article->fetch()) { ?>
               
                <div class="related-stories-inner" style="background-image:url(<?php echo $resultat_sli_article['Image'] ?>);">
                    <div class="related-stories-bg-gradient">
                    
                        <!-- BEGIN CATEGORY MARKERS -->
                        <div class="category-markers-wrapper">
                                                            <div class="video-post-marker"></div>
                            
                                                            <div class="images-post-marker">
                                    <div class="images-post-marker-inner"></div>
                                </div>
                      </div>
                        <!-- END CATEGORY MARKERS -->
                        
   
                        <a href="/article?id=<?php echo $resultat_sli_article['id'] ?>">
                            <!-- BEGIN CATEGORIES (except 'featured' and 'highlighted') -->
                            <div class="related-category"><?php echo $resultat_sli_article['Cat'] ?></div><div class="related-category"><?php echo $resultat_sli_article['Cat'] ?></div>                        <!-- END CATEGORIES (except 'featured' and 'highlighted') -->

                            <div class="related-title-wrapper">
                                <!-- BEGIN COMMENT COUNT (if post has comments) -->
                                                                    <div class="comment-count-bubble">
                                        <span>
                                            <?php echo $resultat_sli_article['comment'] ?>                                        </span>
                                    </div>
                                                                <!-- END COMMENT COUNT (if post has comments) -->
                                <h3><?php echo $resultat_sli_article['Titre'] ?></h3>
                                <div class="related-author-time">Par <?php echo $resultat_sli_article['Createur'] ?> // <?php echo $resultat_sli_article['Date'] ?></div>
                            </div>
                        </a>
                        
                    </div>
                </div>     
                    
               <?php } ?>                   

      </div>
                <!-- END RELATED STORIES -->
                
               

        <!-- BEGIN COMMENTS -->
        
                
<div id="comments" class="commentwrap">
	
	<div class="comments-wrapper">
	
		
		<!-- BEGIN COMMENTS -->
		
		<?php if(empty($resultat_commantaire['id'])) { ?>

               
               <hr>
		
		<div align="center" style="margin-top: 30px;"><span style="font-size: 18px;font-weight: bold;color: #3374AD;">Aucun commentaire à affiché</span></div>
		
		<?php }else{ ?>
		
		<ol class="commentlist">
			
		        <?php
   	while ($donnees = $actu_article->fetch())
    {
   ?>
				
		<li id="comment-13" class="comment byuser comment-author-wohoo bypostauthor even thread-even depth-1">
        
            <!-- begin comment entry -->
			<div class="comment-entry">
				                <p style="font-weight: bold;"><?php echo substr($donnees['message'], 0, 500);?></p>
                
                    <div class="comment-author-wrapper">
                        <img class="avatar avatar-60 photo" alt="<?php echo $donnees['pseudo'] ?>" src="<?php if($donnees['avatar'] == "aucun") { ?>image/avatar/aucun.png<?php }else{ ?><?php echo $donnees['avatar'] ?><?php } ?>" height="60" width="60">                        <div class="comment-author-inner">
                            <span class="comment-author"><?php echo $donnees['pseudo'] ?></span>
                            <span class="comment-time"><?php echo AffDate($donnees['ddate']); ?></span>
                            <span class="comm-divider">|</span>
                            <a rel="nofollow" class="comment-reply-link" href="#Comment" aria-label="Répondre à <?php echo $donnees['pseudo'] ?>">Répondre</a>                                                    </div>
                    </div>
			</div>
            <!-- end comment entry -->
		
	</li><!-- #comment-## --><!-- begin comment entry --><!-- end comment entry -->
	
	<?php } ?>

	<ul class="children">
	  <!-- #comment-## -->
	  </ul>
	<!-- .children -->
		<!-- #comment-## -->
		  </ol>
		  
		<?php } ?>
		
				<!-- END COMMENTS -->
				
				<br>
		
		<!-- BEGIN COMMENT FORM -->
		        	<hr>
          <div class="related-stories-wrapper" style="margin-top: 20px;margin-bottom: 0px;">
			        <h3><?php if($resultat_commantaire['id'] == "0") { ?>Soyez le premier à commenter<?php }else{ ?>Commenter <span style="font-weight: 100;">(<?php echo $resultat_commantaire['id'] ?>)</span><?php } ?></h3>
	      </div>   
               	
               	<?php if(empty($_SESSION['email'])) { ?>
               	<div align="center"><a href="/news#widgettitle" class="btn btn-outline-primary" title="Connectez vous pour poster un commentaire">Connectez vous pour poster un commentaire</a></div>
               	<?php }else{ ?>
       	  <div id="respond" class="comment-respond">
                	
		<h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.htm#respond" style="display:none;"><span id="cancel-comment-reply"></span></a></small></h3>			
			
			<form action="posted-comments?id=<?php echo $_GET['id']; ?>" method="post" class="comment-form" id="Comment">
				<div class="commentform-wrapper"><div class="commentform-inner"><div class="commentform-outer-border"><div class="commentform-inner-border"><div id="comment-wrapper"><div class="comment-wrapper-inner"><textarea required name="message" id="message" cols="45" rows="10" tabindex="1" placeholder="Tapez votre commentaire ici pour rejoindre ou lancer la discussion ...*" style="height: 112px; overflow: hidden;"></textarea><input name="titre" type="hidden" id="titre" value="<?php echo $resultat_site_internet7_2['Titre']; ?>"></div></div></div></div></div></div>
			  <p class="form-submit">
			  
			  <?php if(date('Y-m-d h:i:s A') > date($resultat_commantaire2['heure_fin'])) { ?>
			  <input name="submit" type="submit" id="submit" class="submit" value="Envoyer le commentaire">
			  <?php }else{ ?>
			  <input name="submit" type="submit" id="submit" class="submit" value="Vous pouvez posté un commentaire dans <?php $heure_de_fin1 = $UserVoteResultat['heure_fin'];
		
	$heure_de_fin1 = $resultat_commantaire2['heure_fin'];
		
	$noel = strtotime($heure_de_fin1);
	
	$tps_restant = $noel - time(); 
	
	$i_restantes = $tps_restant / 60;
	
	$H_restantes = $i_restantes / 60;

	$i_restantes = floor($i_restantes % 60); // Minutes restantes
	
	$H_restantes = floor($H_restantes % 24); // Heures restantes
	
	$d_restants = round($H_restantes / 24);

	setlocale(LC_ALL, 'fr_FR');
	
	echo ''. $i_restantes .' minutes '; ?>"> <?php } ?>
		    </p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="69defe329f"></p><p style="display: none;"></p></form>
		  </div>
				<?php } ?>
				
			
		  <!-- #respond -->
			
		</div>
		<!-- /.commentwrap -->
				<!-- END COMMENT FORM -->
		
	</div>        <!-- END COMMENTS -->

    </div>
    <!-- /.powerup-single-wrapper-inner -->
</div>
    </div>              

       
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>

<?php if($_GET['commentaire'] == "oui")
    { ?>   
	
		<script>								
	setTimeout(function(){
	jQuery("#commentaire").fadeOut(700);
	window.history.pushState(document.title,document.title,"/article?id=<?php echo $_GET['id']; ?>");
	}, 2000);
</script>

	<?php } ?>
	<?php if($_GET['code'] == "oui")
    { ?>    

	<script>								
	setTimeout(function(){
	jQuery("#settings-resultat").fadeIn(700);
	jQuery("#settings-resultat").hide(700);
	window.history.pushState(document.title,document.title,"/article?id=<?php echo $_GET['id'] ?>");
	}, 2000);
</script>
	

	<?php } ?>
	
	<?php if($_GET['code'] == "non")
    { ?>    

	<script>								
	setTimeout(function(){
	jQuery("#settings-resultat2").fadeIn(700);
	jQuery("#settings-resultat2").hide(700);
	window.history.pushState(document.title,document.title,"/articleid=<?php echo $_GET['id'] ?>");
	}, 2000);
</script>
	

	<?php } ?>
	
 <script>
    jQuery(document).ready(function(evt){
      jQuery("#voteplus").click(function() {
         jQuery("#ratings").load("rating-news?id=<?php echo $_GET['id']; ?>")
      	return false;
	  })
	  
    })
</script>

<script>
    jQuery(document).ready(function(evt){
      jQuery("#votemoins").click(function() {
         jQuery("#ratings").load("rating-delete-news?id=<?php echo $_GET['id']; ?>")
      	return false;
	  })
	  
    })
	</script>

</body>
</html>
