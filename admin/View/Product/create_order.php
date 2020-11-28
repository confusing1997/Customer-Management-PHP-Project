<?php 
    // session_start(); 
?>
<div class="card-box table-responsive">
    <form action="" method="POST">
        <div class="form-group row mb-3">
            <label for="customer_name" class="col-2 col-form-label">Customer Name: </label>
            <div class="col-10">
              <input type="text" class="form-control" readonly="" name="customer_name" id="customer_name" value="<?= $customer['Tên khách hàng']; ?>">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="user_care_name" class="col-2 col-form-label">Staff: </label>
            <div class="col-10">
              <input type="text" class="form-control" readonly="" name="user_care_name" id="user_care_name" value="<?= $customer['NV chăm sóc']; ?>">
              <input type="text" class="form-control" readonly="" hidden="" name="user_id_care" id="user_id_care" value="<?= $customer['user_id']; ?>">
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="user_buy_name" class="col-2 col-form-label">Seller: </label>
            <div class="col-10">
              <input type="text" class="form-control" readonly="" name="user_buy_name" id="user_buy_name" value="<?= $_SESSION['name']; ?>">
            </div>
        </div>
        <br><br>
        <div class="row">
                <div class="notification col-12"></div>
                <table id="datatable_order2" class="table table-bordered dt-responsive nowrap order2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="text-center">
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="view_product_select">
                        <?php 
                            $_SESSION['sum_price'] = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $valueCart) {
                         ?>
                        <tr>
                            <td>
                                <?= $valueCart['name']; ?>  
                            </td>
                            <td class="text-center"><?= number_format($valueCart['price']); ?></td>
                            <td class="text-center"><?= $valueCart['sale']; ?>%</td>
                            <td class="text-center">
                                <?= $valueCart['qty']; ?>
                            </td>
                            <td class="text-right">
                                <?php 
                                $item_sum = ($valueCart['price'] - $valueCart['price'] * $valueCart['sale']/100) * $valueCart['qty'];
                                    $_SESSION['sum_price'] += $item_sum;
                                    echo number_format($item_sum);
                                ?>                              
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light del_cart" value="<?= $valueCart['id']; ?>" title="Remove"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                        <?php 
                                }

                            }
                         ?>
                        <tr>
                            <th class="text-center">Total</th>
                            <td colspan="4">
                                <input type="text" class="form-control sum-price text-right" readonly="" name="total" id="total" value="<?php echo number_format($_SESSION['sum_price']); ?>">
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            <!-- </div> -->
            
        </div><br><br>
        <div class="row">
            <div class="col-12">
                <table id="datatable_order1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $count = 0;
                            foreach ($product as $key => $valueProduct) {
                                $count++;
                            ?>
                                <tr>
                                    <td class="text-center"><?= $count; ?></td>
                                    <td><?= $valueProduct['name'] ?></td>
                                    <td class="text-center"><?= number_format($valueProduct['price']); ?></td>
                                    <td class="text-center"><?= $valueProduct['sale']; ?>%</td>
                                    <td class="text-center">
                                        <input type="number" class="form-control text-center" name="10" value="1" min="1" max="5" id="qty_<?= $valueProduct['id']; ?>">
                                    </td>
                                    <td class="text-center">
                                        <?php 
                                            if ($valueProduct['status'] == 1) {
                                                echo "<p style='color: green;'>Stocking</p>";
                                            }else{
                                                echo "<p style='color: red;'>Out of stock</p>";
                                            }
                                        ?>
                                    </td>

                                    <td class="text-center"> 
                                        <button type="button" onclick="updateCart(<?= $valueProduct['id'] ?>);" class="btn btn-info btn-sm waves-effect waves-light btn_add" value="<?= $valueProduct['id']; ?>">Add</button>
                                    </td>
                                </tr>
                            <?php
                            }
                         ?>
                    </tbody>                
                </table>
            </div>
        </div>
        
        <br><br>
        
        <div class="form-group">
            <button class="btn btn-primary float-right" name="create_bill">Create Bill</button>
        </div>
    </form>
</div>