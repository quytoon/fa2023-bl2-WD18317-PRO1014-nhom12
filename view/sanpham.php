<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span>/ <span>Cửa
                        hàng</span></p>
                <h1 class="mb-0 bread">Cửa hàng</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="#" class="active">All</a></li>
                    <?php
                    foreach ($dsdm as $key) {
                        extract($key);
                        $linkdm = "index.php?act=chitietdm&iddm=" . $idDanhMuc;
                        echo '<li><a href="' . $linkdm . '">' . $tenDanhMuc . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($dssp as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp = "index.php?act=chitietsanpham&idsp=" . $IdSanPham;
                echo '<div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="' . $linksp . '" class="img-prod"><img class="img-fluid" src="' . $hinh . '"
                            alt="anhsanpham">
                        <span class="status">30%</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="' . $linksp . '">' . $TenSanPham . '</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">' . $Gia . '</span><span
                                        class="price-sale">$80.00</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
            ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Đăng ký nhận thông tin của chúng tôi</h2>
                <span>Nhận cập nhật qua email về các mặt hàng mới nhất và các ưu đãi đặc biệt của chúng tôi.</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Nhập email của bạn">
                        <input type="submit" value="Đăng ký" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>