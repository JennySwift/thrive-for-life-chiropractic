(function () {

    angular
        .module('thriveForLife')
        .controller('MeetPeteController', meetPete);

    function meetPete ($scope) {
        $scope.changeTab = function ($tab, $event) {
            $scope.tab = $tab;
            $(".selected").removeClass('selected');
            $($event.target).addClass('selected');

        }

        $scope.hoverTab = function ($event) {
            $('.selected').addClass('hovering');
            $($event.target).addClass('hovered');
        };

        $scope.leaveTab = function ($event) {
            $('.hovered').removeClass('hovered');
            $('.hovering').removeClass('hovering');
        }
    }

})();