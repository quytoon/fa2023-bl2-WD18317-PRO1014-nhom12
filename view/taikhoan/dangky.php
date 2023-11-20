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
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="Email" class="form-control" id="email" placeholder="Nhập địa chỉ email của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="matKhau" class="form-label">Mật Khẩu</label>
                        <input type="password" name="MatKhau" class="form-control" id="MatKhau" placeholder="Nhập mật khẩu của bạn">
                    </div>
                    
                    <input type="submit" name="dangky" value="Đăng Ký" class="btn btn-primary"></input>
           
                </form>
                </div>
                <?php 
                if(isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="index.php?act=dangnhap">Bạn đã có tài khoản? Đăng nhập thôi</a></div>
                </div>
            </div>
        </div>
    </div>