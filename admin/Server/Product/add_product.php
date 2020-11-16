<?php

    include_once("../../Controller/Product/Product_c_ajax.php");

    $product = new Product_c_ajax();

    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);

    
    if (preg_match('/^[0-9]+$/', $price) && !empty($name) && !empty($price) && !empty($description)):

        $addProduct = $product->addProduct($name, $price, $description);

?>
       
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Additional Success!</strong> 
        </div>

<?php

    elseif (empty($name) || empty($price) || empty($description)):

?>

    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Data must not be empty!</strong> 
    </div>
    
<?php

    else:
    
?>

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Please enter a valid value!</strong> 
    </div>
    
<?php 

    endif;

?>

<script>
    $(document).ready(function(){

        $(".alert").delay(1000).slideUp();

    });
</script>