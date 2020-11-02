<?php

    include_once("../../Model/Customer/Customer_m.php");

    class Customer_c extends Customer_m {

        private $customer;

        function __construct()
        {
            $this->customer = new Customer_m();
        }

        public function getCustomer () {

            return $this->customer->getCustomer();

        }

        public function removeCustomer($id) {

            return $this->customer->removeCustomer($id);

        }

        public function searchCustomer($key) {

            return $this->customer->searchCustomer($key);

        }

        public function addCustomer($name,$showroom_id, $phone, $email){

            return $this->customer->addCustomer($name, $showroom_id, $phone, $email);

        }

    }