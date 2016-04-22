var Footer = Vue.component('footer-component', {
    template: '#footer-template',
    data: function () {
        return {

        };
    },
    components: {},
    computed: {
        path: function () {
          return this.$route.path;
        }
    },
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
