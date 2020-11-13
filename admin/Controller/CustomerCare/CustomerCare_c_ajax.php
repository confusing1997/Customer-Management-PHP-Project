<?php

    include_once("../../Model/CustomerCare/CustomerCare_m_ajax.php");

    class CustomerCare_c_ajax extends CustomerCare_m_ajax {

        private $customer_care;

        function __construct()
        {
            $this->customer_care = new CustomerCare_m_ajax();
        }

        public function addCustomerCare($user_id){

            return $this->customer_care->addCustomerCare($user_id);

        }

        public function removeCustomerCare($customer_id){

                return $this->customer_care->removeCustomerCare($customer_id);

        }

        public function addUserGet($user_id_get, $customer_id){

                return $this->customer_care->addUserGet($user_id_get, $customer_id);

        }

        public function addHistory($user_id_move, $customer_id, $user_id_get){

                return $this->customer_care->addHistory($user_id_move, $customer_id, $user_id_get);

        }

        public function addContent($user_id, $customer_id, $content){

                return $this->customer_care->addContent($user_id, $customer_id, $content);

        }
    }
?>