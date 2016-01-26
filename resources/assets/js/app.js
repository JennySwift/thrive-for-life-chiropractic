
$("#logo-upper").textillate({
    //loop: true,
    autostart: true,
    //initialDelay: 10,
    in: { effect: 'fadeIn' }
}).on('end.tlt', function () {
    $("#logo-lower").addClass('rubberBand').css('visibility', 'visible');
});

$("#logo-lower").lettering();

//Perfect scrollbar
window.onload = function () {
    [].forEach.call(document.querySelectorAll('.scrollbar-container'), function (el) {
        Ps.initialize(el);
    });
};

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

jQuery(function( $ ){
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
});

//var App = Vue.component('app', {
//
//});
//
//var router = new VueRouter({
//    hashbang: false
//});
//
//router.map({
//    '/': {
//        component: HomePage
//    },
//    '/home': {
//        component: HomePage,
//    },
//    '/about': {
//        component: AboutPage
//    },
//    '/contact': {
//        component: ContactPage
//    },
//    //Services
//    '/services/ak': {
//        component: AKPage
//    },
//    '/services/chiropractic': {
//        component: ChiropracticPage
//    },
//    '/services/government': {
//        component: GovernmentPage
//    },
//    '/services/hra': {
//        component: HRAPage
//    },
//    '/services/lifestyle': {
//        component: LifestylePage
//    },
//    '/services/rnr': {
//        component: RNRPage
//    }
//
//});
//
//router.start(App, 'body');

new Vue({
    el: 'body',
    data: {
        'path': '/'
    },
    events: {

    }
});

