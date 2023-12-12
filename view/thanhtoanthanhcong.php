<section class="ftco-section">
	<div class="container">
		<div class="checkout-details-wrapper">
			<div class="row">
				<div class="col-lg-6 col-md-6 mx-auto">
					<!-- your-order-wrapper start -->
					<div class=" p-5">
						<!-- your-order-wrap start-->
						<div class=" border rounded px-5 pb-3">
							<div class="d-flex justify-content-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="96px" height="96px">
									<path fill="#c8e6c9"
										d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
									<path fill="#4caf50"
										d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z" />
								</svg>
							</div>
							<h5 class="text-success text-center fw-semibold">Đơn hàng đã đặt thành công! Cảm ơn bạn vì
								đã mua hàng.
							</h5>
							<ul class="fw-semibold">
								<?php 
								if (isset($_SESSION['post_data']['optradio']) && $_SESSION['post_data']['optradio'] == 1) {
									echo '
								<li>Mã đơn hàng: <span class="fw-light">
										' . $_SESSION["post_data"]["iddh"] . ' 
									</span></li>
								<li>Họ tên: <span class="fw-light">
								' . $_SESSION["post_data"]["hoten"] . ' 
									</span>
								</li>
								<li>Số điện thoại: <span class="fw-light">
								' . $_SESSION["post_data"]["sdt"] . '
									</span></li>
								<li>Địa chỉ giao: <span class="fw-light">
								' . $diachi . '
									</span>
								</li>
								<li>Ngày đặt hàng: <span class="fw-light">
								' . $load_donhang["0"]["NgayDatHang"] . '
									</span></li>
								<li>Tổng cộng: <span class="fw-light "></span>
								' . number_format($load_giohang["0"]["tong_bill"]) . ' vnđ</span>
								</li>
								<li>Phương thức thanh toán: <span class="fw-light">
											Thanh toán online				
									</span>
								</li>';
								} else {
									echo '
								<li>Mã đơn hàng: <span class="fw-light">
										' . $load_donhang['0']['IdDonHang'] . ' 
									</span></li>
								<li>Họ tên: <span class="fw-light">
								' . $_POST['hoten'] . ' 
									</span>
								</li>
								<li>Số điện thoại: <span class="fw-light">
								' . $_POST['sdt'] . '
									</span></li>
								<li>Địa chỉ giao: <span class="fw-light">
								' . $diachi . '
									</span>
								</li>
								<li>Ngày đặt hàng: <span class="fw-light">
								' . $load_donhang["0"]["NgayDatHang"] . '
									</span></li>
								<li>Tổng cộng: <span class="fw-light "></span>
								' . number_format($load_giohang["0"]["tong_bill"]) . ' vnđ</span>
								</li>
								<li>Phương thức thanh toán: <span class="fw-light">
											Thanh toán online				
									</span>
								</li>';
								} ?>
							</ul>
							<div class="row mt-3">
								<?php if (isset($_SESSION['TenTaiKhoan'])): ?>
									<a href="index.php?act=chitietdonhang&IdDonHang=<?php echo $load_donhang['0']['IdDonHang'] ?>"
										class="btn btn-outline-success px-2 py-1 justify-content-center">Xem đơn
										hàng</a>
									<a href="index.php"
										class="btn btn-outline-success px-2 py-1 justify-content-center mx-2">Về trang
										chủ</a>
								<?php endif ?>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
</section>