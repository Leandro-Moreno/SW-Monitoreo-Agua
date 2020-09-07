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
    options: {
      type: Object
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
        this.options
      );
    }
  },
  mounted() {
    this.rendChart();
  }
};
</script>
