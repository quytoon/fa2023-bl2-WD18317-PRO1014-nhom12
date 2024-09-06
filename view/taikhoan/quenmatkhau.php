<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Tài khoản</span></p>
					<h1 class="mb-0 bread">Quên mật khẩu</h1>
				</div>
			</div>
		</div>
	</div>
    <!-- end banner -->
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                    <div class="small mb-3 text-muted">Nhập email của bạn sau đó chúng tôi sẽ gửi cho bạn mật khẩu mới</div>
                    <form method="POST" action="index.php?act=quenmk">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Email" type="email" name="Email"
                                placeholder="name@example.com" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="index.php?act=dangnhap">Quay lại trang đăng nhập</a>
                            <input type="submit" value="Gửi email" name="guimail">
                        <?php if(isset($sendMailMess) && $sendMailMess != '') {
                            echo $sendMailMess;
                        }?>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="index.php?act=dangky">Bạn chưa có tài khoản? Đăng ký ngay</a></div>
                </div>
            </div>
        </div>
    </div>