<?php
    session_start();
    ob_start();
    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    $name = $_POST['name'];
    $showroom_id = $_SESSION['showroom_id'];
    $user_id = $_SESSION['id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $num = count($customer->checkEmailPhone($phone, $email));
    if ($num == 0){
        $add1 = $customer->addCustomer($name, $showroom_id, $phone, $email);
        $add2 = $customer->addCustomerCare($user_id);
        if ($add1 == true && $add2 == true) {

            echo "Thêm thành công!";

        } else {

            echo "Thêm thất bại!";
            
        }
    } else {
        echo "Khách hàng đã tồn tại";
    }


