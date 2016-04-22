var RNRPage = Vue.component('rnr-page', {
    template: '#rnr-page-template',
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
