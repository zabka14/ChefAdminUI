<div class="page-top clearfix" scroll-position="scrolled" max-height="50" ng-class="{'scrolled': scrolled}">
  <a href="#/main" class="al-logo clearfix"><span>Chef</span>Admin</a>
  <a href class="collapse-menu-link ion-navicon" ba-sidebar-toggle-menu></a>

    <div class="user-profile clearfix">

      <?php
      	if(!empty($_COOKIE["perm"])){
      		echo ('<a style="margin:10px;" class="btn btn-default btn-with-icon" ui-sref="unlog" type="button">Deconnexion</a>');
      	}else{
      		echo ('<a style="margin:10px;" class="btn btn-default btn-with-icon" ui-sref="log" type="button">Connexion</a>');
      	}
      ?>

        <img height="30em" width="auto" src="assets/img/logo-cap-gemini.png">
        <img height="60px" width="auto" src="https://upload.wikimedia.org/wikipedia/fr/2/2a/Logo-laposte.png">
    </div>
</div>