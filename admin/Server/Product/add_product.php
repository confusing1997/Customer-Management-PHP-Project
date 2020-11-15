<?php

    include_once("../../Controller/Product/Product_c_ajax.php");

    $product = new Product_c_ajax();

    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);

    $addProduct = $product->addProduct($name, $price, $description);

    if ($addProduct):

?>

        
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Additional Success!</strong> 
        </div>
<?php 

    else:
    
?>

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Additional Failed!</strong> 
    </div>
    
<?php 

    endif;

?>

<script>
    $(document).ready(function(){

        $(".alert").delay(1000).slideUp();

    });
</script>