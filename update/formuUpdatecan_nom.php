<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_nom/".$id[2]; ?> method="post">

	<h3>Le nom du candidat : <input type = 'text' name = 'can_nom' /></h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>
