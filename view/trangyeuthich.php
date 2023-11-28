<!---->
<!--<div class="hero-wrap hero-bread" style="background-image: url('images/sub1.jpeg');">-->
<!--      <div class="container">-->
<!--        <div class="row no-gutters slider-text align-items-center justify-content-center">-->
<!--          <div class="col-md-9 ftco-animate text-center">-->
<!--          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Wishlist</span></p>-->
<!--            <h1 class="mb-0 bread">My Wishlist</h1>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!---->
<!--    <section class="ftco-section ftco-cart">-->
<!--			<div class="container">-->
<!--				<div class="row">-->
<!--    			<div class="col-md-12 ftco-animate">-->
<!--    				<div class="cart-list">-->
<!--	    				<table class="table">-->
<!--						    <thead class="thead-dark">-->
<!--						      <tr class="text-center">-->
<!--						        <th>&nbsp;</th>-->
<!--						        <th>Danh sách sản phẩm</th>-->
<!--						        <th>&nbsp;</th>-->
<!--						        <th>Giá</th>-->
<!--						        <th>Số lượng</th>-->
<!--						        <th>Tổng</th>-->
<!--						      </tr>-->
<!--						    </thead>-->
<!--						    <tbody>-->
<!--                            <tr class="text-center">-->
<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Cửa
                        hàng</span></p>
                <h1 class="mb-0 bread">Trang yêu thích </h1>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead class="thead-dark">
    <tr class="text-center">
        <th>Ảnh sản Phẩm</th>
        <th> Sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
    </tr>
    </thead>
    <tbody>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    foreach ($dstop10 as $top) {
        extract($top);
        $linksp = "index.php?act=chitietsanpham&idsp=" . $IdSanPham;
        $anh = $img_path . $img;

        echo '<tr class="text-center">
                    <td class="image-prod"><div class="img" style="background-image:url(' . $anh . ');"></div></td>
                    <td class="product-name">
                        <h3>' . $TenSanPham . ' </h3>
                        <p>' . $MoTa . '</p>
                    </td>
                    <td class="price">' . $Gia . '</td>
                    <td class="quantity">
    <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
        <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
    </div>
</td>

                  </tr>';

    }
    ?>
    </tbody>
</table>
<script>
    document.getElementById('decrementBtn').addEventListener('click', function() {
        decrementQuantity();
    });

    document.getElementById('incrementBtn').addEventListener('click', function() {
        incrementQuantity();
    });

    function incrementQuantity() {
        var input = document.querySelector('.quantity input');
        var value = parseInt(input.value, 10);
        if (value < 100) {
            input.value = value + 1;
        }
    }

    function decrementQuantity() {
        var input = document.querySelector('.quantity input');
        var value = parseInt(input.value, 10);
        if (value > 1) {
            input.value = value - 1;
        }
    }
</script>



