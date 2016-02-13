Vue.transition('contact-details', {
    css: false,
    enter: function (el, done) {
        var that = this;

        //Animate the box that will not be visible
        var clone = $(el).clone()
            .css({height: 'auto', width: 'auto'})
            .appendTo($(el).closest('.text'));

        var height = clone.height();
        var width = clone.width();
        console.log(height, width);
        clone.remove();

        //$('#contact .text').animate({
        //    padding: '40px',
        //    width: 'auto'
        //}, 1000);
        //$('#contact .text').addClass('expanded').removeClass('collapsed');
        //$(el).addClass('expanded').removeClass('collapsed');

        $(el).animate({
            height: height,
            width: width
        }, 1000, done);

        //this._data.boxWidth = width;
        //this._data.boxHeight = height;
    },
    enterCancelled: function (el) {
        $(el).stop()
    },
    leave: function (el, done) {
        //var height = $('#contact .details').height();

        //$('#contact .text').animate({
        //    padding: '6px',
        //    width: '105px'
        //}, 1000);
        //$('#contact .text').addClass('collapsed').removeClass('expanded');
        //$(el).addClass('collapsed').removeClass('expanded');

        //this._data.boxWidth = 0;
        //this._data.boxHeight = 0;

        $(el).animate({
            height: 0,
            width: 0,
            //'font-size': '1px'
        }, 1000, done)
    },
    leaveCancelled: function (el) {
        $(el).stop()
    },
});