(function () {
  'use strict';

  angular.module('BlurAdmin.pages.connexion')


    .controller('CtrlConnexion',  ['$scope', '$location', '$cookies', '$timeout', function($scope, $location, $cookies, $timeout) {

      $scope.init = function(){
        $scope.perm = $cookies.get('perm');
        if ($scope.perm) {$location.path('/main')}
      }

      $scope.init2 = function(){
        $scope.perm = $cookies.get('perm');
        if (!$scope.perm) {$location.path('/main')};

        $cookies.remove('perm');
          if ($scope.perm) {
          $timeout(function() {
            window.location.reload();
          }, 3000);
        }
      }

      $scope.connexion = function(name, pass){
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
        var filename = "connexion.php";
        var data     = null;
        var filename = "app/AJAX/"+filename;
        data = "name="+name+"&password="+pass;

        xhr_object.open("POST", filename, false);
        xhr_object.onreadystatechange = function() {

           if(xhr_object.readyState == 4) {
                  var result = xhr_object.responseText;
                  if(result=='true'){
                    $cookies.put('perm', 'admin');
                  }
                  else{
                    $scope.erreur = "Mot de passe ou utilisateur non valide."
                  }
           }

        }
        xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr_object.send(data);
        window.location.reload();
      }
    }]);
})();
