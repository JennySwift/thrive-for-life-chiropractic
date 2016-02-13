var ContactPage = Vue.component('contact-page', {
    template: '#contact-page-template',
    data: function () {
        return {
            showContactDetails: true,
            boxHeight: 'auto',
            boxWidth: 'auto'
        };
    },
    components: {},
    //watch: {
    //    'showContactDetails': function (val) {
    //        if (!val) {
    //            this.boxHeight = 0;
    //            this.boxWidth = 0;
    //        }
    //    }
    //},
    methods: {

        /**
         * For the transition, because transitioning to auto height doesn't work
         */
        setDetailsDimensions: function () {
            this.boxHeight = $('#contact .text').height();
            this.boxWidth = $('#contact .text').width();
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        this.setDetailsDimensions();
    }
});
