<?php
	$id = explode("/", $_GET["p"]); 
?>

<form action = <?php echo WEBROOT."candidatsCtrl/updatecan_photo/".$id[2]; ?> method="post">

	<h3>La photo du candidat : <input type = 'text' name = 'can_photo' /></h3>
	
	<p><input type='submit' value='Modification' /></p>
</form>