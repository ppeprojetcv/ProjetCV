<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_numtelephone/".$id[2]; ?> method="post">

	<h3>Le numéro de téléphone du candidat : <input type = 'text' name = 'can_numtelephone' /></h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>