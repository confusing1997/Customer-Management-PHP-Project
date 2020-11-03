<?php

    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    $id = (int)$_POST['id'];

    $remove = $customer->removeCustomer($id);

    if ($remove) {
?> 
	<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Xóa thành công!
    </div>
<?php
       
    } else {

        echo "Xóa thất bại!";

    }
?>

<script type="text/javascript">
	//Hiện thông báo .. giây xong ẩn
	$(document).ready(function(){
	    $(".alert").delay(2000).slideUp();
	})
</script>

