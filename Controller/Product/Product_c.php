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
            $productsw = $this->product->getProductSW();
            $productjp = $this->product->getProductJP();
            $productot = $this->product->getProductOT();
            include_once 'View/product.php';
            include_once 'View/product-brand.php';
        }
    }
