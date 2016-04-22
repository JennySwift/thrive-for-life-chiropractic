var LifestylePage = Vue.component('lifestyle-page', {
    template: '#lifestyle-page-template',
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
        HelpersRepository.showContent(this);
    }
});
