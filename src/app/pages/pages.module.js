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


        $stateProvider
            .state(state_conf);

        });

})();
