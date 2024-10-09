import Chart from 'chart.js/auto';

new Chart(document.getElementById('barChart'), {
  type: 'bar',
  data: {
    labels: [
      '1 PM',
      '2 PM',
      '3 PM',
      '4 PM',
      '5 PM',
      '6 PM',
      '7 PM',
      '8 PM',
      '9 PM',
      '10 PM',
      '11 PM',
      '12 AM',
      '1 AM',
      '2 AM',
      '3 AM',
      '4 AM',
    ],
    datasets: [
      {
        data: [40, 56, 35, 30, 40, 25, 32, 46, 43, 38, 38, 28, 21, 25, 38, 46],
        responsive: true,
        backgroundColor: '#fff',
        borderColor: '#fff',
        borderRadius: 100,
        barPercentage: 0.1,
      },
    ],
  },
  options: {
    scales: {
      x: {
        grid: {
          display: false,
          drawBorder: false,
          drawOnChartArea: false,
          drawTicks: false,
        },
        ticks: {
          // display: false,
          color: '#fff',
        },
      },
      y: {
        grid: {
          display: false,
          drawBorder: false,
          drawOnChartArea: false,
          drawTicks: false,
        },
        ticks: {
          color: '#fff',
        },
      },
    },
    layout: {
      padding: 30,
    },
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});
