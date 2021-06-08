require('./bootstrap');
import { createApp } from 'vue/dist/vue.esm-bundler.js'

createApp({
    data:()=>({
        number:10
    })
}).mount('#app')
