<?php
    session_start();
    include_once("../../Controller/CustomerCare/CustomerCare_c_ajax.php");
    //Gửi mail cho khách hàng
    include_once '../../Asset/PHPMailer/class.phpmailer.php';
    include_once '../../Asset/PHPMailer/class.smtp.php';

    $customer_care = new CustomerCare_c_ajax();

    $user_id_get = $_POST['user_id_get'];
    $mailGet = $customer_care->getUserId($user_id_get);
    $customer_id = $_POST['customer_id'];
    $userMove = $customer_care->getUserMove($customer_id); 
    $user_id_move = $userMove['user_id'];
    $status = $userMove['status'];
    $nameMove = $customer_care->getUserId($user_id_move);
    // $rowUserGet = $customer_care->getUserId($user_id_get);
    // $rowUserMove = $customer_care->getUserId($user_id_move);
    // $customer_care->sendMail($rowUserGet['email'], $rowUserMove['name']);
    // $user_move = $_SESSION['id'];
    $addNoti = $customer_care->addNoti($user_id_move, $customer_id, $status, $user_id_get);

    if ($addNoti){
        $customer_care->sendMail($mailGet['email'], $mailGet['name'], $nameMove['name'], $user_id_get);
        $_SESSION['notification'] = 1;
?> 
        
<?php 
    } else {
        echo " Sent False!";
?>
        
<?php
    }
?>



        


