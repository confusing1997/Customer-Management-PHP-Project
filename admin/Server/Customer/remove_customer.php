<?php

    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    $id = (int)$_POST['id'];

    $remove = $customer->removeCustomer($id);

    if ($remove) {

        echo "Xóa thành công!";

    } else {

        echo "Xóa thất bại!";

    }

