var HRAPage = Vue.component('hra-page', {
    template: '#hra-page-template',
    data: function () {
        return {
            //path: this.$route.path
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
    }
});
