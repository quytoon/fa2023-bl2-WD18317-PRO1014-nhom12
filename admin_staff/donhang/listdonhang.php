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
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Ngày đặt hàng</th>
                    <th>Nơi nhận hàng</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id đơn hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Ngày đặt hàng</th>
                    <th>Nơi nhận hàng</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </tfoot>
            <tbody>
                <?php


                foreach ($listdonhang as $key) {
                    extract($key);
                    $chitietdonhang = "index.php?act=chitietdonhang&IdChiTietDonHang=" . $IdDonHang;

                    echo '<tr>
            <td>' . $IdDonHang . '</td>
            <td>' . $TenTaiKhoan . '</td>
            <td>' . $SoDienThoai . ' </td>
            <td>' . $NgayDatHang . '</td>
            <td>' . $DiaChiDat . '</td>
            <td>
            <form method="post" action="index.php?act=updatetrangthai&IdDonHang=' . $IdDonHang . '">
                <select name="luachon" >
                    <option value ="0" ' . ($tt == 0 ? 'selected' : 'disabled') . '>Chờ xác nhận</option>
                    <option value ="1" ' . ($tt == 1 ? 'selected' : ($tt > 1 ? 'disabled' : '')) . '>Đã xác nhận</option>
                    <option value ="2" ' . ($tt == 2 ? 'selected' : ($tt > 2 ? 'disabled' : '')) . '>Đang giao hàng</option>
                    <option value ="3" ' . ($tt == 3 ? 'selected' : ($tt > 3 ? 'disabled' : '')) . '>Giao hàng thành công</option>
                    <option value ="4" ' . (($tt == 2 || $tt == 3) ? 'disabled' : ($tt == 4 ? 'selected' : '')) . '>Hủy</option>
                </select>'; ?>
                    <button type="submit" name="capnhat" onclick="return confirm('Bạn có chắc chắn thay đổi trạng thái đơn hàng?')">Cập
                        nhật</button>
                    <?php
                    echo '
            </form>
        </td>

            <td>
                <a href="' . $chitietdonhang . '"><input type="submit" value="Xem chi tiết">
            </td>
          </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</main>