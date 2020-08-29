<script>
import { Line } from "vue-chartjs";
export default {
  extends: Line,
  props: {
    label: {
      type: String
    },
    chartData: {
      type: Array
    },
    options: {
      type: Object
    }
  },
  mounted() {
    const dates = this.chartData.map(d => d.fecha).reverse();
    const totals = this.chartData.map(d => d.total).reverse();
    this.renderChart(
      {
        labels: dates,
        datasets: [
          {
            label: this.label,
            data: totals
            // ,
            // borderColor: borderColor,
            // pointBorderColor: pointBorderColor,
            // pointBackgroundColor: pointBackgroundColor,
            // backgroundColor: backgroundColor
          }
        ]
      },
      this.options
    );
  }
};
