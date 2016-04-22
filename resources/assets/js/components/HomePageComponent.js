var HomePage = Vue.component('home-page', {
    template: '#home-page-template',
    data: function () {
        return {
            showContent: false
        };
    },
    components: {},
    route: {
        // data: function (transition) {
        //     var that = this;
        //     this.showContent = false;
        //     setTimeout(function () {
        //         that.showContent = true;
        //     }, 5000);
        // }
    },
    methods: {

    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        HelpersRepository.scrollbars();
        HelpersRepository.showContent(this);
    }
});
