'use strict';

angular.module('Client',['ngResource','ngRoute'])
 .config(function($routeProvider){
   $routeProvider.
   when('/notes',{
      templateUrl:'templates/index.html',
      controller:'IndexNoteCtrl'
   }).
    when('/notes/new',{
      templateUrl:'templates/create.html',
      controller:'CreateNoteCtrl'
   }).
   otherwise({
   	  redirectTo:'/'
   });
});