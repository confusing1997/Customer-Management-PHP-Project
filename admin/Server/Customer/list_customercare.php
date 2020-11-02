<?php
    
    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();
    $userId = $_POST['userId'];
    

    if (isset($_POST['key'])) {

        $key = $_POST['key'];

        $result = $customer->searchCustomerCare($key, $userId);

    } else {

        $result = $customer->getCustomerCare($userId);

    }
    
    $count = 0;
    foreach ($result as $valueCustomerCare) {

        $count++;
?>

        <tr>
            <td><?= $count; ?></td>
            <td><?= $valueCustomerCare['name'] ?></td>
            <td><?= $valueCustomerCare['title'] ?></td>
            <td><?= $valueCustomerCare['phone'] ?></td>
            <td><?= $valueCustomerCare['email'] ?></td>
            <td>
                <?php 
                    if ($valueCustomerCare['status'] == 1) {
                        echo "<p style='color: red;'>Đang chăm sóc</p>";
                    }else{
                        echo "<p style='color: green;'>Đang rảnh</p>";
                    }
                ?>

            </td>
            <td><?= $valueCustomerCare['create_at'] ?></td>

            <td> 
                <button type="button" class="btn btn-primary">Xem chi tiết</button>              
            </td>
        </tr>

<?php

    }
    // if ($result == null) {
    //     echo "<br><br><td colspan='8'><div class='alert alert-danger alert-dismissible' role='alert'>
    //           <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    //           <strong>Bạn chưa có khách hàng nào</strong> để chăm sóc
    //         </div></td>";
    // }
?>