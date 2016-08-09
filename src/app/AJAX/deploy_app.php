<?php 


include_once("mysqli_utils.php");
$mysqli = connect();

$node_id = $_POST['node_id'];


/* On met le status à EC le temps du traitement CHEF*/
$query="UPDATE `nodes` SET `status` = 'EC' WHERE `nodes`.`id` = ".$node_id."";
$res = $mysqli->query($query);

$query = "SELECT *
		FROM nodes where id = '".$node_id."';";
$res2 = $mysqli->query($query);
$result2 = array();
while ($row = $res2->fetch_assoc()) 
{
	array_push($result2, $row);
}
$node_libelle = $result2[0]['libelle'];



$query="SELECT * FROM `parametres` WHERE node =".$node_id."";
$res = $mysqli->query($query);
$result = array();
while ($row = $res->fetch_assoc()) 
{
	array_push($result, $row);
}

$params = "";

foreach ($result as $value) {
	$params .= "override['".$node_libelle."']['".$value['libelle']."'] = '".$value['valeur']."' \n";
}

$test = "";
$file = "/home/chef/chef-repo/cookbooks/".$node_libelle."/attributes/default.rb";

file_put_contents($file, $params);

/*On push la recipe sur le serveur, on attend la fin du traitement*/
$cookbook_upload = 'knife cookbook upload '.$node_libelle.'';
/*exec attend la fin du traitement avant de passer à la suite*/

$return_val1 = "";
$return_val2 = "";
chdir("/home/chef/chef-repo");
exec($cookbook_upload);

$cookbook_launch = 'knife ssh "name:'.$node_libelle.'" "chef-client" -x rootint -a ipaddress -P rootint';
exec($cookbook_launch);


/*Une fois fini, on remet status à OK*/
$query="UPDATE `nodes` SET `status` = 'OK' WHERE `nodes`.`id` = ".$node_id."";
$res = $mysqli->query($query);

$mysqli->close();

echo "Termine";

?>