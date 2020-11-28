<?php 
	$id = $_SESSION['id_cus'];
	$nameFolder = convert_name($customer['name']).$id;
 ?>

<div class="row pd0" style="background-color: #f5f5f5; color: black;">
	<div class="col-md-12" style="margin-bottom: 50px; height: 100%">
		<?php include_once 'View/customer/side-bar.php'; ?>

		<?php 
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'info';
			}

			switch ($method) {
				case 'info':
					include_once 'View/customer/info.php';
					break;
				case 'password':
					include_once 'View/customer/password.php';
					break;
				case 'history':
					include_once 'View/customer/history.php';
					break;
				case 'detail':
					include_once 'View/customer/detail.php';
					break;
				default:
					include_once 'View/customer/info.php';
					break;
			}
		 ?>
	</div>
</div>