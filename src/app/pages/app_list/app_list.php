<div ng-controller="CtrlAppList" ng-init="init()">
<div ng-if="perm=='admin'">
	<div class="panel  with-scroll animated zoomIn" zoom-in="">
	    <div class="panel-heading clearfix">
	      <h3 class="panel-title">Selection de l'environnement</h3>
	    </div>
	    <div class="panel-body">
	          <div class="form-group">
	              <select ng-change="getAppByEnvID(envSelect)" class="form-control selectpicker ng-valid" ng-model="envSelect">
	                <option ng-repeat="x in envs" value="{{x.id}}">{{x.libelle}}</option>
	              </select>
	          </div>
	    </div>
	 </div>


	<div class="panel  with-scroll animated zoomIn" zoom-in="">
		<div class="panel-heading clearfix"><h3 class="panel-title">Liste des applications</h3></div>
		<div class="panel-body">
				<table class="table">
				<tbody>
			      		<tr>
			      			<th width="40%">Nom application</th>
			      			<th>Actions</th>
			      		</tr>
				      		<tr ng-repeat="app in apps" class="default">
				      			<td width="40%">{{app.libelle_app}}</td>
				      			<td>
				      				<button type="button" ng-click="configurer(app.id_app)" class="btn btn-info btn-xs">Configurer & Deployer</button>
				      				<button type="button" ng-click="supprimer(app.id_app)" class="btn btn-danger btn-xs">Supprimer</button>
				      			</td>
				      		</tr>
			      	</tbody>
			      </table>
		</div>	
	</div>
</div>
<div ng-if="!perm">
	<h3>Vous n'etes pas autorise a acceder a cette page</h3>
</div>
</div>