/**
 * @author v.lugovsky
 * created on 16.12.2015
 */
(function () {
  'use strict';

  

  angular.module('BlurAdmin.pages', [
    'ui.router',
    'BlurAdmin.pages.main',
    'BlurAdmin.pages.app_list',
    'BlurAdmin.pages.test',
  ])



      .config(function($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/main');
        var state_conf = {
          name: 'config_app',
          url: '/config_app',
          title: 'Configuration application ',
          templateUrl: 'app/pages/config_app/config.php',
        };

        var test2 = {
          name: 'test2',
          url: '/test2',
          title: 'Test2 ',
          templateUrl: 'app/pages/test/test2.html',
        };


        $stateProvider
            .state(state_conf);
        $stateProvider
            .state(test2);

        });

})();
