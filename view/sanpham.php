<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Cửa
                        hàng</span></p>
                <h1 class="mb-0 bread">Cửa hàng</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-4">
            <form action="index.php?act=sanpham" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Từ khóa tìm kiếm">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="timkiem">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="index.php?act=sanpham" class="active">All</a></li>
                    <?php
                    foreach ($dsdm as $key) {
                        extract($key);
                        $linkdm = "index.php?act=sanpham&iddm=" . $idDanhMuc;
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
                                <p class="price"><span class="mr-2 price-dc">' . number_format($Gia, 0, '.', ',') . ' vnđ</span><span
                                        class="price-sale">' . number_format($Gia, 0, '.', ',') . ' vnđ</span></p>
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