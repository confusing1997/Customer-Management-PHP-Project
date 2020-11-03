<?php

    include_once("../../Model/CustomerCare/CustomerCare_m.php");

    class CustomerCare_c extends CustomerCare_m {

        private $customer_care;

        function __construct()
        {
            $this->customer_care = new CustomerCare_m();
        }

        public function addCustomerCare($user_id){

            return $this->customer_care->addCustomerCare($user_id);

        }

        public function getCustomerCare ($user_id) {

            return $this->customer_care->getCustomerCare($user_id);

        }

        public function getCustomerCareAll () {

            return $this->customer_care->getCustomerCareAll();

        }

        public function searchCustomerCare ($key, $user_id) {

            return $this->customer_care->searchCustomerCare($key, $user_id);
        }

        public function searchCustomerCareAll ($key) {

            return $this->customer_care->searchCustomerCareAll($key);

        }

    }