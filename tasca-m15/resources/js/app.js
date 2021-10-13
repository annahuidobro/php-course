require('./bootstrap');

import { createApp } from 'vue';
import HomeComponent from  './components/HomeComponent';
import router from './router';

createApp({
    components: {
        HomeComponent,
    }
}).use(router).mount('#app');
