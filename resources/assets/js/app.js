
$("#logo-upper").textillate({
    //loop: true,
    autostart: true,
    //initialDelay: 10,
    in: { effect: 'fadeIn' }
}).on('end.tlt', function () {
    $("#logo-lower").addClass('rubberBand').css('visibility', 'visible');
});

$("#logo-lower").lettering();

//$(function() {
//    $('a[href*=#]:not([href=#])').click(function() {
//        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//            var target = $(this.hash);
//            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//            if (target.length) {
//                $('html,body').animate({
//                    scrollTop: target.offset().top
//                }, 500);
//                return false;
//            }
//        }
//    });
//});

var App = Vue.component('app', {
    data: function () {
        return {
            path: '/',
            showServicesTabs: false
        };
    },
    methods: {
        /**
         *
         */
        listen: function () {
            var that = this;
            $(document).on('toggle-services-tabs', function (event) {
                that.showServicesTabs = !that.showServicesTabs;
            });
        }
    },
    ready: function () {
        HelpersRepository.scrollbars();
    }
});
//
var router = new VueRouter({
   hashbang: false
});
//
router.map({
   '/': {
       component: HomePage
   },
   '/home': {
       component: HomePage,
   },
    '/welcome': {
        component: WelcomePage,
    },
   '/about': {
       component: AboutPage
   },
   '/contact': {
       component: ContactPage
   },
   //Services
   '/services/ak': {
       component: AKPage
   },
   '/services/chiropractic': {
       component: ChiropracticPage
   },
   '/services/government': {
       component: GovernmentPage
   },
   '/services/hra': {
       component: HRAPage
   },
   '/services/lifestyle': {
       component: LifestylePage
   },
   '/services/rnr': {
       component: RNRPage
   }

});

router.start(App, 'body');

