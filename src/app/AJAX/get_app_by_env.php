<?php
	$env_id = $_POST['env_id'];
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'chefadmin');
	$query = "SELECT app.id as id_app,
					 app.libelle as libelle_app
			FROM applications as app 
			WHERE app.environnement =".$env_id;
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