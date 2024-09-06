/<a href="index.php?act=bieudotaikhoan">Biểu đồ tài khoản</a></li>
</ol>
<div class="row">
  <div class="card mb-4 col mx-2">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Biểu đồ thống kê sản phẩm theo địa chỉ khách hàng
      <?php
      ?>
    </div>
    <div class="card-body">
      <!--Div that will hold the pie chart-->
      <div id="chart_div"></div>
    </div>
    <div class="card-footer">
      <a href="index.php?act=thongketaikhoan"> <input class="btn btn-primary my-1" type="button"
          value="Xem bảng thống kê  "></a>
    </div>
  </div>
</div>
</main>
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

  // Load the Visualization API and the corechart package.
  google.charts.load('current', { 'packages': ['corechart'] });

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Biểu đồ thống kê danh mục
  function drawChart() {
    // Create the data table.
    const data = google.visualization.arrayToDataTable([
      ['Địa chỉ', 'Tên Khách Hàng'],
      <?php
      count($listbieudotaikhoan);
      foreach ($listbieudotaikhoan as $key) {
        extract($key);
        echo "['$DiaChi','$soluong']";
        // echo "['$DiaChi','$soluong']";
        // echo "['$DiaChi', '$soluong']";
        // echo "['$DiaChi', '$soluong']";
        // echo "['$DiaChi', '$soluong']";
        // echo "['$DiaChi', '$soluong']";
        // echo "['$DiaChi', '$soluong']";
        // echo "['$DiaChi', '$soluong']";
      }
      ?>
    ]);

    // Set chart options
    var options = {
      'title': 'Thống kê tài khoản theo địa chỉ khách hàng',
      'width': 500,
      'height': 300
    };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }


</script>