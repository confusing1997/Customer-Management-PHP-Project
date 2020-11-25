<?php
    session_start();
    include_once("../../Controller/CustomerCare/CustomerCare_c_ajax.php");
    // Gửi mail cho khách hàng
    // include_once '../../Asset/PHPMailer/class.phpmailer.php';
    // include_once '../../Asset/PHPMailer/class.smtp.php';

    $customer_care = new CustomerCare_c_ajax();

    $user_id_get = $_POST['user_id_get'];
    $customer_id = $_POST['customer_id'];
    $userMove = $customer_care->getUserMove($customer_id); 
    $user_id_move = $userMove['user_id'];
    // $rowUserGet = $customer_care->getUserId($user_id_get);
    // $rowUserMove = $customer_care->getUserId($user_id_move);
    // $customer_care->sendMail($rowUserGet['email'], $rowUserMove['name']);
    // $user_move = $_SESSION['id'];
    $addNoti = $customer_care->addNoti($user_id_move, $customer_id, $user_id_get);

    if ($addNoti){
?> 
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Request Sent!</strong> 
        </div>
<?php 
    } else {
?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Sent Fail!</strong> 
        </div>
<?php
    }
?>

<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    })
</script>

        


