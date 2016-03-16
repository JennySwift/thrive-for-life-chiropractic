//Vue.transition('expand', {
//    css: false,
//    enter: function (el, done) {
//        //var that = this;
//        //var width = $(el).width();
//        //
//        //var clone = $(el).clone()
//        //    .css({height: 'auto', width: width, color: 'red'})
//        //    .appendTo($(el).closest('.text'));
//        //
//        //var height = clone.height();
//        //clone.remove();
//        //
//        //$(el).animate({
//        //    height: height
//        //}, 1000, done);
//        //$(el).slideDown(1000, done);
//    },
//    enterCancelled: function (el) {
//        $(el).stop()
//    },
//    leave: function (el, done) {
//        //$(el).animate({ height: 0 }, 1000, done)
//        //$(el).slideUp(1000, done);
//    },
//    leaveCancelled: function (el) {
//        $(el).stop()
//    },
//});

Vue.directive('slide', {
    bind: function () {
        // do preparation work
        // e.g. add event listeners or expensive stuff
        // that needs to be run only once
    },
    update: function (newValue, oldValue) {
        if (newValue) {
            $(this.el).slideDown();
        }
        else {
            $(this.el).slideUp();
        }

        // do something based on the updated value
        // this will also be called for the initial value
    },
    unbind: function () {
        // do clean up work
        // e.g. remove event listeners added in bind()
    }
});