var ChiropracticPage = Vue.component('chiropractic-page', {
    template: '#chiropractic-page-template',
    data: function () {
        return {
            //path: this.$route.path,
            sliderStep: 1,
            transitionTime: 300
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
