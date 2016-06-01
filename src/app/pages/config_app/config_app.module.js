(function () {
  'use strict';

  angular.module('BlurAdmin.pages.config_app', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('config_app', {
          url: '/config_app',
          templateUrl: 'app/pages/config_app/config.php',
          title: 'Configuration application ',
          sidebarMeta: {
            order: 999,
          },
        });
  }

})();
