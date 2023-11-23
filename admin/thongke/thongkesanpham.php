/<a href="index.php?act=thongkesanpham">Thống kê sản phẩm</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thống kê sản phẩm theo bình luận
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>ẢNH</th>
                <th>MÔ TẢ</th>
                <th>SỐ LƯỢNG</th>
                <th>SỐ LƯỢNG BÌNH LUẬN</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($thongkesp as $key) {
                extract($key);
                $hinhpart = '../upload/' . $img;
                if (is_file($hinhpart)) {
                    $hinhpart = "<img src='" . $hinhpart . "' height='100px' width='100px' />";
                } else {
                    $hinhpart = 'no photo';
                }

                echo '<tr>
                        <td>' . $TenSanPham . '</td>
                        <td>' . $Gia . '</td>
                        <td>' . $hinhpart . '</td>
                        <td>' . $MoTa . '</td>
                        <td>' . $SoLuong . '</td>
                     
                        <td>' . $soluong_binhluan . '</td>';
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="index.php?act=bieudosanpham"> <input class="btn btn-primary my-1" type="button"
                                                       value="Xem biểu đồ"></a>
    </div>
</div>
</main>
