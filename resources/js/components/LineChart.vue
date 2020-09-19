<script>
import { Line } from "vue-chartjs";

export default {
  extends: Line,
  props: {
    label: {
      type: String
    },
    chartDatos: {
      type: Array
    },
    unit: {
      type: String
    },
    chartColors: {
      type: Object
    }
  },
  computed: {
    chartData: function() {
      return this.chartDatos;
    }
  },
  watch: {
    chartDatos: function(){
      this._data._chart.destroy();
      this.rendChart();
    }
  },
  methods:{
    rendChart: function(){
      let dates = [];
      let totals = [];
      dates = this.chartData.map(d => d.nombre).reverse();
      totals = this.chartData.map(d => d.total).reverse();
      const {
        borderColor,
        pointBorderColor,
        pointBackgroundColor,
        backgroundColor
      } = this.chartColors;
  
      this.renderChart(
        {
          labels: dates,
          datasets: [
            {
              label: this.label,
              data: totals,
              borderColor: borderColor,
              pointBorderColor: pointBorderColor,
              pointBackgroundColor: pointBackgroundColor,
              backgroundColor: backgroundColor
            }
          ]
        },
        {
          cutoutPercentage: 80,
          responsive: true,
          mantaineAspectRatio: true,
          pan: {
            // Boolean to enable panning
              enabled: true,

              // Panning directions. Remove the appropriate direction to disable
              // Eg. 'y' would only allow panning in the y direction
              mode: 'x'
          },
          // Container for zoom options
          zoom: {
              // Boolean to enable zooming
              enabled: true,

              // Zooming directions. Remove the appropriate direction to disable
              // Eg. 'y' would only allow zooming in the y direction
              mode: 'x',
          },
          legend: {
              display: true
          },
          tooltips: {
              enabled: true,
              callbacks: {
                label: ((tooltipItems, data) => {
                  return tooltipItems.yLabel + ' '+this.unit;
                })
              },
              
          },
          onClick: (evt, item) => {
            let index = item[0]["_index"];
            console.log(item[0]["_chart"].data.labels[index]);
            console.log(item[0]["_chart"].data.datasets[0].data[index]);
          },
          scales: {
            xAxes: [{
                type: 'time',
                gridLines: {display: true},
                time: {
                    parser: 'DD/MM/YYYY',
                    unit: 'month',
                    displayFormats: {
                        'hour': 'YYYY-MM'
                    }
                },
                ticks: {
                    autoSkip: true,
                    maxTicksLimit: 20,
                    source: 'data',
                    callback: function(value) {
                        return new Date(value).toLocaleDateString('es', {month:'short', year:'numeric'});
                    },
                }

            }] ,

          }
        }
      );
    }
  },
  mounted() {    
    this.rendChart();
  }
};
</script>
