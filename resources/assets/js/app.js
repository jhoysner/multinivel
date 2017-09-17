
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

var VueMaterial = require('vue-material')

window.Vue.use(VueMaterial)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var mainComponent = Vue.component('main-component', require('./components/Main.vue'));
var loginComponent = Vue.component('login-component', require('./components/Login.vue'));

const app = new Vue({
    el: '#app',
    components: {
        mainComponent,
        loginComponent
    }
});

//Materialize
import 'vue-material/dist/vue-material.css'
