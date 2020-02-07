var AG5app = angular.module('agv5', ["ui.router"]);

AG5app.config(function($stateProvider, $urlRouterProvider){
	$urlRouterProvider.when('', '/');
	$urlRouterProvider.otherwise("/");
	$stateProvider
		.state('home', {
    		url: "/",
			templateUrl: "partials/home.html"
    	})
		.state('work', {
    		url: "/work",
    		templateUrl: "partials/work.html"
    	})
    	.state('about', {
			url: "/about",
    		templateUrl: "partials/about.html"
    	})
		.state('credit', {
			url: "/credit",
			templateUrl: "partials/credits.html"
    	});
});

AG5app.controller('ScrollController', ['$scope', '$location', '$anchorScroll',
  function ($scope, $location, $anchorScroll) {
    $scope.gotoEarliest = function() {
      $location.hash('earliestWork');
	  $anchorScroll();
    };
	$scope.gotoLatest = function() {
      $location.hash('latestProject');
	  $anchorScroll();
    };
	$scope.gotoAbout = function() {
      $location.hash('aboutMe');
	  $anchorScroll();
    };
	$scope.gotoContact = function() {
      $location.hash('contactMe');
	  $anchorScroll();
    };
  }]);

function windowReset(){
		window.scrollTo(0,0);
	}