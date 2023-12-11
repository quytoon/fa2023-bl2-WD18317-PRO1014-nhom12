<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Giỏ
						hàng</span></p>
				<h1 class="mb-0 bread">Giỏ hàng</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<form action="index.php?act=giohang" method="post">
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
								foreach($load_giohang as $key) {
									extract($key);
									$img = $img_path.$img;
									echo '
								<tr class="text-center">
								<td class="product-remove"><a href="index.php?act=xoagiohang&idsp='.$IdSanPham.'&mau='.$IdMauSac.'&size='.$IdSizeGiay.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><span class="ion-ios-close"></span></a></td>
								<input type="hidden" name="idsp" value="'.$IdSanPham.'">
								<td class="image-prod">
									<div class="img" style="background-image:url('.$img.');"></div>
								</td>
								<td class="product-name">
									<a href="index.php?act=chitietsanpham&idsp='.$IdSanPham.'"><h3>'.$TenSanPham.'</h3></a>
									<h6>Màu: '.$TenMauSac.'</h6>
									<h6>Size: '.$Size.'</h6>
									
								</td>
								<td class="price">'.number_format($Gia, 0, '.', ',').' vnđ</td>
								<td class="quantity">
									<div class="row">
										</div>
										<div class="col"><input type="text" id="quantity" name="quantity[' . $IdSanPham . '][' . $IdMauSac . '][' . $IdSizeGiay . ']"
												class="form-control input-number" value="'.$SoLuongSp.'" min="1" max="100"></div>
									</div>
								</td>
								<td class="total">'.number_format($tong_gia, 0, '.', ',').' vnđ</td>
							</tr><!-- END TR-->
								';
								}
								?>
							</tbody>
							<tfoot>
								<input type="submit" value="Cập nhật giỏ hàng" name="update" >
							</tfoot>
						</table>
					</form>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
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
				<p><a href="index.php?act=giamgia" class="btn btn-primary py-3 px-4">Áp dụng</a></p>
			</div>	
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Tổng tiền</h3>
					<p class="d-flex">
						<span>Tổng phụ</span>
						<span>
							<?php 
							if(isset($load_giohang['0']['tong_bill'])){
								echo number_format($load_giohang['0']['tong_bill'], 0, '.', ',')."VNĐ";
							}
							?> 
						</span>
					</p>
					<p class="d-flex">
						<span>Phí vận chuyển</span>
						<span>0.00</span>
					</p>
					<p class="d-flex">
						<span>Giảm giá</span>
					</p>
					<hr>
					<p class="d-flex total-price">
						<span>Tổng</span>
						<span>
							<?php
							if(isset($load_giohang['0']['tong_bill'])){
								echo number_format($load_giohang['0']['tong_bill'], 0, '.', ',')."VNĐ";
							} ?>
						</span>
					</p>
				</div>
				<p><a href="index.php?act=thanhtoan" class="btn btn-primary py-3 px-4">Thanh toán</a></p>
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