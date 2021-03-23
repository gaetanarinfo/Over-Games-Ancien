<?php require('cnx.php') ?>

<?php

$actu6 = $cnx->prepare("SELECT * FROM test_ratings WHERE ip = :ip AND item = :item");
$actu6->execute(array(':item' => $_GET['item'], ':ip' => $_SERVER['REMOTE_ADDR']));
$acturesult6 = $actu6->fetch();
$actu6->closeCursor();

				$item = addslashes($_GET['item']);
				
				$req2 = $cnx->prepare('UPDATE Test_Jeux SET rating = rating +- 1 WHERE item = :item');
				$req2->execute(array('item' => $_GET['item']));
				
				$req2 = $cnx->prepare('UPDATE TestJeux SET rating = rating +- 1 WHERE item = :item');
				$req2->execute(array('item' => $_GET['item']));
				
				$deleteaime = $cnx->prepare("DELETE FROM test_ratings WHERE item = :item AND ip = :ip");
				$deleteaime->execute(array(':item' => $_GET['item'], ':ip' => $_SERVER['REMOTE_ADDR']));
				$count = $deleteaime->rowCount();
				

?>

<?php
$actu = $cnx->prepare("SELECT * FROM Test_Jeux WHERE item = :item");
$actu->execute(array(':item' => $_GET['item']));
$acturesult22 = $actu->fetch();
$actu->closeCursor();
?>   

<?php $rating = $acturesult22['rating']; ?>              		             		
 
<div id="ratings">   
<?php if($rating > "20.5") { ?>   
<div class="etoile4" title="20/100"></div>
<?php }else{ ?>
<div class="etoile3" title="20/100"></div>
<?php } ?>                               
<?php if($rating > "40.5") { ?> 
<div class="etoile4" title="40/100"></div>
<?php }else{ ?>
<div class="etoile3" title="40/100"></div>
<?php } ?>              
<?php if($rating > "60.5") { ?> 
<div class="etoile4" title="60/100"></div>  
<?php }else{ ?>
<div class="etoile3"title="60/100"></div> 
<?php } ?>  
<?php if($rating > "80.5") { ?> 
<div class="etoile4" title="80/100"></div>  
<?php }else{ ?>
<div class="etoile3" title="80/100"></div> 
<?php } ?>  
<?php if($rating > "90.9") { ?> 
<div class="etoile4" title="100/100"></div>  
<?php }else{ ?>
<div class="etoile3" title="100/100"></div>
<?php } ?>
<a href="" id="voteplus" title="Ajouter votre vote"><div class="vote3"></div></a>
<?php if($rating != "0") { ?> 
<a href="" id="votemoins"><div class="vote4" title="Supprimer votre vote"></div></a>
<?php } ?>
<div class="valide2" title="Modification terminé"></div>
</div>

<script>
    $(document).ready(function(evt){
      $("#voteplus").click(function() {
         $("#ratings").load("rating-jeux?item=<?php echo $_GET['item']; ?>")
      	return false;
	  })
	  
    })
</script>

<script>
    $(document).ready(function(evt){
      $("#votemoins").click(function() {
         $("#ratings").load("rating-delete-jeux?item=<?php echo $_GET['item']; ?>")
      	return false;
	  })
	  
    })
</script>