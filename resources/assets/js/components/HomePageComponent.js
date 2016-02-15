var HomePage = Vue.component('home-page', {
    template: '#home-page-template',
    data: function () {
        return {

        };
    },
    components: {},
    methods: {

        /**
         *
         */
        listen: function () {
            $("#home a").on("click",function(e){
                e.preventDefault();
                var scrollTop = $("body").height();
                setTimeout(function () {
                    $('html,body').animate({scrollTop: scrollTop}, 700);
                }, 100);

            });

            $("#welcome a").on("click",function(e){
                e.preventDefault();
                var scrollTop = $("body").height();
                $('html,body').animate({scrollTop: scrollTop - 1}, 1);
                setTimeout(function () {
                    $('html,body').animate({scrollTop: 0}, 700);
                }, 100);
            });
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        HelpersRepository.scrollbars();
        this.listen();
    }
});
