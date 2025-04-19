const ctx = document.getElementById('sustainabilityChart').getContext('2d');

const sustainabilityChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      'Recyclability',
      'Material Sustainability',
      'Energy Efficiency',
      'Reusability',
      'Biodegradability'
    ],
    datasets: [{
      label: 'Sustainability Score (%)',
      data: [85, 70, 60, 75, 30],
      backgroundColor: [
        '#4caf50cc',
        '#388e3ccc',
        '#8bc34acc',
        '#66bb6acc',
        '#c8e6c9cc'
      ],
      borderColor: [
        '#4caf50',
        '#388e3c',
        '#8bc34a',
        '#66bb6a',
        '#c8e6c9'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        max: 100
      }
    }
  }
});
