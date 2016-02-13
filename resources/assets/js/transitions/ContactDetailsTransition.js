Vue.transition('contact-details', {
    css: false,
    enter: function (el, done) {
        var that = this;

        var clone = $(el).clone()
            .css({height: 'auto', width: 'auto'})
            .appendTo($(el).closest('.text'));

        var height = clone.height();
        var width = clone.width();
        clone.remove();

        $(el).animate({
            height: height,
            width: width
        }, 1000, done);
    },
    enterCancelled: function (el) {
        $(el).stop()
    },
    leave: function (el, done) {
        $(el).animate({
            height: 0,
            width: 0,
        }, 1000, done)
    },
    leaveCancelled: function (el) {
        $(el).stop()
    },
});