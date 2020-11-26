<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h3 class="text-center">Add customer care</h3><br>
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

                <tbody>
                    <?php 
                        $count = 0;
                        foreach ($customer_care as $key => $valueCustomerCare) {
                            $count++;
                        ?>
                            <tr>
                                <td class="text-center"><?= $count; ?></td>
                                <td><?= $valueCustomerCare['name'] ?></td>
                                <td><?= $valueCustomerCare['title'] ?></td>
                                <td><?= $valueCustomerCare['phone'] ?></td>
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
                                <td><?= $valueCustomerCare['create_at'] ?></td>

                                <td class="text-center">
                                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light btn_add_customer">Add</button>
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