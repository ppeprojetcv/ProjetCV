<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_datenaissance/".$id[2]; ?> method="post">

	<h3>La date de naissance du candidat : <input type = 'text' name = 'can_datenaissance' /></h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>