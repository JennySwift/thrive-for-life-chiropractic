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

    },
    props: [
        'showPopup',
        'id',
        'redirectTo'
    ],
    ready: function () {
        HelpersRepository.scrollbars();
    }
});
