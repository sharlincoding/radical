var ctx = document.getElementById('lineChart').getContext('2d');
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
      {
        label: 'Enrolled',
        data: [65, 35, 80, 60, 56, 55, 40],
        backgroundColor: '#66328E',
        borderColor: '#66328E',
        borderWidth: 2,
        cubicInterpolationMode: 'monotone',
      },
      {
        label: 'Unenrolled',
        data: [28, 60, 40, 19, 86, 27, 90],
        backgroundColor: '#FF5656',
        borderColor: '#FF5656',
        borderWidth: 2,
        cubicInterpolationMode: 'monotone',
      }
    ]
  },
  options: {
    responsive: true,
    aspectRatio: 2,
    scales: {
      x: {
        beginAtZero: true
      },
      y: {
        beginAtZero: true
      }
    },
    plugins: {
      legend: {
        display: false,
        labels: {
          boxWidth: 0
        }
      }
    },
    elements: {
      point: {
        radius: 0 // Set radius to 0 to hide the points
      }
    }
  }
});

// Manually create and append legend HTML
var legendContainer = document.getElementById('legend-container');
legendContainer.innerHTML = '<ul class="legend-list">' +
  '<li><span class="legend-circle" style="background-color:#66328E;"></span><span class="legend-text">Enrolled</span></li>' +
  '<li><span class="legend-circle" style="background-color:#FF5656;"></span><span class="legend-text">Unenrolled</span></li>' +
  '</ul>';
