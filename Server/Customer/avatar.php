<?php
	session_start();

	include_once("../../Controller/Customer/Customer_c_ajax.php");

	$customer = new Customer_c_ajax();

	if (isset($_POST['name'])) {
		$avatar = $_POST['name'];

		$id = $_SESSION['id_cus'];

		$currentFilePath = '../../assets/images/preview/'.$avatar; 

		$newFilePath = '../../assets/images/customer/'.$avatar;

		$fileMoved = rename($currentFilePath, $newFilePath);

		array_map( 'unlink', array_filter((array) glob("../../assets/images/preview/*") ) );

		$update = $customer->updateCustomerInfo($id, $avatar);

	}	
?>