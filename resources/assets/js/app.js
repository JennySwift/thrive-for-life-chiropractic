
$("#logo-upper").textillate({
    //loop: true,
    autostart: true,
    //initialDelay: 10,
    in: { effect: 'fadeIn' }
}).on('end.tlt', function () {
    $("#logo-lower").addClass('rubberBand').css('visibility', 'visible');
});

$("#logo-lower").lettering();

//new Vue({
//    el: 'body',
//    events: {
//
//    }
//});

