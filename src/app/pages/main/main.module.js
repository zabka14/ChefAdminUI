(function () {
  'use strict';

  angular.module('BlurAdmin.pages.main', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('main', {
          url: '/main',
          templateUrl: 'app/pages/main/main.php',
          title: 'Liste des applications',
          sidebarMeta: {
            order: 800,
          },
        });
  }

})();