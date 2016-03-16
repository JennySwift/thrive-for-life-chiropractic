var GovernmentPage = Vue.component('government-page', {
    template: '#government-page-template',
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
        //This is because for some reason, on the iPhone,
        //unless the user clicks and drags the screen before using the accordion,
        //the accordion is really jerky
        $(body).mousedown().mousemove().mouseup();
    }
});
