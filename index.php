<?php 
	session_start();
	// session_destroy();
	ob_start();
	include_once "includes/header.php";
 ?>
       		
            <!-- Topbar Start -->
            <?php 
              include_once 'Controller/Customer/Customer_c.php';
              $customer = new Customer_c();
              $customer->Customerava(); 
            ?>
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
            			include_once 'Controller/Product/Product_c.php';
                  $product = new Product_c();
                  $product->Product();
            			include_once 'includes/middle-banner.php';
            			include_once 'includes/news.php';
            			include_once 'includes/showroom.php';
            			
            			break;
            		case 'login':
            			include_once 'Controller/Login_c.php';
                  $login = new Logincus_c();
                  $login->LoginC();
                  break;
                case 'logout':
                  include_once 'View/logout.php';
                  break;
                case 'profile':
                  include_once 'Controller/Customer/Customer_c.php';
                  $customer = new Customer_c();
                  $customer->Customer();
                  break;
            		default:
            			echo "Error 404, Page is not exists";
                        echo "<a href='index.php'>Go back</a>";
                        break;
            	}
             ?>
        	  <?php include_once 'includes/footer.php'; ?>
<script src="assets/js/myScript.js?<?php echo fileatime('assets/js/myScript.js') ?>"></script>
          	