require('./bootstrap');

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import {createApp} from 'vue'

import {ZiggyVue} from 'ziggy'
import {Ziggy} from "./ziggy"

import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'
import VueLazyLoad from 'vue3-lazyload'


import swal from 'sweetalert2'
window.toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', swal.stopTimer)
        toast.addEventListener('mouseleave', swal.resumeTimer)
    }
})

const app = createApp({});

app.use(ZiggyVue, Ziggy);
app.use(VueViewer);
app.use(VueLazyLoad, {
    error: '/loading.gif',
    loading: '/loading.gif',
})

// Importing all components programmatically. provided by laravel.
const files = require.context('./components', true, /\.vue$/i);
files.keys().map(key => {
    let fileName = key.replace('./', '').split('/').map(item => item.charAt(0).toUpperCase() + item.slice(1)).join('').replace('.vue', '');
    fileName = fileName.charAt(0).toLowerCase() + fileName.slice(1);

    app.component(fileName, files(key).default);
})

app.mount('#app');
