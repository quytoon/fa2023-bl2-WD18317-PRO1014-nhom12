/<a href="index.php?act=listgiohang">Quản Lý giỏ Hàng</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách giỏ hàng
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Tên User</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Tổng giá trị giỏ hàng(VNĐ)</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Tên User</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Tổng giá trị giỏ hàng(VNĐ)</th>
                    <th>Hành động</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($listgiohang as $key) {
                    extract($key);
                    $suagh = "index.php?act=chitietgiohang&IdTaiKhoan=" . $IdTaiKhoan;
                    $xoagh = "index.php?act=xoagiohang&IdTaiKhoan=" . $IdTaiKhoan;

                    echo '<tr>
                                        <td>' . $TenTaiKhoan . '</td>
                                        <td>' . $soLuong . '</td>
                                        <td>' . number_format($tongTien, 2, '.', ',') . '</td>
                                        <td>
                                        <a href="' . $suagh . '"><input type="button" value="Sửa" class="btn btn-primary"></a> 
                                        <a href="' . $xoagh . '"><input type="button" value="Xóa" class="btn btn-primary" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td>
                                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
    </div>
</div>
</main>