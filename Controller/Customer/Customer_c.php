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
            $history = $this->customer->getCustomerOrder($id);
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $detail = $this->customer->getCustomerOrderDetail($id);
            }
            include_once 'View/profile.php';
        }

        public function Customerava() {
            if (isset($_SESSION['id_cus'])) {
                $id = $_SESSION['id_cus'];
                $customer = $this->customer->getCustomerInfo($id);
            }
            include_once 'includes/topbar.php';     
        }
    }
