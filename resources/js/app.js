import axios from 'axios';
import VueAxios from 'vue-axios';
import Vue from 'vue';
import VueLayers from 'vuelayers';
import 'vuelayers/lib/style.css'; // needs css-loader
import { PointGeom } from 'vuelayers'

require('./bootstrap');


Vue.use(VueLayers);


window.Vue = require('vue');
// Vue.use(VueAxios,axios);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});
