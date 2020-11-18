<?php 
	session_start();
	// session_destroy();
	ob_start();
	include_once "includes/header.php";
 ?>
       		
            <!-- Topbar Start -->
            <?php include_once 'includes/topbar.php'; ?>
            <!-- end Topbar -->
            <?php 
            	if (isset($_GET['page'])) {
            		$page = $_GET['page'];
            	}else{
            		$page = 'index';
            	}

            	switch ($page) {
            		case 'index':
            			include_once 'includes/banner.php';
            			include_once 'includes/service.php';
            			include_once 'includes/brand.php';
            			include_once 'View/product.php';
            			include_once 'View/product-brand.php';
            			include_once 'includes/middle-banner.php';
            			include_once 'includes/news.php';
            			include_once 'includes/showroom.php';
            			include_once 'includes/footer.php';
            			break;
            		case 'login':
            			include_once 'Controller/Login_c.php';
                        $login = new Logincus_c();
                        $login->LoginC();
                        break;
                    case 'logout':
                        include_once 'View/logout.php';
                        break;
            		default:
            			echo "Error 404, Page is not exists";
                        echo "<a href='index.php'>Go back</a>";
                        break;
            	}
             ?>
        	
            <!-- Carousel start  -->
            
            <!-- end Carousel -->
 			
          	<!-- Start Service -->
          	
          	<!-- end Service -->

          	<!-- Brand start -->
 			
 			<!-- end Brand -->

          	<!-- Product start -->
          	
          	<!-- end Product -->

          	<!-- Product-Brand start -->
          	
          	<!-- end Product-Brand -->

          	<!-- Middle Banner start -->
          	
          	<!-- end Middle Banner -->

          	<!-- News start -->
          	
          	<!-- end News -->

          	<!-- Showroom start -->
          	
          	<!-- end Showroom -->

          	<!-- Footer start -->
          	