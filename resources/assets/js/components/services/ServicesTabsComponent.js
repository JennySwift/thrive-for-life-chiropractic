var ServicesTabs = Vue.component('services-tabs', {
    template: '#services-tabs-template',
    data: function () {
        return {
            showTabs: false
        };
    },
    components: {},
    methods: {

        /**
         *
         */
        listen: function () {
            var that = this;
            $(document).on('toggle-services-tabs', function (event) {
                that.showTabs = !that.showTabs;
            });
        },

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
        'path'
    ],
    ready: function () {
        this.listen();
    }
});
