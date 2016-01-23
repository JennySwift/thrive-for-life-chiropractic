var Navbar = Vue.component('navbar', {
    template: '#navbar-template',
    data: function () {
        return {
            path: this.$route.path
        };
    },
    components: {},
    watch: {
        '$route': function (val) {
            this.path = val.path;
        }
    },
    methods: {
        ready: function () {
            //console.log(window.location);
            //console.log(this.$route);
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        this.ready();
    }
});
