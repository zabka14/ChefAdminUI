(function () {
  'use strict';

  angular.module('BlurAdmin.pages.connexion', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
  	$stateProvider
        .state('log', {
          url: '/log',
          templateUrl: 'app/pages/connexion/log.php',
          title: 'Connexion',
          controller: 'CtrlConnexion',
        });
    $stateProvider
        .state('unlog', {
          url: '/unlog',
          templateUrl: 'app/pages/connexion/unlog.php',
          title: 'Deconnexion',
          controller: 'CtrlConnexion',
        });

  }

})();
