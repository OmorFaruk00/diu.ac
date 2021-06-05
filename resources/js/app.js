require('./bootstrap');

/*import { createApp } from 'vue'
import HelloWorld from './components/HelloWorld.vue';
const app = createApp({});
// registers our HelloWorld component globally
app.component('hello-world', HelloWorld);
// mount the app to the DOM
app.mount('#app');*/

import { createApp } from 'vue'

const app = createApp({});

// Importing all components programmetically. provided by laravel.
const files = require.context('./components', true, /\.vue$/i);
files.keys().map(key => {
    let fileName = key.replace('./', '').split('/').map(item => item.charAt(0).toUpperCase() + item.slice(1)).join('').replace('.vue', '');
    fileName = fileName.charAt(0).toLowerCase() + fileName.slice(1);

    app.component(fileName, files(key).default);
})


app.mount('#app');

