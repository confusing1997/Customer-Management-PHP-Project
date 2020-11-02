

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
            <label for="showroom_id" class="col-form-label">Showroom</label><br>
            <select id="showroom_id" class="form-control" name="showroom_id" disabled="">
                <option selected="" class="form-control" value="<?php echo $_SESSION['showroom_id'];?>"><?php echo $_SESSION['title']; ?></option>
            </select>
          <input style="display: none" type="text" id="user_id" class="form-control" name="user_id" value="<?php echo $_SESSION['id']; ?>">
           
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
<p id="notification"></p>


<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Showroom</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="view_data"></tbody>
        
    </table>
</div>
