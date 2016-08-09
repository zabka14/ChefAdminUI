/**
 * @author a.demeshko
 * created on 18.01.2016
 */
(function () {
  'use strict';

  angular.module('BlurAdmin.pages.app_list')
  
    .service('service_app', function() {
            var app_id = "";
            var config_id = "";
            var node_id = "";

            function set_app_id(data) {
                app_id=data;
            };

            function get_app_id(){
                return app_id;
            }
            function set_config_id(data) {
                config_id = data;
            };

            function get_config_id(){
                return config_id;
            }

            function set_node_id(data) {
                node_id = data;
            };

            function get_node_id(){
                return node_id;
            }
           

            return {
              set_app_id: set_app_id,
              get_app_id: get_app_id,
              set_config_id: set_config_id,
              get_config_id: get_config_id,
              set_node_id: set_node_id,
              get_node_id: get_node_id
            };
          })


    .controller('CtrlAppList', ['$scope', '$location', '$cookies', 'toastr', 'service_app', function($scope, $location, $cookies, toastr, service_app) {

      $scope.app_sup_id = 0;
      $scope.perm = $cookies.get('perm');
      $scope.init = function() {
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

      $scope.getAppByEnvID = function(id){
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
        var filename = "get_app_by_env.php";
        var data     = null;
        var filename = "app/AJAX/"+filename;
        data = "env_id="+id;

        xhr_object.open("POST", filename, false);
        xhr_object.onreadystatechange = function() {

           if(xhr_object.readyState == 4) {
                  
                  var res = xhr_object.responseText.split("#EOD#");
                  var result_app = JSON.parse(res[0]);
                  var result_nodes = JSON.parse(res[1]);
                  $scope.apps = [];
                  var tempApp = [];
                  for (var i = 0; i < result_app.length; i++) {

                      result_app[i]['nodes'] = new Array();
                      for (var y = result_nodes.length - 1; y >= 0; y--) {
                          if (result_nodes[y].application == result_app[i].id_app) {
                            result_app[i]['nodes'].push(result_nodes[y]);
                          }
                      }
                      tempApp.push(result_app[i]);
                      $scope.apps.push(result_app[i]);
                  }
           }

        }
        xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr_object.send(data);


      }

      $scope.supprimer = function(app_id) {
        service_app.set_app_id(app_id);
        $location.path('/del_app');
      }

      $scope.configurer = function(app_id) {
        service_app.set_config_id(app_id);
        $location.path('/conf');
      }

    }])

    .controller('CtrlAppSup', ['$scope', '$location', 'toastr', 'service_app', function($scope, $location, toastr, service_app) {

        $scope.init = function() {
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
          var filename = "get_app.php";
          var data     = null;
          var filename = "app/AJAX/"+filename;
          data = "app_id="+service_app.get_app_id();

          xhr_object.open("POST", filename, false);
          xhr_object.onreadystatechange = function() {

             if(xhr_object.readyState == 4) {
                  var res = xhr_object.responseText.split("#EOD#");
                  var result_app = JSON.parse(res[0]);
                  var result_nodes = JSON.parse(res[1]);

                  $scope.app = result_app[0];
                  $scope.nodes = result_nodes;

             }

          }
          xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr_object.send(data);
        }


        $scope.supprimer = function(app_id) {
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
        var filename = "supp_app.php";
        var data     = null;
        var filename = "app/AJAX/"+filename;
        data = "app_id="+app_id;

        xhr_object.open("POST", filename, false);
        xhr_object.onreadystatechange = function() {

           if(xhr_object.readyState == 4) {
                  
           }

        }
        xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr_object.send(data);

        toastr.error('L\'application a bien ete supprime', 'Suppression', {
          "autoDismiss": false,
          "positionClass": "toast-top-right",
          "type": "error",
          "timeOut": "5000",
          "extendedTimeOut": "2000",
          "allowHtml": false,
          "closeButton": false,
          "tapToDismiss": true,
          "progressBar": true,
          "newestOnTop": true,
          "maxOpened": 0,
          "preventDuplicates": false,
          "preventOpenDuplicates": false
        });
        $location.path('/main');


      }

      }])

      .controller('CtrlCfgApp', ['$scope', '$location', 'toastr', 'service_app', function($scope, $location, toastr, service_app) {

        $scope.init = function() {
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
          var filename = "get_app.php";
          var data     = null;
          var filename = "app/AJAX/"+filename;
          data = "app_id="+service_app.get_config_id();

          xhr_object.open("POST", filename, false);
          xhr_object.onreadystatechange = function() {

             if(xhr_object.readyState == 4) {
                  var res = xhr_object.responseText.split("#EOD#");
                  var result_app = JSON.parse(res[0]);
                  var result_nodes = JSON.parse(res[1]);

                  $scope.app = result_app[0];
                  $scope.nodes = result_nodes;

             }

          }
          xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr_object.send(data);
        }

        $scope.save_param = function (name, value) {


          // Appel AJAX utilisation de $scope.node_id pour sauver le param sur la bonne node
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
          var filename = "add_param.php";
          var data     = null;
          var filename = "app/AJAX/"+filename;
          data = "node_id="+service_app.get_node_id()+"&param_name="+name+"&param_value="+value;

          xhr_object.open("POST", filename, false);
          xhr_object.onreadystatechange = function() {

             if(xhr_object.readyState == 4) {

             }

          }
          xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr_object.send(data);
          //

          //redirection sur /conf, il faut re-préciser l'application, on récupère son ID dans le service_app
          $location.path('/conf');
        }

        $scope.getNodeParam = function() {
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
          var filename = "get_params.php";
          var data     = null;
          var filename = "app/AJAX/"+filename;
          data = "node_id="+$scope.node_select;

          xhr_object.open("POST", filename, false);
          xhr_object.onreadystatechange = function() {

             if(xhr_object.readyState == 4) {
                  $scope.params = {};
                  var res = xhr_object.responseText;
                  var result_param = JSON.parse(res);
                  $scope.params = result_param;

             }

          }
          xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr_object.send(data);
        }

        $scope.add_param = function() {
          service_app.set_node_id($scope.node_select);
          service_app.set_app_id($scope.app.id_app);
          $location.path('/add_param');
        }

        $scope.confirm_param = function(node_id) {
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
          var filename = "save_params.php";
          var data     = null;
          var filename = "app/AJAX/"+filename;
          data = "node_id="+node_id+"&params="+JSON.stringify($scope.params);

          xhr_object.open("POST", filename, false);
          xhr_object.onreadystatechange = function() {

             if(xhr_object.readyState == 4) {


             }

          }
          xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr_object.send(data);
        }                

        $scope.deployer = function() {
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
          var filename = "deploy_app.php";
          var data     = null;
          var filename = "app/AJAX/"+filename;
          data = "node_id="+$scope.node_select;

          xhr_object.open("POST", filename, true);
          xhr_object.onreadystatechange = function() {

             if(xhr_object.readyState == 4) {

             }

          }
          xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr_object.send(data);
        }

    }])

})();
