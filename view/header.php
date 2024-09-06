<!DOCTYPE html>
<html lang="en">

<head>
	<title>Website bán giày qoly</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
	<div class="py-1 bg-dark">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-phone2"></span></div>
							<span class="text">+ 1235 2355 98</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-paper-plane"></span></div>
							<span class="text">youremail@email.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">3-5 Business days delivery &amp; Free Returns</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">QPB SHOES</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="index.php?act=sanpham" class="nav-link">Cửa hàng</a></li>
					<li class="nav-item"><a href="index.php?act=giamgiafree" class="nav-link">Mã giảm giá free</a></li>
					<li class="nav-item"><a href="index.php?act=thongtin" class="nav-link">Thông tin</a></li>

					<li class="nav-item"><a href="index.php?act=lienhe" class="nav-link">Liên hệ</a></li>

					<li class="nav-item cta cta-colored"><a href="index.php?act=giohang" class="nav-link"><span
								class="icon-shopping_cart"></span>
							<?php if(isset($_SESSION['TenTaiKhoan'])) {
								extract(demsoluong_giohang($_SESSION['TenTaiKhoan']["IdTaiKhoan"]));
								echo $soluong;
							} else {
								echo "[0]";
							}
							?>
						</a></li>

					<?php
					if(isset($_SESSION['TenTaiKhoan'])) {
						extract($_SESSION['TenTaiKhoan']);
						?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">Hello
								<?= $TenTaiKhoan; ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<?php if($role == 1) { ?>
									<a href="index.php?act=dangxuat" class="dropdown-item">Đăng Xuất</a>
									<a href="index.php?act=thongtintaikhoan" class="dropdown-item">Thông tin tài khoản</a>
									<a href="index.php?act=donhang" class="dropdown-item">Đơn hàng</a>
									<a href="index.php?act=magiamgiacuaban" class="dropdown-item">Mã giảm giá của bạn</a>
							<li class="nav-item"><a href="admin/index.php" class="nav-link">Đăng nhập admin</a></li>
							<?php
								} else if($role == 0) {
									?>
								<a href="index.php?act=dangxuat" class="dropdown-item">Đăng Xuất</a>
								<a href="index.php?act=thongtintaikhoan" class="dropdown-item">Thông tin tài khoản</a>
								<a href="index.php?act=donhang" class="dropdown-item">Đơn hàng</a>
								<a href="index.php?act=magiamgiacuaban" class="dropdown-item">Mã giảm giá của bạn</a>
							<?php
								} else {
									?>
								<a href="index.php?act=dangxuat" class="dropdown-item">Đăng Xuất</a>
								<a href="index.php?act=thongtintaikhoan" class="dropdown-item">Thông tin tài khoản</a>
								<a href="index.php?act=donhang" class="dropdown-item">Đơn hàng</a>
								<a href="index.php?act=magiamgiacuaban" class="dropdown-item">Mã giảm giá của bạn</a>
								<li class="nav-item"><a href="admin_staff/index.php" class="nav-link">Đăng nhập nhân viên</a></li>
								
							<?php
								}
								?>
					<?php } else if(!isset($_SESSION['TenTaiKhoan'])) { ?>
							<li class="nav-item"><a href="index.php?act=dangky" class="nav-link">Đăng Ký</a></li>
							<li class="nav-item"><a href="index.php?act=dangnhap" class="nav-link">Đăng nhập</a></li>
					<?php } ?>
			</div>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	<!-- END nav -->