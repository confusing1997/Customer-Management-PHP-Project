<?php
    session_start();
    include_once("../../Controller/CustomerCare/CustomerCare_c_ajax.php");

    $customer_care = new CustomerCare_c_ajax();

    $user_id = $_SESSION['id'];
    $customer_id = $_POST['customer_id'];
    $content = $_POST['content'];
    if($content != ''){
        $add = $customer_care->addContent($user_id, $customer_id, $content);
        if ($add == true){
?>  
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Update Content Successfully !</strong> 
    </div>
<?php
        } else {
?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Update Content Failed!</strong> 
    </div>
<?php
        }
    } else {
?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Content must not be Empty!</strong> 
    </div>
<?php
    }
?>
<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    });
</script>
        


