'use strict';
// Declare app level module which depends on views, and components
var app = angular.module('test', [
  'ui.router',
])

.config(["$stateProvider", "$urlRouterProvider", "$sceProvider", "$httpProvider", "$compileProvider", "$locationProvider", function($stateProvider, $urlRouterProvider, $sceProvider, $httpProvider, $compileProvider, $locationProvider) {
     
    $urlRouterProvider.otherwise("/home");
    
    $stateProvider
    .state('home', {
        url: '/home',
        views: {
            "main-content": {
                templateUrl: 'views/home/main.html',
                controller: 'HomeController'
            }
        }
    })
}])

.run(["$rootScope", "$state", "$timeout", "$stateParams", "$window",
    function($rootScope, $state, $timeout, $stateParams, $window) {        
        $('body').removeClass('hidden');
}]);
