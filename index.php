<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Millennium Watches</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
        	*{
				margin: 0px;
				padding: 0px;
				box-sizing: border-box; 
				
			}
			html,body{
					overflow-x: hidden;
				}
			@media screen and (max-width: 480px){
				.col-md-push-4{
					left: 0;
				}
				#carousel-slide{
					height: 50%;
				}
				.banner-content-1{
				  	position: absolute;
				  	left: 130px;
				  	top: 20px;
				  	color: #a8741a;
				 	font-family: banner-content;
				  	font-family: 'Playfair Display', serif;
				  	font-style: bold;
				  	font-size: 15px;
				}
				.banner-content-2{
				  	position: absolute;
				  	left: 85px;
				  	top: 50px;
				  	color: #a8741a;
				  	font-family: banner-content;
				  	font-family: 'Playfair Display', serif;
				  	font-size: 15px;
				}
				.footer_1{
					display: none;
				}
				#ft_none{
					display: block;
				}
			}
			
        </style>

    </head>

    <body>

        <!-- Begin page -->
        <div class="container-fluid pd0">
       		
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container">
                    <ul class="list-unstyled topnav-menu float-right mb-0">
                    <?php 
                       if (isset($_SESSION['id'])) {
                    ?>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="ml-1">Samuel <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>
                    <?php
                        } else{
                    ?>
                            <li class="notification-list" style="line-height: 70px;">
                                <a href="" class="login">
                                    Login
                                </a>
                            </li>
                    <?php
                        }
                     ?>
                        

                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon" style="color: #A2A2A2;"></i>
                            </a>
                        </li>


                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box col-md-3 col-xs-3">
                        <a href="index.html" class="logo text-center">
                            <img src="assets/images/logo.png" alt="" height="50" style="line-height: 70px; margin-top: 10px; margin-bottom: 10px;">
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            
                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search" style="color: black;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- Carousel start  -->
            <div class="row float pd0" id="carousel-slide">
	            <div class="col-md-12 col-sm-12 col-lg-12 col-12 pd0">
		           	<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
					  	<ol class="carousel-indicators">
					    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  	</ol>
					  	<div class="carousel-inner">
					    	<div class="carousel-item active">
					      		<img class="d-block w-100" src="assets/images/slider/slider1.jpg" alt="First slide">
					    	</div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100" src="assets/images/slider/slider2.jpg" alt="Second slide">
					    	</div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100" src="assets/images/slider/slider3.jpg" alt="Third slide">
					    	</div>
					  	</div>
					  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>	
				</div>
			</div>
            <!-- end Carousel -->
 			
          	<!-- Start Service -->
          	<div class="container" id="service">
          		<div class="row">
	          		<div class="col-md-3 col-6 text-center">
	          			<img src="assets/images/icon/icon-service-transport.webp" width="40" height="40">
	          			<h4 class="service-title">Miễn phí giao hàng</h4>
	          			<p>Giao hàng tận nơi khắp các tỉnh thành trên cả nước</p>
	          		</div>
	          		<div class="col-md-3 col-6 text-center">
	          			<img src="assets/images/icon/icon-service-recieve-money.png" width="40" height="40">
	          			<h4 class="service-title">Hoàn tiền</h4>
	          			<p>Hoàn lại 100% tiền nếu không vừa ý hoặc lỗi từ nhà sản xuất (trong 7 ngày)</p>
	          		</div>
	          		<div class="col-md-3 col-6 text-center">
	          			<img src="assets/images/icon/icon-service-change.png" width="40" height="40">
	          			<h4 class="service-title">Đổi trả sản phẩm</h4>
	          			<p>Theo quy định của cửa hàng</p>
	          		</div>
	          		<div class="col-md-3 col-6 text-center">
	          			<img src="assets/images/icon/icon-service-phone.png" width="40" height="40">
	          			<h4 class="service-title">Hỗ trợ khách hàng</h4>
	          			<p>Đội ngũ tư vấn viên, chăm sóc khách hàng luôn sẵn sàng hỗ trợ 24/7</p>
	          		</div>
	          	</div>
          	</div>
          	<!-- end Service -->

          	<!-- Brand start -->
 			<div class="container" id="brand">
 				<div class="row">
 					<div class="brand-name text-center" style="margin-bottom:12px;">
 						<div class="title-object-1">
 							
 						</div>
 						<div class="wrap-content text-center">
 							<h3 class="text-center">THƯƠNG HIỆU NỔI TIẾNG</h3>
 						</div>
 						<div class="title-object-2"></div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/hamilton.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/edox.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/claude-bernard.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/calvin-klein.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/tissot.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/gucci.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/raymond-weil.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/balmain.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/longines.webp" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/movado.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/herbelin.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-6 mb-2 box-banner-index">
 						<div>
 							<a href="">
 								<img src="assets/images/Brand/citizen.jpg" alt="" width="100%">
 							</a>
 						</div>
 					</div>
 				</div>
 			</div>
 			<!-- end Brand -->

          	<!-- Product start -->
          	<div class="container" id="product">
          		<div class="row text-center">
          			<div class="brand-name text-center">
 						<div class="title-object-1">	
 						</div>
 						<div class="wrap-content text-center">
 							<h3 class="text-center">SẢN PHẨM</h3>
 						</div>
 						<div class="title-object-2"></div>
 					</div>
          			<div class="col-md-6 col-md-push-4 text-center">
	          			<div class="card-box">
	                    <ul class="nav nav-tabs nav-bordered nav-justified">
	                        <li class="nav-item">
	                            <a href="#men" data-toggle="tab" aria-expanded="false" class="nav-link active">
	                                <h5>NAM</h5>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#women" data-toggle="tab" aria-expanded="true" class="nav-link ">
	                                <h5>NỮ</h5>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#new" data-toggle="tab" aria-expanded="false" class="nav-link">
	                                <h5>MỚI</h5>
	                            </a>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#hot" data-toggle="tab" aria-expanded="false" class="nav-link">
	                                <h5>BÁN CHẠY</h5>
	                            </a>
	                        </li>
	                    </ul>
	                	</div>
	                </div>
                </div>
		        <div class="tab-content">
		            <div class="tab-pane active" id="men">
		               	<div class="row">
		                    <div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
		                </div>
		        	</div>
		            <div class="tab-pane" id="women">
		                <div class="row">
		                    <div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
		                </div>
		            </div>
		            <div class="tab-pane" id="new">
		                <div class="row">
		                    <div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
		                </div> 
		            </div>
		            <div class="tab-pane" id="hot">
		                <div class="row">
		                    <div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
		                </div>
		            </div>
	            </div>
            	<div class="row">
            		<div class="col-md-12 col-lg-12 col-xs-12 col-12 text-center" style="margin-bottom: 20px;">
            			<a href="#" class="new_small"><h5>Xem thêm</h5></a>
            		</div>
            	</div>
            </div>
          	<!-- end Product -->

          	<!-- Product-Brand start -->
          	<div class="container" id="product-brand">
          		<div class="row text-center">
          			<div class="col-md-6 col-md-push-4 text-center">
	          			<div class="card-box">
		                    <ul class="nav nav-tabs nav-bordered nav-justified">
		                        <li class="nav-item">
		                            <a href="#thuysy" data-toggle="tab" aria-expanded="false" class="nav-link active">
		                                <h5>Thụy Sỹ</h5>
		                            </a>
		                        </li>
		                        <li class="nav-item">
		                            <a href="#anh" data-toggle="tab" aria-expanded="true" class="nav-link ">
		                                <h5>Anh</h5>
		                            </a>
		                        </li>
		                        <li class="nav-item">
		                            <a href="#other" data-toggle="tab" aria-expanded="false" class="nav-link">
		                                <h5>Khác</h5>
		                            </a>
		                        </li>
		                    </ul>
	                	</div>
	                </div>
                </div>
		        <div class="tab-content">
		            <div class="tab-pane active" id="thuysy">
		               	<div class="row">
		                    <div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
		                </div>
		        	</div>
		            <div class="tab-pane" id="anh">
		                <div class="row">
		                    <div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
		                </div>
		            </div>
		            <div class="tab-pane" id="other">
		                <div class="row">
		                    <div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-6">
								<a href="#" class="product_hot">
									<div class="card" style="width: 100%">
										<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
										<div class="tag-saleoff text-center">
											-10%
										</div>
									</div>
									<div class="card-body">
										<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
										<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
									</div>
								</a>
							</div>
		                </div> 
		            </div>
	            </div>
            	<div class="row" style="margin-bottom: 30px;">
            		<div class="col-md-12 col-lg-12 col-xs-12 col-12 text-center" >
            			<a href="#" class="new_small"><h5>Xem thêm</h5></a>
            		</div>
            	</div>
            </div>
          	<!-- end Product-Brand -->

          	<!-- Middle Banner start -->
          	<div class="col-md-12 col-lg-12 col-xs-12 col-12 pd0" style="margin-bottom: 20px;">
          		<div class="middle-banner">
          			<div class="banner-content">
          				<h2 class="banner-content-1">MILLENNIUM . . .</h2>
          				<h2 class="banner-content-2">. . . NOW, THEN, FOREVER</h2>
          			</div>
          			<img src="assets/images/middle-banner.jpg" alt="" width="100%">
          		</div>
          	</div>
          	<!-- end Middle Banner -->

          	<!-- News start -->
          	<div class="container">
          		<div class="row">
          			<div class="brand-name text-center">
 						<div class="title-object-1"></div>
 						<div class="wrap-content text-center">
 							<h3 class="text-center">TIN TỨC</h3>
 						</div>
 						<div class="title-object-2"></div>
 					</div>
          		</div>
          		<div class="row">
					<div class="col-md-7 co-12">
						<div class="box-article-index blog-first-grande">
							<div class="article-image-index">
								<img src="//file.hstatic.net/1000269795/article/copy_of_kv-citizen-qd-op1-ngang_d959868781404ec2a8d8e71cfc3b0203_1024x1024.jpg" style="width: 100%">
								<div class="boxOverlay d-none d-sm-block"></div>
								<div class="article-description-index">
									<a href="#"><h3 style="color: white; font-size: 16px;">LÀM CHỦ THỜI GIAN - BỨT PHÁ GIỚI HẠN CÙNG CITIZEN SEVEN (Citizen C7)</h3></a>
									<p class="d-none d-sm-block" style="color: white; font-size: 14px;">
										Thương hiệu đồng hồ lừng danh Citizen mới đây vừa cho ra mắt bộ sưu tập Citizen Seven (C7) với 12 phiên bản được lấy cảm hứng từ siêu phẩm Crystal Seven trình làng năm 1965 – Mẫu đồng hồ tự động mỏng nhất thế giới tại thời điểm đó cùng mặt số tinh thể khoáng thay vì acrylic. Có nỗi...
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-12">
						<ul class="list-unstyled">
						  	<li class="media">
						    	<img src="https://file.hstatic.net/1000269795/article/9dbb657493798874b53d52fde38_large_2fe513be4fd6449994b373004a3549bf_843904f1ec7348b0b1a6a059ece51bb8_small.jpg" class="mr-3" alt="...">
						    	<div class="media-body">
						      		<a href="#" class="new_small"><h6 class="mt-0 mb-1">6 tiêu chí chọn đồng hồ nữ đẹp sang trọng dành riêng cho các cô nàng công sở</h6></a>
						      		<p class="new_time">Ngày: 17/01/2020 lúc 17:05PM</p>
						    	</div>
						  	</li>
						  	<li class="media" style="margin-bottom: 5px; margin-top: 5px;">
						    	<img src="https://file.hstatic.net/1000269795/article/longines_2_1bfcad2c8a4147e69fa7fd3e31e853e0_small.jpg" class="mr-3" alt="...">
						    	<div class="media-body">
						      		<a href="" class="new_small"><h6 class="mt-0 mb-1">Hé lộ top 5 đồng hồ nữ đẹp sang trọng mà cô nàng nào cũng mơ ước sở hữu</h6></a>
						      		<p class="new_time">Ngày: 17/11/2020 lúc 16:08PM</p>
						    	</div>
						  	</li>
						  	<li class="media">
						    	<img src="https://file.hstatic.net/1000269795/article/bia_dau_57a83cdaae2344f98108b5e86134b407_small.jpg" class="mr-3" alt="...">
						    	<div class="media-body">
						      		<a href="" class="new_small"><h6 class="mt-0 mb-1">Gói Bảo Hiểm Đồng Hồ của hệ thống MILLENNIUM có gì đặc biệt?</h6></a>
						      		<p class="new_time">Ngày: 17/11/2020 lúc 15:58PM</p>
						    	</div>
						  </li>
						  <li class="media" style="margin-bottom: 5px;margin-top: 5px;">
						    	<img src="https://file.hstatic.net/1000269795/article/unnamed_0a21b4e1f391463999259869336775bc_57ed9cf7f8de4d728846daf80396237f_small.jpg" class="mr-3" alt="...">
						    	<div class="media-body">
						      		<a href="" class="new_small"><h6 class="mt-0 mb-1">9 Tips giúp bạn hoàn thiện phong cách lịch lãm của nam giới</h6></a>
						      		<p class="new_time">Ngày: 17/11/2020 lúc 15:49PM</p>
						    	</div>
						  	</li>
						  	<li class="media" style="margin-bottom: 5px;">
						    	<img src="https://file.hstatic.net/1000269795/article/bia__13__772415dee5c5421b988d7cc31ebcd135_small.jpg" class="mr-3" alt="...">
						    	<div class="media-body">
						      		<a href="" class="new_small"><h6 class="mt-0 mb-1">SỰ THẬT VỀ GIÁ ĐỒNG HỒ TISSOT NỮ CHÍNH HÃNG DƯỚI 2 TRIỆU</h6></a>
						      		<p class="new_time">Ngày: 17/11/2020 lúc 15:34PM</p>
						    	</div>
						  	</li>
						  	<li class="media">
						    	<img src="https://file.hstatic.net/1000269795/article/longines1_bae8a7308ff141548dff8a00596b5df4_small.jpg" class="mr-3" alt="...">
						    	<div class="media-body">
						      		<a href="" class="new_small"><h6 class="mt-0 mb-1">ĐẲNG CẤP QUÝ ÔNG QUYỀN QUÝ - ĐẲNG CẤP LONGINES DÀNH RIÊNG CHO CÁC QUÝ ÔNG</h6></a>
						      		<p class="new_time">Ngày: 17/11/2020 lúc 15:10PM</p>
						    	</div>
						  	</li>
						</ul>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-12 col-12 text-center">
						<a href="#" class="more"><h5>Xem thêm các bài viết khác</h5></a>
					</div>
				</div>
          	</div>
          	<!-- end News -->

          	<!-- Showroom start -->
          	<div class="container group-index hidden-xs">
				<div class="row">
					<div class="brand-name text-center">
 						<div class="title-object-1">	
 						</div>
 						<div class="wrap-content text-center">
 							<h3 class="text-center">HỆ THỐNG SHOWROOM</h3>
 						</div>
 						<div class="title-object-2"></div>
 					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 showroom_pc">
						<div class="box">
			                <img src="assets/images/showroom/showroom-1.jpg" style="width: 100%; height: auto">
			                <div class="box-content">
			                    <ul class="icon">
			                        <li><a href="#"><i class="fa fa-search" style="margin-top: 15px;"></i></a></li>
			                        <li><a href="#"><i class="fa fa-link" style="margin-top: 15px;"></i></a></li>
			                    </ul>
			                    <h3 class="title">Showroom Thanh Xuân</h3>
			                    <span class="post">Số 1 Hoàng Đạo Thúy - Thanh Xuân - Hà Nội</span>
			                </div>
			            </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 showroom_pc">
						<div class="box">
			                <img src="assets/images/showroom/showroom-2.jpg" style="width: 100%; height: auto">
			                <div class="box-content">
			                    <ul class="icon">
			                        <li><a href="#"><i class="fa fa-search" style="margin-top: 15px;"></i></a></li>
			                        <li><a href="#"><i class="fa fa-link" style="margin-top: 15px;"></i></a></li>
			                    </ul>
			                    <h3 class="title">Showroom Cầu Giấy</h3>
			                    <span class="post">Số 1 Hồ Tùng Mậu - Cầu Giấy - Hà Nội</span>
			                </div>
			            </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 showroom_pc">
						<div class="box">
			                <img src="assets/images/showroom/showroom-3.jpg" style="width: 100%; height: auto">
			                <div class="box-content">
			                    <ul class="icon">
			                        <li><a href="#"><i class="fa fa-search" style="margin-top: 15px;"></i></a></li>
			                        <li><a href="#"><i class="fa fa-link" style="margin-top: 15px;"></i></a></li>
			                    </ul>
			                    <h3 class="title">Showroom Lê Đại Hành</h3>
			                    <span class="post">Số 51 Lê Đại Hành - Hai Bà Trưng - Hà Nội</span>
			                </div>
			            </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 showroom_pc">
						<div class="box">
			                <img src="assets/images/showroom/showroom-4.jpg" style="width: 100%; height: auto">
			                <div class="box-content">
			                    <ul class="icon">
			                        <li><a href="#"><i class="fa fa-search" style="margin-top: 15px;"></i></a></li>
			                        <li><a href="#"><i class="fa fa-link" style="margin-top: 15px;"></i></a></li>
			                    </ul>
			                    <h3 class="title">Showroom Hoàng Mai</h3>
			                    <span class="post">Số 96 Định Công - Hoàng Mai - Hà Nội</span>
			                </div>
			            </div>
					</div>
				</div>
			</div>
          	<!-- end Showroom -->

          	<!-- Footer start -->
          	<div class="container-fluid pd0 footer">
		    	<div class="container footer_1">
		    		<div class="row ft_pd">
		    			<div class="col-md-5">
		    				<div class="row">
		    				<div class="col-md-7">
		    					<a href="#"><img src="assets/images/Logo.png" width="80%" class="img-footer"></a>
		    					<br><br>
								
								<p class="p-footer">
								<span class="hightlight">Website</span> được phát triển & vận hành bởi hệ thống: <span class="hightlight">MILLENNIUM</span> <br>
								Địa chỉ: Tầng 2, Tòa nhà Diamond Flower, Hoàng Đạo Thúy, Quận Cầu Giấy, Hà Nội <br>
								Mã số doanh nghiệp: 0101389015 <br>
								Cấp ngày: 27/12/2014 | Nơi cấp: Hà Nội <br>
								Email: hotro@millennium.com <br>
								Tel: (024) 3 516 0868
							</p>
		    				</div>
		    				<div class="col-md-5">
		    					<ul class="ul-footer">
									<li><h6>KHÁCH HÀNG</h6></li>
									<li><a href="">Chính sách bảo mật</a></li>
									<li><a href="">Hướng dẫn mua hàng</a></li>
									<li><a href="">Khách hàng thân thiết</a></li>
									<li><a href="">Tri ân khách hàng</a></li>
									<li><a href="">Hệ thống Showroom</a></li>
									<li><a href="">Hệ thống Khách hàng</a></li>
									<li><a href="">Review sản phẩm</a></li>
									<li><a href="">Lưu ý khi mua đồng hồ Longines</a></li>					
								</ul>
		    				</div>
		    			</div>
		    			</div>
		    			<div class="col-md-2"></div>
		    			<div class="col-md-5">
		    				<div class="row">
		    					<div class="col-md-6">
		    						<ul class="ul-footer">
										<li><h6>THÔNG TIN HỖ TRỢ</h6></li>
										<li><a href="#">Chính sách & Quy định</a></li>
										<li><a href="#">Chính sách bán hàng</a></li>
										<li><a href="#">Chính sách mua hàng</a></li>
										<li><a href="#">Chính sách giao hàng</a></li>
										<li><a href="#">Giao hàng - Thanh toán</a></li>
										<li><a href="#">Chính sách bảo hành</a></li>
										<li><a href="#">Chính sách đổi trả</a></li>
										<li><a href="#">Giải quyết khiếu nại</a></li>	
										<li><a href="#">Trung tâm Bảo Hành</a></li>	
									</ul>
		    					</div>
		    					<div class="col-md-6">
		    						<ul class="ul-footer">
										<li><h6>KẾT NỐI VỚI CHÚNG TÔI</h6></li>
										<li class="p-footer">Để được hỗ trợ tốt nhất</li>
									</ul>
									<div id="menu">
							  			<ul class="">
							    			<li class="icon-footer"><a href="#"><i class="fab fa-facebook"></i></a></li>
							    			<li class="icon-footer"><a href="#"><i class="fab fa-twitter"></i></a></li>
							    			<li class="icon-footer"><a href="#"><i class="fab fa-google-plus"></i></a></li>
							    			<li class="icon-footer"><a href="#"><i class="fab fa-instagram"></i></a></li>
							    			<li class="icon-footer"><a href="#"><i class="fab fa-youtube"></i></a></li>
							  			</ul>
									</div>
									<img src="https://theme.hstatic.net/1000269795/1000439171/14/dkbocongthuong.png?v=4372" id="img-footer">
		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="container">
		    		<div class="row ft_pd text-center" style="color: #888888;">
		    			<div class="col-md-12 col-12" id="ft_none">
		    				<p class="text-center "> 
		    				Copyright 2020 ©
		    				<a href="" style="text-decoration: none; color: #fac93b;">millennium.com</a>
							<br>
							Powered by Cpt Hoag
						</p>
		    			</div>
		    		</div>
		    	</div>
		    </div>

          	<!-- end Footer -->
        </div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <script type="text/javascript">
        	$('.carousel').carousel({
 				interval: 6000
			});
        </script>
    </body>
</html>