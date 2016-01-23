var Navbar = Vue.component('navbar', {
    template: '#navbar-template',
    data: function () {
        return {
            window: window
        };
    },
    components: {},
    methods: {
        ready: function () {
            //console.log(window.location.pathname);
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        this.ready();
    }
});
