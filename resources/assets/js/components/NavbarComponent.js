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
