 /<a href="index.php?act=listgiohang">Quản Lý giỏ Hàng</a>/ <a href="index.php?act=chitietgiohang&IdTaiKhoan=<?=$_GET["IdTaiKhoan"]?>">Chi tiết giỏ hàng</a></li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Chi tiết giỏ hàng
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Ảnh Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng Tiền</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($chitietgiohang as $key) {
                    extract($key);
                    $img = $img_path . $img;
                    $toltal = $Gia * $SoLuongSp;
                    echo '
								<tr >
								<td class="image-prod">
                                    <img src="../' . $img . '" alt="" width="70px">
								</td>

								<td class="product-name">
									' . $TenSanPham . '
								</td>

								<td class="price">' . number_format($Gia, 0, '.', ',') . ' vnđ</td>

								<td class="quantity">
									<div class="row">
                                    <!-- <div class="col"><button type="button" class="quantity-left-minus btn"
												data-type="minus" data-field="">
												<i class="fa-solid fa-minus"></i>
											</button>

										</div>-->
										<div class="col"><input type="text" id="quantity" name="quantity"
												class="form-control input-number" value="' . $SoLuongSp . '" min="1" max="100" disabled></div>
                                                <!-- <div class="col"><button type="button" class="quantity-right-plus btn"
												data-type="plus" data-field="">
												<i class="fa-solid fa-plus"></i>
											</button></div>-->
									</div>
								</td>

								<td class="total">' . number_format($toltal, 0, '.', ',') . ' vnđ</td>
                                <td><a href="index.php?act=xoaspgiohang&idsp=' . $IdSanPham . '&IdTaiKhoan=' . $_GET["IdTaiKhoan"] . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><input class="btn btn-primary my-1" type="button"
                                value="Xóa"><span class="ion-ios-close"></span></a></td>
							</tr><!-- END TR-->
								';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
    </div>
</div>
</main>
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Xử lý sự kiện khi nút giảm số lượng được click
            $(".quantity-left-minus").click(function () {
                // Lấy giá trị hiện tại của ô nhập
                var quantity = parseInt($("#quantity").val());

                // Giảm giá trị nếu nó lớn hơn giá trị tối thiểu
                if (quantity > 1) {
                    $("#quantity").val(quantity - 1);
                }
            });

            // Xử lý sự kiện khi nút tăng số lượng được click
            $(".quantity-right-plus").click(function () {
                // Lấy giá trị hiện tại của ô nhập
                var quantity = parseInt($("#quantity").val());

                // Tăng giá trị nếu nó nhỏ hơn giá trị tối đa
                if (quantity < 100) {
                    $("#quantity").val(quantity + 1);
                }
            });
        });
    </script> -->