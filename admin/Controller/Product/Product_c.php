<?php

    include_once("Model/Product/Product_m.php");

    class Product_c extends Product_m {

        private $product;

        function __construct()
        {
            $this->product = new Product_m();
        }

        public function Product () {
            $product = $this->product->getProduct();
            include_once 'View/Product/list_product.php';
        }

        public function createOrder () {
            if (isset($_GET['id'])) {
                $customer_id = (int)$_GET['id'];            
                $customer = $this->product->getId($customer_id);
                $product = $this->product->getProduct();
                if (isset($_POST['create_bill'])) {
                    $user_id_care = $_POST['user_id_care'];
                    $user_id_buy = $_SESSION['id'];
                    $total = $_POST['total'];
                    $addOrder = $this->product->addOrder($user_id_buy, $user_id_care, $customer_id, $total);
                    if (isset($_SESSION['cart'])) {       
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $this->product->addDetailOrder($value['id'], $value['qty']);
                        }
                    }
                    if ($user_id_care == $user_id_buy) {
                        $add6 = $this->product->addBonus6($user_id_care);
                        $updateStatus = $this->product->purchasedStatus($customer_id);
                    } else {
                        $add4 = $this->product->addBonus4($user_id_care);
                        $add2 = $this->product->addBonus2($user_id_buy);
                        $updateStatus = $this->product->purchasedStatus($customer_id);
                    }
                    $this->product->sendMail($customer['email'], $customer['Tên khách hàng']);
                    unset($_SESSION['cart']);
                    header("Location: dashboard.php?page=list_customer_care");
                    
                }
                include_once 'View/Product/create_order.php';
            }
        }
    }
?>