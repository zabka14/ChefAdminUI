(function () {
  'use strict';

  angular.module('BlurAdmin.pages.test')
    .controller('CtrlTest', ['$scope', function($scope) {
      
      $scope.call = function() {
        alert("coucou");
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
        data = "FooBar";

        xhr_object.open("POST", filename, false);
        xhr_object.onreadystatechange = function() {

           if(xhr_object.readyState == 4) {
                  var test = JSON.parse(xhr_object.responseText);
                  alert(test);

           }

        }
        xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr_object.send(data);
      }


    }]);


})();
