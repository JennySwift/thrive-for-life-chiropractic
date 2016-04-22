var AboutPage = Vue.component('about-page', {
    template: '#about-page-template',
    data: function () {
        return {
            showContent: false
        };
    },
    components: {},
    methods: {

        /**
         *
         */
        listen: function () {
            var that = this;

            //To stop Firefox going to the user's previous scroll position on page refresh
            $(window).on('unload', function() {
                $('.scrollbar-container').scrollTop(0);
            });
        }
    },
    props: [
        'path'
    ],
    ready: function () {
        //this.listen();
        HelpersRepository.scrollbars();
        //This is because for some reason, on the iPhone,
        //unless the user clicks and drags the screen before using the accordion,
        //the accordion is really jerky
        setTimeout(function () {
            $(body).mousedown().mousemove().mouseup();
        }, 500);

        HelpersRepository.showContent(this);
    }
});
