<?php
	include_once("mysqli_utils.php");
	$mysqli = connect();

	$env_id = $_POST['env_id'];
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
	echo "#EOD#";

	$query = "SELECT *
			FROM nodes";
	$res2 = $mysqli->query($query);
	$result = array();
	while ($row = $res2->fetch_assoc()) 
	{
    	array_push($result, $row);
	}
	echo json_encode($result);
	$res2->close();
	$res->close();
	$mysqli->close();
?>