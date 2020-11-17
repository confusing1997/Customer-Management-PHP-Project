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
            <div class="col-7">
                <table id="datatable_order1" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Price</th>
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
                                    <td class="text-center">
                                        <input type="number" class="form-control" name="10" value="1" min="1" max="5" id="qty_<?= $valueProduct['id']; ?>">
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
            <div class="col-5">
                <div class="notification"></div>
                <table id="datatable_order2" class="table table-bordered dt-responsive nowrap order2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="text-center">
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody id="view_product_select">
                    

                    </tbody>
                </table>
                <div class="form-group row mt-3">
                    <label for="total" class="col-2 col-form-label">Total: </label>
                    <div class="col-10">
                      <input type="number" class="form-control" readonly="" name="total" id="total" value="<?= number_format($_SESSION['sum_price']); ?>">
                    </div>
                </div>
            </div>
            
        </div>
        <br><br>
        
        <div class="form-group">
            <button class="btn btn-primary float-right" name="create_bill">Create Bill</button>
        </div>
    </form>
</div>