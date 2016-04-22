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
        HelpersRepository.scrollbars();
        HelpersRepository.showContent(this);
    }
});
