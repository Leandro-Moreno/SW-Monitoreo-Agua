<template>
    <div class="container mt-12">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Datos Monitoreo Ciudadano</div>
                      <div class="row">
                        <div class="col-md-6" v-if="arrTemperatura.length > 0">
                          <line-chart :chartData="arrTemperatura" :chartColors="temperaturaColors" :options="chartOptions" label="Temperatura" />
                        </div>
                        <div class="col-md-6" v-if="arrPH.length > 0">
                          <line-chart :chartData="arrPH" :chartColors="phColors" :options="chartOptions" label="ph" />
                        </div>
                        <div class="col-md-6" v-if="arrOD.length > 0">
                          <line-chart :chartData="arrOD" :chartColors="ogColors" :options="chartOptions" label="OD" />
                        </div>
                        <div class="col-md-6" v-if="arrHG.length > 0">
                          <line-chart :chartData="arrHG" :chartColors="hgColors" :options="chartOptions" label="Hg" />
                        </div>
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
          phColors: {
            borderColor: "#4E5E66",
            pointBorderColor: "#4E5E66",
            pointBackgroundColor: "#31E981",
            backgroundColor: "#31E981"
          },
          arrOD: [],
          ogColors: {
            borderColor: "#829FD9",
            pointBorderColor: "#0029FA",
            pointBackgroundColor: "#230A59",
            backgroundColor: "#5C73F2"
          },
          arrHG: [],
          hgColors: {
            borderColor: "#D9CB04",
            pointBorderColor: "#8C7503",
            pointBackgroundColor: "#402401",
            backgroundColor: "#D9B504"
          },
          arrTemperatura: [],
          temperaturaColors: {
            borderColor: "#9C4AFF",
            pointBorderColor: "#5E2C99",
            pointBackgroundColor: "#492378",
            backgroundColor: "#8C43E6"
          },
          chartOptions: {
            responsive: true,
            mantaineAspectRatio: true
          }
        };
      },
      async created(){
        let temp = await axios.get("https://monitoreo.test/api/registro-ultimos/100");
        const data = temp.data.registros;
        data.forEach( d => {
          const fecha = moment(d.created_at);
          const nombre = "("+d.longitud+","+d.latitud+")."+fecha.format('LL');

          const {
            id,
            longitud,
            latitud,
            ph,
            od,
            hg,
            temperatura
          } = d;
          this.arrID.push({nombre, total: id});
          this.arrLongitud.push({nombre, total: longitud});
          this.arrLatitud.push({nombre, total: latitud});
          this.arrPH.push({nombre, total: ph});
          this.arrOD.push({nombre, total: od});
          this.arrHG.push({nombre, total: hg});
          this.arrTemperatura.push({nombre, total: temperatura});
          console.log(this.arrPH);
        });
      }
    }
</script>
