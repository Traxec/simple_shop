require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import Register from './views/auth/Register'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home 
        },
        {
            path: '/auth/register',
            name: 'register',
            component: Register
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});