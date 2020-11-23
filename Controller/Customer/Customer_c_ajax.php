<?php

    include_once("../../Model/Customer/Customer_m_ajax.php");

    class Customer_c_ajax extends Customer_m_ajax {

        private $customer;

        function __construct()
        {
            $this->customer = new Customer_m_ajax();
        }

        public function updateCustomerInfo($id, $avatar){

            return $this->customer->updateCustomerInfo($id, $avatar);

        }
        
    }
