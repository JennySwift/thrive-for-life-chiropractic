var RNRPage = Vue.component('rnr-page', {
    template: '#rnr-page-template',
    data: function () {
        return {
            path: this.$route.path
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
