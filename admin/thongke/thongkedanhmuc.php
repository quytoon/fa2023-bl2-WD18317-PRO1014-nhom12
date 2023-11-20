/<a href="index.php?act=thongkedanhmuc">Thống kê danh mục</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thống kê sản phẩm theo danh mục
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>TÊN LOẠI</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ NHỎ NHẤT(VNĐ)</th>
                    <th>GIÁ LỚN NHẤT(VNĐ)</th>
                    <th>GIÁ TRUNG BÌNH(VNĐ)</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>TÊN LOẠI</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ NHỎ NHẤT(VNĐ)</th>
                    <th>GIÁ LỚN NHẤT(VNĐ)</th>
                    <th>GIÁ TRUNG BÌNH(VNĐ)</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($thongkedm as $key) {
                    extract($key);
                    echo '<tr>
                                        <td>' . $tenDanhMuc . '</td>
                                        <td>' . $soluong . '</td>
                                        <td>' . number_format($gia_min, 2, '.', ',') . '</td>
                                        <td>' . number_format($gia_max, 2, '.', ',') . '</td>
                                        <td>' . number_format($gia_avg, 2, '.', ',') . '</td>
                                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="index.php?act=bieudodanhmuc"> <input class="btn btn-primary my-1" type="button"
                value="Xem biểu đồ"></a>
    </div>
</div>
</main>