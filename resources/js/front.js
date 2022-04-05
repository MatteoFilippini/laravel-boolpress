/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import App from "./components/App.vue";
import Vue from 'vue';
import VueRouter from "vue-router";

const root = new Vue({
    el: "#root",
    render: h => h(App),


});

Vue.use(VueRouter)