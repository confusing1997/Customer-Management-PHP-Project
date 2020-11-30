<?php 

    include_once("Model/Order/order_m.php");

    class Order_c extends Order_m {

        private $order;

        function __construct()
        {
            $this->order = new Order_m();
        }

        public function Order() {

            $order = $this->order->getAmountOfOrder();
            $getDetailOrder = $this->order->getDetailOrder();
            $sumQuantity = $this->order->sumQuantity();
            $avgPrice = $this->order->avgPrice();
            $sumSalary = $this->order->totalSalary();
            $amountOfAdmin = $this->order->amountOfAdmin();
            $amountOfStaff = $this->order->amountOfStaff();
            $customerAmount = $this->order->customerAmount();
            $transferenceAmount = $this->order->transferenceAmount();
            $contentAmount = $this->order->contentAmount();

            $sh1CustomerAmount = $this->order->sh1CustomerAmount();
            $sh2CustomerAmount = $this->order->sh2CustomerAmount();
            $sh3CustomerAmount = $this->order->sh3CustomerAmount();

            $sh1StaffAmount = $this->order->sh1StaffAmount();
            $sh2StaffAmount = $this->order->sh2StaffAmount();
            $sh3StaffAmount = $this->order->sh3StaffAmount();

            $avgAmountCustomerSh1 = $this->order->avgAmountCustomerSh1();
            $avgAmountCustomerSh2 = $this->order->avgAmountCustomerSh2();
            $avgAmountCustomerSh3 = $this->order->avgAmountCustomerSh3();
            $amountOfProduct = $this->order->amountOfProduct(); 

            $personalAmount = $this->order->personalAmount($_SESSION['id']);

            $sumBonus = $this->order->sumBonus($_SESSION['id']);

            $personalProductAmount = $this->order->personalProductAmount($_SESSION['id']);

            $personalCustomerBeingCare = $this->order->personalCustomerBeingCare($_SESSION['id']);

            $personalTotalCustomer = $this->order->personalTotalCustomer($_SESSION['id']);

            $personalTransference = $this->order->personalTransference($_SESSION['id']);
            include_once("View/Dashboard/dashboard.php");

        }

    }