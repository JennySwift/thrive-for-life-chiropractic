var WelcomePage = Vue.component('welcome-page', {
    template: '#welcome-page-template',
    data: function () {
        return {
            showContent: false
        };
    },
    components: {},
    route: {
        data: function (transition) {


        }
    },
    methods: {
        /**
         *
         */
        setScrollbarContainerHeight: function () {
             var height = $(this.$el).find('.text-container').height();
            if ($(window).width() < 1000) {
                // height = 'auto';
                $(this.$el).find('.scrollbar-container').css({'max-height': height});
            }
            else {
                $(this.$el).find('.scrollbar-container').css({'max-height': 555 + 'px'});
            }
            console.log(height);
        },

        /**
         *
         */
        listen: function () {
            var that = this;
            $(window).resize(function () {
                that.setScrollbarContainerHeight();
            })
        }
    },
    props: [
        'path'
    ],
    ready: function () {
        HelpersRepository.scrollbars();
        // HelpersRepository.psScrollbars();
        HelpersRepository.showContent(this);

        var that = this;
        setTimeout(function () {
            that.setScrollbarContainerHeight();
        }, 500);

        this.listen();
    }
});
