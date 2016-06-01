<?php
	$foo = $_POST['myVal'];
	$retour = "Valeur envoyée = ".$foo." !";
	$retour = json_encode($RESULT);
	echo $retour;
?> 