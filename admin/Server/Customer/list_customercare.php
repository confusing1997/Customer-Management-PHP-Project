<?php

    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();
    $userId = $_POST['userId'];
    $result = $customer->getCustomerCare($userId);

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
            <td><?= $valueCustomerCare['status']==1?"Đang chăm sóc":"Chưa chăm sóc"; ?></td>
            <td><?= $valueCustomerCare['create_at'] ?></td>

            <td> 
                <button type="button" class="btn btn-primary">Xem chi tiết</button>              
            </td>
        </tr>

<?php

    }
    
?>