import VueAxios from 'vue-axios';
import axios from 'axios';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueAxios,axios);

Vue.component('line-chart', require('./components/LineChart.vue').default);

const app = new Vue({
    el: '#app'
});
