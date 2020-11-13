<?php

    include_once("Model/Customer/Customer_m.php");

    class Customer_c extends Customer_m {

        private $customer;

        function __construct()
        {
            $this->customer = new Customer_m();
        }

        public function Customer () {
            $customer = $this->customer->getCustomer();
            include_once 'View/Customer/list_customer.php';
        }
    }
