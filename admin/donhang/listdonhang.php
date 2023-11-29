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
                    <th>Sản phẩm</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <!-- <th>Hành động</th> -->
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id đơn hàng</th>
                    <th>Sản phẩm</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <!-- <th>Hành động</th> -->

                </tr>
            </tfoot>
            <tbody>
            <?php
foreach ($listdonhang as $key) {
    extract($key);
    echo '<tr>
            <td>' . $IdDonHang . '</td>
            <td>' . $TenSanPham . '</td>
            <td>' . $NgayDatHang . '</td>
            <td>' . $TongTien . '</td>
            <td>
                <select class="status-select" name="status_select[]" data-row-id="' . $IdDonHang . '" onchange="toggleOptions(this)">
                    <option value="a">Đang chờ đơn vị vận chuyển</option>
                    <option value="b">Đang giao hàng</option>
                    <option value="c">Giao hàng thành công</option>
                </select>
            </td>
          </tr>';
}
?> 
                <!-- $suadh = "index.php?act=updatedonhang&IdDonHang=" . $IdDonHang;
                $xoadh = "index.php?act=xoadh&IdDonHang=" . $IdDonHang; -->
                <!-- <a href="' . $suadh . '"><input type="button" value="Sửa" class="btn btn-primary"></a> 
                <a href="' . $xoadh . '"><input type="button" value="Xóa" class="btn btn-primary" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td> -->
            </tbody>
        </table>
    </div>
    
<!-- // if (selectedOption === 'b') {
//         optionA.style.display = 'none';
//     } else if (selectedOption === 'c') {
//         optionA.style.display = 'none';
//         optionB.style.display = 'none';
//     } else {
//         optionA.style.display = 'block';
//         optionB.style.display = 'block';
//     } -->

    <!-- <div class="card-footer">
        <a href="index.php?act=adddanhmuc"> <input class="btn btn-primary my-1" type="button" value="NHẬP THÊM"></a>
    </div> -->
</div>
</main>
