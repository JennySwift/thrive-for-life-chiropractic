var ServicesTabs = Vue.component('services-tabs', {
    template: '#services-tabs-template',
    data: function () {
        return {

        };
    },
    components: {},
    computed: {
        'path': function () {
            return this.$route.path;
        }
    },
    methods: {

        /**
         *
         * @param response
         */
        handleResponseError: function (response) {
            this.$broadcast('response-error', response);
            this.showLoading = false;
        }
    },
    props: [
        'path',
        'showServicesTabs'
    ],
    ready: function () {
        
    }
});
