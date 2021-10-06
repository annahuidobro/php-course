require('./bootstrap');

import { createApp } from 'vue';
import HomeComponent from  './components/HomeComponent'

createApp({
    components: {
        HomeComponent,
    }
}).mount('#app');
