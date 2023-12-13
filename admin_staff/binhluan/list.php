<!-- <div class="container d-flex align-items-center justify-content-center vh-100"> -->
    <div class="row-cols-md-12 ">
        <div class="mb-8 font_title text-center">
            <h1>DANH SÁCH BÌNH LUẬN</h1>
        </div>
        <form action="#" method="POST">
            <div class="mb-3 formds_loai">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nội dung</th>
                        <th>ID User</th>
                        <th>ID Product</th>
                        <th>Ngày bình luận</th>
                        <th>Điểm đánh giá </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($listbinhluan as $bl) {
                        extract($bl);
                       
                        $xoamembl = "index.php?act=xoamembl&IdBinhLuan=" . $IdBinhLuan;
                       if($TrangThai == 0){
                        echo '<tr>
                        <td>' . $IdBinhLuan . '</td>
                        <td>' . $NoiDung . '</td>
                        <td>' . $IdTaiKhoan . '</td>
                        <td>' . $IdSanPham . '</td>
                        <td>' . $NgayBinhLuan . '</td>
                        <td>' . $DiemDanhGia . '</td>
                        <td>
                           
                            <a href="' . $xoamembl . '"><button type="button" class="btn btn-danger" onclick="return confirm(\'Bạn có chắc chắn muốn ẩn đi bình luận này?\')">Xóa</button></a>
                        </td>
                    </tr>';
                       }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
<!-- </div> -->
