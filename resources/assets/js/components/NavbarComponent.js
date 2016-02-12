var Navbar = Vue.component('navbar', {
    template: '#navbar-template',
    data: function () {
        return {
            //path: this.$route.path
        };
    },
    components: {},
    watch: {
        '$route': function (val) {
            this.path = val.path;
        }
    },
    methods: {

        /**
         * 
         * @param path
         */
        goToPage: function (path) {
            this.path = path;
            if (path.indexOf('services') == -1) {
                this.showServicesTabs = false
            }
        },

        /**
         *
         */
        toggleServicesTabs: function () {
            //$.event.trigger('toggle-services-tabs');
            this.showServicesTabs = !this.showServicesTabs;
        }
    },
    props: [
        'path',
        'showServicesTabs'
    ],
    ready: function () {

    }
});
