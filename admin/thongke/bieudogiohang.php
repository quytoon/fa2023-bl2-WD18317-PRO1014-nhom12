/<a href="index.php?act=bieudogiohang">Biểu đồ giỏ hàng</a></li>
</ol>
<div class="row">
  <div class="card mb-4 col mx-2">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Biểu đồ thống giỏ hàng theo số lượng sản phẩm
    </div>
    <div class="card-body">
      <!--Div that will hold the pie chart-->
      <div id="chart_cart"></div>
    </div>
    <div class="card-footer">
      <a href="index.php?act=thongkegiohang"> <input class="btn btn-primary my-1" type="button"
          value="Xem bảng thống kê"></a>
    </div>
  </div>
</div>
</main>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

  // Load the Visualization API and the corechart package.
  google.charts.load('current', { 'packages': ['corechart'] });

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChartCart);
  function drawChartCart() {
    var data1 = google.visualization.arrayToDataTable([
      ["Tên tài khoản", "Số lượng sản phẩm trong giỏ hàng"],
      <?php
      foreach ($thongkegiohang as $key) {
        extract($key);
        echo "['$TenTaiKhoan', $soLuong]";
      }
      ?>
    ]);

    var view = new google.visualization.DataView(data1);
    view.setColumns([0, 1,
      {
        calc: "stringify",
        sourceColumn: 1,
        type: "string",
        role: "annotation"
      }]);

    var options = {
      title: "Biểu đồ thống giỏ hàng theo số lượng sản phẩm",
      width: 600,
      height: 400,
      bar: { groupWidth: "95%" },
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("chart_cart"));
    chart.draw(view, options);
  }
</script>