

<?php

$app_name = "";
$env = "";
$node = "";
$deploy = "";

if (isset($_POST['app_name'])){
		$app_name = $_POST['app_name'];
	} else {
		$app_name = "";
	}
if (isset($_POST['env'])){
		$env = $_POST['env'];
	} else {
		$env = "";
	}
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

	echo $result_exec;

?>

<?php
}
else{
?>
<div class="panel-body" ng-transclude="">
	<h1>Application : <?php echo $app_name; ?></h1>
	<h1>Environnement : <?php echo $env; ?></h1>
</div>

<div class="panel-body" ng-transclude="">
        <div class="form-group">
            <select class="form-control selectpicker ng-valid" ng-model="nodeSelect">
              <option value="1">Node 1 (WEB)</option>
              <option value="2">Node 2 (SGBD)</option>
            </select>
        </div>
  </div>
</div>

<div ng-switch="nodeSelect">
	<div ng-switch-when="1">
		<div class="panel panel-info contextual-example-panel bootstrap-panel">
			<div class="panel-heading">Node 1 WEB</div>
			<div class="panel-body">
				<form action="#/config_app" method="post">
					<input type="hidden" name="deploy" value="true"></input>
					<input type="hidden" name="node" value="1"></input>
					<input type="hidden" name="app_name" value="MRM"></input>
               		<input type="hidden" name="env" value="disfe"></input>
					<input type="submit" class="btn btn-primary btn-with-icon"><i class="ion-android-download"></i>Deployer</input>
				</form>
			</div>
		</div>
	</div>
	<div ng-switch-when="2">
				<div class="panel panel-info contextual-example-panel bootstrap-panel">
			<div class="panel-heading">Node 2 SGBD</div>
			<div class="panel-body">
				<form action="#/config_app" method="post">
					<input type="hidden" name="deploy" value="true"></input>
					<input type="hidden" name="node" value="2"></input>
					<input type="hidden" name="app_name" value="MRM"></input>
               		<input type="hidden" name="env" value="disfe"></input>
					<input type="submit" class="btn btn-primary btn-with-icon"><i class="ion-android-download"></i>Deployer</input>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
}
?>