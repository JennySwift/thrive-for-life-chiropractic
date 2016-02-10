var Navbar = Vue.component('navbar', {
    template: '#navbar-template',
    data: function () {
        return {
            //path: this.$route.path
            showServicesTabs: false
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
            $.event.trigger('toggle-services-tabs');
        }
    },
    props: [
        'path'
    ],
    ready: function () {

    }
});
