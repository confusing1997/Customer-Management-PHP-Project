<?php
    session_start();
    include_once("../../Controller/CustomerCare/CustomerCare_c_ajax.php");

    $customer_care = new CustomerCare_c_ajax();
    
    $customer_id = $_POST['customer_id'];
    $rowNoti = $customer_care->getInfoNoti($customer_id); 
    $user_id_get = $rowNoti['user_id_get'];
    $user_id_move = $rowNoti['user_id_move'];

    $delete = $customer_care->removeCustomerCare($customer_id);
    $addTblCare = $customer_care->addUserGet($user_id_get, $customer_id);
    $addTblHistory = $customer_care->addHistory($user_id_move, $customer_id, $user_id_get);
    $removeNoti = $customer_care->removeNoti($customer_id);

    if ($delete && $addTblCare && $addTblHistory && $removeNoti){
?> 
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Accepted!</strong> 
        </div>
<?php 
    } else {
?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Accept Fail!</strong> 
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

        


