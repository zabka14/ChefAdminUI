(function () {
  'use strict';

  angular.module('BlurAdmin.pages.main')


    .controller('CtrlMain', ['$scope','$cookies', function($scope,$cookies) {
      
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

      $scope.getAppByEnvID = function(){
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
        data = "env_id="+$scope.envSelect;

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

    }]);


})();
