<?php 
extract($_SESSION['TenTaiKhoan']);
$avatarUser = 'upload/' . $avatarUser;
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Tài
                            khoản</span></p>
                    <h1 class="mb-0 bread">Tài khoản của tôi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h2>Thông tin người dùng</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?=$avatarUser?>" alt="Ảnh người dùng" class="img-fluid" width="500" height="500">
                        </div>
                        <div class="col-md-8">
                            <p><strong>Họ tên:</strong><?=$HoTen?></p>
                            <p><strong>Email:</strong><?=$Email?></p>
                            <p><strong>Địa chỉ:</strong> <?=$DiaChi?></p>
                            <p><strong>Số điện thoại:</strong><?=$SoDienThoai?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Sửa thông tin</a>
                </div>
            </div>
        </div>
    </div>