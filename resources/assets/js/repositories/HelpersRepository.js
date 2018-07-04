

export default {
    /**
     *
     */
    psScrollbars: function () {
        [].forEach.call(document.querySelectorAll('.ps-scrollbar-container'), function (el) {
            Ps.initialize(el);
        });
    },

    /**
     * Todo: broke after upgrade
     */
    scrollbars: function () {
        // var containers = $('.scrollbar-container');
        // $(containers).each(function () {
        //     var container = $(this);
        //     var height = container.css('height');
        //     var maxHeight = container.css('max-height');
        //     if (!height && !maxHeight) {
        //         container.height('100%');
        //     }
        //     if (container.css('position') == 'static') {
        //         container.css({position: 'relative'});
        //     }
        //     container.mCustomScrollbar({
        //         theme: 'minimal-dark'
        //     });
        // });
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
     * @param time
     */
    showContent: function (that, time) {
        time = time || 0;
        setTimeout(function () {
            that.showContent = true;
        }, time);
    }
}