<?php

    include_once("Model/Product/Product_m.php");

    class Product_c extends Product_m {

        private $product;

        function __construct()
        {
            $this->product = new Product_m();
        }

        public function Product () {
            $product = $this->product->getProduct();
            include_once 'View/Product/list_product.php';
        }

        public function createOrder () {
            if (isset($_GET['id'])) {
                $customer_id = (int)$_GET['id'];            
                $customer = $this->product->getId($customer_id);
                $product = $this->product->getProduct();
                if (isset($_POST['create_bill'])) {
                    $user_id_care = $_POST['user_id_care'];
                    $user_id_buy = $_SESSION['id'];
                    if (isset($_SESSION['cart'])) {   
                        $total = $_SESSION['sum_price'];
                        $productTable = array();
                        $table = array();
                        $this->product->addOrder($user_id_buy, $user_id_care, $customer_id, $total);   
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $this->product->addDetailOrder($value['id'], $value['qty']);

                            //Show table in mail
                            $productTable[$value['id']] = '<tr>
                            <td>'.$value['name'].'</td>
                            <td>'.number_format($value['price']).'</td> 
                            <td>'.$value['sale'].'%</td> 
                            <td>'.$value['qty'].'</td>                                                  
                            <td>'.number_format(($value['price']-$value['price']*$value['sale']/100)*$value['qty']).'</td>                       
                            </tr>';
                            array_push($table, $productTable[$value['id']]);
                        }
                        $rows = join($table);
                        $this->product->sendMail($customer['email'], $customer['Tên khách hàng'], $rows, $total);
                    }
                    if ($user_id_care == $user_id_buy) {
                        $add6 = $this->product->addBonus6($user_id_care);
                        $updateStatus = $this->product->purchasedStatus($customer_id);
                    } else {
                        $add4 = $this->product->addBonus4($user_id_care);
                        $add2 = $this->product->addBonus2($user_id_buy);
                        $updateStatus = $this->product->purchasedStatus($customer_id);
                    }
                    // $order = $this->product->getMaxOrderId();
                    
                    // $this->product->sendMail($customer['email'], $customer['Tên khách hàng'], $order_id['order_id']);
                    unset($_SESSION['cart']);
                    unset($_SESSION['sum_price']);
                    header("Location: dashboard.php?page=list_customer_care");
                }
                include_once 'View/Product/create_order.php';
            }
        }

        public function orderHistory(){
            if (isset($_GET['id'])) {
                $customer_id = $_GET['id'];
            }
            $product = $this->product->getOrderHistory($customer_id);
            include_once 'View/Product/order_history.php';
        }

        public function getOrder () {
            $product = $this->product->getOrder();
            include_once 'View/Product/list_order.php';
        }

        public function getDetailOrder ($order_id) {
            return $order = $this->product->getDetailOrder($order_id);
        }
    }
?>