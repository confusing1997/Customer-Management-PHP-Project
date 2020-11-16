<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <form action="" class="form-group">
            <table id="datatable_listcustomer_care" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>Order</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="view_product_select">
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
                                    <?php 
                                        if ($valueProduct['status'] == 1) {
                                            echo "<p style='color: green;'>Stocking</p>";
                                        }else{
                                            echo "<p style='color: red;'>Out of stock</p>";
                                        }
                                    ?>
                                </td>

                                <td class="text-center"> 
                                    <input type="checkbox" name="">
                                </td>
                            </tr>
                        <?php
                        }
                     ?>
                </tbody>                
            </table>
            <br><br>
            <label for="name_customer" class="">Customer Name: </label>
            <input type="text" class="form-control mb-3" disabled="" name="name_customer" value="<?= $customer['Tên khách hàng']; ?>">
            <label for="name_user_care" class="">Staff: </label>
            <input type="text" class="form-control mb-3" disabled="" name="name_user_care" value="<?= $customer['NV chăm sóc']; ?>">
            <label for="name_user_buy" class="">Dealer: </label>
            <input type="text" class="form-control mb-3" disabled="" name="name_user_buy" value="<?= $_SESSION['name']; ?>">
            <button class="btn btn-primary float-right mb-3">Create Order</button>
            </form>
        </div>

    </div>
</div>