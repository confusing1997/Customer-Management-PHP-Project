<?php
    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    echo $name;
    echo $id;

    // $edit = $customer->editCustomer($id, $name, $phone, $email);

    // if ($edit) {
           //$_SESSION['noti'] = 3;
    //     echo "Cập nhật thành công!";

    // } else {

    //     echo "Cập nhật thất bại!";

    // }



