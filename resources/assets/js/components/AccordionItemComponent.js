var AccordionItem = Vue.component('accordion-item', {
    //template: '#accordion-item-template',
    data: function () {
        return {
            showText: false,
            accordion: ''
        };
    },
    components: {},
    methods: {

        /**
         *
         */
        setAccordionHeight: function () {
            var height = $(window).height() - 50;
            this.accordion.height(height);
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
        scroll: function () {
            // Doing this here rather than on page load so that on page load
            // there isn't extra scrolling space at the bottom when all items are collapsed
            this.setAccordionHeight();
            var scrollTop = this.accordion.position().top - 13;

            //If all items are collapsed, scroll to the top of the page
            if (this.accordion.find('.expanded').length == 0) {
                scrollTop = 0;
            }

            setTimeout(function () {
                $('.scrollbar-container').animate({scrollTop: scrollTop}, 700);

            }, 100);
        },

        /**
         *
         */
        listen: function () {
            var that = this;
            var heading = $(this.$el).find('h5');
            this.accordion = $(this.$el).closest('.accordion');

            heading.on('click', function (e) {
                e.preventDefault();

                $.event.trigger('closeItems', [that]);

                that.showText = !that.showText;
                that.setUnderlines(heading);

                if (that.autoScroll) {
                    that.scroll();
                }
            });
            
            $(document).on('closeItems', function (event, item) {
                if (that !== item) {
                    that.showText = false;
                }
            });
        }
    },
    props: [
        'autoScroll'
    ],
    ready: function () {
        this.listen();
    }
});
