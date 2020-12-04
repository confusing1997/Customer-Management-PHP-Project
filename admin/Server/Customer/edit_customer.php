<?php
    include_once("../../Controller/Customer/Customer_c_ajax.php");

    $customer = new Customer_c_ajax();

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
                <strong>Update Successfully!</strong> 
            </div>

    <?php 

        } else {

    ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Update Failed!</strong>
            </div>
    <?php 
        } 
    } else {
    ?>
        <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Data is invalid!</strong> 
            </div>
    <?php
    }
    ?>
    

    

<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
        setInterval('refreshPage()', 2000);
    });
    function refreshPage() {
        location.reload(true);
    }
</script>



