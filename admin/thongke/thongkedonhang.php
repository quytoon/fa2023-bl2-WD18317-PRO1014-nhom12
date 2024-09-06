/<a href="index.php?act=thongkedonhang">Thống kê đơn hàng</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Thống kê đơn hàng theo khách hàng
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>TÊN USER</th>
                                <th>SỐ LƯỢNG</th>
                                <th>NGÀY ĐẶT HÀNG</th>
                                <th>TỔNG TIỀN(VNĐ)</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>TÊN USER</th>
                                <th>NGÀY ĐẶT HÀNG</th>
                                <th>TỔNG TIỀN(VNĐ)</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            <?php
                            foreach ($listthongkedonhang as $key) {
                                extract($key);
                                echo '<tr>
                                        <td>' . $TenTaiKhoan . '</td>
                                        <td>' . $SoLuongSp . '</td>  
                                        <td>' . $NgayDatHang . '</td>
                                        <td>' . $TongTien . '</td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="card-footer">
                    <a href="index.php?act=bieudogiohang"> <input class="btn btn-primary my-1" type="button"
                            value="Xem biểu đồ"></a>
                </div> -->
            </div>

    </main>