
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
//
// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });


// End of default code

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

require('./components.js');

import routes from './routes'

const router = new VueRouter({
    routes: routes,
    hashbang: false
})

const app = new Vue({
    router
}).$mount('#app')

// $("#logo-upper").textillate({
//     //loop: true,
//     autostart: true,
//     //initialDelay: 10,
//     in: { effect: 'fadeIn' }
// }).on('end.tlt', function () {
//     $("#logo-lower").addClass('rubberBand').css('visibility', 'visible');
// });
//
// $("#logo-lower").lettering();


//Todo: put this code back in somewhere
//         Helpers.scrollbars();
//         Helpers.psScrollbars();


