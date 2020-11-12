<?php
    include_once("Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    $id = (int)$_POST['customer_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 


    $num = count($customer->checkEmailPhoneUpdate($id, $phone, $email));
    if($num == 0 && $name != '' && $phone != '' && $email != ''){
        $edit = $customer->editCustomer($id, $name, $phone, $email);
        if ($edit) {
    ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> Cập nhật thành công!
            </div>

    <?php 

        } else {

    ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> Cập nhật thất bại!
            </div>
    <?php 
        } 
    } else {
    ?>
        <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> Số điện thoại hoặc email bị trùng!
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



