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
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Tổng</th>
							</tr>
						</thead>
						<tbody>

							<?php
							foreach ($load_donhang as $key) {
								extract($key);
								$img = $img_path . $img;
								$toltal = $Gia * $SoLuongSp;
								global $bill;
								$bill += $toltal;
								echo '
								<tr class="text-center">
								<td class="product-remove"><a href="index.php?act=xoagiohang&idsp='.$IdSanPham.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><span class="ion-ios-close"></span></a></td>

								<td class="image-prod">
									<div class="img" style="background-image:url(' . $img . ');"></div>
								</td>

								<td class="product-name">
									<h3>' . $TenSanPham . '</h3>
								</td>

								<td class="price">' . number_format($Gia, 0, '.', ',') . ' vnđ</td>

								<td class="quantity">
									<div class="row">
										
										<div class="col"><input type="text" id="quantity" name="quantity"
												class="form-control input-number" value="' . $SoLuongSp . '" min="1" max="100"></div>
										
									</div>
								</td>

								<td class="total">' . number_format($toltal, 0, '.', ',') . ' vnđ</td>
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
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Mã giảm giá</h3>
					<p>Chọn mã giảm giá của bạn</p>
					<form action="#" class="info">
						<div class="form-group">
							<label for="">Mã giảm giá</label>
							<input type="text" class="form-control text-left px-3" placeholder="">
						</div>
					</form>
				</div>
				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Áp dụng</a></p>
			</div>
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Nhập đỉa chị nhận hàng của bạn</h3>
					<form action="#" class="info">
						<div class="form-group">
							<label for="">Tỉnh/Thành phố</label>
							<input type="text" class="form-control text-left px-3" placeholder="">
						</div>
						<div class="form-group">
							<label for="country">Quận/Huyện</label>
							<input type="text" class="form-control text-left px-3" placeholder="">
						</div>
						<div class="form-group">
							<label for="country">Phường/Xã</label>
							<input type="text" class="form-control text-left px-3" placeholder="">
						</div>
						<div class="form-group">
							<label for="country">Địa chỉ chi tiết</label>
							<input type="text" class="form-control text-left px-3" placeholder="">
						</div>
					</form>
				</div>
				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Xác nhận</a></p>
			</div>
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Tổng tiền</h3>
					<p class="d-flex">
						<span>Tổng phụ</span>
						<span>
							<?= number_format($bill, 0, '.', ',') ?> vnđ
						</span>
					</p>
					<p class="d-flex">
						<span>Phí vận chuyển</span>
						<span>$0.00</span>
					</p>
					<p class="d-flex">
						<span>Giảm giá</span>
						<span>$3.00</span>
					</p>
					<hr>
					<p class="d-flex total-price">
						<span>Tổng</span>
						<span>
							<?= number_format($bill, 0, '.', ',') ?> vnđ
						</span>
					</p>
				</div>
				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Thanh toán</a></p>
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
