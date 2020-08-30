import axios from 'axios';
import VueAxios from 'vue-axios';
import VueGoogleHeatmap from 'vue-google-heatmap';

require('./bootstrap');

window.Vue = require('vue');
// Vue.use(VueAxios,axios);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});
