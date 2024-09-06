/<a href="index.php?act=bieudosanpham">Biểu đồ san pham</a></li>
</ol>
<div class="row">
    <div class="card mb-4 col mx-2">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Biểu đồ thống kê sản phẩm theo binh luan
            <?php
            ?>
        </div>
        <div class="card-body">
            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
        </div>
        <div class="card-footer">
            <a href="index.php?act=thongkesanpham"> <input class="btn btn-primary my-1" type="button"
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

    // Biểu đồ thống kê bình luận
    function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sản phẩm');
        data.addColumn('number', 'Số lượng bình luận');

        <?php
        foreach ($thongkesp as $key) {
            extract($key);
            echo "data.addRow(['$TenSanPham', $soluong_binhluan]);";
        }
        ?>

        // Set chart options
        var options = {
            'title': 'Thống kê bình luận sản phẩm',
            'width': 500,
            'height': 300
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }

</script>
