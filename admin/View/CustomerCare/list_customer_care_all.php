<form action="" method="POST">
<div class="form-group">
    <input type="text" class="form-control" id="key_search2" name="key_search2">
</div>
</form>
<p id="notification"></p>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="datatable_listcustomer_care_all" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Nhân viên</th>
                        <th>Showroom</th>
                        <th>Họ tên khách</th>
                        <th>Số điện thoại</th>
                        <th>Ngày chăm sóc</th>
                        <th>Trạng thái</th>
                        <th>Xem chi tiết</th>
                    </tr>
                </thead>

                <tbody id="view_customer_care_all">
                    <?php 
                        $count = 0;
                        foreach ($customer_care as $key => $valueCustomerAll) {
                            $count++;
                        ?>
                            <tr>
                                <td><?= $count; ?></td>
                                <td><?= $valueCustomerAll['name'] ?></td>
                                <td><?= $valueCustomerAll['title'] ?></td>
                                <td><?= $valueCustomerAll['Họ tên khách'] ?></td>
                                <td><?= $valueCustomerAll['phone'] ?></td>
                                <td><?= $valueCustomerAll['create_at'] ?></td>
                                <td>
                                    <?php 
                                        if ($valueCustomerAll['status'] == 1) {
                                            echo "<p style='color: red;'>Đang chăm sóc</p>";
                                        }else{
                                            echo "<p style='color: green;'>Đang rảnh</p>";
                                        }
                                    ?>

                                </td>
                               

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