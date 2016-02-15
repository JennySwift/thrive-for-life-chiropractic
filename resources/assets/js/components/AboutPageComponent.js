var AboutPage = Vue.component('about-page', {
    template: '#about-page-template',
    data: function () {
        return {

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
        //data to be received from parent
    ],
    ready: function () {
        this.listen();
        HelpersRepository.scrollbars();
    }
});
