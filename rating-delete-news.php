<?php require('cnx.php') ?>

<?php

				$id = addslashes($_GET['id']);
				
				$req2 = $cnx->prepare('UPDATE Actualite SET rating = rating +- 1 WHERE id = :id');
				$req2->execute(array('id' => $_GET['id']));
				
				$deleteaime = $cnx->prepare("DELETE FROM ratings WHERE id = :id AND ip = :ip");
				$deleteaime->execute(array(':id' => $_GET['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
				$count = $deleteaime->rowCount();
				

?>

<?php
$actu = $cnx->prepare("SELECT * FROM Actualite WHERE id = :id");
$actu->execute(array(':id' => $_GET['id']));
$acturesult22 = $actu->fetch();
$actu->closeCursor();
?>   

<?php $rating = $acturesult22['rating']; ?>              		
 
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
<a href="" id="voteplus" title="Ajouter votre vote"><div class="vote"></div></a>
<?php if($rating != "0") { ?> 
<a href="" id="votemoins"><div class="vote2" title="Supprimer votre vote"></div></a>
<?php } ?>
<div class="valide" title="Modification terminé"></div>
</div>

<script>
    jQuery(document).ready(function(evt){
      jQuery("#voteplus").click(function() {
        jQuery("#ratings").load("rating-news?id=<?php echo $_GET['id']; ?>")
      	return false;
	  })
	  
    })
</script>

<script>
    $(document).ready(function(evt){
      $("#votemoins").click(function() {
         $("#ratings").load("rating-delete-news?id=<?php echo $_GET['id']; ?>")
      	return false;
	  })
	  
    })
</script>