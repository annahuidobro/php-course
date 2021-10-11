require('./bootstrap');
//import libraries
import { createApp } from 'vue';
import Vue from 'vue';
import vueAxios from 'vue-axios';
import axios from 'axios';
import VueRouter from 'vue-router';
import HomeComponent from  './components/HomeComponent';

//import components
import App from './components/App.vue';

//import routes
import {routes} from './routes';

//Vue.use(vueAxios, axios);
//Vue.use(VueRouter);

createApp({
    components: {
        HomeComponent,
    }
}).mount('#app');


const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render (h) {
        return App;
    }
});

app.use(vueAxios, axios);
app.use(VueRouter);