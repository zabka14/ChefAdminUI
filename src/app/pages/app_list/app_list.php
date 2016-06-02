<div class="panel  with-scroll animated zoomIn" zoom-in="">
  <div class="panel-heading clearfix">
    <h3 class="panel-title">Selection de l'environnement</h3>
  </div>
  <div class="panel-body" ng-transclude="">
        <div class="form-group">
            <select class="form-control selectpicker ng-valid" ng-model="envSelect">
              <option value="disfe">DISFE Homologation</option>
              <option value="cap">CAP Deploiement</option>
            </select>
        </div>
  </div>
</div>


<div class="panel  with-scroll animated zoomIn" zoom-in="">
<div class="panel-heading clearfix"><h3 class="panel-title">Liste des applications</h3></div>
<div class="panel-body" ng-transclude="">
	<div class="add-row-editable-table">
		<button type="button" class="btn btn-primary" data-toggle="modal" ng-click="open('app/pages/app_list/modals/addAppModal.html', 'lg')">
          Ajouter une application
        </button>
	</div>

<div ng-switch="envSelect">




  <div ng-switch-when="disfe">
  	<table class="table table-bordered table-hover table-condensed">
		<tbody>
			<tr>
				<td></td>
				<td>Nom</td>
				<td>Status</td>
				<td>Nombre de node</td>
				<td>Actions</td>
			</tr>
			<tr class="editable-row ng-scope success">
			<form class="form-buttons form-inline ng-pristine ng-valid ng-hide" method="post">


				<td class="ng-binding">0</td>
				<td><span class="ng-scope ng-binding">MRM</span></td>
				<td class="select-td">
					<span class="ng-scope ng-binding">Deploye</span>
				</td>
				<td class="select-td">
					<span class="ng-scope ng-binding">2</span>
				</td>
				<td>
					<input type="button" name="action" value="Configurer" class="btn btn-default btn-raised btn-xs"/>
					<input type="button" name="action" value="Deployer" class="btn btn-default btn-raised btn-xs"/>
				</td>
			</form>
			</tr>
		</tbody>
	</table>
  </div>




  <div ng-switch-when="cap">
  <table class="table table-bordered table-hover table-condensed">
		<tbody>
			<tr>
				<td></td>
				<td>Nom</td>
				<td>Status</td>
				<td>Nombre de node</td>
				<td>Actions</td>
			</tr>
			<tr class="editable-row ng-scope danger">
			<form class="form-buttons form-inline ng-pristine ng-valid ng-hide" method="post">
				<td class="ng-binding">0</td>
				<td><span class="ng-scope ng-binding">MRM</span></td>
				<td class="select-td">
					<span class="ng-scope ng-binding">Deploye</span>
				</td>
				<td class="select-td">
					<span class="ng-scope ng-binding">2</span>
				</td>
				<td>
					<button type="submit" name="action" value="conf" class="btn btn-primary editable-table-button btn-xs">Configurer</button>
					<button type="submit" name="action" value="deploy" class="btn btn-primary editable-table-button btn-xs">Deployer</button>
				</td>
			</form>
			</tr>
		</tbody>
	</table>
  </div>
 </div>



	
</div>