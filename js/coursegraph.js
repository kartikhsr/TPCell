google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Courses', 'Student Placed'],
  ['B.Tech', 112],
  ['M.Sc.', 3],
  ['B.Pharma', 8],
  ['MBA', 9]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Courses Wise Placement', 'width':450, 'height':350};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('coursepiechart'));
  chart.draw(data, options);
}
