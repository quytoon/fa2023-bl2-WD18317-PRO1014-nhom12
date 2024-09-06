/<a href="index.php?act=listdonhang">Quản Lý đơn hàng</a></li>/<a
    href="index.php?act=chitietdonhang&IdDonHang=<?= $_GET['IdChiTietDonHang'] ?>">Chi tiết đơn hàng</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Chi tiết đơn hàng
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID đơn hàng</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Nơi nhận hàng</th>
                    <th>Tổng đơn hàng</th>
                    <th>Trạng thái</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach($load_donhang as $key => $value) {
                    extract($value);
                    $img = '../upload/'.$img;           
                    echo '<tr>
                                <td>'.$IdDonHang.'</td>
                              
                                <td><img src="'.$img.'" height="80" width ="80"></td>
                                <td>'.$TenSanPham.'</td>
                                <td>'.number_format($Gia, 0, '.', ',').' VND</td>
                                <td>'.$SoLuongChiTiet.'</td>
                              
                                <td>'.$NgayDatHang.'</td>
            <td>' . $DiaChiDat . '</td>

                                <td>'.number_format($Tong, 0, '.', ',').' VND</td>';                       
                                if($TrangThai == 1){
                                    echo "<td>Đang xác nhận</td>";
                                }if($TrangThai == 2){
                                    echo "<td>Đang giao hàng</td>";
                                }if($TrangThai == 3){
                                    echo "<td>Giao hàng thành công</td>";
                                }if($TrangThai == 5){
                                    echo "<td>Hủy</td>";
                                }                                 
                        '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
</main>