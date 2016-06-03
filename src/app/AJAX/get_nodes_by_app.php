<?php
	$app_id = $_POST['app_id'];
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'chefadmin');
	$query = "SELECT id, libelle, status
			FROM nodes
			WHERE application =".$app_id;
	$res = $mysqli->query($query);
	$result = array();
	while ($row = $res->fetch_assoc()) 
	{
    	array_push($result, $row);
	}
	echo json_encode($result);
	$res->close();
	$mysqli->close();
?>