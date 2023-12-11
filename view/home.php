<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/banner1.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">Giày chất lượng &amp; Phong cách </h1>
                        <h2 class="subheading mb-4">Bước vào phong cách với QPB SHOES!</h2>
                        <p><a href="index.php?act=sanpham" class="btn btn-danger">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(images/banner2.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">Khám phá thế giới, từng bước một</h1>
                        <h2 class="subheading mb-4">Bước vào phong cách với QPB SHOES!</h2>
                        <p><a href="index.php?act=sanpham" class="btn btn-danger">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image: url(images/banner3.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">Dạo chơi mọi địa điểm, mọi thời điểm</h1>
                        <h2 class="subheading mb-4">Bước vào phong cách với QPB SHOES!</h2>
                        <p><a href="index.php?act=sanpham" class="btn btn-danger">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image: url(images/banner4.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">Khám phá thế giới, từng bước một</h1>
                        <h2 class="subheading mb-4">Bước vào phong cách với QPB SHOES!</h2>
                        <p><a href="index.php?act=sanpham" class="btn btn-danger">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Miễn Phí Ship</h3>
                        <span>Chỉ cần đặt $100</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Đổi Trả </h3>
                        <span>Dịch Vụ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Chất Lượng Cao</h3>
                        <span>chất Lượng Sản Phẩm </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Hỗ Trợ</h3>
                        <span>Hỗ Trợ 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <?php
            // Assuming $dmhome is an array with four different values for $tenDanhMuc
            $tenDanhMucs = array_column($dmhome, 'tenDanhMuc');
            $idDanhMucs = array_column($dmhome, 'idDanhMuc');
            // Ensure that there are at least four distinct values
            if (count($tenDanhMucs) >= 4) {
                // Loop only once
                echo '
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/logo.png);">
                            <div class="text text-center">
                                <h2>Shoes</h2>
                                <p>Thể hiện cá tính qua từng bước đi</p>
                                <p><a href="#" class="btn btn-danger">Mua sắm </a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/bg2.jpeg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="index.php?act=sanpham&iddm=' . $idDanhMucs[0] . '">' . $tenDanhMucs[0] . '</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/bg3.webp);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="index.php?act=sanpham&iddm=' . $idDanhMucs[1] . '">' . $tenDanhMucs[1] . '</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/bg4.png);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="index.php?act=sanpham&iddm=' . $idDanhMucs[2] . '">' . $tenDanhMucs[2] . '</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/bg6.png);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="index.php?act=sanpham&iddm=' . $idDanhMucs[3] . '">' . $tenDanhMucs[3] . '</a></h2>
                    </div>
                </div>
            </div>
        ';
            } else {
                echo "Not enough distinct values in the array.";
            }
            ?>

            <!--            <div class="col-md-8">-->
            <!--                <div class="row">-->
            <!--                    <div class="col-md-6 order-md-last align-items-stretch d-flex">-->
            <!--                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/logo.png);">-->
            <!--                            <div class="text text-center">-->
            <!--                                <h2>Shoes</h2>-->
            <!--                                <p>Thể hiện cá tính qua từng bước đi</p>-->
            <!--                                <p><a href="#" class="btn btn-danger">Mua sắm </a></p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-md-6">-->
            <!--                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/bg2.jpeg);">-->
            <!--                            <div class="text px-3 py-1">-->
            <!--                                <h2 class="mb-0"><a href="#">Converses</a></h2>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/bg3.webp);">-->
            <!--                            <div class="text px-3 py-1">-->
            <!--                                <h2 class="mb-0"><a href="#">Converses</a></h2>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!--            <div class="col-md-4">-->
            <!--                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/bg4.png);">-->
            <!--                    <div class="text px-3 py-1">-->
            <!--                        <h2 class="mb-0"><a href="#">Vans</a></h2>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/bg6.png);">-->
            <!--                    <div class="text px-3 py-1">-->
            <!--                        <h2 class="mb-0"><a href="#">Shop</a></h2>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container ">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Sản Phẩm Nổi Bật</span>
                <h2 class="mb-4">Sản Phẩm </h2>
                <p>Chất lượng và phong cách trên từng bước đi </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp = "index.php?act=chitietsanpham&idsp=" . $IdSanPham;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product ' . $mr . '" style="min-height: 400px;">
                <a href="' . $linksp . '" class="img-prod"><img class="img-fluid" src="' . $hinh . '" alt="Colorlib Template">
                    <div class="overlay"></div>
                </a>
                <div class="text py-3 pb-4 px-3 text-center">
                    <h3><a href="' . $linksp . '">' . $TenSanPham . '</a></h3>
                    <div class="d-flex">
                        <div class="pricing">
                            <p class="price"><span>' . $Gia . ' vnđ </span></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>
</section>
<a href="index.php?act=sanpham">
    <section class="ftco-section img" style="background-image: url(images/bg0.jpeg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading">Giảm Giá Siêu Sốc</span>
                    <h2 class="mb-4">Giảm Giá Hôm Nay</h2>
                    <p>Chất lượng và phong cách trên từng bước đi</p>
                    <h3><a href="index.php?act=sanpham">Converse</a></h3>
                    <span class="price">1.800.000 vnđ <a href="#">Chỉ còn 1.200.00 vnd</a></span>
                    <div id="timer" class="d-flex mt-5">
                        <div class="time" id="days"></div>
                        <div class="time pl-3" id="hours"></div>
                        <div class="time pl-3" id="minutes"></div>
                        <div class="time pl-3" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</a>
<!--<section class="ftco-section img" style="background-image: url(images/bg0.jpeg);">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-end">-->
<!--            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">-->
<!--                <span class="subheading">Giảm Giá Siêu Sốc</span>-->
<!--                <h2 class="mb-4">Giảm Giá Hôm Nay</h2>-->
<!--                <p>Chất lượng và phong cách trên từng bước đi</p>-->
<!--                <h3><a href="index.php?act=sanpham">Converse</a></h3>-->
<!--                <span class="price">1.800.000 vnđ <a href="#">Chỉ còn 1.200.00 vnd</a></span>-->
<!--                <div id="timer" class="d-flex mt-5">-->
<!--                    <div class="time" id="days"></div>-->
<!--                    <div class="time pl-3" id="hours"></div>-->
<!--                    <div class="time pl-3" id="minutes"></div>-->
<!--                    <div class="time pl-3" id="seconds"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Lời Nhắn </span>
                <h2 class="mb-4">Trải Nghiệm Của Khách Hàng</h2>
                <p>Chất lượng và phong cách trên từng bước đi</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đôi giày này có một thiết kế đơn giản nhưng vô cùng phong
                                    cách, với màu đen sang trọng và chất liệu da cao cấp. Tôi cảm thấy rất thoải mái khi
                                    mang chúng, đặc biệt là ở phần đế giày với lớp đệm mềm mại. Đôi giày này phù hợp cho
                                    cả các hoạt động thể thao nhẹ và đi làm hàng ngày.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đôi giày này có một thiết kế đơn giản nhưng vô cùng phong
                                    cách, với màu đen sang trọng và chất liệu da cao cấp. Tôi cảm thấy rất thoải mái khi
                                    mang chúng, đặc biệt là ở phần đế giày với lớp đệm mềm mại. Đôi giày này phù hợp cho
                                    cả các hoạt động thể thao nhẹ và đi làm hàng ngày.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đôi giày này có một thiết kế đơn giản nhưng vô cùng phong
                                    cách, với màu đen sang trọng và chất liệu da cao cấp. Tôi cảm thấy rất thoải mái khi
                                    mang chúng, đặc biệt là ở phần đế giày với lớp đệm mềm mại. Đôi giày này phù hợp cho
                                    cả các hoạt động thể thao nhẹ và đi làm hàng ngày.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đôi giày này có một thiết kế đơn giản nhưng vô cùng phong
                                    cách, với màu đen sang trọng và chất liệu da cao cấp. Tôi cảm thấy rất thoải mái khi
                                    mang chúng, đặc biệt là ở phần đế giày với lớp đệm mềm mại. Đôi giày này phù hợp cho
                                    cả các hoạt động thể thao nhẹ và đi làm hàng ngày.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đôi giày này có một thiết kế đơn giản nhưng vô cùng phong
                                    cách, với màu đen sang trọng và chất liệu da cao cấp. Tôi cảm thấy rất thoải mái khi
                                    mang chúng, đặc biệt là ở phần đế giày với lớp đệm mềm mại. Đôi giày này phù hợp cho
                                    cả các hoạt động thể thao nhẹ và đi làm hàng ngày.</p>
                                <p class="name">Garreth Smith</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="ftco-section ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid"
                                                 alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid"
                                                 alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid"
                                                 alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid"
                                                 alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid"
                                                 alt="Colorlib Template"></a>
            </div>
        </div>
    </div>
</section>
