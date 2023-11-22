<div class="hero-wrap hero-bread" style="background-image: url('images/sub1.jpeg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Wishlist</span></p>
            <h1 class="mb-0 bread">My Wishlist</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-dark">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Danh sách sản phẩm</th>
						        <th>&nbsp;</th>
						        <th>Giá</th>
						        <th>Số lượng</th>
						        <th>Tổng</th>
						      </tr>
						    </thead>
						    <tbody>
                            <tr class="text-center">
                            <?php
                            ini_set('display_errors', 1);
                            ini_set('display_startup_errors', 1);
                            error_reporting(E_ALL);
                            foreach ($dstop10 as $top) {
                            extract($top);
                            $linksp = "index.php?act=chitietsanpham&idsp=" . $IdSanPham;
                            $anh = $img_path . $img;
                            echo'<td class="product-remove"><a href=""><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url('.$anh.');"></div></td>
						        
						        <td class="product-name">
						        	<h3>'.$TenSanPham.' </h3>
						        	<p>'.$MoTa.'</p>
						        </td>
						        
						        <td class="price">'.$Gia.'</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>';
                            }
                            ?>

		</section>
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Đăng ký để nhận tin tức mới</h2>
          	<span>Nhận thông tin qua emmail về các chương trình ưu đãi</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Nhập email của bạn ">
                <input type="submit" value="Gửi" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
