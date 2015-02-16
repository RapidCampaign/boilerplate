'use strict';

/**
 * @ngdoc function
 * @name frontendApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the frontendApp
 */
angular.module('frontendApp')
  .controller('MainCtrl', function ($scope, Restangular) {
    Restangular.all('test').getList().then(function(data){
      $scope.testData = data;
    });
  });
