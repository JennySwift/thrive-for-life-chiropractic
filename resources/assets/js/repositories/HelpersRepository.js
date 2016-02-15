var HelpersRepository = {

    /**
     *
     */
    scrollbars: function () {
        [].forEach.call(document.querySelectorAll('.scrollbar-container'), function (el) {
            Ps.initialize(el);
        });
    }
};