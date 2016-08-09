<?php
	include_once("mysqli_utils.php");
	$mysqli = connect();

	$app_id = $_POST['app_id'];
	$query = "DELETE FROM `applications` WHERE `applications`.`id` = '".$app_id."';";
	$res = $mysqli->query($query);

	$query = "DELETE FROM `nodes` WHERE `id` = '".$app_id."';";
	$res = $mysqli->query($query);

	$mysqli->close();
?>