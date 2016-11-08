<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_nationalite/".$id[2]; ?> method="post">

	<h3>La nationalité du candidat : <input type = 'text' name = 'can_nationalite' /></h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>