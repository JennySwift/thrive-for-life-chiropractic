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
        setAccordionHeight: function () {
            var height = $(window).height() - 50;
            $('.accordion').height(height);
        },

        /**
         *
         */
        listen: function () {
            var that = this;

            //To stop Firefox going to the user's previous scroll position on page refresh
            $(window).on('unload', function() {
                $('.scrollbar-container').scrollTop(0);
            });

            $('.accordion-heading').on("click",function(e){
                e.preventDefault();
                // Doing this here rather than on page load so that on page load
                // there isn't extra scrolling space at the bottom when all items are collapsed
                that.setAccordionHeight();
                var scrollTop = $('.accordion').position().top - 50;
                setTimeout(function () {
                    $('.scrollbar-container').animate({scrollTop: scrollTop}, 700);

                }, 100);

            });
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        this.listen();
    }
});
