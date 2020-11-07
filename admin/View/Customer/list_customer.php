<?php 
  include_once("Controller/Customer/Customer_c.php");
 ?>

<!-- Add Customer Modal -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_customer" data-whatever="@getbootstrap">Thêm khách hàng</button>

<div class="modal fade" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="col-form-label">Tên khách hàng:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>

          <div class="form-group">
            <label for="phone" class="col-form-label">Số điện thoại:</label>
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
          
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary add_customer">Thêm</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- End Customer Modal -->
<br><br>
<form action="" method="POST">
  <div class="form-group">
      <input type="text" class="form-control" id="key_search" name="key_search">
  </div>
</form>

<div class="notification"></div>

<div class="row">
  <div class="col-12">
    <div class="card-box table-responsive table_Cus">
        <table id="datatable_listcustomer" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>STT</th>
              <th>Name</th>
              <th>Showroom</th>
              <th>SĐT</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody id="view_data">
            <?php 
              $dem = 0;
              foreach ($customer as $key => $value) {
              ?>
                <tr>
                  <td><?php echo $dem+=1; ?></td>
                  <td><?php echo $value['name']; ?></td>
                  <td><?php echo $value['title']; ?></td>
                  <td><?php echo $value['phone']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td>
                    <a href="" >
                      <button class="btn btn-primary">Sửa</button>
                    </a>
                    <a href="" >
                      <button class="btn btn-danger delCus" value="<?php echo $value['id']; ?>">Xóa</button>
                    </a>
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
