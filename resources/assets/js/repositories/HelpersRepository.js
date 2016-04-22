var HelpersRepository = {

    /**
     *
     */
    scrollbars: function () {
        [].forEach.call(document.querySelectorAll('.scrollbar-container'), function (el) {
            Ps.initialize(el);
        });
    },

    /**
     *
     */
    closePopup: function ($event, that, routeToGoTo) {
        if ($($event.target).hasClass('popup-outer')) {
            that.showPopup = false;
            // router.go(routeToGoTo);
        }
    },

    /**
     * 
     * @param that
     */
    showContent: function (that) {
        setTimeout(function () {
            that.showContent = true;
        }, 500);
    }
};