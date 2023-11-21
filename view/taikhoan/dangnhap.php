

<div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
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
                      <button type="submit" name="dangnhap" class="btn btn-primary btn-block">Đăng Nhập</button>
                  </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="index.php?act=dangky">Bạn chưa có tài khoản? Đăng ký ngay</a></div>
                </div>
            </div>
        </div>
    </div>