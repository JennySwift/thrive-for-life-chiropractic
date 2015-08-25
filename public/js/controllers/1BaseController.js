var app = angular.module('thriveForLife', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

(function () {

    angular
        .module('thriveForLife')
        .controller('BaseController', base);

    function base ($scope, $http) {

        $scope.me = test;

        $scope.tab = 'about';
        $scope.about_tab = 1;

        $scope.changeTab = function ($tab) {
            $scope.tab = $tab;
        };

    }

})();