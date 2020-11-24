<?php

    include_once("Model/Customer/Customer_m.php");

    class Customer_c extends Customer_m {

        private $customer;

        function __construct()
        {
            $this->customer = new Customer_m();
        }

        public function Customer() {
            $id = $_SESSION['id_cus'];
            $customer = $this->customer->getCustomerInfo($id);
            include_once 'View/Customer/side-bar.php';
            if (isset($_GET['method'])) {
                $method = $_GET['method'];
            }else{
                $method = 'info';
            }
            switch ($method) {
                case 'info':
                    include_once 'View/Customer/profile.php';
                    break;
                case 'password':
                    include_once 'View/Customer/password.php';
                    break;
                case 'history':
                    include_once 'View/Customer/history.php';
                    break;
                default:
                    include_once 'View/Customer/profile.php';
                    break;
            }
            
        }

        public function Customerava() {
            if (isset($_SESSION['id_cus'])) {
                $id = $_SESSION['id_cus'];
                $customer = $this->customer->getCustomerInfo($id);
            }
            include_once 'includes/topbar.php';     
        }
    }
