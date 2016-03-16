var AccordionItem = Vue.component('accordion-item', {
    //template: '#accordion-item-template',
    data: function () {
        return {
            showText: false,
            aboutToShowText: false,
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
        addAndRemoveExpandedClasses: function (heading) {
            $('.expanded').removeClass('expanded');
            if (this.aboutToShowText) {
                heading.addClass('expanded');
            }
        },

        /**
         *
         */
        scroll: function () {
            // Doing this here rather than on page load so that on page load
            // there isn't extra scrolling space at the bottom when all items are collapsed
            //this.setAccordionHeight();

            if (!this.scrollTop) {
                this.scrollTop = 13;
            }
            var scrollTop = this.accordion.position().top - this.scrollTop;

            //If all items are collapsed, scroll to the top of the page
            if (this.accordion.find('.expanded').length == 0) {
                scrollTop = 0;
            }

            var currentScrollPosition = $('.scrollbar-container').position().top;
            console.log(currentScrollPosition, scrollTop);
            $('.scrollbar-container').animate({scrollTop: scrollTop}, 400);
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

                that.aboutToShowText = !that.showText;
                that.addAndRemoveExpandedClasses(heading);

                if (that.autoScroll) {
                    that.scroll();
                }

                setTimeout(function () {
                    $.event.trigger('closeItems', [that]);
                    that.showText = !that.showText;
                }, 300);
            });
            
            $(document).on('closeItems', function (event, item) {
                if (that !== item) {
                    that.showText = false;
                }
            });
        }
    },
    props: [
        'autoScroll',
        'scrollTop'
    ],
    ready: function () {
        this.listen();
    }
});
