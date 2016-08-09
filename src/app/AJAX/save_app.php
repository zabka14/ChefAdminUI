<?php
include_once("mysqli_utils.php");
$mysqli = connect();

$nodes = json_decode($_POST['nodes'], true);
$app_name = $_POST['app_name'];
$app_env = $_POST['app_env'];

$mysqli->autocommit(TRUE);
$query = "INSERT INTO `applications` (`id`, `libelle`, `environnement`) VALUES (NULL, '".$app_name."', ".$app_env.")";
$res = $mysqli->query($query);

$query = "SELECT id FROM applications WHERE libelle = '".$app_name."' AND environnement = ".$app_env."";
$res = $mysqli->query($query);
$app_id = array();


while ($row = $res->fetch_assoc()) 
{
	array_push($app_id, $row);
}

foreach ($nodes as $node) {
	$query = "INSERT INTO `nodes` (`id`, `libelle`, `ip_serveur`, `status`, `version`, `application`) 
	VALUES (NULL, '".$node['libelle']."', '".$node['ip']."', 'KO', '0.0.0', '".$app_id[0]['id']."')";
	$res = $mysqli->query($query);
}

$mysqli->close();
?>