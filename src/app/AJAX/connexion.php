<?php
	include_once("mysqli_utils.php");
	$mysqli = connect();
	$username = $_POST['name'];
	$password = $_POST['password'];
	$query = "SELECT password FROM `utilisateurs` WHERE id='".$username."';";
	$res = $mysqli->query($query);
	$result = array();
	while ($row = $res->fetch_assoc()) 
	{
    	array_push($result, $row);
	}
	if ($result[0]['password'] == $password) {
		echo 'true';
	}
	else{
		echo 'false';
	}
	$mysqli->close();
?>