<?php extract($sanpham);
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span>/ <span
                            class="mr-2"><a href="index.html">Cửa hàng</a></span>/ <span>Chi tiết sản phẩm</span></p>
                <h1 class="mb-0 bread">Chi tiết sản phẩm</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <?php
                $img = $img_path . $img;
                echo '<a href="' . $img . '" class="image-popup"><img src="' . $img . '" class="img-fluid"
                        alt="anhsp"></a>';
                ?>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>
                    <?= $TenSanPham ?>
                </h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <span class="ion-ios-star-outline"></span>
                        <span class="ion-ios-star-outline"></span>
                        <span class="ion-ios-star-outline"></span>
                        <span class="ion-ios-star-outline"></span>
                        <span class="ion-ios-star-outline"></span>
                    </p>
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                    </p>
                </div>
                <p class="price"><span>
                        <?= $Gia ?> vnđ
                    </span></p>
                <p>
                    <?= $MoTa ?>
                </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Màu</h5>
                        <div class="row">
                            <?php
                            extract($mausac);
                            foreach ($mausac as $key) {
                                echo '<div class="col-2-mx1">
                            <button class="color-btn">' . $key['TenMauSac'] . '</button>
                        </div>';
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Size</h5>
                        <div class="row">
                            <select class="form-select form-control mb-4" style="text-align: left;">
                                <option disabled selected>Chọn size giày</option>
                                <?php
                                extract($sizegiay);
                                foreach ($sizegiay as $key) {
                                    echo '<option value="' . $key['Size'] . '">' . $key['Size'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="w-100"></div>
                <div class="input-group col-md-6 d-flex mb-3">
                    <span class="input-group-btn mr-2">
                        <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                            <i class="ion-ios-remove"></i>
                        </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1"
                           max="100">
                    <span class="input-group-btn ml-2">
                        <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                            <i class="ion-ios-add"></i>
                        </button>
                    </span>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                    <p style="color: #000;">Còn lại
                        <?= $SoLuong ?> sản phẩm
                    </p>
                </div>
                <p><a href="cart.html" class="btn btn-black py-3 px-5">Thêm vào giỏ hàng</a></p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">

        <div class="row">
            <h2>Đánh giá của bạn về sản phẩm</h2>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="box_title">Binh luan</div>
                            <div class="box_content">
                                <table>
                                    <?php
                                    foreach ($binhluan as $bl) {
                                        extract($bl);
                                         '
                <tr>
                    <td>' . $NoiDung . '</td>
                    <td>' . $TenTaiKhoan . '</td>
                    <td>' . date("d/m/Y", strtotime($NgayBinhLuan)) . '</td>
                </tr>';
                                    }
                                    ?>
                                </table>
                            </div>
                            <div>
                                <form action="index.php?act=sanphamct&idsp=<?= $IdSanPham ?>" method="post">
                                    <input type="hidden" name="IdSanPham" value="<?= $IdSanPham ?>">
                                    <input type="text" name="noidung">
                                    <input type="submit" name="guibl" value="gui binh luan">

                                    <div class="form-group">
                                        <label for="rating">Điểm đánh giá:</label>
                                        <div class="rating">
                                            <span class="star ">&#9733;</span>
                                            <span class="star ">&#9733;</span>
                                            <span class="star ">&#9733;</span>
                                            <span class="star ">&#9733;</span>
                                            <span class="star ">&#9733;</span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <h2>Đánh giá của những người dùng khác</h2>
                <div class="col-md-8">
                    <?php foreach ($binhluan as $key) { ?>
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-md-3" style="text-align: center;">
                                    <img src="images/Frame 166.png" alt="Avatar" class="avatar"
                                         style="width: 100px;border-radius: 50%;">
                                    <h5 class="card-title">
                                        <?= $key['TenTaiKhoan']; ?>
                                    </h5>
                                </div>
                                <div class="col-md-9">
                                    <p class="card-text">
                                        <?= $key['NoiDung']; ?>
                                    </p>
                                    <div class="rating">
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Cửa hàng</span>
                <h2 class="mb-4">Những sản phẩm cùng loại</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg"
                            alt="Colorlib Template">
                        <span class="status">30%</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Bell Pepper</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">$120.00</span><span
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
            </div> -->
            <?php
            foreach ($sanphamcl as $key) {
                $img = $img_path . $key['img'];
                echo '<div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="index.php?act=chitietsanpham&idsp='.$key['IdSanPham'].'" class="img-prod"><img class="img-fluid" src="'.$img.'"
                            alt="Colorlib Template">
                        <span class="status">30%</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="index.php?act=chitietsanpham&idsp='.$key['IdSanPham'].'">'.$key['TenSanPham'].'</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">' . $Gia . '</span><span
                                        class="price-sale">' . $Gia . 'đ</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="index.php?act=themgiohang&idsp='.$key['IdSanPham'].'" class="buy-now d-flex justify-content-center align-items-center mx-1">
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
    </div>
</section>

<!--<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">-->
<!--    <div class="container py-4">-->
<!--        <div class="row d-flex justify-content-center py-5">-->
<!--            <div class="col-md-6">-->
<!--                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>-->
<!--                <span>Get e-mail updates about our latest shops and special offers</span>-->
<!--            </div>-->
<!--            <div class="col-md-6 d-flex align-items-center">-->
<!--                <form action="#" class="subscribe-form">-->
<!--                    <div class="form-group d-flex">-->
<!--                        <input type="text" class="form-control" placeholder="Enter email address">-->
<!--                        <input type="submit" value="Subscribe" class="submit px-3">-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<style>
    .star {
        color: black;
        /* Màu sắc mặc định của ngôi sao */
        font-size: 24px;
        /* Kích thước của ngôi sao */
        cursor: pointer;
        /* Hình con trỏ khi di chuyển qua ngôi sao */
    }

    .selected {
        color: gold !important;
        /* Màu sắc của ngôi sao khi được chọn */
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Xử lý sự kiện khi nút giảm số lượng được click
        $(".quantity-left-minus").click(function () {
            // Lấy giá trị hiện tại của ô nhập
            var quantity = parseInt($("#quantity").val());

            // Giảm giá trị nếu nó lớn hơn giá trị tối thiểu
            if (quantity > 1) {
                $("#quantity").val(quantity - 1);
            }
        });

        // Xử lý sự kiện khi nút tăng số lượng được click
        $(".quantity-right-plus").click(function () {
            // Lấy giá trị hiện tại của ô nhập
            var quantity = parseInt($("#quantity").val());

            // Tăng giá trị nếu nó nhỏ hơn giá trị tối đa
            if (quantity < 100) {
                $("#quantity").val(quantity + 1);
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".star").click(function () {
            // Loại bỏ tất cả các lớp 'selected' trước đó
            $(".star").removeClass("selected");

            // Thêm lớp 'selected' cho các ngôi sao được click và các ngôi sao trước đó
            $(this).addClass("selected");
            $(this).prevAll(".star").addClass("selected");
        });
    });
</script>