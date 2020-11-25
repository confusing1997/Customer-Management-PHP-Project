<?php
    session_start();

    if (isset($_POST['id'])) {
        $id = (int)$_POST['id'];
        
        if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']) ) {
            unset($_SESSION['cart'][$id]);
?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thông báo!</strong> Xóa thành công!
            </div>
<?php
        }       

    }
    

?>

<script>
    $(document).ready(function(){

        $(".alert").delay(1000).slideUp();

    });
</script>