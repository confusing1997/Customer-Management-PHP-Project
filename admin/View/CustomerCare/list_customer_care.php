<?php 
    if ($_SESSION['role'] != 1) {
?>
<a href="dashboard.php?page=add_customer_care">
    <button type="button" class="btn btn-primary btn-icon waves-light waves-effect">+ New Care</button>
</a>
<?php
    }
?>
<div class="notification"></div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <!-- <a href="dashboard.php?page=add_customer_care"><button>abc</button></a> -->
            <table id="datatable_listcustomer_care" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Showroom</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="view_customer_care">
                    <?php 
                        $count = 0;
                        foreach ($customer_care as $key => $valueCustomerCare) {
                            $count++;
                        ?>
                            <tr>
                                <td class="text-center"><?= $count; ?></td>
                                <td><?= $valueCustomerCare['name'] ?></td>
                                <td class="text-center"><?= $valueCustomerCare['title'] ?></td>
                                <td class="text-center"><?= $valueCustomerCare['phone'] ?></td>
                                <td><?= $valueCustomerCare['email'] ?></td>
                                <td class="text-center">
                                    <?php 
                                        if ($valueCustomerCare['status'] == 1) {
                                            echo "<p style='color: red;'>Busy</p>";
                                        }else if ($valueCustomerCare['status'] == 2) {
                                            echo "<p style='color: green;'>Purchased</p>";
                                        } else if ($valueCustomerCare['status'] == 3) {
                                            echo "<p style='color: blue;'>New</p>";
                                        }
                                    ?>
                                </td>
                                <td class="text-center"><?= $valueCustomerCare['create_at'] ?></td>

                                <td class="text-center">
                                    <a href="dashboard.php?page=detail_customer_care&user=1&id=<?= $valueCustomerCare['id']; ?>">
                                        <button class="btn btn-info btn-icon waves-effect waves-light" title="Detail"><span><i class="mdi mdi-pencil"></i></span></button>
                                    </a>

                                    <!-- Sell Products Button -->
                                    <a href="dashboard.php?page=create_order&id=<?= $valueCustomerCare['customer_id']; ?>">
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-danger" title="Create Bill"><span><i class="mdi mdi-cart"></i></span></button>
                                    </a>
                                    <?php 
                                        if ($valueCustomerCare['status'] != 1){
                                     ?>
                                    <a href="dashboard.php?page=order_history&id=<?= $valueCustomerCare['customer_id']; ?>">
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-success" title="Order History"><span><i class="mdi mdi-history"></i></span></button>
                                    </a>
                                    <?php 
                                        } 
                                    ?>
                                    <!-- Sell Products Button -->  
                                </td>
                            </tr>
                        <?php
                        }
                     ?>
                </tbody>
                
            </table>
        </div>
    </div>
</div>