import Vue from 'vue'
import App from './components/ExampleComponent.vue'
// import 'bootstap/dist/css/bootstrap.css'

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
