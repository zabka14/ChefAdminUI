(function () {
  'use strict';

  angular.module('BlurAdmin.pages.app_list', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('app_list', {
          url: '/app_list',
          templateUrl: 'app/pages/app_list/app_list.php',
          title: 'Parametrage',
          controller: 'ModalsPageCtrl',
          sidebarMeta: {
            order: 2,
            icon: 'ion-gear-b',
          },
        });
  }

})();