<?php
    include_once("Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    $id = (int)$_POST['customer_id'];
    $name = $_POST['name'];
    $showroom_id = (int)$_POST['showroom_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 

    if ($name != '' && $phone != '' && $email !=''){
    	$remove = $customer->removeCustomer($id);
    	$num = count($customer->checkEmailPhone($phone, $email));
    	if ($num == 0) {
    		$add = $customer->addCustomer($name, $showroom_id, $phone, $email);
    		if ($add) {
?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Thông báo!</strong> Cập nhật thành công
			</div>
<?php
    		}else{
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Thông báo!</strong> Cập nhật thất bại
			</div>
<?php
    		}
    	}else{
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Thông báo!</strong> Số điện thoại hoặc email đã trùng
			</div>
<?php
    	}	
    } else{
?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Dữ liệu nhập không được trống!
    </div>
<?php
    }
?>
<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    })
</script>



