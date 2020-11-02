<?php

    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    if (isset($_POST['key'])) {

        $key = $_POST['key'];

        $result = $customer->searchCustomerCareAll($key);

    } else {

        $result = $customer->getCustomerCareAll();

    }
    
    $count = 0;
    foreach ($result as $valueCustomerAll) {

        $count++;
?>

        <tr>
            <td><?= $count; ?></td>
            <td><?= $valueCustomerAll['name'] ?></td>
            <td><?= $valueCustomerAll['title'] ?></td>
            <td><?= $valueCustomerAll['Họ tên khách'] ?></td>
            <td><?= $valueCustomerAll['phone'] ?></td>
            <td><?= $valueCustomerAll['create_at'] ?></td>
            <td>
                <?php 
                    if ($valueCustomerAll['status'] == 1) {
                        echo "<p style='color: red;'>Đang chăm sóc</p>";
                    }else{
                        echo "<p style='color: green;'>Đang rảnh</p>";
                    }
                ?>

            </td>
           

            <td> 
                <button type="button" class="btn btn-primary">Xem chi tiết</button>
            </td>
        </tr>

<?php

    }
    
?>