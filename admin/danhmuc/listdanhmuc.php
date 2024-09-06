/<a href="index.php?act=listdanhmuc">Quản Lý danh mục</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách danh mục
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Tên Danh Mục</th>
                    <th>Số lượng sản phẩm trong danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Tên Danh Mục</th>
                    <th>Số lượng sản phẩm trong danh mục</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($listdanhmuc as $key) {
                    extract($key);
                    $chitietdanhmuc = "index.php?act=chitietdanhmuc&idDanhMuc=" . $idDanhMuc;
                    $suadm = "index.php?act=updatedanhmuc&idDanhMuc=" . $idDanhMuc;
                    $xoadm = "index.php?act=xoadm&idDanhMuc=" . $idDanhMuc;
                    $xoamemdm = "index.php?act=xoamemdm&idDanhMuc=" . $idDanhMuc;
                    echo '<tr>
                                        <td>' . $tenDanhMuc . '</td>
                                        <td>' . $SoLuong . '</td>
                                        <td>' . $SoLuong . '</td>
                                        <td>
                                        <a href="' . $chitietdanhmuc . '"><input type="button" value="Xem chi tiết" class="btn btn-primary"></a> 
                                        <a href="' . $suadm . '"><input type="button" value="Sửa" class="btn btn-primary"></a> 
                                        <a href="' . $xoadm . '"><input type="button" value="Xóa" class="btn btn-primary" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a></td>
                        
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
