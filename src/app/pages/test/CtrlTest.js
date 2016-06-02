(function () {
  'use strict';

  angular.module('BlurAdmin.pages.test')

      .service('serviceTest', function() {
        var myVar = {};

        function set(data) {
            myVar=data;
        };

        function get(){
            return myVar;
        };

        return {
          set: set,
          get: get
        };
      })


    .controller('CtrlTest',  ['$scope', '$location', 'serviceTest', function($scope, $location, serviceTest) {
      
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

        var filename = "test.php";
        var data     = null;
        var filename = "app/AJAX/"+filename;
        data = "node=1&deploy=true";

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

      $scope.switch = function(param){
        serviceTest.set(param);
        $location.path('/test2');
      }


    }])

    .controller('CtrlTest2',  ['$scope', 'serviceTest', function($scope, serviceTest) {

      $scope.init = function(){
        alert(serviceTest.get());
        var tmp = serviceTest.get();
        $scope.var = tmp.value1;
      }

    }]);


})();
