import Chart from 'chart.js/auto';

new Chart(document.getElementById('lineChart'), {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [
      {
        responsive: true,
        label: 'My First Dataset',
        data: [80, 65, 60, 50, 40, 40, 50, 60, 65, 60, 50, 40],
        fill: true,
        radius: 0,
        borderColor: 'rgb(72, 79, 90)',
        backgroundColor: 'rgba(72, 79, 90, 0.3)',
        tension: 0.5,
      },
      {
        responsive: true,
        label: 'My First Dataset',
        data: [65, 50, 60, 45, 70, 65, 30, 40, 20, 60, 45, 70],
        fill: true,
        radius: 0,
        borderColor: 'rgb(75, 192, 192)',
        backgroundColor: 'rgba(75, 192, 192, 0.4)',
        tension: 0.5,
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
      },
      y: {
        beginAtZero: true,
        grid: {
          drawBorder: true,
          drawOnChartArea: true,
          drawTicks: true,
          borderDash: [5, 8],
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
