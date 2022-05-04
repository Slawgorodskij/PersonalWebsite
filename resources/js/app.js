require('./bootstrap');
require('./burger')
require('./slider')
//require('./header')

// import {createApp} from 'vue';
//
// import images from './components/Images.vue';
//
// const app = createApp({})
//
// app.component('images', images);
//
// app.mount("#app")


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();







