<?php
	session_start();

	include_once("../../Controller/Customer/Customer_c_ajax.php");

	$customer = new Customer_c_ajax();

	function convert_name($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		$str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
		$str = preg_replace("/( )/", '-', $str);
		return $str;
	}

	$id = $_SESSION['id_cus'];

	$result = $customer->getCustomerInfo($id);

	$nameFolder = convert_name($result['name']).$id;

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