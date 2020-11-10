<?php

    include_once("Model/CustomerCare/CustomerCare_m.php");

    class CustomerCare_c extends CustomerCare_m {

        private $customer_care;

        function __construct()
        {
            $this->customer_care = new CustomerCare_m();
        }

        public function CustomerCare () {
            $user_id = $_SESSION['id'];
            $customer_care = $this->customer_care->getCustomerCare($user_id);
            $customer_care1 = $this->customer_care->getAllUserExceptOne($user_id);     
            include_once 'View/CustomerCare/list_customer_care.php';
        }

        public function CustomerCareAll () {
            if (isset($_POST['searchPhone'])) {
                $key = $_POST['key'];
                if(strlen($key) >= 6 ){
                    $customer_care = $this->customer_care->searchCustomerCareAll($key);
                } else {
                    $customer_care = $this->customer_care->getCustomerCareAll();
                }
            } else {
                $customer_care = $this->customer_care->getCustomerCareAll();
            }
            include_once 'View/CustomerCare/list_customer_care_all.php';
        }

        public function addCustomerCare($user_id){

            return $this->customer_care->addCustomerCare($user_id);

        }

        public function getHistory(){

                $history = $this->customer_care->getHistory();

            include_once 'View/CustomerCare/list_history.php';

        }

         public function getDetailCare ($customer_id) {
            return $this->customer_care->getDetailCare($customer_id);
        }

        public function removeCustomerCare($customer_id){

                $customer_care = $this->customer_care->removeCustomerCare($customer_id);

        }

        public function addUserGet($user_id_get, $customer_id){

                $customer_care = $this->customer_care->addUserGet($user_id_get, $customer_id);

        }

        public function addHistory($user_id_move, $customer_id, $user_id_get){

                $customer_care = $this->customer_care->addHistory($user_id_move, $customer_id, $user_id_get);

        }

        public function addContent($user_id, $customer_id, $content){

                $customer_care = $this->customer_care->addContent($user_id, $customer_id, $content);

        }
    }
?>