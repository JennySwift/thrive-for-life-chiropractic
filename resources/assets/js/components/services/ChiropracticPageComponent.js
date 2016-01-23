var ChiropracticPage = Vue.component('chiropractic-page', {
    template: '#chiropractic-page-template',
    data: function () {
        return {
            path: this.$route.path,
            sliderStep: 1
        };
    },
    components: {},
    watch: {
        '$route': function (val) {
            this.path = val.path;
        }
    },
    methods: {

    },
    props: [
        //data to be received from parent
    ],
    ready: function () {

    }
});
