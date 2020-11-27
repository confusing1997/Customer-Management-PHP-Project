<?php
	session_start();
	// session_destroy();
	ob_start();
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
    }
    include_once "Includes/header_dashboard.php";
?>

        <!-- Top Navbar -->     
        <?php include_once 'Includes/navheader.php'; ?>

        <?php include_once 'Includes/sidenav.php'; ?>
        

        <div class="content-page">
            <div class="content">

                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Millennium</a></li>
                                        <?php 
                                            if (isset($_GET['page'])) {
                                                $page = $_GET['page'];
                                            }else{
                                                $page = 'index';
                                            }

                                            switch ($page) {
                                                case 'list_all_user':
                                                    echo "<li class='breadcrumb-item'>Manage Staff</li>";
                                                    echo "<li class='breadcrumb-item active'>Staff List</li>";
                                                    break;
                                                case 'list_customer':
                                                    echo "<li class='breadcrumb-item'>Mange Customer</li>";
                                                    echo "<li class='breadcrumb-item active'>Customer List</li>";
                                                    break;
                                                case 'index':
                                                    echo "<li class='breadcrumb-item active'>Dashboard</li>";
                                                    break;
                                                case 'list_customer_care':
                                                    echo "<li class='breadcrumb-item'>Add Customer</li>";
                                                    echo "<li class='breadcrumb-item active'>My Customer List</li>";
                                                    break;
                                                case 'list_customer_care_user':
                                                    echo "<li class='breadcrumb-item'>Manage Staff</li>";
                                                    echo "<li class='breadcrumb-item'>Staff List</li>";
                                                    echo "<li class='breadcrumb-item active'>Staff's Customer List</li>";
                                                    break;
                                                case 'list_customer_care_all':
                                                    echo "<li class='breadcrumb-item'>Add Customer</li>";
                                                    echo "<li class='breadcrumb-item active'>Add Customer</li>";
                                                    break;
                                                case 'list_history':
                                                    echo "<li class='breadcrumb-item active'>Transference History</li>";
                                                    echo "<li class='breadcrumb-item active'>Transference History</li>";
                                                    break;
                                                case 'list_product':
                                                    echo "<li class='breadcrumb-item active'>Product List</li>";
                                                    echo "<li class='breadcrumb-item active'>Product List</li>";
                                                    break;
                                                case 'add_customer_care':
                                                    echo "<li class='breadcrumb-item active'>Add Customer</li>";
                                                    echo "<li class='breadcrumb-item active'>My Customer List</li>";
                                                    echo "<li class='breadcrumb-item active'>Add Customer Care</li>";
                                                    break;
                                                case 'create_order':
                                                    echo "<li class='breadcrumb-item active'>Add Customer</li>";
                                                    echo "<li class='breadcrumb-item active'>My Customer List</li>";
                                                    echo "<li class='breadcrumb-item active'>Create Bill</li>";
                                                    break;
                                                case 'list_bonus':
                                                    echo "<li class='breadcrumb-item active'>Salary</li>";
                                                    echo "<li class='breadcrumb-item active'>Commission</li>";
                                                    break;
                                                    
                                                    
                                                    
                                                    
                                                default:
                                                    
                                                    break;
                                            }
                                         ?>       
                                    </ol>
                                </div>
                                <h4 class="page-title">
                                     <?php 
                                        if (isset($_GET['page'])) {
                                            $page = $_GET['page'];
                                        } else {
                                            $page = 'index';
                                        }

                                        switch ($page) {
                                            case 'index':
                                                echo 'Statistical';
                                                break;
                                            case 'list_customer':
                                                echo "Customer List";
                                                break;
                                            case 'list_customer_care':
                                                echo "My Customer List";
                                                break;

                                            case 'detail_customer_care':
                                                echo "Detail Customer";
                                                break;
                                            case 'list_customer_care_all':
                                                echo "Add Customer";
                                                break;
                                            case 'list_all_user':
                                                echo "Staff List";
                                                break;
                                            case 'list_history':
                                                echo 'Transference History';
                                                break;
                                            case 'list_customer_care_user':
                                                echo "Staff's Customer List";
                                                break;
                                            case 'create_order':
                                                echo 'Bill';
                                                break;
                                            case 'list_product':
                                                echo "Product List";
                                                break;
                                            case 'get_transfer_noti':
                                                echo "Notification List";
                                                break;
                                            case 'add_customer_care':
                                                echo "Add Customer Care";
                                                break;
                                            case 'order_history':
                                                echo "Order History";
                                                break;
                                            case 'list_bonus':
                                                echo "My Bonus";
                                                break;
                                            default:
                                                echo "Error 404, Page is not exists";
                                                echo "<a href='dashboard.php'>Go back</a>";
                                                break;
                                        }
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title --> 
                    <!-- Page Content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <?php 
                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else {
                                    $page = 'index';
                                }

                                switch ($page) {
                                    case 'index':
                                        include_once 'View/Dashboard/dashboard.php';
                                        break;
                                    case 'list_customer':
                                    	include_once 'Controller/Customer/Customer_c.php';
                                        $customer = new Customer_c();
                                        $customer->Customer();
                                    	break;
                                    case 'list_customer_care':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->CustomerCare();
                                       
                                        break;
                                    case 'detail_customer_care':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->detailCustomerCare();
                                       
                                        break;
                                    case 'list_customer_care_user':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->detailUser();
                                       
                                        break;
                                    case 'list_product':
                                        include_once 'Controller/Product/Product_c.php';
                                        $product = new Product_c();
                                        $product->Product();
                                       
                                        break;
                                    case 'create_order':
                                        include_once 'Controller/Product/Product_c.php';
                                        $product = new Product_c();
                                        $product->createOrder();
                                       
                                        break;
                                    case 'list_customer_care_all':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->CustomerCareAll();
                                        break;
                                    case 'list_all_user':
                                        include_once 'Controller/User/User_c.php';
                                        $user = new User_c();
                                        $user->User();
                                        break;
                                    case 'list_history':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->getHistory();
                                        break;
                                    case 'get_transfer_noti':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->notiUser();
                                        break;

                                    case 'add_customer_care':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->getCustomerPurchased();
                                        break;

                                    case 'order_history':
                                        include_once 'Controller/Product/Product_c.php';
                                        $product = new Product_c();
                                        $product->orderHistory();
                                        break;

                                    case 'list_bonus':
                                        include_once 'Controller/User/User_c.php';
                                        $user = new User_c();
                                        $user->Bonus();
                                        break;

                                    default:
                                        echo "Error 404, Page is not exists";
                                        echo "<a href='dashboard.php'>Go back</a>";
                                        break;
                                }

                            ?>
                        </div>
                    </div>
                </div>
            <!-- /.container-fluid -->
            </div>
        </div>
        <!-- /#page-wrapper -->

  <?php include("Includes/footer.php"); ?>
  <script src="Asset/js/myScript.js?<?php echo fileatime('Asset/js/myScript.js') ?>"></script>
 
