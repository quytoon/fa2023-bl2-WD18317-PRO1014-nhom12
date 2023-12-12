<?php extract($sanpham);
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span
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
                <div class="row">
                    <?php
                    if ($anhsp == NULL) {
                    } else {
                        foreach ($anhsp as $key) {
                            $img1 = $img_path . $key['urlAnh'];
                            echo '<div class="col"><a href="' . $img1 . '" class="image-popup"><img src="' . $img1 . '" class="img-fluid"
                            alt="anhsp"></a></div>';
                        }
                    }
                    ?>
                </div>
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
                        <?= number_format($Gia, 0, '.', ',') ?> vnđ
                    </span></p>
                <p>
                    <?= $MoTa ?>
                </p>
                <style>
                    .color-option {
                        margin-right: 10px;
                        /* Điều chỉnh khoảng cách giữa các ô input */
                        display: inline-block;
                        /* Để các ô input hiển thị trên cùng một dòng */
                    }
                </style>
                <form action="index.php?act=themgiohang&idsp=<?= $IdSanPham ?>" method="post">
                    <div class="product__details__option">
                        <div class="product__details__option__color">
                            <span>Màu:</span>
                            <?php foreach ($mausac as $key => $value): ?>
                                <label for="<?php echo $value['IdMauSac'] ?>" class="color-option" data-bs-toggle="tooltip">
                                    <?php echo $value['TenMauSac'] ?>
                                    <input type="radio" id="<?php echo $value['IdMauSac'] ?>" name="IdMauSac"
                                        value="<?php echo $value['IdMauSac'] ?>" <?php echo ($key === 0) ? 'checked' : ''; ?>>
                                </label>
                            <?php endforeach ?>
                        </div>
                        <div class="product__details__option__size">
                            <span>Size:</span>
                            <?php foreach ($sizegiay as $key => $value): ?>
                                <label for="<?php echo $value['IdSizeGiay'] ?>" class="color-option"
                                    data-bs-toggle="tooltip">
                                    <?php echo $value['Size'] ?>
                                    <input type="radio" id="<?php echo $value['IdSizeGiay'] ?>" name="IdSizeGiay"
                                        value="<?php echo $value['IdSizeGiay'] ?>" <?php echo ($key === 0) ? 'checked' : ''; ?>>
                                </label>
                            <?php endforeach ?>

                        </div>

                    </div>
                    <div class="w-100"></div>
                    <div class="input-group col-md-6 d-flex mb-3">
                        <span class="input-group-btn mr-2">
                            <input type="hidden" name="IdSanPham" value="
                    <?php echo $sanpham['IdSanPham'] ?>" <input type="hidden" name="IdSanPham" value="
                    <?php echo $tim_Idbt['IdGiayBienThe'] ?>">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                <i class="ion-ios-remove"></i>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                            min="1" max="100">
                        <span class="input-group-btn ml-2">
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="ion-ios-add"></i>
                            </button>
                        </span>
                    </div>
                    <div class="w-100"></div>
                    <p>
                        <button type="submit" class="btn btn-black py-2 px-5" name="themgiohang">Thêm vào giỏ hàng
                        </button>
                    </p>
            </div>
            </form>


        </div>
    </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Đánh giá của bạn về sản phẩm</h2>
                        <div class="box_title">Bình luận</div>
                        <div>
                            <form action="index.php?act=chitietsanpham&idsp=<?= $IdSanPham ?>" method="post">
                                <input type="hidden" name="IdSanPham" value="<?= $IdSanPham ?>">
                                <input type="text" name="noidung">
                                <div class="form-group" id="rating">
                                    <label for="rating">Điểm đánh giá:</label>
                                    <div class="rating">
                                        <span class="star" data-rating="1">&#9733;</span>
                                        <span class="star" data-rating="2">&#9733;</span>
                                        <span class="star" data-rating="3">&#9733;</span>
                                        <span class="star" data-rating="4">&#9733;</span>
                                        <span class="star" data-rating="5">&#9733;</span>
                                    </div>
                                    <input type="hidden" name="rating" id="selectedRating" value="0">
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function () {
                                            const stars = document.querySelectorAll('.star');
                                            const ratingInput = document.getElementById('selectedRating');

                                            stars.forEach((star) => {
                                                star.addEventListener('click', function () {
                                                    const ratingValue = this.getAttribute('data-rating');
                                                    ratingInput.value = ratingValue;
                                                    console.log('Selected Rating:', ratingValue);
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                                <input type="submit" name="guibl" value="Gửi bình luận và đánh giá">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-4">
                <h2>Đánh giá của những người dùng khác</h2>
                <?php foreach ($binhluan as $key) { ?>
                    <div class="card mb-4">
                        <div class="card-body row">
                            <div class="col-md-3" style="text-align: center;">
                                <img src="<?= $img_path . $key['avatarUser']; ?>" alt="Avatar" class="avatar"
                                    style="width: 100px; border-radius: 50%;">
                                <h5 class="card-title">
                                    <?= $key['TenTaiKhoan']; ?>
                                </h5>
                            </div>
                            <div class="col-md-9">
                                <p class="card-text">
                                    <?= $key['NoiDung']; ?>
                                </p>
                                <div class="rating">
                                    Đánh giá:
                                    <?= $key['DiemDanhGia']; ?> sao
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
            <?php
            foreach ($sanphamcl as $key) {
                $img = $img_path . $key['img'];
                echo '<div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="index.php?act=chitietsanpham&idsp=' . $key['IdSanPham'] . '" class="img-prod"><img class="img-fluid" src="' . $img . '"
                            alt="Colorlib Template">
                        <span class="status">30%</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="index.php?act=chitietsanpham&idsp=' . $key['IdSanPham'] . '">' . $key['TenSanPham'] . '</a></h3>
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
                                <a href="index.php?act=themgiohang&idsp=' . $key['IdSanPham'] . '" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
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
