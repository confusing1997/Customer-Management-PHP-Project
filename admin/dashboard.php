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
                                                    echo "<li class='breadcrumb-item'>Quản lý nhân viên</li>";
                                                    echo "<li class='breadcrumb-item active'>Danh sách nhân viên</li>";
                                                    break;
                                                case 'list_customer':
                                                    echo "<li class='breadcrumb-item'>Quản lý khách hàng</li>";
                                                    echo "<li class='breadcrumb-item active'>Danh sách khách hàng</li>";
                                                    break;
                                                case 'index':
                                                    echo "<li class='breadcrumb-item active'>Dashboard</li>";
                                                    break;
                                                case 'list_customer_care':
                                                    echo "<li class='breadcrumb-item'>Chăm sóc khách hàng</li>";
                                                    echo "<li class='breadcrumb-item active'>Danh sách khách hàng chăm sóc của nhân viên</li>";
                                                    break;
                                                case 'list_customer_care_user':
                                                    echo "<li class='breadcrumb-item'>Chăm sóc khách hàng</li>";
                                                    echo "<li class='breadcrumb-item active'>Danh sách khách hàng của nhân viên</li>";
                                                    break;
                                                case 'list_customer_care_all':
                                                    echo "<li class='breadcrumb-item'>Chăm sóc khách hàng</li>";
                                                    echo "<li class='breadcrumb-item active'>Danh sách khách hàng chăm sóc của công ty</li>";
                                                    break;
                                                case 'list_history':
                                                    echo "<li class='breadcrumb-item active'>Lịch sử điều chuyển</li>";
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
                                                echo 'Thống Kê';
                                                break;
                                            case 'list_customer':
                                                echo 'Danh Sách Khách Hàng';
                                                break;
                                            case 'list_customer_care':
                                                echo 'Danh sách khách hàng đang chăm sóc của nhân viên';
                                                break;
                                            case 'list_customer_care_all':
                                                echo 'Danh sách khách hàng đang chăm sóc của công ty';
                                                break;
                                            case 'list_all_user':
                                                echo 'Danh sách toàn bộ nhân viên của công ty';
                                                break;
                                            case 'list_history':
                                                echo 'Lịch sử điều chuyển';
                                                break;
                                            case 'list_customer_care_user':
                                                echo 'Danh sách khách hàng của nhân viên';
                                                break;
                                            default:
                                                echo "Error 404, Trang không tồn tại";
                                                echo "<a href='dashboard.php'>Quay lại</a>";
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
                                    case 'list_customer_care_user':
                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                        $customer_care = new CustomerCare_c();
                                        $customer_care->detailUser();
                                       
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

                                    default:
                                        echo "Error 404, Trang không tồn tại";
                                        echo "<a href='dashboard.php'>Quay lại</a>";
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
 
