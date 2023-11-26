<div class="hero-wrap hero-bread" style="background-image: url('images/banner1.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>yêu thích</span></p>
            <h1 class="mb-0 bread">Sản phẩm yêu thích</h1>
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
								<?php 
								foreach ($listyeuthich as $key) {
									extract($key);
									$hinh = $hinhpart . $img;
									$toltal = $Gia * $SoLuongSp;
									echo '<tr class="text-center">
									<td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
									
									<td class="image-prod"><div class="img" style="background-image:url('.$hinh.');"></div></td>
									
									<td class="product-name">
										<h3>'.$TenSanPham.'</h3>
										<p>'.$MoTa.'</p>
									</td>
									
									<td class="price">' . number_format($Gia, 0, '.', ',') . ' vnđ</td>
									
									<td class="quantity">
										<div class="input-group mb-3">
										 <input type="text" name="quantity" class="quantity form-control input-number" value="'.$SoLuong.'" min="1" max="100">
									  </div>
								  </td>
									
									<td class="total">' . number_format($total, 0, '.', ',') . ' vnđ</td>
								  </tr><!-- END TR-->';
								}
								?>

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>