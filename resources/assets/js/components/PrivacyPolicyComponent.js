var PrivacyPolicy = Vue.component('privacy-policy', {
    template: '#privacy-policy-template',
    data: function () {
        return {
            showPopup: false,
            showTest: false
        };
    },
    components: {},
    methods: {

        /**
         *
         */
        listen: function () {
            var that = this;
            $(document).on('show-privacy-policy-popup', function (event) {
                that.showPopup = true;
            });
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        this.listen();
        // $('.scrollbar-container').mCustomScrollbar({
        //     // theme: 'minimal-dark'
        // });
        // $('#privacy-policy-popup .scrollbar-container').mCustomScrollbar('scrollTo', 'top');
        //HelpersRepository.scrollbars();
    }
});
