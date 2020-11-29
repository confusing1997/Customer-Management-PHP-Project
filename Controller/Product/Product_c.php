<?php

    include_once("Model/Product/Product_m.php");

    class Product_c extends Product_m{

        private $product;

        function __construct()
        {
            $this->product = new Product_m();
        }

        public function Product () {
            $productmale = $this->product->getProductMale();
            $productfemale = $this->product->getProductFemale();
            $productnew = $this->product->getProductNew();
            $producthot = $this->product->getProductHot();
            $productsw = $this->product->getProductSW();
            $productjp = $this->product->getProductJP();
            $productot = $this->product->getProductOT();
           
            include_once 'View/product/product.php';
            include_once 'View/product/product-brand.php';
           
        }

        public function ProductDetail () {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $detail = $this->product->getProductDetail($id);
                $productnew = $this->product->getProductNew();
                include_once 'View/product/product-detail.php';
            }
        }
    }
