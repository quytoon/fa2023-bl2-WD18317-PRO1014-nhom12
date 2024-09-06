<div class="hero-wrap hero-bread" style="background-image: url('images/banner1.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Hóa đơn</span>
				</p>
				<h1 class="mb-0 bread">Hóa đơn</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7 ftco-animate">
				<form action="index.php?act=xacnhanthanhtoan" class="billing-form" method="POST">
					<h3 class="mb-4 billing-heading">Chi tiết thanh toán</h3>
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="form-group">
								<label for="firstname">Họ và tên</label>
								<?php extract($thongtinuser) ?>
								<input type="text" class="form-control" placeholder="" value="<?= $HoTen ?> "
									name="hoten">
								<input type="hidden" class="form-control" placeholder="" value="<?= $IdTaiKhoan ?>"
									name="id">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="firstname">Số điện thoại</label>
								<input type="text" class="form-control" placeholder="" value="<?= $SoDienThoai ?>"
									name="sdt">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="country">Thành Phố</label>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="thanhpho" id="thanhpho" class="form-control" required>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="country">Quận huyện</label>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="quanhuyen" id="quanhuyen" class="form-control" required>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="country">Xã</label>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="xa" id="xa" class="form-control" required>
									</select>
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="streetaddress">Địa chỉ chi tiết</label>
								<input type="text" class="form-control" placeholder="Số nhà" name="diachi" required>
							</div>
						</div>

						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="emailaddress">Địa Chỉ Email</label>
								<input type="text" class="form-control" placeholder="" name="email"
									value="<?= $Email ?>">
							</div>
						</div>
						<div class="w-100"></div>
					</div>

			</div>
			<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<div class="col-md-12 d-flex mb-5">
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Tổng hóa đơn</h3>
							<p class="d-flex">
								<b>Đơn hàng</b>
							</p>

							<?php
							foreach ($load_giohang as $key) {
								extract($key);
								echo '<p class="d-flex">
										<span>' . $TenSanPham . '<br> <b>Màu</b> ' . $TenMauSac . ' <b>Size</b> ' . $Size . ' x' . $SoLuongSp . '</span>
										  <span>' . number_format($tong_gia) . ' vnđ</span>
										  </p>';
							}
							?>

							<p class="d-flex">
								<span><b>Tổng đơn hàng</b></span>
								<?= '<span>' . number_format($load_giohang['0']['tong_bill']) . ' vnđ</span>' ?>
							</p>
							<p class="d-flex">
								<span><b>Giảm giá</b></span>
								<span>0.00</span>
							</p>
							<hr>
							<p class="d-flex total-price">
								<span>Tổng tiền</span>
								<span>
									<?= number_format($load_giohang['0']['tong_bill']) . ' vnđ' ?>
								</span>
							</p>
						</div>
					</div>
					<div class="col-md-12">
						<div class="cart-detail p-3 p-md-4">
							<h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2" value="1"> Thanh toán
											qua chuyển
											khoản ngân hàng</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2" value="2" checked> Thanh
											toán
											khi nhận
											hàng</label>
									</div>
								</div>
							</div>
							<input type="submit" class="btn btn-primary py-3 px-4" value="Thanh toán" name="thanhtoan">
							</form><!-- END -->
						</div>
					</div>
				</div>
			</div> <!-- .col-md-8 -->
		</div>
	</div>
</section> <!-- .section -->
<script>
	function loadtinhthanh() {
		const apiDiaChi = "https://provinces.open-api.vn/api/?depth=3";

		fetch(apiDiaChi)
			.then(response => response.json())
			.then(data => {
				const quanSelect = document.getElementById("quanhuyen");
				const phuongSelect = document.getElementById("xa");
				const thanhPhoSelect = document.getElementById("thanhpho");

				data.forEach(item => {
					let option = document.createElement("option");
					option.value = `${item.name}`;
					option.text = `${item.name}`;
					thanhPhoSelect.add(option);
				});

				thanhPhoSelect.addEventListener("change", displayDistricts);
				quanSelect.innerHTML = "<option value=''>Chọn quận</option>";
				phuongSelect.innerHTML = "<option value=''>Chọn phường</option>";
				function displayDistricts() {
					// Clear Quận and Phường select
					// Get the selected Thành phố code
					const selectedCityCode = thanhPhoSelect.value;

					// Find the selected city in the data
					const selectedCity = data.find(item => item.name == selectedCityCode);

					// Populate Quận select with districts of the selected city
					selectedCity.districts.forEach(district => {
						let option = document.createElement("option");
						option.value = district.name;
						option.text = district.name;
						quanSelect.add(option);
					});
				}

				quanSelect.addEventListener("change", displayWards);

				function displayWards() {
					// Clear Phường select
					phuongSelect.innerHTML = "<option value=''>Chọn phường</option>";

					// Get the selected Quận code
					const selectedDistrictCode = quanSelect.value;

					// Find the selected district in the data
					const selectedDistrict = data.flatMap(item => item.districts).find(district => district.name == selectedDistrictCode);

					// Populate Phường select with wards of the selected district
					selectedDistrict.wards.forEach(ward => {
						let option = document.createElement("option");
						option.value = ward.name;
						option.text = ward.name;
						phuongSelect.add(option);
					});
				}
			});
	}
	loadtinhthanh();
</script>