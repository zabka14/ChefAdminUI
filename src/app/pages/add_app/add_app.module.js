(function () {
  'use strict';

  angular.module('BlurAdmin.pages.add_app', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('add_app', {
          url: '/add_app',
          templateUrl: 'app/pages/add_app/add_app.php',
          title: 'Ajouter Application',
          controller: 'CtrlAdd',
          sidebarMeta: {
            order: 3,
            icon: 'ion-plus-round',
          },
        });
  }

})();

