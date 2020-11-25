<div class="container-fluid pd0" style="background-color: #f5f5f5; color: black; height: 800px;">
	<div class="container" style="padding-top: 50px;">
		<div class="row" style="height: 100%">
			<div class="col-md-2 col-2 pd0" style="height: 100%">
				<div class="name" style="padding-top: 15px;padding-bottom: 30px; height: 100px; border-bottom: 1px solid #efefef; ">
					<div style="width: 35%; float: left; text-align: center;" id="ava_cus">
						<img src="assets/images/customer/<?php echo $customer['avatar'] ?>" alt="user-image" class="rounded-circle" style="width: 50px; height: 50px;" id='load_ava'>
					</div>
					<div class="user-name" style="width: 65%; float: left; padding-top: 10px;">
						<span class="ml-1" id="name_cus1"><b><?php echo $_SESSION['name_cus'] ?></span></b>
						<p style="color: #888; padding-left: 5px;">Hồ sơ</p>
					</div>	
	            </div>
	            
	            <div style="height: 100px; margin-top: 30px; font-size: 16px;">
					<ul class="list-group" style="float: left; ">
					  <a href="index.php?page=profile&method=info"><li class="list-group-item"><i class=""></i>Thông tin tài khoản</li></a>
					  <a href="index.php?page=profile&method=password"><li class="list-group-item">Đổi mật khẩu</li></a>	
					  <a href="index.php?page=profile&method=history"><li class="list-group-item">Lịch sử mua hàng</li></a>
					</ul>
				</div>
			</div>
			<div style="width: 30px; height: 100%"></div>
			<?php 
				include_once 'Controller/Customer/Customer_c.php';
				$customer = new Customer_c();
                $customer->Customer();
			?>
		</div>
	</div>
</div>