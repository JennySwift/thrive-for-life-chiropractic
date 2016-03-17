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

        predictAccordionHeight: function () {
            var accordionTextWidth = $(this.$el).width();
            var clonedAccordion = this.accordion.clone()
                .css({color: 'red', background: 'pink'})
                .addClass('accordion-clone')
                .appendTo('body');

            var clonedAccordionTexts = clonedAccordion.find('.accordion-text');

            //This should give us the height of the accordion with all items collapsed
            clonedAccordionTexts.css({display: 'none'});

            if (this.aboutToShowText) {
                var indexOfItem = $(this.$el).index();

                //Add the accordion text with the expanded height to the item in the cloned accordion
                var clonedText = $(this.$el).find('.accordion-text').clone()
                    .css({height: 'auto', width: accordionTextWidth, display: 'block'})
                    .appendTo(clonedAccordion.find('.accordion-item').eq(indexOfItem));
            }

            var predictedAccordionHeight = clonedAccordion.height();
            clonedAccordion.remove();

            return predictedAccordionHeight;
        },

        /**
         *
         */
        isContentTallEnoughForScrolling: function () {
            if (this.aboutToShowText) {
                var predictedAccordionHeight = this.predictAccordionHeight();

                //var predictedPageHeight = $(document).height() - this.accordion.height() + predictedAccordionHeight;
                var predictedContentHeight = $(this.$el).closest('.scrollbar-content').height() - this.accordion.height() + predictedAccordionHeight;

                if (predictedContentHeight > $(this.$el).closest('.scrollbar-container').height()) {
                    return true;
                }
                else {
                    return false;
                }
            }
            else {
                //So that it scrolls to the top of the page if necessary, when all items are closed
                return true;
            }
        },

        /**
         *
         */
        scroll: function () {
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

                if (that.autoScroll && that.isContentTallEnoughForScrolling()) {
                    that.scroll();
                    //if ((that.maxWidthScreenForScrolling && $(window).width() <= that.maxWidthScreenForScrolling) || !that.maxWidthScreenForScrolling) {
                    //    that.scroll();
                    //}

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
