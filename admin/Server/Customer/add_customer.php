<?php

    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    $name = $_POST['name'];
    $showroom_id = $_POST['showroom_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $add = $customer->addCustomer($name, $showroom_id, $phone, $email);

    if ($add) {

        echo "Thêm thành công!";

    } else {

        echo "Thêm thất bại!";

    }

