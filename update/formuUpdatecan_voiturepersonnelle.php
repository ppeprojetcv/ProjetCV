<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_voiturepersonnelle/".$id[2]; ?> method="post">

	<h3>La voiture personnelle du candidat : <input name="can_voiturepersonnelle" value="O" type="radio"/>Oui <input name="can_voiturepersonnelle" value="N" type="radio"/>Non</h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>