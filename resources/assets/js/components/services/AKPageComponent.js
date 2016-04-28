var AKPage = Vue.component('ak-page', {
    template: '#ak-page-template',
    data: function () {
        return {
            //path: this.$route.path
            showContent: false
        };
    },
    components: {},
    route: {
        
    },
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
        HelpersRepository.showContent(this);
        // HelpersRepository.scrollbars();
    }
});
