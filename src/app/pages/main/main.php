<div ng-controller="CtrlMain" ng-init="init()">
  <div class="panel  with-scroll animated zoomIn" zoom-in="">
    <div class="panel-heading clearfix">
      <h3 class="panel-title">Selection de l'environnement</h3>
    </div>
    <div class="panel-body" ng-transclude="">
          <div class="form-group">
              <select class="form-control selectpicker ng-valid" ng-model="envSelect">
                <option ng-repeat="x in envs" value="{{x.id}}">{{x.libelle}}</option>
              </select>
          </div>
    </div>
  </div>




  <div ng-switch="envSelect">
    <div ng-repeat="x in envs" ng-switch-when="{{x.id}}">
            <div ba-panel
           ba-panel-class="tabs-panel xsmall-panel with-scroll">
        <uib-tabset class="tabs-left">
          <uib-tab heading=Infos>
            <p class="text-center" style="font-size:200%;">
              MRM
            </p>
            <br>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-condensed">
                <tbody>
                  <tr>
                    <td>Version actuelle</td>
                    <td>5.5.0</td>
                  </tr>
                  <tr>
                    <td>MRM_WEB</td>
                    <td><button class="status-button btn btn-xs btn-success">OK</button></td>
                  </tr>
                  <tr>
                    <td>MRM_SGBD</td>
                    <td><button class="status-button btn btn-xs btn-success">OK</button></td>
                  </tr>
                </tbody>
              </table>
            </div>


          </uib-tab>
        </uib-tabset>
      </div>

      <div ba-panel
           ba-panel-class="tabs-panel xsmall-panel with-scroll">
        <uib-tabset class="tabs-left">
          <uib-tab heading=Infos>
            <p class="text-center" style="font-size:200%;">
              Mobilis
            </p>
            <br>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-condensed">
                <tbody>
                  <tr>
                    <td>Version actuelle</td>
                    <td>0.0.0</td>
                  </tr>
                  <tr>
                    <td>MOBILIS_WEB</td>
                    <td><button class="status-button btn btn-xs btn-danger">KO</button></td>
                  </tr>
                  <tr>
                    <td>MOBILIS_SGBD</td>
                    <td><button class="status-button btn btn-xs btn-danger">KO</button></td>
                  </tr>
                </tbody>
              </table>
            </div>


          </uib-tab>
        </uib-tabset>
      </div>
    </div>
  </div>
</div>

