app.controller('movil', function($scope, $mdSidenav) {
  $scope.openMenu = function() {
    $mdSidenav('left').toggle();
  };
});

app.controller("scrollCTL", function ($scope,$location, $mdSidenav) {
    $scope.openMenu = function() {
      $mdSidenav('left').toggle();
    };
    $scope.$watch(function () {
      return location.hash
    }, function (value) {
      var id = value.replace('#/','')
      $scope.scrollTo(id);
    });
    $scope.scrollTo = function(target){
        setTimeout(
            function(){
                $('html, body').animate({
                    scrollTop: $('#' + target).offset().top -70
                }, 600);
            },
            300           
        );
    };
});
