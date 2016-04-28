var GovernmentPage = Vue.component('government-page', {
    template: '#government-page-template',
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
        //This is because for some reason, on the iPhone,
        //unless the user clicks and drags the screen before using the accordion,
        //the accordion is really jerky
        setTimeout(function () {
            $(body).mousedown().mousemove().mouseup();
        }, 500);

        HelpersRepository.showContent(this);
        HelpersRepository.scrollbars();
    }
});
