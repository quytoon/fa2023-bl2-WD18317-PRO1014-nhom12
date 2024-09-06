<!-- <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Trang chủ Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admin</li>
            </ol> -->

            <?php 
            if (is_array($taikhoan)) {
                extract($taikhoan);    
                } 
                $hinh = "../upload/" . $avatarUser;
                if(is_file($hinh)) {
                    $hinh = "<img src='".$hinh."' height='80'>";
                } else {
                    $hinh = 'no photo';
                }
            ?>

            /<a href="index.php?act=addtaikhoan">Sửa tài khoản</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Cập nhật tài khoản
                </div>
                <div class="card-body">
                    <form action="index.php?act=suataikhoan" method="post" enctype="multipart/form-data">
                        <!-- Tên sản phẩm -->
                        <div class="form-group">
                            <label for="TenTaiKhoan">Tên tài khoản</label>
                            <input type="text" class="form-control" id="TenTaiKhoan" placeholder="Nhập tên tài khoản"
                                name="TenTaiKhoan" value="<?php if (isset($TenTaiKhoan) && ($TenTaiKhoan != ""))
                                    echo $TenTaiKhoan; ?>">
                             <label for="MatKhau">Mật khẩu</label>
                            <input type="password" class="form-control" id="MatKhau" placeholder="Nhập mật khẩu"
                                name="MatKhau" value="<?php if (isset($MatKhau) && ($MatKhau != ""))
                                    echo $MatKhau; ?>">
                             <label for="HoTen">Họ tên</label>
                            <input type="text" class="form-control" id="HoTen" placeholder="Nhập họ tên"
                                name="HoTen" value="<?php if (isset($HoTen) && ($HoTen != ""))
                                    echo $HoTen; ?>">
                             <label for="DiaChi">Địa chỉ</label>
                            <input type="text" class="form-control" id="DiaChi" placeholder="Nhập địa chỉ"
                                name="DiaChi" value="<?php if (isset($DiaChi) && ($DiaChi != ""))
                                    echo $DiaChi; ?>">
                             <label for="Email">Email</label>
                            <input type="text" class="form-control" id="Email" placeholder="Nhập email"
                                name="Email" value="<?php if (isset($Email) && ($Email != ""))
                                    echo $Email; ?>">
                                     <label for="SoDienThoai">Số điện thoại</label>
                            <input type="number" class="form-control" id="SoDienThoai" placeholder="Nhập số điện thoại"
                                name="SoDienThoai" value="<?php if (isset($SoDienThoai) && ($SoDienThoai != ""))
                                    echo $SoDienThoai; ?>">
                                     <label for="avatarUser">Hình ảnh</label>
                            <input type="file" class="form-control" 
                                name="avatarUser" >
                                <?=$hinh ?>
                             <br>
                                     <label for="role">Vai trò</label>
                            <input type="text" class="form-control" id="role" placeholder="Nhập vai trò"
                                name="role" value="<?php if (isset($role) && ($role != ""))
                                    echo $role; ?>">   
                             <input type="hidden" name="IdTaiKhoan" value="<?php if (isset($IdTaiKhoan) && ($IdTaiKhoan > 0))
                            echo $IdTaiKhoan; ?>">                        
                        </div>
                        <!-- Nút lưu -->
                        <input class="btn btn-primary my-1" type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" class="btn btn-primary my-1" value="Nhập lại">
                        <a href="index.php?act=listtaikhoan"><input type="button" class="btn btn-primary my-1" value="Danh Sách"></a>
                        <?php
                        if (isset($thongbao) && ($thongbao != ""))
                            echo "<br>" . $thongbao;
                        ?>
                    </form>
                </div>
            </div>