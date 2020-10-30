<?php

    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    if (isset($_POST['key'])) {

        $key = $_POST['key'] ;

        $result = $customer->searchCustomer($key);

    } else {

        $result = $customer->getCustomer();

    }

    

    $count = 0;
    foreach ($result as $valueCustomer) {

        $count++;
?>

        <tr>
            <td><?= $count; ?></td>
            <td><?= $valueCustomer['name'] ?></td>
            <td><?= $valueCustomer['title'] ?></td>
            <td><?= $valueCustomer['phone'] ?></td>
            <td><?= $valueCustomer['email'] ?></td>

            <td> 
                <button type="button" class="btn btn-primary">Sửa</button>
                <button type="button" class="btn btn-danger rm_customer" 
                        value="<?= $valueCustomer['id'] ?>">Xóa</button>
            </td>
        </tr>

<?php

    }
    
?>