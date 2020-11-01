<?php
	session_start();
	// session_destroy();
	ob_start();
    include_once "Includes/header.php";
?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include_once 'Includes/navheader.php'; ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include_once 'Includes/sidenav.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
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
	                                default:
	                                    echo "Error 404, Trang không tồn tại";
	                                    echo "<a href='list_customer.php'>Quay lại</a>";
	                                    break;
	                            }

                       		?>

                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> 
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
		                                default:
		                                    echo "Error 404, Trang không tồn tại";
		                                    echo "<a href='list_customer.php'>Quay lại</a>";
		                                    break;
		                            }

	                       		?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

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
                                	include_once 'View/Customer/list_customer.php';
                                	break;
                                default:
                                    echo "Error 404, Trang không tồn tại";
                                    echo "<a href='list_customer.php'>Quay lại</a>";
                                    break;
                            }

                        ?>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("Includes/footer.php"); ?>
  <script src="Asset/js/myScript.js?<?php echo fileatime('Asset/js/myScript.js') ?>"></script>
