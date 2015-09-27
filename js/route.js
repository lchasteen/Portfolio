// route.js
(function(){
    // create the module and name it scotchApp
    // also include ngRoute for all our routing needs
    var scotchApp = angular.module('scotchApp', ['ui.bootstrap','ngRoute']);

    // configure our routes
    scotchApp.config(["$routeProvider", "$locationProvider", function($routeProvider, $locationProvider) {
		//$locationProvider.html5Mode(true);
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : './pages/home.html'
                
            })
			
			// route for the portfolio page
            .when('/resume', {
                templateUrl : './pages/resume.html'
                
            })

            // route for the portfolio page
            .when('/portfolio', {
                templateUrl : './pages/portfolio.html'                
            })
			
			 // route for the portfolio page
            .when('/portfolio/:params', {
                templateUrl : './pages/portfolio.php',
				controller: 'portfolioController'
                
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : './pages/contact.html'
			//})
			
			//.otherwise({
			//	redirectTo: '/home'
                
			});
			
			// use the HTML5 History API
			$locationProvider.html5Mode(true);
    }]);
	
	//var app = angular.module('myApp', []);
	scotchApp.controller('homeController', function($scope, $http) {
		$http.get("./data/home-data.php")
		.success(function(response) {$scope.names = response.records;});
	});

    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function($scope) {
			
    });
	
	// create the controller and inject Angular's $scope
    scotchApp.controller('portfolioController', function($scope) {
			
    });
	
	/*scotchApp.controller('ModalDemoCtrl', function ($scope, $modal, $log) {

		$scope.items = ['item1', 'item2', 'item3'];

		$scope.animationsEnabled = true;

	  $scope.open = function (size) {

			var modalInstance = $modal.open({
			  animation: $scope.animationsEnabled,
			  templateUrl: 'myModalContent.html',
			  controller: 'ModalInstanceCtrl',
			  size: size,
			  resolve: {
				items: function () {
				  return $scope.items;
				}
			  }
			});
	
	scotchApp.controller('contactController', function($scope) {
		$scope.master = {firstName: "John", lastName: "Doe"};
		$scope.reset = function() {
			$scope.user = angular.copy($scope.master);
		};
    $scope.reset();
});*/
	
})();	