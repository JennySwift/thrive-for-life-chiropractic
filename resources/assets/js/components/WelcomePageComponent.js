var WelcomePage = Vue.component('welcome-page', {
    template: '#welcome-page-template',
    data: function () {
        return {
            showContent: false
        };
    },
    components: {},
    route: {
        data: function (transition) {


        }
    },
    methods: {

    },
    props: [
        'path'
    ],
    ready: function () {
        var that = this;
        setTimeout(function () {
            that.showContent = true;
        }, 1000);
    }
});
