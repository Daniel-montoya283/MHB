 const ctx = document.getElementById('lineChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio'],
      datasets: [{
        label: 'vistas ultimos 6 meses',
        data: [1200, 1900, 300, 500, 200, 300],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });



  const ctxDona = document.getElementById('doughnut').getContext('2d');
  new Chart(ctxDona, {
    type: 'doughnut',
    data: {
      labels: ['Tiempo completo', 'Medio tiempo', 'Freelance', 'Prácticas', 'Contrato temporal', 'Remoto'],
      datasets: [{
        data: [60, 25, 15, 10, 8, 5],
        backgroundColor: ['#36A2EB', '#FF6384', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Distribución por tipo de oferta publicada'
        }
      }
    }
  });