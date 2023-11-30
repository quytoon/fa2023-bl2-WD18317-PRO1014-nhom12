<?php 
extract($_SESSION['TenTaiKhoan']);
// extract($sanpham);
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Đơn
                            hàng</span></p>
                    <h1 class="mb-0 bread">Đơn hàng của tôi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h2>Đơn hàng</h2>
                </div>
    <?php foreach ($donhang as $key) {
        extract($key);
        $img = $img_path . $img;
        $toltal = $Gia * $SoLuongSp;
        global $bill;
        $bill += $toltal;
    ?>
    <div class="card-body">
        <form method="post" action="xoa_san_pham.php">
            <input type="hidden" name="id_san_pham" value="<?=$IdSanPham?>">
           

            <?php
                if($TrangThai == 3){
            ?>
                <div class="row">
               
                <div class="col-md-4">
                <img src="<?=$img?>" alt="Ảnh sản phẩm" class="img-fluid" width="300" height="100">
    
                </div>

                <div class="col-md-4">
                    <p><strong><?=$TenSanPham?></strong></p>
                    <p>Giá: <strong><?=$Gia?></strong></p>
                    <p>Số lượng: <strong><?=$SoLuongSp?></strong></p>
                    <p>Tổng đơn hàng: <strong><?=$toltal?></strong></p>
                </div>
                
                </div>     
            <?php
                    }else{
            ?>
                        <div class="row">
               
               <div class="col-md-4">
               <img src="<?=$img?>" alt="Ảnh sản phẩm" class="img-fluid" width="300" height="100">
             
               </div>

               <div class="col-md-4">
                   <p><strong><?=$TenSanPham?></strong></p>
                   <p>Giá: <strong><?=$Gia?></strong></p>
                   <p>Số lượng: <strong><?=$SoLuongSp?></strong></p>
                   <p>Tổng đơn hàng: <strong><?=$toltal?></strong></p>
               </div>
               
               </div>     
            <?php
                    }
            ?>
               <?php   
                    }
                ?>       
                <div class="col-md-4">
                    <p><strong>Họ tên:</strong><?=$HoTen?></p>
                    <p><strong>Email:</strong><?=$Email?></p>
                    <p><strong>Địa chỉ:</strong> <?=$DiaChi?></p>
                    <p><strong>Số điện thoại:</strong><?=$SoDienThoai?></p>
                    <p><strong>Ngày đặt hàng:</strong> <?=$NgayDatHang?></p>    
                </div>   
        </form>
    </div>
                   
                        
            </div>
        </div>
    </div>
 
   