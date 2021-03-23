<?php session_start();


?>

<?php require('cnx.php'); ?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet18['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet18['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet18['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet18['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet18['Favicon_Page']; ?>">
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
	</style>
		
	
	</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>   
    
   
        <div class="sitewrap-inner">
        
        
        
        <div class="content-wrapper">		
        
        <p align="center">A lire avant toute navigation sur le site internet</p>
 
  

<!-- BEGIN FEATURED BACKGROUND ELEMENT (only on the front page, hide when paged) -->
                        <div class="index-background-element"></div>
          
  
      <hr>

        
<div class="index-loop-wrapper">
       
 

<div align="center">

<iframe src="CGV.pdf" width="100%" height="1024" align="center"></iframe>

</div>

   
                                                                               
                        <!-- END INDEX LOOP -->
            

        </div>
        
         
    </div>    
       
            
       
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>



</body>
</html>
<strong></strong>