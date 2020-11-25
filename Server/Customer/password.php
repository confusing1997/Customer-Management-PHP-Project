<?php 
	session_start();

	include_once("../../Controller/Customer/Customer_c_ajax.php");

	$customer = new Customer_c_ajax();

	if (isset($_POST['pass_new']) && isset($_POST['pass'])) {

		$pass = $_POST['pass'];

		$password = $_POST['pass_new'];

		$id = $_SESSION['id_cus'];

		$num = count($customer->checkPass($id, $pass));

		if ($num == 1 ) {

			$updatePass = $customer->updateCustomerPass($id, $password);
?>
		<div class="alert alert-success" style="width: 300px; margin-left: 222px;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Đổi mật khẩu thành công!</strong> Mật khẩu sẽ được áp dụng ở lần đăng nhập tiếp theo
		</div>
<?php
		}else{

?>
		<div class="alert alert-danger" style="width: 300px; margin-left: 222px;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Mật khẩu không đúng!</strong>
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