require('./bootstrap');

import { createApp } from 'vue'

import { ZiggyVue } from 'ziggy'
import {Ziggy} from "./ziggy"


const app = createApp({});

app.use(ZiggyVue, Ziggy);

// Importing all components programmetically. provided by laravel.
const files = require.context('./components', true, /\.vue$/i);
files.keys().map(key => {
    let fileName = key.replace('./', '').split('/').map(item => item.charAt(0).toUpperCase() + item.slice(1)).join('').replace('.vue', '');
    fileName = fileName.charAt(0).toLowerCase() + fileName.slice(1);

    app.component(fileName, files(key).default);
})


app.mount('#app');

