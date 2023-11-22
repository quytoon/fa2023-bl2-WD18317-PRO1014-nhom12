/<a href="index.php?act=thongketaikhoan">Thống kê tài khoản</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thống kê tài khoản khách hàng
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>TÊN TÀI KHOẢN</th>
                    <th>HỌ TÊN KHÁCH HÀNG</th>
                    <th>ĐỊA CHỈ</th>
                    <th>SỐ ĐIỆN THOẠI</th>
           
                </tr>
            </thead>
            <!-- <tfoot>
                <tr>
                    <th>TÊN LOẠI</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ NHỎ NHẤT(VNĐ)</th>
                    <th>GIÁ LỚN NHẤT(VNĐ)</th>
                    <th>GIÁ TRUNG BÌNH(VNĐ)</th>
                </tr>
            </tfoot> -->
            <tbody>
                <?php
                foreach ($thongketk as $key) {
                    extract($key);
                    // $hinhpart = "../upload/" . $avatarUser;
                    if($role == 0){
                        echo '<tr>
                        <td>' . $TenTaiKhoan . '</td>
                        <td>' . $HoTen . '</td>
                        <td>' . $DiaChi . '</td>
                        <td>' . $SoDienThoai . '</td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="index.php?act=bieudotaikhoan"> <input class="btn btn-primary my-1" type="button"
                value="Xem biểu đồ"></a>
    </div>
</div>
</main>