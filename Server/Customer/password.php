<?php 
	session_start();


	include_once("../../Controller/Customer/Customer_c_ajax.php");

	$customer = new Customer_c_ajax();

	if (isset($_POST['pass_new']) && isset($_POST['pass'])) {

		$pass = md5($_POST['pass']);

		$password = md5($_POST['pass_new']);

		$id = $_SESSION['id_cus'];

		$num = count($customer->checkPass($id, $pass));

		if ($num == 1 ) {

			$updatePass = $customer->updateCustomerPass($id, $password);
?>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thành công!</strong> Mật khẩu sẽ được áp dụng ở lần đăng nhập tới
		</div>
<?php

		}else{
?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thất bại!</strong> Mật khẩu không chính xác
		</div>
<?php
		}
	}
 ?>

<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    })
</script>