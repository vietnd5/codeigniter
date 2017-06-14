angular.module('test.dataServ', [])

.factory("dataServ", ["$http", function ($http, API) {
    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    };
    var service = {};
    service.getListUser = function (callback) {
        $http.post("link", {}, config)
        .success(function(datas){
            callback(datas);
        })
        .error(function(error){
            callback(null);
        });
    }
    return service;
}]);