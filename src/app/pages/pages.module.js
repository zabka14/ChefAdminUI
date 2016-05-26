/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  

  angular.module('BlurAdmin.pages', [
    'ui.router',
    'BlurAdmin.pages.main',
  ])

      .config(function($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/main');
        var state_main = {
          name: 'test2',
          url: '/test2',
          title: 'Applications',
          templateUrl: 'app/pages/test/test.html',
        };

        var state_test = {
          name: 'test',
          url: '/test',
          title: 'Test',
          templateUrl: 'app/pages/test/test.html',
        };

        $stateProvider
            .state(state_main)
            .state(state_test);

        });

})();
