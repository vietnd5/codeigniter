'use strict';

angular.module('test')

.controller("HomeController", ["$scope",
    function ($scope) {
    $scope.title = "Thống kê";
    $scope.loadDone = false;
    $scope.datas = [];
    $scope.type = 1;
    $scope.editUser = {};

    $scope.formatNumber = function(num) {
        return untilServ.formatNumber(num);
    }

    $scope.create = function(){
        $scope.type = 2;
    }
    $scope.back = function(){
        $scope.type = 1;
    }

    $scope.save = function(user){
        console.log(user);
        // $http.post("link", user);
        // .success(function(datas){
        
        // })
        // .error(function(error){
        // });
        $scope.datas.push(user);
        $scope.type = 1;

    }
    $scope.edit = function(user){
        $scope.editUser = angular.copy(user);
        $scope.type = 3;
    }
    $scope.editFn = function(user){
        console.log(user);

    }
    function loadStartData() {
        // $http.post("link")
        // .success(function(datas){
        //     $scope.datas = datas;
        //     $scope.loadDone = true;
        // })
        // .error(function(error){
        // });
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.datas.push({name: "A", phone:"12312312321", avatar: "link"});
        $scope.loadDone = true;
        console.log($scope.datas);
    };
    loadStartData();
}]);