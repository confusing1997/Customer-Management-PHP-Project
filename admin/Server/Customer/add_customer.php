<?php
    session_start();
    ob_start();
    include_once("../../Controller/Customer/Customer_c.php");
    include_once("../../Controller/CustomerCare/CustomerCare_c.php");

    $customer = new Customer_c();
    $customer_care = new CustomerCare_c();

    $name = $_POST['name'];
    $showroom_id = $_SESSION['showroom_id'];
    $user_id = $_SESSION['id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $num = count($customer->checkEmailPhone($phone, $email));
    if ($num == 0){
        $add1 = $customer->addCustomer($name, $showroom_id, $phone, $email);
        $add2 = $customer_care->addCustomerCare($user_id);
        if ($add1 == true && $add2 == true) {
?> 
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong> Thêm mới thành công!
        </div>
<?php 
    } else {

            echo "Thêm thất bại!";
            
        }
    } else {
?> 
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Khách hàng đã tồn tại!
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
        


