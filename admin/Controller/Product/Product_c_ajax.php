<?php 

    include_once("../../Model/Product/Product_m_ajax.php");

    class Product_c_ajax extends Product_m_ajax {

        private $product;

        function __construct()
        {
            $this->product = new Product_m_ajax();
        }

        public function addProduct ($name, $price, $description) {

            return $this->product->addProduct($name, $price, $description);

        }

        public function removeProduct($id) {

            return $this->product->removeProduct($id);

        }

        public function modifyProduct($id, $name, $price, $description) {

            return $this->product->modifyProduct($id, $name, $price, $description);

        }

    }