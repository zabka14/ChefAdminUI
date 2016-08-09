<div class="widgets" ng-controller="CtrlAdd">
    <div class="row" ng-init="init()">
        <div class="col-md-12">
            <div ba-panel ba-panel-title="Formulaire d'ajout d'application" ba-panel-class="with-scroll">
                <ba-wizard>
                    <ba-wizard-step title="Application" form="appInfoForm">
                        <form name="appInfoForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="appName">Nom de l'application</label>
                                        <input type="text" class="form-control" id="appName" name="app_name" placeholder="Application" ng-change="appName_change(appInfo.app_name)" ng-model="appInfo.app_name" required>
                                        <span class="help-block error-block basic-block">Required</span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="appNbNode">Nombre de node de l'application</label>
                                        <input type="test" pattern="[0-9]*" class="form-control" id="appNbNode" name="app_nb_node" placeholder="Nombre Nodes" ng-model="appInfo.app_nb_node" ng-change="nbNode_change(appInfo.app_nb_node)" required>
                                        <span class="help-block error-block basic-block">Required</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="appEnv">Environnement</label>
                                        <select class="form-control selectpicker ng-valid" ng-change="appEnv_change(appInfo.app_env)" ng-model="appInfo.app_env">
                                            <option ng-repeat="x in envs" value="{{x.id}}">{{x.libelle}}</option>
                                        </select>
                                        <span class="help-block error-block basic-block">Required</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </ba-wizard-step>
                    <ba-wizard-step title="Nodes" form="nodesForm">
                        <form name="nodesForm" novalidate ng-repeat="node in ser.get_array_nb_nodes() track by $index">
                            <div class="row">
                                <div class="col-md-1">
                                    <br>
                                    <button ng-if="nodes[$index].saved=='1'" class="btn btn-success btn-icon" type="button"><i class="ion-android-checkmark-circle"></i></button>
                                </div>
                                <div class="col-md-5">
                                     <div class="form-group has-feedback">
                                        <input type="hidden" value="{{$index}}" ng-model="node_id"></input>
                                        <label for="node_lib">Nom de la node</label>
                                        <input type="text" class="form-control" placeholder="Node"  ng-model="node_name" required>
                                        <span class="help-block error-block basic-block">Required</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="node_ip">IP de la node</label>
                                        <input type="text" class="form-control" placeholder="0.0.0.0"  ng-model="node_ip" required>
                                        <span class="help-block error-block basic-block">Required</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Sauvegarder valeurs</label>
                                    <button class="btn btn-primary btn-with-icon" type="button" ng-click="saveNode($index,node_name,node_ip)"><i class="ion-android-download"></i></button>
                                </div>
                            </div>
                        </form>
                    </ba-wizard-step>
                    <ba-wizard-step title="Recapitulatif">
                        <form class="form-horizontal" name="finishForm" novalidate>
                            <p> Application : {{app_name}} </p>
                            <p> Nombre de node : {{app_nbNode}} </p>
                            <p ng-repeat="node in ser.get_array_nb_nodes() track by $index">Node {{nodes[$index].id}}, nom : {{nodes[$index].libelle}} adresse IP : {{nodes[$index].ip}}</p> 
                            <button type="button" ng-click="save()" class="btn btn-info btn-raised">Terminer</button>
                        </form>
                    </ba-wizard-step>
                </ba-wizard>
            </div>
        </div>
    </div>

</div>