<?php  

	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];

		// $_SESSION['seen']; // biến lưu sản phẩm khách hàng muốn mua

		if (!isset($_SESSION['seen']) || empty($_SESSION['seen'])) {
			$_SESSION['seen'][$id] = $row;
		}else{
			if (array_key_exists($id, $_SESSION['seen'])) {
				$_SESSION['seen'][$id]['qty'] += 1;
			}else{
				$_SESSION['seen'][$id] = $row;
				$_SESSION['seen'][$id]['qty'] = 1;
			}
		}
		$_SESSION['noti_seen'] = 1;
		// echo "<pre>";
		// print_r($_SESSION['carts']);
		// echo "</pre>";
	}
	
	header("Location: index.php?page=product&id=$id");
	
	
?>