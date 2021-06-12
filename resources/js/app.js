require('./bootstrap');

import {createApp} from 'vue'

import {ZiggyVue} from 'ziggy'
import {Ziggy} from "./ziggy"

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

// window.swal = swal

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

