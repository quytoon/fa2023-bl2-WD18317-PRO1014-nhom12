<?php
extract($_SESSION['TenTaiKhoan']);
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span>/ <span>Đơn
						hàng của bạn</span></p>
				<h1 class="mb-0 bread">Đơn hàng</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table" style="width: 1100px">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Mã Đơn Hàng</th>
								<!-- <th>Tên sản phẩm</th> -->
								<th>Số lượng đơn hàng</th>
								<th>Nơi nhận</th>
								<th>Tình trạng</th>
								<th>Hành động</th>
								<th>&nbsp;</th>

							</tr>
						</thead>
						<tbody>
							<!-- <td class="product-remove"><a href="index.php?act=xoagiohang&idsp='.$IdSanPham.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><span class="ion-ios-close"></span></a></td> -->
							<?php
							foreach($load_donhang as $key) {
								extract($key);
								$linkdh = "index.php?act=chitietdonhang&IdDonHang=".$IdDonHang;
								echo '
								<tr class="text-center">
								
								<td class="product-name" style="width:200px">
									<h3>'.$IdDonHang.'</h3>
								</td>
							
								<td class="quantity">
									<div class="row">
										
										<div class="col"><input type="text" id="quantity" name="quantity"
												class="form-control input-number" value="'.$soluong.'" min="1" max="100" readonly></div>
										
									</div>
								</td>
							
								<td >'.$DiaChiDat.' </td>
								
								<td class="role">';
								if($TrangThai == 0) {
									echo "Chờ xác nhận
									
						 <a class='btn btn-primary' href='index.php?act=huydonhang&IdDonHang=$IdDonHang' onclick='return confirm('Bạn có chắc chắn muốn hủy đơn hàng này')'>Hủy</a>";

								} else if($TrangThai == 1) {
									echo "Đã xác nhận
									
						<a class='btn btn-primary' href='index.php?act=huydonhang&IdDonHang=$IdDonHang' onclick='return confirm('Bạn có chắc chắn muốn hủy đơn hàng này')'>Hủy</a>";
								} else if($TrangThai == 2) {
									echo "Đang giao hàng
									
						 <a class='btn btn-primary' href='index.php?act=huydonhang&IdDonHang=$IdDonHang' onclick='return confirm('Bạn có chắc chắn muốn hủy đơn hàng này')'>Hủy</a>";
								} else if($TrangThai == 3) {
									echo "Giao hàng thành công";
								} else if($TrangThai == 4) {
									echo "Đã hủy";
								}

								echo '<td><a href="'.$linkdh.'"><input type="submit" value="Xem chi tiết" class="btn btn-primary"></td>
							</tr><!-- END TR-->
								';
							}
							?>
							<!-- <div class="col"><button type="button" class="quantity-left-minus btn"
												data-type="minus" data-field="">
												<i class="ion-ios-remove"></i>
											</button>
							</div>
								 day la button them hoac giam so luong

											<div class="col"><button type="button" class="quantity-right-plus btn"
												data-type="plus" data-field="">
												<i class="ion-ios-add"></i>
							
											</button></div> -->
							<!-- <input type="submit" value="Xem chi tiết"> -->
						</tbody>

					</table>
				</div>
			</div>
		</div>

	</div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
</script>