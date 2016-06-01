<?php

	$deploy=false;
	if (isset($_POST['node'])){
		$node = $_POST['node'];
	} else {
		$node = "";
	}
	if (isset($_POST['deploy'])){
			$deploy = $_POST['deploy'];
		} else {
			$deploy = "";
		}

	if ($deploy == "true") {
	if ($node == 1) {
		$result_exec = exec('knife ssh "name:MRM_WEB" "chef-client" -x rootint -a ipaddress');
	}
	if ($node == 2){
		$result_exec = exec('knife ssh "name:MRM_SGBD" "chef-client" -x rootint -a ipaddress');
	}

	}
	echo $result_exec;
?> 