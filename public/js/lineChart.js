
const data2 = {
  labels: "test",
  datasets: [{
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  }]
};

const config2 = {
    type: 'line',
    data: data2,
  };

  // Initialize the chart
var myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
);