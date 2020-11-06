<form action="" method="POST" role="form" style="margin: 20px 0px;">
    <div class="row">
      <div class="col-lg-12 col-xs-12 col-md-12">
        <div class="input-group">
          <input type="text" value="<?php if(isset($key)) { echo $key; } ?>" name="key" class="form-control" placeholder="Nhập số điện thoại cần tìm...">
          <span class="input-group-btn">
            <button class="btn btn-primary" name="searchPhone" type="submit">Kiểm tra</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</form>

<p id="notification"></p>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive table">
            <table id="datatable_listcustomer_care_all" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>SĐT khách</th>
                        <th>Họ tên khách</th>
                        <th>Nhân viên chuyển</th>
                        <th>Nội dung chuyển</th>
                        <th>Thời gian chuyển</th>
                    </tr>
                </thead>
                <tbody id="view_customer_care_all">
                    <?php
                        foreach ($customer_care as $key => $valueCustomerAll) {
                        ?>
                            <tr>
                                <td><?= $valueCustomerAll['phone'] ?></td>
                                <td><?= $valueCustomerAll['Tên khách hàng'] ?></td>
                                <td><?= $valueCustomerAll['Nhân viên chuyển'] ?></td>
                                <td><span style="color: #FF6C7A; font-weight: bold"><?= $valueCustomerAll['Nhân viên chuyển']; ?></span> chuyển sang <span style="color: green; font-weight: bold"><?= $valueCustomerAll['Nhân viên nhận']; ?></span></td>
                                <td><?= $valueCustomerAll['create_at'] ?></td>
                            </tr>
                        <?php
                        }
                      ?>
            </table>
        </div>
    </div>
</div>
