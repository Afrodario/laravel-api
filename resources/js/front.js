window.Vue = require('vue');

//Importazione di axios
window.axios = require('axios');

import Vue from 'vue';
import App from './views/App';

const app = new Vue({

    el: '#root',
    render: h => h(App)

})
