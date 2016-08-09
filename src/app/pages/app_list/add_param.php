
<div ng-controller="CtrlCfgApp">	
	<div ba-panel="" ba-panel-title="Horizontal Form" ba-panel-class="with-scroll">
   <div class="panel  with-scroll animated zoomIn" zoom-in="">
      <div class="panel-body">
            <form class="form-horizontal ng-pristine ng-valid ng-scope">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Nom du parametre</label>
                  <div class="col-sm-10"><input type="text" class="form-control" ng-model="name"></div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Valeur du parametre</label>
                  <div class="col-sm-10"><input type="text" class="form-control" ng-model="value"></div>
               </div>
            </form>
            <br>
            <button type="button" class="btn btn-primary ng-scope" ng-click="save_param(name,value)">Ajouter le parametre</button>
      </div>
   </div>
</div>
</div>
