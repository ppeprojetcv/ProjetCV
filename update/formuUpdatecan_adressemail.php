<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_adressemail/".$id[2]; ?> method="post">

	<h3>L'adresse mail du candidat : <input type = 'text' name = 'can_adressemail' /></h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>