var app = angular.module('thriveForLife', ['ngAnimate'], function ($interpolateProvider) {
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

        $("#logo-upper").textillate({
            //loop: true,
            autostart: true,
            //initialDelay: 10,
            in: { effect: 'fadeIn' }
        }).on('end.tlt', function () {
            $("#logo-lower").addClass('rubberBand').css('visibility', 'visible');
        });

        $("#logo-lower").lettering();

        //$("#logo-lower").textillate({
        //    //loop: true,
        //    autostart: true,
        //    //initialDelay: 1000,
        //    in: { effect: 'slideIn' }
        //});

    }

})();