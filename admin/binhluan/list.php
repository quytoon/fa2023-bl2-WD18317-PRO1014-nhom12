<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách bình luận

    </div>
    <div class="card-body">
        <table id="datatablesSimple">
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
                        $xoabl = "index.php?act=xoabl&IdBinhLuan=" . $IdBinhLuan;
                        echo '<tr>
                                <td>' . $IdBinhLuan . '</td>
                                <td>' . $NoiDung . '</td>
                                <td>' . $IdTaiKhoan . '</td>
                                <td>' . $IdSanPham . '</td>
                                <td>' . $NgayBinhLuan . '</td>
                                <td>' . $DiemDanhGia . '</td>
                                <td>
                                    <a href="' . $xoabl . '"><button type="button" class="btn btn-danger">Xóa</button></a>
                                </td>
                            </tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
    </div>
