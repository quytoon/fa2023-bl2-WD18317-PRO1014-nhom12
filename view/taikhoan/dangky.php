<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Tài khoản</span></p>
					<h1 class="mb-0 bread">Đăng Ký</h1>
				</div>
			</div>
		</div>
	</div>
<div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                  <h2 class="my-4">Đăng Ký</h2>
                <form method="POST" action="index.php?act=dangky">
                    <div class="mb-3">
                        <label for="TenTaiKhoan" class="form-label">Tài khoản</label>
                        <input type="text" name="TenTaiKhoan" class="form-control" id="TenTaiKhoan" placeholder="Nhập tài khoản">
                    </div>
                    <?php 
                        if(isset($thongbao1) && ($thongbao1 != "")) {
                        echo "<p style='color:red'>$thongbao1</p>";
                        }
                    ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="Email" class="form-control" id="email" placeholder="Nhập địa chỉ email của bạn">
                    </div>
                    <?php 
                        if(isset($thongbao2) && ($thongbao2 != "")) {
                        echo "<p style='color:red'>$thongbao2</p>";
                        }
                    ?>
                    <div class="mb-3">
                        <label for="matKhau" class="form-label">Mật Khẩu</label>
                        <input type="password" name="MatKhau" class="form-control" id="MatKhau" placeholder="Nhập mật khẩu của bạn">
                    </div>
                    <?php 
                        if(isset($thongbao) && ($thongbao != "")) {
                        echo "<p style='color:red'>$thongbao</p>";
                        }
                    ?>
                    <div class="mb-3">
                        <label for="matKhau" class="form-label">Xác nhận mật khẩu</label>
                        <input type="password" name="MatKhau2" class="form-control" id="MatKhau" placeholder="Nhập mật khẩu của bạn">
                    </div>
                    <?php 
                        if(isset($thongbao) && ($thongbao != "")) {
                        echo "<p style='color:red'>$thongbao</p>";
                        }
                    ?>
                    <input type="submit" name="dangky" value="Đăng Ký" class="btn btn-primary"></input>
                    <?php 
                        if(isset($thongbao3) && ($thongbao3 != "")) {
                        echo $thongbao3;
                        }
                    ?>
                </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="index.php?act=dangnhap">Bạn đã có tài khoản? Đăng nhập thôi</a></div>
                </div>
            </div>
        </div>
    </div>