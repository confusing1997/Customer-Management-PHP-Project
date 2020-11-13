<?php
    session_start();
    include_once("../../Controller/CustomerCare/CustomerCare_c_ajax.php");

    $customer_care = new CustomerCare_c_ajax();

    $user_id_get = $_POST['user_id_get'];
    $customer_id = $_POST['customer_id'];
    $user_id_move = $_SESSION['id'];

    $delete = $customer_care->removeCustomerCare($customer_id);
    $addTblCare = $customer_care->addUserGet($user_id_get, $customer_id);
    $addTblHistory = $customer_care->addHistory($user_id_move, $customer_id, $user_id_get);

    if ($delete && $addTblCare && $addTblHistory){
?> 
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong> Điều chuyển thành công!
        </div>
<?php 
    } else {
?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Thông báo!</strong> Điều chuyển thất bại!
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

        


