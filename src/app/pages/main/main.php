<div ng-controller="CtrlMain" ng-init="init()">
  <div class="panel  with-scroll animated zoomIn" zoom-in="">
    <div class="panel-heading clearfix">
      <h3 class="panel-title">Selection de l'environnement</h3>
    </div>
    <div class="panel-body">
          <div class="form-group">
              <select ng-change="getAppByEnvID()" class="form-control selectpicker ng-valid" ng-model="envSelect">
                <option ng-repeat="x in envs" value="{{x.id}}">{{x.libelle}}</option>
              </select>
          </div>
    </div>
  </div>
  <div ng-repeat="app in apps">
      <div ba-panel
             ba-panel-class="tabs-panel xsmall-panel with-scroll" >
          <br>
          <p class="text-center" style="font-size:150%;">
            {{app.libelle_app}}
          </p>
          <table width="100%" class="table table-hover">
            <thead>
              <tr class="black-muted-bg">
                <th width="30%">Nom de la node</th>
                <th width="20%">Version actuelle</th>
                <th width="30%">Dernier deploiement</th>
                <th width="20%">Status actuel</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="nodes in app.nodes" class="no-top-border ng-scope">
                <td width="30%">{{nodes.libelle}}</td>
                <td width="20%">{{nodes.version}}</td>
                <td width="30%">Not yet implemented</td>
                <td width="20%" ng-if="nodes.status == 'OK'"><button class="status-button btn btn-xs btn-success">OK</button></td>
                <td width="20%" ng-if="nodes.status == 'KO'"><button class="status-button btn btn-xs btn-danger">KO</button></td>
                <td width="20%" ng-if="nodes.status == 'EC'">
                  <div style="position:relative;margin: 1em;">
                    <span style="padding-top: 1em" us-spinner="{left: '2%',length: 5,width: 4,radius:4}"></span>
                  </div>
                </td>
              </tr>
            </tbody>

          </table>




          <!-- <uib-tabset class="tabs-left">
            <uib-tab heading=Infos>
              <p class="text-center" style="font-size:200%;">
                {{app.libelle_app}}
              </p>
              <br>
              <div class="table-responsive" ng-repeat="nodes in app.nodes")>
                <table class="table table-bordered table-hover table-condensed">
                  <tbody>
                    <tr>
                      <td width="10%">Node : </td>
                      <td>{{nodes.libelle}}</td>
                    </tr>
                    <tr>
                      <td width="10%">Status : </td>
                      <td ng-if="nodes.status == 'OK'"><button class="status-button btn btn-xs btn-success">OK</button></td>
                      <td ng-if="nodes.status == 'KO'"><button class="status-button btn btn-xs btn-danger">KO</button></td>
                      <td ng-if="nodes.status == 'EC'">
                        <div style="position:relative;margin: 1em;">
                          <span style="padding-top: 1em" us-spinner="{left: '2%',length: 5,width: 4,radius:4}"></span>
                      </div>
                        </td>
                    </tr>
                    <tr>
                      <td width="10%">Version : </td>
                      <td>{{nodes.version}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </uib-tab>
          </uib-tabset> -->
        </div>
  </div>
</div>

