/<a href="index.php?act=listdanhmuc">Quản Lý đơn hàng</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách đơn hàng
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Hành động</th>

                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($listdonhang as $key) {
                    extract($key);
                    $suadh = "index.php?act=updatedonhang&IdDonHang=" . $IdDonHang;
                    $xoadh = "index.php?act=xoadh&IdDonHang=" . $IdDonHang;
                    echo '<tr>
                                        <td>' . $IdDonHang . '</td>
                                        <td>' . $NgayDatHang . '</td>
                                        <td>' . $TongTien . '</td>
                                        <td>
                                        <a href=""><input type="button" value="Xem chi tiết" class="btn btn-primary"></a> 
                                        <a href="' . $suadh . '"><input type="button" value="Sửa" class="btn btn-primary"></a> 
                                        <a href="' . $xoadh . '"><input type="button" value="Xóa" class="btn btn-primary" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td>
                                        </td>
                                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="index.php?act=adddanhmuc"> <input class="btn btn-primary my-1" type="button" value="NHẬP THÊM"></a>
    </div>
</div>
</main>
