import helpers from './HelpersRepository'
var object = require('lodash/object');
import Vue from 'vue'


export default {
    state: {
        // loading: false,
        showServicesTabs: false,
        path: '/'
    },

    /**
     * Set a property that is in the store (can be nested)
     * @param data
     * @param path
     */
    set: function (data, path) {
        object.set(this.state, path, data);
    },

    /**
     * Toggle a property that is in the store (can be nested)
     * @param path
     */
    toggle: function (path) {
        object.set(this.state, path, !object.get(this.state, path));
    }
}