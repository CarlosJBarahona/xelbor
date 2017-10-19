app.controller('galeriaCTL', function($scope, $mdSidenav) {
  
  $scope.style_1 = function() { 
  	$('.style1').css({'display' : 'inherit',});
  	$('.style2').css({'display' : 'none',});
  	$('.style3').css({'display' : 'none',});
  }

  $scope.style_2 = function() { 
  	$('.style1').css({'display' : 'none',});
  	$('.style2').css({'display' : 'inherit',});
  	$('.style3').css({'display' : 'none',});
  }

  $scope.style_3 = function() { 
  	$('.style1').css({'display' : 'none',});
  	$('.style2').css({'display' : 'none',});
  	$('.style3').css({'display' : 'inherit',});
  }

});