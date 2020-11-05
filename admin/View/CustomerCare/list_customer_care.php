<form action="" method="POST">
<div class="form-group">
    <input type="text" class="form-control" id="key_search1" name="key_search1">
</div>
</form>
<p id="notification"></p>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="datatable_listcustomer_care" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Showroom</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Trạng thái</th>
                        <th>Ngày chăm sóc</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>

                <tbody id="view_customer_care">
                    <?php 
                        $count = 0;
                        foreach ($customer_care as $key => $valueCustomerCare) {
                            $count++;
                        ?>
                            <tr>
                                <td><?= $count; ?></td>
                                <td><?= $valueCustomerCare['name'] ?></td>
                                <td><?= $valueCustomerCare['title'] ?></td>
                                <td><?= $valueCustomerCare['phone'] ?></td>
                                <td><?= $valueCustomerCare['email'] ?></td>
                                <td>
                                    <?php 
                                        if ($valueCustomerCare['status'] == 1) {
                                            echo "<p style='color: red;'>Đang chăm sóc</p>";
                                        }else{
                                            echo "<p style='color: green;'>Đang rảnh</p>";
                                        }
                                    ?>

                                </td>
                                <td><?= $valueCustomerCare['create_at'] ?></td>

                                <td> 
                                    <button type="button" class="btn btn-primary">Xem chi tiết</button>              
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
