<?php

    include_once("../../Model/Customer/Customer_m_ajax.php");

    class Customer_c_ajax extends Customer_m_ajax {

        private $customer;

        function __construct()
        {
            $this->customer = new Customer_m_ajax();
        }

        public function updateCustomerAva($id, $avatar){

            return $this->customer->updateCustomerAva($id, $avatar);
        }

        public function updateCustomerPass($id, $password){

            return $this->customer->updateCustomerPass($id, $password);
        }

        public function checkPass($id, $pass){

            return $this->customer->checkPass($id, $pass);
        }

        public function getCustomerInfo($id){

            return $this->customer->getCustomerInfo($id);
        }
        
    }
