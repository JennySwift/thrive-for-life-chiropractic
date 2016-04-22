var HRAPage = Vue.component('hra-page', {
    template: '#hra-page-template',
    data: function () {
        return {
            showContent: false
        };
    },
    components: {},
    //watch: {
    //    '$route': function (val) {
    //        this.path = val.path;
    //    }
    //},
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
