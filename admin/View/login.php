<?php 

	// if (isset($_GET['redirect'])) {
	// 	echo "<script>alert('Bạn cần đăng nhập để hiển thị chức năng này!');</script>";
	// }	
	
 ?>

<form action="" method="POST">
	<legend>Đăng nhập hệ thống</legend>

	<div class="form-group">
		<label for="">Username</label>
		<input type="email"  name="user" class="form-control" value="<?php if(isset($user)){echo $user;} ?>" placeholder="bimy97@gmail.com, bimy96, ...">
	</div>

	<div class="form-group">
		<label for="">Password</label>
		<input type="password"  name="passw" class="form-control" value="" placeholder="123456">
	</div>

	<button type="submit" name="sm_login" class="btn btn-primary">Đăng nhập</button>
	<?php  
	if (isset($errors)) {
		?>
		<div class="alert alert-danger" style="margin-top: 30px;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thông báo: </strong> <?php echo $errors; ?>
		</div>
		<?php
	}  

	?>

</form>