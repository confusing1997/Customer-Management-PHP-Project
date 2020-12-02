<?php
	session_start();

	include_once("../../Controller/Customer/Customer_c_ajax.php");

	$customer = new Customer_c_ajax();

	$id = $_SESSION['id_cus'];

	$result = $customer->getCustomerInfo($id);

	$nameFolder = $id;

	if (!file_exists('../../assets/images/customer/'.$nameFolder)) {
    	mkdir('../../assets/images/customer/'.$nameFolder, 0777, true);
	}

	if (isset($_POST['name'])) {

		$avatar = $_POST['name'];

		array_map( 'unlink', array_filter((array) glob('../../assets/images/customer/'.$nameFolder.'/'.'*'))) ;

		$currentFilePath = '../../assets/images/preview/'.$nameFolder.'/'.$avatar; 

		$newFilePath = '../../assets/images/customer/'.$nameFolder.'/'.$avatar;

		$fileMoved = rename($currentFilePath, $newFilePath);

		array_map( 'unlink', array_filter((array) glob('../../assets/images/preview/'.$nameFolder.'/'.'*'))) ;

		$update = $customer->updateCustomerAva($id, $avatar);

	}	
?>