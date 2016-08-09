<?php
	include_once("mysqli_utils.php");
	$mysqli = connect();

	$query = "SELECT * FROM environnements WHERE 1";
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