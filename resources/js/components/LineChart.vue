<script>
    import { Line } from 'vue-chartjs'
    export default {
        extends: Line,
        props: {
          datos: String
        },
        data: function (){
          return datos = this.datos
        },
        mounted() {
            let uri = 'https://monitoreo.test/api/registro-ultimos/20'
            let longitud = []
            let latitud = []
            let id = []
            let ph = []
            let og = []
            let hg = []
            let labels = []
            let conduct = []
            
            this.axios.get(uri).then((response) => {
                let data = response.data.registros;
                if(data){
                    data.forEach(element => {
                      // debugger
                      console.log(datos)
                      const fecha = moment(element.created_at);
                      fecha.locale();
                      longitud.push(element.longitud)
                      latitud.push(element.latitud)
                      id.push(element.id)
                      ph.push(element.ph)
                      og.push(element.og)
                      hg.push(element.hg)
                      conduct.push(element.conduct)
                      labels.push("Long:"+element.longitud+", Lat:"+element.latitud+" Fecha:"+fecha.format('LL'))

                    })                    
                    this.renderChart({
                        labels: labels,
                        datasets: [{
                            label: hg,
                            backgroundColor: '#CF20F0',
                            data: hg
                        }
                      ]
                    },{responsive: true, maintainAspectRatio: false })
                }else{
                    console.log('No data')
                }
            })
        }    
    }
</script>
