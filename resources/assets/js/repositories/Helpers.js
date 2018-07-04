// require('sugar');
import requests from './Requests'
import arrays from './Arrays'
import routes from './Routes'

export default {

    //Request methods
    requests: requests,
    get: requests.get,
    post: requests.post,
    put: requests.put,
    delete: requests.delete,

    //Array methods
    findById: arrays.findById,
    findIndexById: arrays.findIndexById,
    deleteById: arrays.deleteById,
    deleteFromArray: arrays.deleteFromArray,
    updateItemInArray: arrays.updateItemInArray,

    //Route methods
    getIdFromRouteParams: routes.getIdFromRouteParams,
    goToRoute: routes.goToRoute,
    getRouteName: routes.getRouteName,
    getCurrentPath: routes.getCurrentPath,
    isHomePage: routes.isHomePage,
    getRouteHistory: routes.getRouteHistory,

    convertBooleanToInteger: function (boolean) {
        if (boolean) {
            return 1;
        }
        return 0;
    },

    getScreenWidth: function () {
        return screen.width;
    },

    convertIntegerToBoolean: function (boolean) {
        if (boolean) {
            return true;
        }
        return false;
    },

    hidePopup: function () {
        // app.f7.popup.close();
    },

    toast: function (message, type) {
        // var toast = app.f7.toast.create({
        //     text: message,
        //     position: 'top',
        //     closeTimeout: 1500,
        //     cssClass: 'color-theme-green'
        //     // icon: '<i class="f7-icons">check_round_fill</i>'
        // }).open();
    },

    notify: function (error) {
        // console.log(error);
        // store.hideLoading();
        // var message = error.response.data.error;
        // var notification = app.f7.notification.create({
        //     icon: '<i class="fas fa-exclamation"></i>',
        //     title: 'Error',
        //     subtitle: message,
        //     text: 'Click me to close',
        //     closeOnClick: true,
        // }).open();
    },

    /**
     *
     * @param object
     */
    clone: function (object) {
        return JSON.parse(JSON.stringify(object));
    },

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
    //     var maxHeight = container.css('max-height');
    //     if (!height && !maxHeight) {
    //         container.height('100%');
    //     }
    //     if (container.css('position') == 'static') {
    //         container.css({position: 'relative'});
    //     }
    //     container.mCustomScrollbar({
}