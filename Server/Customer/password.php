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
		<div class="jq-toast-wrap top-right">
			<div class="jq-toast-single jq-has-icon jq-icon-danger">
				<span class="close-jq-toast-single">x</span>
				<h2 class="jq-toast-heading">Thành công!</h2>
				Mật khẩu sẽ được áp dụng ở lần đăng nhập tiếp theo
			</div>
		</div>
<?php

		}else{
?>
		<div class="jq-toast-wrap top-right">
			<div class="jq-toast-single jq-has-icon jq-icon-danger">
				<span class="close-jq-toast-single">x</span>
				<h2 class="jq-toast-heading">Thất bại!</h2>
				Mật khẩu không chính xác
			</div>
		</div>
<?php
		}
	}
 ?>

<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".top-right").delay(2000).fadeOut();
    })
</script>