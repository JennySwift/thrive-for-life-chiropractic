var Navbar = Vue.component('navbar', {
    template: '#navbar-template',
    data: function () {
        return {
            //path: this.$route.path
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
        'showServicesTabs'
    ],
    ready: function () {

    }
});
