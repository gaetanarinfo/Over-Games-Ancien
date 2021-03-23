<?php
require_once 'cnx.php';
?>
<?php
if (empty($_SESSION['rang'])) 

{
	die('<META HTTP-equiv="refresh" content=0;URL=index>'); 	
 
} else if ($_SESSION['rang'] == 'Membre') {
	
	die('<META HTTP-equiv="refresh" content=0;URL=index>'); 	
				
} else if ($_SESSION['rang'] == 'Administrateur') {
			

} else {
// en théorie pas besoin... mais bon... 
}
?>   