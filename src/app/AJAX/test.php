<?php
	$foo = $_POST['myVal'];
	$retour = "Valeur envoy�e = ".$foo." !";
	$retour = json_encode($RESULT);
	echo $retour;
?> 