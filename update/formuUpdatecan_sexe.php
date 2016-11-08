<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_sexe/".$id[2]; ?> method="post">

	<h3>Le sexe du candidat : <input name="can_sexe" value="F" type="radio"/>Feminin <input name="can_sexe" value="M" type="radio"/>Masculin</h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>