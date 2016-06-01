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




<div ng-switch="envSelect">
  <div ng-switch-when="disfe">
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
        <uib-tab heading="Configurer">
            <div class="panel-heading clearfix"><h3 class="panel-title">Liste des parametres :</h3></div>
            <div class="panel-body" ng-transclude="">
                <table class="table">
                  <tbody>
                    <tr>
                      <th width="10%">Nom du parametre</th>
                      <th>Valeur</th>
                    </tr>
                    <tr>
                      <td width="10%">Param 1</td>
                      <td class="success">foo</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 2</td>
                      <td class="success">bar</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 3</td>
                      <td class="danger">null</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="panel-heading clearfix"><h3 class="panel-title">Options :</h3></div>
            <form action="#/config_app" method="POST">
            <button type="button" disabled="disabled" class="btn btn-primary btn-with-icon"><i class="ion-android-download"></i>Deployer</button> &nbsp;&nbsp;&nbsp;
                <input type="hidden" name="app_name" value="MRM"></input>
                <input type="hidden" name="env" value="disfe"></input>
                <button type="submit" class="btn btn-info btn-with-icon"><i class="ion-stats-bars"></i>Modifier configuration</button>
            </form>
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
        <uib-tab heading="Configurer">
          <div class="panel-heading clearfix"><h3 class="panel-title">Liste des parametres :</h3></div>
            <div class="panel-body" ng-transclude="">
                <table class="table">
                  <tbody>
                    <tr>
                      <th width="10%">Nom du parametre</th>
                      <th>Valeur</th>
                    </tr>
                    <tr>
                      <td width="10%">Param 1</td>
                      <td class="success">foo</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 2</td>
                      <td class="success">bar</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 3</td>
                      <td class="success">baz</td>
                    </tr>
                    <tr>
                      <td width="10%">Creer un dump</td>
                      <td class="default">
                        <label class="radio-inline custom-radio nowrap">
                          <input type="radio" name="dump" id="dumpOn" value="on" disabled checked> 
                          <span>Oui</span>
                        </label>
                        <label class="radio-inline custom-radio nowrap">
                          <input type="radio" name="dump" id="dumpOff" value="off" disabled> 
                          <span>Non</span>
                        </label>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="panel-heading clearfix"><h3 class="panel-title">Options :</h3></div>
            <button type="button" class="btn btn-primary btn-with-icon"><i class="ion-android-download"></i>Deployer</button> &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-info btn-with-icon"><i class="ion-stats-bars"></i>Modifier configuration</button>
        </uib-tab>
      </uib-tabset>
    </div>
  </div>
  <div ng-switch-when="cap">
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
                  <td>6.0.0</td>
                </tr>
                <tr>
                  <td>MRM_WEB</td>
                  <td><button class="status-button btn btn-xs btn-danger">KO</button></td>
                </tr>
                <tr>
                  <td>MRM_SGBD</td>
                  <td><button class="status-button btn btn-xs btn-danger">KO</button></td>
                </tr>
              </tbody>
            </table>
          </div>


        </uib-tab>
        <uib-tab heading="Configurer">
            <div class="panel-heading clearfix"><h3 class="panel-title">Liste des parametres :</h3></div>
            <div class="panel-body" ng-transclude="">
                <table class="table">
                  <tbody>
                    <tr>
                      <th width="10%">Nom du parametre</th>
                      <th>Valeur</th>
                    </tr>
                    <tr>
                      <td width="10%">Param 1</td>
                      <td class="success">foo</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 2</td>
                      <td class="success">bar</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 3</td>
                      <td class="danger">null</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="panel-heading clearfix"><h3 class="panel-title">Options :</h3></div>
            <button type="button" disabled="disabled" class="btn btn-primary btn-with-icon"><i class="ion-android-download"></i>Deployer</button> &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-info btn-with-icon"><i class="ion-stats-bars"></i>Modifier configuration</button>
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
                  <td>3.3.1</td>
                </tr>
                <tr>
                  <td>MOBILIS_WEB</td>
                  <td><button class="status-button btn btn-xs btn-success">OK</button></td>
                </tr>
                <tr>
                  <td>MOBILIS_SGBD</td>
                  <td><button class="status-button btn btn-xs btn-success">OK</button></td>
                </tr>
              </tbody>
            </table>
          </div>


        </uib-tab>
        <uib-tab heading="Configurer">
          <div class="panel-heading clearfix"><h3 class="panel-title">Liste des parametres :</h3></div>
            <div class="panel-body" ng-transclude="">
                <table class="table">
                  <tbody>
                    <tr>
                      <th width="10%">Nom du parametre</th>
                      <th>Valeur</th>
                    </tr>
                    <tr>
                      <td width="10%">Param 1</td>
                      <td class="success">foo</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 2</td>
                      <td class="success">bar</td>
                    </tr>
                    <tr>
                      <td width="10%">Param 3</td>
                      <td class="success">baz</td>
                    </tr>
                    <tr>
                      <td width="10%">Creer un dump</td>
                      <td class="default">
                        <label class="radio-inline custom-radio nowrap">
                          <input type="radio" name="dump" id="dumpOn" value="on" disabled checked> 
                          <span>Oui</span>
                        </label>
                        <label class="radio-inline custom-radio nowrap">
                          <input type="radio" name="dump" id="dumpOff" value="off" disabled> 
                          <span>Non</span>
                        </label>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="panel-heading clearfix"><h3 class="panel-title">Options :</h3></div>
            <button type="button" class="btn btn-primary btn-with-icon"><i class="ion-android-download"></i>Deployer</button> &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-info btn-with-icon"><i class="ion-stats-bars"></i>Modifier configuration</button>
        </uib-tab>
      </uib-tabset>
    </div>
  </div>
</div>

