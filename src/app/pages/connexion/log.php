<div ng-init="init()">
  <h2 ng-if="!!erreur">{{erreur}}</h2>
  <div class="auth-block" ng-if="!perm">
    <h1>Connexion</h1>

    <form class="form-horizontal">
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Nom d'utilisateur</label>

        <div class="col-sm-10">
          <input type="text" class="form-control" id="username" placeholder="" ng-model="u_name">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>

        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" placeholder="" ng-model="u_pass">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default btn-auth" ng-click="connexion(u_name, u_pass)">Connexion</button>
        </div>
      </div>
    </form>
  </div>
</div>