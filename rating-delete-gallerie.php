<?php require('cnx.php') ?>

<?php

$actu6 = $cnx->prepare("SELECT * FROM gallerie_ratings WHERE ip = :ip AND item = :id");
$actu6->execute(array(':id' => $_GET['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
$acturesult6 = $actu6->fetch();
$actu6->closeCursor();

				$id = addslashes($_GET['id']);
				
				$req2 = $cnx->prepare('UPDATE galerie SET rating = rating +- 1 WHERE id = :id');
				$req2->execute(array('id' => $_GET['id']));
				
				$deleteaime = $cnx->prepare("DELETE FROM gallerie_ratings WHERE item = :id AND ip = :ip");
				$deleteaime->execute(array(':id' => $_GET['id'], ':ip' => $_SERVER['REMOTE_ADDR']));
				$count = $deleteaime->rowCount();
				

?>

<?php
$actu = $cnx->prepare("SELECT * FROM galerie WHERE id = :id");
$actu->execute(array(':id' => $_GET['id']));
$acturesult22 = $actu->fetch();
$actu->closeCursor();
?>   

<?php $rating = $acturesult22['rating']; ?>              		             		
 
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
<a href="" id="voteplus" title="Ajouter votre vote"><div class="vote_gallerie"></div></a>
<div class="valide2" title="Modification terminé"></div>
</div>

