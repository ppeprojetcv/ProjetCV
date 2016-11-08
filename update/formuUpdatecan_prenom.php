<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_prenom/".$id[2]; ?> method="post">

	<h3>Le  prénom du candidat : <input type = 'text' name = 'can_prenom' /></h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>