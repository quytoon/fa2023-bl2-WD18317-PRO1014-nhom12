
/<a href="index.php?act=listspbienthe">Quản Lý sản phẩm</a>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách sản phẩm bien the
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>ID San Pham bien the</th>
                <th>TÊN SẢN PHẨM</th>
                <th>Size</th>
                <th>Mau Sac</th>
                <th>So Luong</th>
                <th>TUỲ CHỌN</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listspbienthe as $value) {
//                $suasp = "index.php?act=suasp&IdSanPham=" . $IdSanPham;
//                $xoasp = "index.php?act=xoasp&IdSanPham=" . $IdSanPham;
//                $xoamemsp = "index.php?act=xoamemsp&IdSanPham=" . $IdSanPham;
                $xemct = "index.php?act=listspbienthe&IdSanPham=". $value['IdSanPham'];
                echo '<tr>
                    <td>' . $value['IdGiayBienThe'] . '</td>
                    <td>' . $value['TenSanPham']  . '</td>
                    <td>' .$value['IdSizeGiay']  . '</td>
                    <td>' . $value['IdMauSac']  . '</td>
                    <td>' . $value['SoLuong']  . '</td>
                   <td>
                    <a href=""><button type="button" class="btn btn-primary">Sửa</button></a>
                    <a href="" onclick="return confirmDelete()"><button type="button" class="btn btn-danger">Xóa</button></a>
                    <a href="" onclick="return confirmDelete()"><button type="button" class="btn btn-danger">Xóa mềm</button></a>
                   </td>

                </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="index.php?act=addspbienthe"> <input class="btn btn-primary my-1" type="button" value="NHẬP THÊM"></a>
    </div>
</div>
<script>
    function confirmDelete(deleteUrl) {
        if (confirm("Bạn có chắc muốn xóa không?")) {
            window.location.href = deleteUrl;
        }
    }
</script>