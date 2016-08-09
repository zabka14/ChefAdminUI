<?php
	include_once("mysqli_utils.php");
	$mysqli = connect();

	$node_id = $_POST['node_id'];
	$query = "SELECT * FROM `parametres` WHERE `node` = '".$node_id."';";
	$res = $mysqli->query($query);
	$result = array();
	while ($row = $res->fetch_assoc()) 
	{
    	array_push($result, $row);
	}
	echo json_encode($result);

	$mysqli->close();
?>