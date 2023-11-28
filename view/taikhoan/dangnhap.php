<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Tài khoản</span></p>
					<h1 class="mb-0 bread">Đăng Nhập</h1>
				</div>
			</div>
		</div>
	</div>
<div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <?php if(!isset($_SESSION['TenTaiKhoan'])) { ?>
                <div class="card-body">
                  <h2 class="text-center">Đăng Nhập</h2>
                  <form method="POST" action="index.php?act=dangnhap">
                      <div class="form-group">
                          <label for="TenTaiKhoan" >Tài Khoản:</label>
                          <input type="text" name="TenTaiKhoan" class="form-control" id="TenTaiKhoan" placeholder="Nhập tài khoản">
                      </div>
                      <div class="form-group">
                          <label for="MatKhau">Mật Khẩu:</label>
                          <input type="password" name="MatKhau" class="form-control" id="MatKhau" placeholder="Nhập mật khẩu">
                      </div>
                      <input type="submit" name="dangnhap" class="btn btn-primary btn-block" value="Đăng Nhập">
                      <?php if (isset($loginMess)&& ($loginMess != '')) {
                    echo $loginMess;
                    } ?>
                  </form>
                </div>
                <?php
                    }else { ?>
                    <?php extract($_SESSION['TenTaiKhoan'])?>
                    <p style="margin-left:10px">Hello <?=$TenTaiKhoan ?><button style="margin-left :10px"><a href="index.php?act=dangxuat">Đăng Xuất</a></button></p>
                <?php
                    }
                ?>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="index.php?act=dangky">Bạn chưa có tài khoản? Đăng ký ngay</a></div>
                    <div class="small"><a href="index.php?act=quenmk">Bạn quên mật khẩu? Hãy lấy lại mật khẩu</a></div>
                </div>
            </div>
        </div>
    </div>