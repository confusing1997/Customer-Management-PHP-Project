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

        public function removeCustomer($id) {
            return $this->customer->removeCustomer($id);
        }

        // public function searchCustomer($key) {

        //     return $this->customer->searchCustomer($key);

        // }

        // public function addCustomer($name,$showroom_id, $phone, $email){

        //     return $this->customer->addCustomer($name, $showroom_id, $phone, $email);

        // }

        // public function editCustomer($id, $name, $phone, $email){

        //     return $this->customer->editCustomer($id, $name, $phone, $email);

        // }


        // public function checkEmailPhone($phone, $email){

        //     return $this->customer->checkEmailPhone($phone, $email);

        // }
    }
