var ContactPage = Vue.component('contact-page', {
    template: '#contact-page-template',
    data: function () {
        return {
            showContactDetails: true,
            boxHeight: 'auto',
            boxWidth: 'auto',
            showContent: false,
            showCover: true
        };
    },
    route: {
        activate: function () {
            var that = this;
            this.showCover = true;
            setTimeout(function () {
                that.showCover = false
            }, 2000);
        }
    },
    components: {},
    //watch: {
    //    'showContactDetails': function (val) {
    //        if (!val) {
    //            this.boxHeight = 0;
    //            this.boxWidth = 0;
    //        }
    //    }
    //},
    methods: {

        /**
         * For the transition, because transitioning to auto height doesn't work
         */
        setDetailsDimensions: function () {
            this.boxHeight = $('#contact .text').height();
            this.boxWidth = $('#contact .text').width();
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        this.setDetailsDimensions();
        var that = this;
        $('iframe').load(function () {
            HelpersRepository.showContent(that, 500);
        })
        setTimeout(function () {
            that.showCover = false
        }, 2000);

    }
});
