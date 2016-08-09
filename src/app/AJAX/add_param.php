<?php
	include_once("mysqli_utils.php");
	$mysqli = connect();
	
	$node_id = $_POST['node_id'];
	$param_name = $_POST['param_name'];
	$param_value = $_POST['param_value'];

	$query = "INSERT INTO `parametres` (`id`, `libelle`, `valeur`, `node`) VALUES (NULL, '".$param_name."', '".$param_value."', '".$node_id."');";
	$res = $mysqli->query($query);
	
	$mysqli->close();
?>