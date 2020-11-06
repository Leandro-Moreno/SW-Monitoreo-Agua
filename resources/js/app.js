import axios from 'axios';
import VueAxios from 'vue-axios';
import Vue from 'vue';
import VueLayers from 'vuelayers';
import 'vuelayers/lib/style.css'; // needs css-loader
import { PointGeom } from 'vuelayers';
import Tooltip from "vue-directive-tooltip";
import "vue-directive-tooltip/dist/vueDirectiveTooltip.css";

require('./bootstrap');

Vue.use(VueLayers);
Vue.use(Tooltip);


window.Vue = require('vue');
// Vue.use(VueAxios,axios);

Vue.component('mapa-monitoreo', require('./components/MapaMonitoreo.vue').default);

const app = new Vue({
    el: '#app'
});
