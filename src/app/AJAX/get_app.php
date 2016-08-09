<?php

	include_once("mysqli_utils.php");
	$mysqli = connect();

	$app_id = $_POST['app_id'];
	$query = "SELECT * FROM `applications` WHERE `applications`.`id` = '".$app_id."';";
	$res = $mysqli->query($query);
	$result = array();
	while ($row = $res->fetch_assoc()) 
	{
    	array_push($result, $row);
	}
	echo json_encode($result);
	echo "#EOD#";

	$query = "SELECT *
			FROM nodes where application = '".$app_id."';";
	$res2 = $mysqli->query($query);
	$result2 = array();
	while ($row = $res2->fetch_assoc()) 
	{
    	array_push($result2, $row);
	}
	echo json_encode($result2);
	$mysqli->close();
?>