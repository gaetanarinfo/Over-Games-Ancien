<?php require('cnx.php') ?>

<?php

				$requeteaime = $cnx->prepare("SELECT * FROM ratings WHERE id = :id AND ip = :ip");
				$requeteaime->execute(array(':id' => $_GET['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
				$aime_resultat = $requeteaime->fetch();
				$requeteaime->closeCursor();


				if($aime_resultat['ip'] != $_SERVER['REMOTE_ADDR'])
				{
				$ip = addslashes($_SERVER['REMOTE_ADDR']);
				$id = addslashes($_GET['id']);
					
				$q = array('ip'=>$ip, 'id'=>$id);
				$sql = 'INSERT INTO ratings (ip, id) VALUES (:ip, :id)';
				$req = $cnx->prepare($sql);
				$req->execute($q);
				
			   	$id = addslashes($_GET['id']);
				
				$req2 = $cnx->prepare('UPDATE Actualite SET rating = rating + 1 WHERE id = :id');
				$req2->execute(array('id' => $_GET['id']));
				
				}else{
					
				}
				

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
<div class="valide" title="Modification terminé"></div>
<a href="" id="votemoins"><div class="vote2" title="Supprimer votre vote"></div></a>
</div>

<script>
   jQuery(document).ready(function(evt){
     jQuery("#voteplus").click(function() {
       jQuery("#ratings").load("Rating-Actualites?id=<?php echo $_GET['id']; ?>")
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