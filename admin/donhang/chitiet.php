/<a href="index.php?act=listdanhmuc">Quản Lý danh mục</a></li>/<a
    href="index.php?act=chitietdanhmuc&idDanhMuc=<?= $_GET['idDanhMuc'] ?>">Chi tiết danh mục</a></li>
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
                    <th>Tên khách hàng</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Ngày đặt hàng</th>
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
                                <td>'.$TenTaiKhoan.'</td>
                                <td><img src="'.$img.'" height="80" width ="80"></td>
                                <td>'.$TenSanPham.'</td>
                                <td>'.$Gia.'</td>
                                <td>'.$SoLuong.'</td>
                                <td>'.$NgayDatHang.'</td>
                                <td>'.$SoLuongSp.'</td>
                                <td>'.$SoLuongSp.'</td>
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