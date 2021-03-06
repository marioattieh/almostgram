/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('follow-button', require('./components/FollowButton.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/** 
* Add event listener on .posts, .saved and .tagged
* When clicked, it will add the class .selected to the clicked element
* and remove it from the other elements
*/

document.querySelectorAll('.posts, .saved, .tagged').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelectorAll('.posts, .saved, .tagged').forEach(function(element) {
            element.classList.remove('selected');
        });
        this.classList.add('selected');
    });
});