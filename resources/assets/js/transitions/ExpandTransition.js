Vue.transition('expand', {
    css: false,
    enter: function (el, done) {
        var that = this;

        var clone = $(el).clone()
            .css({height: 'auto'})
            .appendTo($(el).closest('.text'));

        var height = clone.height();
        clone.remove();

        $(el).animate({
            height: height
        }, 1000, done);
    },
    enterCancelled: function (el) {
        $(el).stop()
    },
    leave: function (el, done) {
        $(el).animate({ height: 0 }, 1000, done)
    },
    leaveCancelled: function (el) {
        $(el).stop()
    },
});