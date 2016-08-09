
<div ng-controller="CtrlCfgApp" ng-init="init()">	
	<div class="panel  with-scroll animated zoomIn" zoom-in="">
		<div class="panel-heading clearfix"><h3 class="panel-title">Application {{app.libelle}}</h3></div>
		<div class="panel-body">
			<h4>Selectionner une node</h4>
			 <div class="form-group">
	              <select ng-change="getNodeParam()" class="form-control selectpicker ng-valid" ng-model="node_select">
	                <option ng-repeat="node in nodes" value="{{node.id}}">{{node.libelle}}</option>
	              </select>
	          </div>
		</div>	
	</div>


	<div class="panel  with-scroll animated zoomIn" zoom-in="">
		<div class="panel-heading clearfix"><h3 class="panel-title">Liste des parametres</h3></div>
		<div class="panel-body" >
			<div ng-if="!!node_select" class="add-row-editable-table">
				<button type="button" class="btn btn-primary" ng-click="add_param()">
		          Ajouter un parametre
		        </button>
		        <p>Attention, les noms des parametres doivent etre en accord avec ceux declare dans la recipe Chef !</p>
		        <p>Une node doit imperativement avoir un parametre 'cookbook_name'</p>
			</div>
	            <form class="form-horizontal ng-pristine ng-valid ng-scope">
	               <div class="form-group" ng-repeat="param in params">
	                  <label class="col-sm-2 control-label">{{param.libelle}}</label>
	                  <div class="col-sm-8"><input type="text" class="form-control" ng-model="param.valeur"></div>
	                  <div class="col-sm-2">
	                  	<br>
                        <button ng-if="!param.valeur" class="btn btn-danger btn-icon" type="button"><i class="ion-android-checkmark-circle"></i></button>
                        <button ng-if="!!param.valeur" class="btn btn-success btn-icon" type="button"><i class="ion-android-checkmark-circle"></i></button>
	                  </div>
	               </div>
	            </form>
	         <div ng-if="!!node_select" class="add-row-editable-table">
	         	<button type="button" class="btn btn-primary" ng-click="confirm_param(node.id)">
		          Metre a jour les parametres
		        </button>
				<button type="button" class="btn btn-primary" ng-click="deployer()">
		          Deployer
		        </button>
			</div>
		</div>	
	</div>
</div>
