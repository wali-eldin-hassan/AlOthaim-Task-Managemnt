import Chart from 'chart.js/auto';

new Chart(document.getElementById('barChart2'), {
  type: 'bar',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    datasets: [
      {
        data: [
          [40, -40],
          [56, -20],
          [35, -10],
          [-30, 40],
          [25, -32],
          [46, -43],
          [38, -10],
        ],
        responsive: true,
        backgroundColor: function (context) {
          const chart = context.chart;
          const { ctx, chartArea } = chart;

          if (!chartArea) {
            // This case happens on initial chart load
            return;
          }
          let width, height, gradient;
          const chartWidth = chartArea.right - chartArea.left;
          const chartHeight = chartArea.bottom - chartArea.top;
          if (!gradient || width !== chartWidth || height !== chartHeight) {
            // Create the gradient because this is either the first render
            // or the size of the chart has changed
            width = chartWidth;
            height = chartHeight;
            gradient = ctx.createLinearGradient(0, chartArea.bottom, 0, chartArea.top);
            gradient.addColorStop(0, '#60a5fa');
            gradient.addColorStop(0.5, '#2563eb');
            gradient.addColorStop(1, '#1e3a8a');
          }

          return gradient;
        },
        borderColor: '#f43f5e',
        borderRadius: 100,
        barPercentage: 0.3,
        borderSkipped: false,
      },
    ],
  },
  options: {
    scales: {
      x: {
        border: {
          display: false,
        },
        grid: {
          display: true,
          drawBorder: false,
          drawOnChartArea: true,
          drawTicks: false,
          offset: false,
        },
        ticks: {
          display: true,
          color: '#525252',
        },
      },
      y: {
        border: {
          display: false,
        },
        grid: {
          display: false,
        },
        ticks: {
          display: false,
        },
      },
    },
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});
