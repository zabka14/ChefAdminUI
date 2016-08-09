<?php 

function connect(){
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'chefadmin');
	return $mysqli;
}

?>