var ctx = document.getElementById("gradeChart");
var myChart = new Chart(ctx, {
  type: 'bar',
  scaleOverride:true,
  scaleSteps:2,
  data: {
    labels: ["Class 1", "Class 2", "Class 3", "Class 4"],
    datasets: [{
      data: [98, 89, 90, 87],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        ticks: {
          maxRotation: 10,
          minRotation: 5
        }
      }],
      yAxes: [{
        ticks: {
            suggestedMin: 60
        //   beginAtZero: true
        },
        gridLines: {
            offsetGridLines: false
        }
      }]
    }
  }
});