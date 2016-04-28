var Popup = Vue.component('popup', {
    template: '#popup-template',
    data: function () {
        return {
            //showPopup: false,
            //selected: {}
        };
    },
    components: {},
    methods: {
        /**
         *
         */
        closePopup: function ($event) {
            HelpersRepository.closePopup($event, this, this.redirectTo);
        },

        setContentHeight: function () {
            var popupInnerHeight = $(this.$el).find('.popup-inner').css('max-height');
            popupOuterHeight = $(this.$el).css('height');
            console.log(popupOuterHeight);
            popupInnerHeight = popupInnerHeight.replace(' + 100%', '').replace('-', '').replace('px', '').replace('calc(', '').replace(')', '');
            popupInnerHeight = parseInt(popupOuterHeight, 10) - parseInt(popupInnerHeight, 10);
            $(this.$el).find('.content').css({'max-height': popupInnerHeight-160 + 'px'});
        }

    },
    props: [
        'showPopup',
        'id',
        'redirectTo'
    ],
    ready: function () {
        HelpersRepository.scrollbars();
        this.setContentHeight();
    }
});
