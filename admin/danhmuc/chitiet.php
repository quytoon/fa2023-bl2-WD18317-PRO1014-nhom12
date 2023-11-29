/<a href="index.php?act=listdanhmuc">Quản Lý danh mục</a></li>/<a
    href="index.php?act=chitietdanhmuc&idDanhMuc=<?= $_GET['idDanhMuc'] ?>">Chi tiết danh mục</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Chi tiết danh mục
        <?php extract($loadall_sp_dm);
        echo $loadall_sp_dm['0']['tenDanhMuc'] ?>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Tên Sản phẩm</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Số Lượng</th>
                    <th>Lượt xem</th>
                    <th>Trạng thái</th>
                    <th>Trạng thái</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach($loadall_sp_dm as $key) {
                    extract($key);
                    $suasp = "index.php?act=suasp&IdSanPham=" . $IdSanPham;
                    $xoasp = "index.php?act=xoasp&IdSanPham=" . $IdSanPham;
                    $img = '../upload/'.$img;
                    echo '<tr>
                                        <td>'.$TenSanPham.'</td>
                                        <td>'.$Gia.'</td>
                                        <td><img src="'.$img.'" height="80" width ="80"></td>
                                        <td>'.$MoTa.'</td>
                                        <td>'.$SoLuong.'</td>
                                        <td>'.$luotxem.'</td>';
                    if($trangThai == 1) {
                        echo '<td>Hiện</td>';
                    } else {
                        echo '<td>Ẩn</td>';
                    }

                    echo ' <td>
                                        <a href="'.$suasp.'"><input type="button" value="Sửa" class="btn btn-primary"></a> 
                                        <a href="'.$xoasp.'"><input type="button" value="Xóa" class="btn btn-primary" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td>
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