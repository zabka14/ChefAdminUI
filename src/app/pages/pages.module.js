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
    'BlurAdmin.pages.add_app',
    'BlurAdmin.pages.connexion',
  ])



      .config(function($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/main');

        var working = {
          name: 'working',
          url: '/working',
          title: 'Processing . . . ',
          templateUrl: 'app/pages/connexion/working.php',
        };
        $stateProvider
            .state(working);


        var state_add_node = {
          name: 'add_node',
          url: '/add_node',
          title: 'Ajouter nodes ',
          templateUrl: 'app/pages/add_app/add_nodes.php',
        };
        $stateProvider
            .state(state_add_node);

        var state_del_app = {
          name: 'del_app',
          url: '/del_app',
          title: 'Supprimer application',
          templateUrl: 'app/pages/app_list/del_app.php',
        };
        $stateProvider
            .state(state_del_app);

        var state_conf_app = {
          name: 'conf_app',
          url: '/conf',
          title: 'Configurer application',
          templateUrl: 'app/pages/app_list/cfg_app.php',
        };
        $stateProvider
            .state(state_conf_app);


        var state_add_param = {
          name: 'add_param',
          url: '/add_param',
          title: 'Ajout d\' un parametre',
          templateUrl: 'app/pages/app_list/add_param.php',
        };
        $stateProvider
            .state(state_add_param);

    })

})();
