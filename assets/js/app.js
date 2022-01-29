/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.css';


// start the Stimulus application
import '../bootstrap';

// Bootstrap Vue
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import '../bootstrap.js'
import '../jquery-3.2.1.slim.min.js'
import '../bootstrap.min.js'
import '../popper.min.js'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// assets/js/app.js
import Vue from 'vue';

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)

// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


import App from '../components/App'

/**
 * Create a fresh Vue Application instance
 */
new Vue({
    el: '#app',
    components: {App}
});
