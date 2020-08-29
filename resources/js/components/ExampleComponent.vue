<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                      <div v-if="arrID.length > 0">
                      <line-chart :chartData="arrID" :options="chartOptions" label="ph" />
                      </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import moment from 'moment';    
    import LineChart from './LineChart.vue';
    
    export default {
      components: {
          LineChart
        },
      data () {
        return {
          arrID: [],
          arrLongitud: [],
          arrLatitud: [],
          arrPH: [],
          arrOG: [],
          chartOptions: {
            responsive: true,
            mantaineAspectRatio: false
          }
        };
      },
      async created(){
        let temp = await axios.get("https://monitoreo.test/api/registro");
        const data = temp.data.registros;
        data.forEach( d => {
          const fecha = moment(d.created_at);
          
          const {
            id,
            longitud,
            latitud,
            ph,
            og
          } = d;
          this.arrID.push({fecha, total: id});
          this.arrLongitud.push({fecha, total: longitud});
          this.arrLatitud.push({fecha, total: latitud});
          this.arrPH.push({fecha, total: ph});
          this.arrOG.push({fecha, total: og});
        });
      }
    }
</script>
