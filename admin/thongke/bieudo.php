<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh muc', 'So luong san pham'],
<?php
$tongdm=count($listthongke);
$i=1;
foreach ($listthongke as $tk) {
    extract($tk);
    if($i==$tongdm) $dauphay="";else $dauphay=",";
    echo "['".$tk['tendm']."', ".$tk['sluongsp']."]".$dauphay;
    $i+=1;
}
?>
//   ['Gym', 2],
//   ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thong ke san pham theo danh muc', 'width':1000, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>