var AccordionItem = Vue.component('accordion-item', {
    //template: '#accordion-item-template',
    data: function () {
        return {
            showText: false
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
         * Remove underlines and underline the appropriate heading
         * @param heading
         */
        setUnderlines: function (heading) {
            $('.expanded').removeClass('expanded');
            if (this.showText) {
                heading.addClass('expanded');
            }
        },

        /**
         *
         */
        listen: function () {
            var that = this;
            var heading = $(this.$el).find('h5');
            var accordion = $(this.$el).closest('.accordion');

            heading.on('click', function (e) {
                e.preventDefault();
                // Doing this here rather than on page load so that on page load
                // there isn't extra scrolling space at the bottom when all items are collapsed
                that.setAccordionHeight();
                var scrollTop = accordion.position().top - 50;
                console.log(scrollTop);
                setTimeout(function () {
                    $('.scrollbar-container').animate({scrollTop: scrollTop}, 700);

                }, 100);

                $.event.trigger('closeItems', [that]);
                that.showText = !that.showText;
                that.setUnderlines(heading);
            });
            
            $(document).on('closeItems', function (event, item) {
                if (that !== item) {
                    that.showText = false;
                }
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
