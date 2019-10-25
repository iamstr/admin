/* globals Chart:false, feather:false */

(function() {
  "use strict";

  feather.replace();

  // Graphs
  var ctx = document.getElementById("myChart");
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Janruary", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
          lineTension: 0,
          backgroundColor: "transparent",
          borderColor: "#007bff",
          borderWidth: 4,
          pointBackgroundColor: "#007bff"
        }
      ]
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: false
            }
          }
        ]
      },
      legend: {
        display: false
      }
    }
  });
})();
(function() {
  "use strict";
  var ctx = document.getElementById("myChart2").getContext("2d");
  let data = {
    datasets: [
      {
        data: [20, 50, 30],
        backgroundColor: [
          "rgba(195,34,174)",
          "rgba(56,239,125)",
          "rgba(238,9,121)"
        ]
      }
    ],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: ["New Customers", "Active Customers", "Deactive Customers"]
  };
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: "doughnut",

    // The data for our dataset
    data,

    // Configuration options go here
    options: {}
  });
})();
