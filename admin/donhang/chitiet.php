/<a href="index.php?act=listdonhang">Quản Lý đơn hàng</a></li>/<a
    href="index.php?act=chitietdonhang&IdDonHang=<?= $_GET['IdDonHang'] ?>">Chi tiết đơn hàng</a></li>
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
                 function soSanhNgayDatHang($a, $b) {
                    return strtotime($a['NgayDatHang']) - strtotime($b['NgayDatHang']);
                }
                
                // Sắp xếp mảng $listdonhang theo ngày tăng dần
                usort($load_donhang, 'soSanhNgayDatHang');

                foreach($load_donhang as $key => $value) {
                    extract($value);
                    $img = '../upload/'.$img;
                    $ngay = $NgayDatHang;

                    // Chuyển đổi chuỗi ngày thành timestamp
                    $timestamp = strtotime($ngay);
                
                    // Định dạng lại ngày với định dạng mong muốn
                    $ngayDaDoi = date("d-m-Y", $timestamp);
                    echo '<tr>
                                <td>'.$IdDonHang.'</td>
                              
                                <td><img src="'.$img.'" height="80" width ="80"></td>
                                <td>'.$TenSanPham.'</td>
                                <td>'.number_format($Gia, 0, '.', ',').' VND</td>
                                <td>'.$SoLuong.'</td>
                              
                                <td>'.$ngayDaDoi.'</td>
            <td>' . $DiaChiDat . '</td>

                                <td>'.number_format($TongTien, 0, '.', ',').' VND</td>';                       
                                if($TrangThai == 1){
                                    echo "<td>Đang xác nhận</td>";
                                }if($TrangThai == 2){
                                    echo "<td>Đang giao hàng</td>";
                                }if($TrangThai == 3){
                                    echo "<td>Giao hàng thành công</td>";
                                }if($TrangThai == 0){
                                    echo "<td>Hủy</td>";
                                }                                 
                        '</tr>';
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