(function () {
  'use strict';

  angular.module('BlurAdmin.pages.test', [])
      .config(routeConfig);

  /** @ngInject */
  function routeConfig($stateProvider) {
    $stateProvider
        .state('test', {
          url: '/test',
          templateUrl: 'app/pages/test/test.html',
          title: 'Test',
          sidebarMeta: {
            order: 800,
          },
        });
  }

})();