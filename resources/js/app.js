/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()

window.Vue = require('vue').default;

window.events = new Vue();

window.flash = function(message) {
   window.events.$emit('flash',message);
}


Vue.component('cart-icon-component', require('./components/CartIconComponent.vue').default);
Vue.component('cart-component', require('./components/CartComponent.vue').default);
Vue.component('cart-add-component', require('./components/CartAddComponent.vue').default);
Vue.component('flash-component', require('./components/FlashComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


