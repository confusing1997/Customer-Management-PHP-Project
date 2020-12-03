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

            if (isset($_GET['idu'])) {
                $id = $_GET['idu'];
                $user = $this->customer->getUserInfo($id);
                $rating = $this->customer->getUserRate($id);
                $user_feedback = $this->customer->getUserFeedback($id,3);
                $count_feedback = $this->customer->countFeedback($id);
            }

            if (isset($_GET['ido'])) {
                $order_id = $_GET['ido'];
                $checkfb = $this->customer->checkFeedback($order_id);
                
            }
            if (isset($_POST['submit'])) {
                $ido = $_POST['order_id'];
                $user_id = $_POST['submit'];
                $customer_id = $_SESSION['id_cus'];
                $rate = $_POST['score'];
                $feedback = htmlspecialchars($_POST['feedback']);
                $check = $this->customer->checkFeedback($ido);

                if (count($check) == 0) {
                    $add = $this->customer->addFeedback($ido, $user_id, $customer_id, $rate, $feedback);

                    header("refresh: 0;");
                }else{
                    echo "<script>alert('Quý khách chỉ có thể đánh giá 1 lần ở mỗi đơn hàng!')</script>";
                }
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
