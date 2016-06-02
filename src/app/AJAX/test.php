<?php

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'chefadmin');
	$query = "SELECT * FROM environnements WHERE 1";
	$res = $mysqli->query($query);
	$result = array();
	while ($row = $res->fetch_assoc()) 
	{
    	array_push($result, $row);
	}
	echo json_encode($result);

?> 