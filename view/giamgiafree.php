<div class="hero-wrap hero-bread" style="background-image: url('images/ms_banner_img1.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span>Mã Giảm Giá
						</span></p>
				<h1 class="mb-0 bread">Nhận mã giảm giá</h1>
			</div>
		</div>
	</div>
</div>
<h1 style="text-align:center" class="mb-0 bread">Các mã giảm giá có thể nhận</h1>
<br>
<div class="row">
            <?php
            foreach ($dsgiamgia as $ds) {
                extract($ds);
               
                        // // Sử dụng dữ liệu PHP để điền vào trường input
                        // $tenGiamGia = "Mã Giảm Giá 123";
                        // $codeGiamGia = "ABC123";
                        // $soluong = 10;
                        // $tienGiamGia = 50.00;
             
                       echo' <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3>'.$tenGiamGia.' </h3>
                                <h3>Còn lại: '.$soluong.' </h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price">
                                           '.number_format($tienGiamGia, 0, '.', ',').' vnđ
                                        </p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                        <div class="m-auto ">
                            <a href="index.php?act=nhanma&idGiamGia="'.$idGiamGia.' class="add-to-cart  justify-content-center align-items-center text-center">
                                <span><button>Nhận mã</button></span>
                            </a>
                           
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>
</div>
        <!-- <div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
    			 -->