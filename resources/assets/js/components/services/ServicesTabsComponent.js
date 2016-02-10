var ServicesTabs = Vue.component('services-tabs', {
    template: '#services-tabs-template',
    data: function () {
        return {

        };
    },
    components: {},
    methods: {

        ///**
        // *
        // */
        //listen: function () {
        //    var that = this;
        //    $(document).on('toggle-services-tabs', function (event) {
        //        that.showServicesTabs = !that.showServicesTabs;
        //    });
        //},

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
        //this.listen();
    }
});
