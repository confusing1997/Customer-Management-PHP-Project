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

        public function getHistory(){
            $history = $this->customer_care->getHistory();

            include_once 'View/CustomerCare/list_history.php';

        }

        public function getDetailCare ($customer_id) {

            return $this->customer_care->getDetailCare($customer_id);

        }

        public function detailUser () {
            if (isset($_GET['id'])) {
                $user_id = (int)$_GET['id'];            
                $customer_care = $this->customer_care->getCustomerCare($user_id);
                $customer_care1 = $this->customer_care->getAllUserExceptOne($user_id);     
                include_once 'View/CustomerCare/list_customer_care_user.php';
            }
        }
    }
?>