<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h1 style='text-align:center; color: red'>My first php code in a js script</h1>"
    ?>

<div style='width:500px'>

  <canvas id="radar_chart" ></canvas>
</div>

  <script>


   const data = {
  labels: [
    'Englisch',
    'Deutsch',
    'Musik',
    'Mathematik',
    'Sport',
    'Geschichte',
    'Geographie'
  ],

  datasets: [
    { label: 'First entry',
    data: [8, 25, 30, 45, 56, 20, 40],  // here i can fethc data from php
    fill: true,
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgb(255, 99, 132)',
    pointBackgroundColor: 'rgb(255, 99, 132)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(255, 99, 132)'
  }, 
  {
    label: 'First half year',
    data: [28, 48, 40, 67, 96, 27, 67],  // here i can fethc data from php
    fill: true,
    backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'
  },
  {
    label: 'Full year results   ',
    data: [88, 76, 60, 75, 100, 45, 80], // here i can fethc data from php
    fill: true,
    backgroundColor: 'rgba(255, 105, 0, 0.3)',
    borderColor: 'rgb(255,105,0)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'
  }

]};

  let chart = document.getElementById('radar_chart').getContext('2d');
  var radar_chart = new Chart(chart, {
    type: 'radar', // Change chart type as needed (e.g., 'line', 'pie', 'doughnut', 'polarArea' etc.)
    data: data,
  });
  </script>
    
</body>
</html>