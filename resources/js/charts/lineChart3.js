import Chart from 'chart.js/auto';

new Chart(document.getElementById('lineChart3'), {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [
      {
        responsive: true,
        label: 'Total Orders',
        data: [80, 65, 60, 50, 40, 40, 50, 60, 65, 60, 50, 40],
        fill: true,
        radius: 0,
        borderColor: '#4f46e5',
        backgroundColor: 'rgba(129, 140, 248, 0.4)',
        tension: 0.5,
        pointStyle: false,
        pointRadius: 6,
        pointHoverRadius: 10,
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
      tooltip: {
        usePointStyle: true,
      },
    },
  },
});
