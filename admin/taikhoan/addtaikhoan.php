<!-- <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Trang chủ Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admin</li>
            </ol> --> 
            /<a href="index.php?act=listtaikhoan">Quản lý tài khoản</a></li>/<a href="index.php?act=addtaikhoan">Thêm tài khoản</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Thêm tài khoản
                </div>
                <div class="card-body">
                    <form action="index.php?act=addtaikhoan" method="POST" enctype="multipart/form-data">
                        <!-- Tên sản phẩm -->
                        <div class="form-group">
                            <label for="TenTaiKhoan">Tên tài khoản</label>
                            <input type="text" class="form-control" id="TenTaiKhoan" placeholder="Nhập tên tài khoản"
                                name="TenTaiKhoan">
                            <label for="MatKhau">Mật khẩu</label>
                            <input type="password" class="form-control" id="MatKhau" placeholder="Nhập mật khẩu"
                                name="MatKhau">
                            <label for="HoTen">Họ tên</label>
                            <input type="text" class="form-control" id="HoTen" placeholder="Nhập họ tên"
                                name="HoTen">
                            <label for="DiaChi">Địa chỉ</label>
                            <input type="text" class="form-control" id="DiaChi" placeholder="Nhập địa chỉ"
                                name="DiaChi">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" placeholder="Nhập email"
                                name="Email">
                            <label for="SoDienThoai">Số điện thoại</label>
                            <input type="number" class="form-control" id="SoDienThoai" placeholder="Điền số điện thoại"
                                name="SoDienThoai">
                            <label for="avatarUser">Hình ảnh</label>
                            <input type="file" class="form-control" id="avatarUser"
                                name="avatarUser">
                            <label for="role">Vai trò</label>
                            <input type="text" class="form-control" id="role" placeholder="Nhập vai trò"
                                name="role">
                        </div>
                        <!-- Nút lưu -->
                        <input type="submit" name="themtaikhoan" class="btn btn-primary my-1" value="Thêm tài khoản">
                        <input type="reset" class="btn btn-primary my-1" value="Nhập lại">
                        <a href="index.php?act=listtaikhoan"><input type="button" class="btn btn-primary my-1" value="Danh Sách"></a>
                        <?php
                        if (isset($thongbao) && ($thongbao != ""))
                            echo "<br>" . $thongbao;
                        ?>
                    </form>
                </div>
            </div>