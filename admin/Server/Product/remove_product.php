<?php

    include_once("../../Controller/Product/Product_c_ajax.php");

    $product = new Product_c_ajax();

    if (isset($_POST['id'])):
        
        $id = (int)$_POST['id'];

        $removeProduct = $product->removeProduct($id);
        
    endif;

    if ($removeProduct):
?>

    
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Remove Successfully!</strong> 
    </div> 


<?php

    endif;

?>
<script>
    $(document).ready(function(){

        $(".alert").delay(1000).slideUp();

    });
</script>