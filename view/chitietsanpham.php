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
<section class="ftco-section">
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
                            <!-- <div class="col-2">
                                <button class="color-btn" style="background-color: #FF0000"></button>
                            </div> -->

                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Size</h5>
                        <div class="row">
                            <select class="form-select form-control mb-4" style="text-align: left;">
                                <option disabled selected>Chọn size giày</option>
                                <option value="36">36</option>
                                <option value="37">37</option>
                                <option value="38">38</option>
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
                    <p style="color: #000;">Còn lại X sản phẩm</p>
                </div>
                <p><a href="cart.html" class="btn btn-black py-3 px-5">Thêm vào giỏ hàng</a></p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <h2>Đánh giá của bạn về sản phẩm</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Tên tài khoản:</label>
                                <input type="text" class="form-control" id="name" placeholder="Tên của bạn" disabled>
                            </div>
                            <div class="form-group">
                                <label for="comment">Nội dung đánh giá:</label>
                                <textarea class="form-control" id="comment" rows="5"
                                    placeholder="Nhập bình luận của bạn"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rating">Điểm đánh giá:</label>
                                <div class="rating">
                                    <span class="star " onclick="selectStar(1)">&#9733;</span>
                                    <span class="star " onclick="selectStar(2)">&#9733;</span>
                                    <span class="star " onclick="selectStar(3)">&#9733;</span>
                                    <span class="star " onclick="selectStar(4)">&#9733;</span>
                                    <span class="star " onclick="selectStar(5)">&#9733;</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-3" style="text-align: center;">
                            <img src="images/Frame 166.png" alt="Avatar" class="avatar"
                                style="width: 100px;border-radius: 50%;">
                            <h5 class="card-title">em quy</h5>
                        </div>
                        <div class="col-md-9">
                            <p class="card-text">Sản phẩm vừa xấu vừa đắt, không đáng tiền.</p>
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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
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
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg"
                            alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Strawberry</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
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
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg"
                            alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Green Beans</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
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
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg"
                            alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Purple Cabbage</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>$120.00</span></p>
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
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>