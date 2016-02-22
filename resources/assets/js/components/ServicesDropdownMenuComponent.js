var ServicesDropdownMenu = Vue.component('services-dropdown-menu', {
    template: '#services-dropdown-menu-template',
    data: function () {
        return {

        };
    },
    components: {},
    methods: {

        /**
         *
         * @param path
         */
        goToPage: function (path) {
            this.path = path;
            this.showServicesTabs = false;
        }
    },
    props: [
        'path',
        'showServicesTabs'
    ],
    ready: function () {

    }
});
