<div ng-controller="CtrlAppSup" ng-init="init()">
	<h2> Suppression de l'application : {{app.libelle}}</h2>
	<h3> Cette application contient les nodes suivantes : </h3>
     <div class="horizontal-scroll">
        <table class="table table-condensed">
           <thead>
              <tr>
              	<th>ID</th>
                <th>Nom</th>
                <th>Adresse IP</th>
                <th>Version</th>
              </tr>
           </thead>
           <tbody>
              <tr ng-repeat="node in nodes" class="ng-scope">
                 <td class="ng-binding">{{node.id}}</td>
                 <td class="ng-binding">{{node.libelle}}</td>
                 <td class="ng-binding">{{node.ip_serveur}}</td>
                 <td class="ng-binding">{{node.version}}</td>
              </tr>
           </tbody>
        </table>
     </div>
	<button type="button" class="btn btn-danger btn-raised" ng-click="supprimer(app.id)">Supprimer l'application et ses nodes</button>
</div>