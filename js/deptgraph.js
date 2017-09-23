google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Department', 'Student Placed'],
  ['CSE', 33],
  ['ECE.', 13],
  ['IT', 7],
  ['Mech.', 7],
  ['Printing', 40],
  ['Packaging', 3],
  ['MKTG', 4],
  ['Pharmacognosy', 9],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Dept. Placement Stats', 'width':450, 'height':350};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('deptpiechart'));
  chart.draw(data, options);
}
