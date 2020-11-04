<?php

    include_once("Model/CustomerCare/CustomerCare_m.php");

    class CustomerCare_c extends CustomerCare_m {

        private $customer_care;

        function __construct()
        {
            $this->customer_care = new CustomerCare_m();
        }

        public function CustomerCare () {
            $customer = $this->customer->getCustomer();
            include_once 'View/Customer/list_customer.php';
        }

    }