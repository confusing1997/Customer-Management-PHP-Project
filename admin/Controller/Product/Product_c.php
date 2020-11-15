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
                $customer = $this->product->getCustomerName($customer_id);
                $product = $this->product->getProduct();
                include_once 'View/Product/create_order.php';
            }
        }
    }
?>