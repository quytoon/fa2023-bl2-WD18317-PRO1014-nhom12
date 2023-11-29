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
                    <th>Hành động</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id đơn hàng</th>
                    <th>Sản phẩm</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>

                </tr>
            </tfoot>
            <tbody>
            <?php
foreach ($listdonhang as $key) {
    extract($key);
    $chitietdonhang = "index.php?act=chitietdonhang&IdDonHang=" . $IdDonHang;
    echo '<tr>
            <td>' . $IdDonHang . '</td>
            <td>' . $TenSanPham . '</td>
            <td>' . $NgayDatHang . '</td>
            <td>' . number_format($TongTien, 0, '.', ',') . ' VND</td>
            <td>
                <form method="post" action="index.php?act=updatetrangthai&IdDonHang='.$IdDonHang.'">
                    <select name="luachon">
                        <option value ="1" ' . ($TrangThai == 1 ? 'selected' : '') . '>Đang xác nhận</option>
                        <option value ="2" ' . ($TrangThai == 2 ? 'selected' : '') . '>Đang giao hàng</option>
                        <option value ="3" ' . ($TrangThai == 3 ? 'selected' : '') . '>Giao hàng thành công</option>
                        <option value ="0" ' . ($TrangThai == 0 ? 'selected' : '') . '>Hủy</option>
                    </select>
                    <button type="submit" name="capnhat">Cập nhật</button>
                </form>
            </td>

            <td>"
                <a href="'.$chitietdonhang.'"><input type="submit" value="Xem chi tiết">
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
