<?php 

    include_once("../../Controller/Product/Product_c_ajax.php");

    $product = new Product_c_ajax();

    $product_id = (int)$_POST['product_id'];
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);

    if (filter_var($price, FILTER_VALIDATE_INT) && !empty($name) && !empty($price) && !empty($description)):

        $modifyProduct = $product->modifyProduct($product_id, $name, $price, $description);

        if ($modifyProduct):

?>

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Modify Successfully!</strong> 
        </div>

<?php

    else:
?>

        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Modify Failed!</strong> 
        </div>

<?php

        endif;
        
    else:

?>

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Please enter a valid data!</strong> 
        </div>
        

<?php

    endif;

?>

<script>
    $(document).ready(function(){

        $(".alert").delay(1000).slideUp();

    });
</script>