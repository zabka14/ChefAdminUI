<?php 
include_once("mysqli_utils.php");
$mysqli = connect();

$node_id = $_POST['node_id'];
$params = json_decode($_POST['params']);

foreach ($params as $p) {
	$query="INSERT INTO `parametres` (`id`, `libelle`, `valeur`, `node`) 
			VALUES (".$p->id.", '".$p->libelle."', '".$p->valeur."', '".$p->node."')
			ON DUPLICATE KEY UPDATE
			libelle='".$p->libelle."',
			valeur='".$p->valeur."';";
	$res = $mysqli->query($query);
}

$mysqli->close();

?>