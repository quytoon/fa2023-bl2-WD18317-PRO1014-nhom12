
        /<a href="index.php?act=lissp">Quản Lý sản phẩm</a>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Danh sách sản phẩm
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>ID SP</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>LƯỢT MUA SẢN PHẨM</th>
                        <th>So Luong</th>
                        <th>TUỲ CHỌN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($listsanpham as $lissp) {
                        extract($lissp);
                            $suasp = "index.php?act=suasp&IdSanPham=" . $IdSanPham;
                            $xoasp = "index.php?act=xoasp&IdSanPham=" . $IdSanPham;
                            $xoamemsp = "index.php?act=xoamemsp&IdSanPham=" . $IdSanPham;
                            $xemct = "index.php?act=listspbienthe&IdSanPham=". $IdSanPham;
                            $hinh = '../upload/' . $img;

                            if (is_file($hinh)) {
                                $hinh = "<img src='" . $hinh . "' height='100px' width='100px' />";
                            } else {
                                $hinh = 'no photo';
                            }

                            echo '<tr>
            <td>' . $IdSanPham . '</td>
            <td>' . $TenSanPham . '</td>
            <td>' . $hinh . '</td>
            <td>' . $Gia . '</td>
            <td>' . $luotmua . '</td>
            <td>' . $SoLuong . ' </td>
            <td>
           <a href="' . $xemct . '"><button type="button" class="btn btn-primary">xem chi tiet </button></a>
                <a href="' . $suasp . '"><button type="button" class="btn btn-primary">Sửa</button></a>
                <a href="' . $xoasp . '" onclick="return confirmDelete(\'' . $xoasp . '\')"><button type="button" class="btn btn-danger">Xóa</button></a>
                <a href="' . $xoamemsp . '" onclick="return confirmDelete(\'' . $xoamemsp . '\')"><button type="button" class="btn btn-danger">Xóa mềm</button></a>
            </td>
        </tr>';

                    }
                    ?>

                    </tbody>
                </table>
                <a href="index.php?act=capnhatsp" class="btn btn-dark">ReLoad</a>
            </div>
            <div class="card-footer">
                <a href="index.php?act=addsp"> <input class="btn btn-primary my-1" type="button" value="NHẬP THÊM"></a>
            </div>
        </div>
        <script>
            function confirmDelete(deleteUrl) {
                if (confirm("Bạn có chắc muốn xóa không?")) {
                    window.location.href = deleteUrl;
                }
            }
        </script>