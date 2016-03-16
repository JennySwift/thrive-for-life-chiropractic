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
        generateCloneElement: function () {
            //var width = $(this.$el).width();

            //var accordionClone = this.accordion.clone();
            //accordionClone.find('accordion-text').css({display: 'none'});
            //var accordionTextClone = $(this.$el).find('.accordion-text').clone()
            //    .css({height: 'auto', width: width, display: 'block'});
            //accordionTextClone.appendTo(accordionClone);
            //
            //var height = accordionClone.height();

            //var clone = $(this.$el).find('.accordion-text').clone()
            //    .css({height: 'auto', width: width, display: 'block'})
            //    .appendTo(this.accordion);

            //var height = this.accordion.height();
            console.log(height);
            //accordionClone.remove();
            //accordionTextClone.remove();
            //clone.remove();
        },

        /**
         *
         */
        calculateIfWindowIsTooShortForScrolling: function () {
            if (this.aboutToShowText) {
                this.generateCloneElement();
            }
        },

        /**
         *
         */
        scroll: function () {
            //this.calculateIfWindowIsTooShortForScrolling();
            // Doing this here rather than on page load so that on page load
            // there isn't extra scrolling space at the bottom when all items are collapsed
            //this.setAccordionHeight();
            this.accordion.height(5000);

            if (!this.scrollTop) {
                this.scrollTop = 13;
            }
            var scrollTop = this.accordion.position().top - this.scrollTop;

            //If all items are collapsed, scroll to the top of the page
            if (this.accordion.find('.expanded').length == 0) {
                scrollTop = 0;
            }

            $('.scrollbar-container').animate({scrollTop: scrollTop}, 400);
            var that = this;
            setTimeout(function () {
                that.accordion.css({height: 'auto'});
            }, 2000);
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
                    if ((that.maxWidthScreenForScrolling && $(window).width() <= that.maxWidthScreenForScrolling) || !that.maxWidthScreenForScrolling) {
                        that.scroll();
                    }

                }

                setTimeout(function () {
                    $.event.trigger('closeItems', [that]);
                    that.showText = !that.showText;
                }, 700);

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
        'scrollTop',
        'maxWidthScreenForScrolling'
    ],
    ready: function () {
        this.listen();
    }
});
