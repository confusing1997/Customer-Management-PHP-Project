<?php
    session_start();
    include_once("Controller/CustomerCare/CustomerCare_c.php");

    $customer_care = new CustomerCare_c();

    $user_id = $_SESSION['id'];
    $customer_id = $_POST['customer_id'];
    $content = $_POST['content'];
    if($content != ''){
        $add = $customer_care->addContent($user_id, $customer_id, $content);
        if ($add == true){
?>  
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Cập nhật nội dung thành công!
    </div>
<?php
        } else {
?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Cập nhật nội dung thất bại!
    </div>
<?php
        }
    } else {
?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Nội dung không được để trống!
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
        


