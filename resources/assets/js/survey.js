require('./bootstrap');

import Vue from 'vue'

import Framework7 from 'framework7/dist/framework7.esm.bundle.js';
import Framework7Vue from 'framework7-vue/dist/framework7-vue.esm.bundle.js';
import Framework7Styles from 'framework7/dist/css/framework7.css';

// import 'framework7-icons';
Vue.use(Framework7Vue, Framework7)

import store from './repositories/Store'
import helpers from './repositories/Helpers'
// import filters from './lists/src/repositories/Filters'
import routes from './survey-routes'

window.Event = new Vue();

require('./components');
// require('./config.js');

global.store = store;
global.helpers = helpers;
// global.filters = filters;


const bus = new Vue();
Vue.prototype.$bus = bus;

const app = new Vue({
    el: '#survey-app',
    mounted: function () {

    },
    framework7: {
        root: '#survey-app',
        // id: 'lists-app',
        name: 'Thrive For Life Chiropractic',
        theme: 'ios',
        routes: routes,
        view: {
            pushState: true,
            animate: false
        },
        panel: {
            swipe: 'right'
        }
    }
});