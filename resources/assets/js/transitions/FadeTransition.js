// Vue.transition('fade', {
//     css: false,
//     enter: function (el, done) {
//         var that = this;
//         setTimeout(function () {
//             $(el).animate({ opacity: 1 }, that._data.transitionTime, done)
//         }, this._data.transitionTime);
//
//     },
//     enterCancelled: function (el) {
//         $(el).stop()
//     },
//     leave: function (el, done) {
//         $(el).animate({ opacity: 0 }, this._data.transitionTime, done)
//     },
//     leaveCancelled: function (el) {
//         $(el).stop()
//     }
// });

Vue.transition('fade', {
    enterClass: 'fadeIn',
    leaveClass: 'fadeOut'
});