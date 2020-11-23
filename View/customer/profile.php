<div class="clearfix"></div>
<div class="col-md-9 col-9" style="background-color: #fff; height: 550px; padding-left: 30px;">
	<div class="title-info" style="border-bottom: 1px solid #efefef; width: 100%; height:80px;">
		<div style="margin-top: 20px;">
		<h4 style="color: #333">Thông Tin Khách Hàng</h4>
		<p>Quản lý thông tin khách hàng để bảo mật tài khoản</p>
		</div>
	</div>
	<div class="info_cus" style="height: 300px;">
		<div class="info_all" style="height: 100%; display: flex;">
			<div class="info_left" style="height: 100%">
				<div class="info_cus1">
					<div class="label_cus">Tên Khách Hàng</div>
					<div class="value_cus"><?php echo $customer['name']; ?></div>
				</div>

				<div class="info_cus1">
					<div class="label_cus">Số Điện Thoại</div>
					<div class="value_cus"><?php echo $customer['phone']; ?></div>
				</div>

				<div class="info_cus1">
					<div class="label_cus">Email</div>
					<div class="value_cus"><?php echo $customer['email']; ?></div>
				</div>

				<div class="info_cus1">
					<div class="label_cus">Giới tính</div>
					<div class="value_cus"><?php echo $customer['sex']; ?></div>
				</div>

				<div class="info_cus1">
					<?php 
						$births = $customer['birth'];
						$birth = date('d/m/Y', strtotime($births));
					 ?>
					<div class="label_cus">Ngày sinh</div>
					<div class="value_cus"><?php echo $birth ?></div>
				</div>
			</div>
			<div class="info_right" style="height: 30%; width: 30%; float: left; border-left: 1px solid #efefef">
				<div style="text-align: center; margin-bottom: 20px;" id="avatar_cus">
					<img src="assets/images/customer/<?php echo $customer['avatar'] ?>" alt="user-image" class="rounded-circle" width="80" height='80' id="avatar">
				</div>
				<form id="form-ava" action="Server/avatar.php" method="post" enctype="multipart/form-data" style="text-align: center;">
                	<label class="custom-file-upload">
					    <input id="ava-img" type="file" name="image" accept=".jpg,.jpeg,.png"/>
					    Chọn Ảnh
					</label>
					<p style="color: #999; font-size: 14px; text-align: left; padding-left: 40px;">Kích thước file tối đa là 1mb<br>Định dạng: .JPEG, .PNG, .JPG</p>
					<p></p>
     			</form>
       			<div id="err" style="color: red; text-align: center;"></div>	
			</div>
		</div>
	</div>
	<div class="save1" style="height: 50px; padding-left: 60px;">
		<button type="button" style="height: 40px;padding: 0 20px;min-width: 70px;max-width: 220px;color: #fff;background: #a8741a;" class="btn btn-info waves-effect waves-light save" id="toastr-three">Lưu</button>
	</div>
	<div id="content"></div>
</div>
