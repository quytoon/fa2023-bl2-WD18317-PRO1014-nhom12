/<a href="index.php?act=thongkegiohang">Thống kê giỏ hàng</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Thống kê giỏ hàng theo sản phẩm
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>TÊN USER</th>
                                <th>SỐ LƯỢNG SẢN PHẨM</th>
                                <th>TỔNG GIÁ TRỊ GIỎ HÀNG(VNĐ)</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>TÊN USER</th>
                                <th>SỐ LƯỢNG SẢN PHẨM TRONG GIỎ HÀNG</th>
                                <th>TỔNG GIÁ TRỊ GIỎ HÀNG(VNĐ)</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            foreach ($thongkegiohang as $key) {
                                extract($key);
                                echo '<tr>
                                        <td>' . $TenTaiKhoan . '</td>
                                        <td>' . $soLuong . '</td>
                                        <td>' . number_format($tongTien, 2, '.', ',') . '</td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="index.php?act=bieudogiohang"> <input class="btn btn-primary my-1" type="button"
                            value="Xem biểu đồ"></a>
                </div>
            </div>

    </main>