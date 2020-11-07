<?php

    include_once("../../Controller/Customer/Customer_c.php");
    $customer = new Customer_c();
        if (isset($_POST['id'])) {
        $id = (int)$_POST['id'];
        echo $id;

       $remove = $customer->removeCustomer($id); 
       if ($remove) {
           echo "1111111111111111111111111111111";
       }
    }
?>
