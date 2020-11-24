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

        public function addNoti($user_id_move, $customer_id, $user_id_get){

            return $this->customer_care->addNoti($user_id_move, $customer_id, $user_id_get);

        }

        public function removeNoti($customer_id){

            return $this->customer_care->removeNoti($customer_id);

        }

        public function addContent($user_id, $customer_id, $content){

            return $this->customer_care->addContent($user_id, $customer_id, $content);

        }

        public function getUserMove($customer_id) {

            return $this->customer_care->getUserMove($customer_id);

        }

        public function getNoti(){
            return $noti = $this->customer_care->getNoti();
            // function timeDiff($firstTime,$lastTime){ 
            //     // convert to unix timestamps 
            //     $firstTime=strtotime($firstTime); 
            //     $lastTime=strtotime($lastTime); 

            //     // perform subtraction to get the difference (in seconds) between times 
            //     $timeDiff=$lastTime-$firstTime; 

            //     // return the difference 
            //     return $timeDiff; 
            // }

            // include_once 'Includes/navheader.php';

        }

        public function getInfoNoti($customer_id) {

            return $this->customer_care->getInfoNoti($customer_id);

        }
        
        public function sendMail($email, $name) {

            return $this->customer_care->sendMail($email, $name);

        }

        //Kiểm tra trùng email của bảng user
        public function getUserId($user_id) {

            return $this->customer_care->getUserId($user_id);


        }
    }
?>