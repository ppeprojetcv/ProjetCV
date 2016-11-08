<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_permisconduire/".$id[2]; ?> method="post">

	<h3>Le permis de conduire du candidat : <input name="can_permisconduire" value="O" type="radio"/>Oui <input name="can_permisconduire" value="N" type="radio"/>Non</h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>