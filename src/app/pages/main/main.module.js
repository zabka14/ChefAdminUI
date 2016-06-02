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
          title: 'Status',
          controller: 'CtrlMain',
          sidebarMeta: {
            order: 1,
            icon: 'ion-navicon-round',
          },
        });
  }

})();
