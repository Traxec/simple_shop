
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

// menu hide or show
$('.navbar-tab').find('li').hover(function(){
    $('.menu').css('display','block');
    $('#home'+$(this).find('a').attr('data-toggle')).removeClass('hide');
    $('#home'+$(this).find('a').attr('data-toggle')).siblings().addClass('hide');
});
$('.menu').hover(function(){},function(){
    $('.menu').css('display','none');
    $(this).find('ul').addClass('hide');
});
