var Footer = Vue.component('footer-component', {
    template: '#footer-template',
    data: function () {
        return {

        };
    },
    components: {},
    methods: {

        /**
         *
         */
        showPrivacyPolicyPopup: function () {
            $.event.trigger('show-privacy-policy-popup');
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {

    }
});
