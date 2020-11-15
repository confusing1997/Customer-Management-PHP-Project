<?php   
    session_start();
    ob_start();
    if (isset($_SESSION['id'])) {
        header("Location: dashboard.php");
    }
    include_once "Includes/header.php";
?>

        
        <div id="page-wrapper">

            <div class="container-fluid">               

                <!-- Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php 
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 'login';
                            }

                            switch ($page) {

                                case 'index':
                                    include_once 'dashboard.php';
                                    break;

                                case 'login':
                                    include_once 'Controller/Login_c.php';
                                    $login = new Login_c();
                                    $login->LoginC();
                                    break;
                                case 'logout':
                                    include_once 'View/logout.php';
                                    break;

                                default:
                                    echo "Error 404, Page is not exists";
                                    echo "<a href='list_customer.php'>Go back</a>";
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
