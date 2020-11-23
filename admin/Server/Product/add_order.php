<?php
    session_start();
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
    } else {
        $_SESSION['cart'][$id]['qty'] +=1;
    }
    // unset($_SESSION['cart']);
?>
