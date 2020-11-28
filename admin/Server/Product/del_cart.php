<?php
    session_start();

    if (isset($_POST['id'])) {
        $id = (int)$_POST['id'];
        
        if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']) ) {
            unset($_SESSION['cart'][$id]);
        }       

    }
    

?>