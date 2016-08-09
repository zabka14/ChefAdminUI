<div class="widgets" ng-controller="CtrlAdd2">
    <div class="row" ng-init="init()">
        <div class="col-md-12">
            <h3> Application : {{app_name}}</h3>
            <h4> Attention ! Vos nodes doivent porter le meme nom que les cookbooks qui leur sont/seront associes !</h4>
            <div ba-panel ba-panel-title="Etape 2" ba-panel-class="with-scroll">
                <ba-wizard>
                    <ba-wizard-step title="Nodes" form="nodesForm">
                        <form name="nodesForm" novalidate ng-repeat="node in nodes">
                            <div class="row">
                                <div class="col-md-1">
                                    <br>
                                    <button ng-if="node.saved=='1'" class="btn btn-success btn-icon" type="button"><i class="ion-android-checkmark-circle"></i></button>
                                </div>
                                <div class="col-md-5">
                                     <div class="form-group has-feedback">
                                        <input type="hidden" value="{{node.id}}" ng-model="node_id"></input>
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
                                    <button class="btn btn-primary btn-with-icon" type="button" ng-click="saveNode(node.id,node_name,node_ip)"><i class="ion-android-download"></i></button>
                                </div>
                            </div>
                        </form>
                    </ba-wizard-step>
                    <ba-wizard-step title="Recapitulatif">
                        <form class="form-horizontal" name="finishForm" novalidate>
                            <p> Application : {{app_name}} </p>
                            <p> Nombre de node : {{app_nbNode}} </p>
                            <p ng-repeat="node in nodes">Node {{node.id}}, nom : {{node.libelle}} adresse IP : {{node.ip}}</p> 
                            <button type="button" ng-click="save()" class="btn btn-info btn-raised">Terminer</button>
                        </form>
                    </ba-wizard-step>
                </ba-wizard>
            </div>
        </div>
    </div>

</div>