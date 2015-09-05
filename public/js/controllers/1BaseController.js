var app = angular.module('thriveForLife', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

(function () {

    angular
        .module('thriveForLife')
        .controller('BaseController', base);

    function base ($scope, $http) {

        $scope.me = me;

        $scope.tab = 'home';
        $scope.about_tab = 1;

        $scope.changeTab = function ($tab) {
            $scope.tab = $tab;
        };

    }

})();