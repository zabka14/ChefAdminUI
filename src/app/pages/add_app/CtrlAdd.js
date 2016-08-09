(function () {
  'use strict';

  angular.module('BlurAdmin.pages.add_app')

      .service('service_new_app', function() {
            var app_name = "";
            var app_nb_nodes = 0;
            var app_env = "";
            var app_nodes = new Array();

            function set_app_name(data) {
                app_name=data;
            };
            function set_app_nb_nodes(data) {
                app_nb_nodes=data;
            };
            function set_app_env(data) {
                app_env=data;
            };
            function set_app_nodes(data) {
                app_nodes=data;
            };

            function get_app_name() {
                return app_name;
            };
            function get_app_nb_nodes() {
                return app_nb_nodes;
            };
            function get_app_env() {
                return app_env;
            };
            function get_app_nodes() {
                return app_nodes;
            };
            function get_all_nodes(){
               var nodes_li = new Array();
                for (var i = 0; i < app_nb_nodes; i++) {
                  nodes_li.push({id:i, libelle:'default', ip:'0.0.0.0', saved:'0'});
                }
                return nodes_li;
            };

            function get_array_nb_nodes(){
              var array_useless = new Array();
                for(var i = 0; i < app_nb_nodes; i++) {
                  array_useless.push("x");
                }
              return array_useless;
            };

            return {
              set_app_name: set_app_name,
              set_app_nb_nodes: set_app_nb_nodes,
              set_app_env: set_app_env,
              set_app_nodes: set_app_nodes,
              get_app_name: get_app_name,
              get_app_nb_nodes: get_app_nb_nodes,
              get_app_env: get_app_env,
              get_app_nodes: get_app_nodes,
              get_array_nb_nodes: get_array_nb_nodes,
              get_all_nodes: get_all_nodes
            };
          })

      .controller('CtrlAdd', ['$scope', '$location', 'service_new_app', function($scope, $location, service_new_app) {

      $scope.init = function() {

        var xhr_object = null;

        $scope.ser = service_new_app;

        if(window.XMLHttpRequest){
           xhr_object = new XMLHttpRequest();
        }

        else if(window.ActiveXObject){
           xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else { // XMLHttpRequest non supporté par le navigateur
           alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
           return;
        }



        var filename = "get_env.php";
        var data     = null;
        var filename = "app/AJAX/"+filename;

        xhr_object.open("POST", filename, false);
        xhr_object.onreadystatechange = function() {

           if(xhr_object.readyState == 4) {
                  
                  var result = JSON.parse(xhr_object.responseText);
                  $scope.envs = [];
                  for (var i = 0; i < result.length; i++) {
                      $scope.envs.push(result[i]);
                  }
           }

        }
        xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr_object.send(data);


      }      

      $scope.nbNode_change = function(data) {
        service_new_app.set_app_nb_nodes(data);
        $scope.nodes = service_new_app.get_all_nodes();
        $scope.app_nbNode = service.get_app_nb_nodes();
      }

      $scope.appName_change = function(data) {
        service_new_app.set_app_name(data);
        $scope.app_name = data;
      }

      $scope.appEnv_change = function(data) {
        service_new_app.set_app_env(data);
        $scope.app_env = data;
      }

      $scope.goToNodes = function() {
        $location.path('/add_node');
      }

      $scope.saveNode = function(id, name, ip) {
        $scope.nodes[id].libelle=name;
        $scope.nodes[id].ip=ip;
        $scope.nodes[id].saved='1';

        console.log($scope.nodes);
      }


      $scope.save = function() {
        var xhr_object = null;
        if(window.XMLHttpRequest){
           xhr_object = new XMLHttpRequest();
        }
        else if(window.ActiveXObject){
           xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else { // XMLHttpRequest non supporté par le navigateur
           alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
           return;
        }

        var filename = "save_app.php";
        var data     = new Array();
        var filename = "app/AJAX/"+filename;
        var nodes_json = JSON.stringify($scope.nodes);
        data = "app_name="+service_new_app.get_app_name()+"&app_env="+service_new_app.get_app_env()+"&nodes="+nodes_json;

        xhr_object.open("POST", filename, false);
        xhr_object.onreadystatechange = function() {

           if(xhr_object.readyState == 4) {
                  
                  var result = JSON.parse(xhr_object.responseText);
           }

        }
        xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr_object.send(data);
        $location.path('/main');
      }




    }])

      .controller('CtrlAdd2',  ['$scope', '$location', 'service_new_app', function($scope, $location, service_new_app) {


      $scope.init = function(){
        $scope.app_name = service_new_app.get_app_name();
        $scope.app_env = service_new_app.get_app_env();
        $scope.app_nbNode = service_new_app.get_app_nb_nodes();
        var nodes_list = new Array();
        for (var i = 0; i < service_new_app.get_app_nb_nodes(); i++) {
          nodes_list.push({id:i, libelle:'default', ip:'0.0.0.0', saved:'0'});
        }
        $scope.nodes = nodes_list;
      }

      $scope.saveNode = function(id, name, ip) {
        $scope.nodes[id].libelle=name;
        $scope.nodes[id].ip=ip;
        $scope.nodes[id].saved='1';
      }

      $scope.save = function() {
        var xhr_object = null;
        if(window.XMLHttpRequest){
           xhr_object = new XMLHttpRequest();
        }
        else if(window.ActiveXObject){
           xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else { // XMLHttpRequest non supporté par le navigateur
           alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
           return;
        }

        var filename = "save_app.php";
        var data     = new Array();
        var filename = "app/AJAX/"+filename;
        var nodes_json = JSON.stringify($scope.nodes);
        data = "app_name="+service_new_app.get_app_name()+"&app_env="+service_new_app.get_app_env()+"&nodes="+nodes_json;

        xhr_object.open("POST", filename, false);
        xhr_object.onreadystatechange = function() {

           if(xhr_object.readyState == 4) {
                  
                  var result = JSON.parse(xhr_object.responseText);
           }

        }
        xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr_object.send(data);
        $location.path('/main');
      }



    }]);


})();

