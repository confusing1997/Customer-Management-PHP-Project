<?php

    include_once("../../Controller/Product/Product_c_ajax.php");

    $product = new Product_c_ajax();

    $id = (int)$_POST['id'];
    $qty = (int)$_POST['qty'];
    $row = $product->getPro_id($id);
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        $_SESSION['cart'][$id] = $row;
        $_SESSION['cart'][$id]['qty'] = $qty;
    }else if (!array_key_exists($id, $_SESSION['cart'])){
            $_SESSION['cart'][$id] = $row;
            $_SESSION['cart'][$id]['qty'] = $qty;
    }
    $_SESSION['sum_price'] = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $valueCart) {
?>
            <tr>
                <td id="nameCart">
                    <?= $valueCart['name']; ?>
                    <input type="text" hidden="" name="product_id" value="<?= $key; ?>">    
                </td>
                <td><?= number_format($valueCart['price']); ?></td>
                <td>
                    <?= $valueCart['qty']; ?>
                    <input type="number" hidden="" name="quantity" value="<?= $valueCart['qty']; ?>">
                </td>
                <td>
                    <?php 
                    $item_sum = $valueCart['price'] * $valueCart['qty'];
                    ?>
                    <input type="number" hidden="" name="price" value="<?= $valueCart['price']; ?>">
                    <?php
                    $_SESSION['sum_price'] += $item_sum;
                    echo number_format($item_sum);
                    ?>  
                    <input type="text" hidden="" name="totalCart" value="<?= $item_sum; ?>">                              
                </td>
            </tr>
<?php 
        }
    } 
?>
