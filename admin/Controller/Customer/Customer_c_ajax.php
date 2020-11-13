<?php

    include_once("../../Model/Customer/Customer_m_ajax.php");

    class Customer_c_ajax extends Customer_m_ajax {

        private $customer;

        function __construct()
        {
            $this->customer = new Customer_m_ajax();
        }

        public function removeCustomer($id) {
            return $this->customer->removeCustomer($id);
        }

        public function addCustomer($name,$showroom_id, $phone, $email){

            return $this->customer->addCustomer($name, $showroom_id, $phone, $email);

        }

        public function editCustomer($id, $name, $phone, $email){

            return $this->customer->editCustomer($id, $name, $phone, $email);

        }

        public function checkEmailPhone($phone, $email){

            return $this->customer->checkEmailPhone($phone, $email);

        }

        public function checkEmailPhoneUpdate($id, $phone, $email){

            return $this->customer->checkEmailPhoneUpdate($id, $phone, $email);

        }
    }
