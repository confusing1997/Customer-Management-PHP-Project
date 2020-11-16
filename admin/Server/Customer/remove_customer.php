<?php

    include_once("../../Controller/Customer/Customer_c_ajax.php");

    $customer = new Customer_c_ajax();

    if (isset($_POST['id'])) {

    $id = (int)$_POST['id'];

    $remove = $customer->removeCustomer($id); 

      if ($remove) {
?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Delete Successfully!</strong>
      </div>
<?php
      }
    }
?>
<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    })
</script>
