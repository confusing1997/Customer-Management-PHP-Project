<div class="notification"></div>

<!-- BEGIN ADD USER MODAL -->
<button class="btn btn-icon waves-effect waves-light btn-purple addUser" 
data-toggle = "modal" data-target = "#add_user" title="Sửa">
     <i class="fa fa-plus" aria-hidden="true"></i> Thêm nhân viên
</button>

<div class="modal fade text-left" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form> 
          <div class="form-group">
            <label for="name" class="col-form-label">Tên nhân viên:</label>
            <input type="text" class="form-control" id="user_name" name="user_name">
          </div>

          <div class="form-group">
            <label for="name" class="col-form-label">showroom:</label>
            <select name="" id="user_showroom" class="form-control">
              <?php 
                foreach($showroom as $valueShowroom) {
              ?>
                <option value="<?= $valueShowroom['showroom_id']; ?>"><?= $valueShowroom['title'] ?></option>
              <?php 
                } 
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="phone" class="col-form-label">Địa chỉ email:</label>
            <input type="text" class="form-control" id="user_email" name="user_email">
          </div>
          
          <div class="form-group">
            <label for="email" class="col-form-label">Địa chỉ:</label>
            <input type="text" class="form-control" id="user_address" name="user_address">
          </div>

          <div class="form-group">
            <label for="email" class="col-form-label">Lương cơ bản:</label>
            <input type="text" class="form-control" id="user_salary" name="user_salary">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary add_user">Thêm</button>
          </div>
        </form>
      </div>
      
    <!-- END USER MODAL -->

    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card-box table-responsive table_User">
    
        <table id="datatable_listuser" class="display table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr class="text-center">
                <th>STT</th>
                <th>Họ tên</th>
                <th>Showroom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody id="view_all_user">
            <?php 
              $count_user = 0;
              foreach ($user as $key => $valueUser) {
                $count_user++;
                ?>
                  <tr>
                      <td class="text-center"><?= $count_user; ?></td>
                      <td><?= $valueUser['name'] ?></td>
                      <td><?= $valueUser['title'] ?></td>
                      <td><?= $valueUser['email'] ?></td>
                      <td class="text-center">
                          <button class="btn btn-icon waves-effect waves-light btn-warning" title="Sửa">
                            <i class="fas fa-wrench"></i>
                          </button>
                          <button class="btn btn-danger btn-icon waves-effect waves-light removeUser" value="<?= $valueUser['id']; ?>">  
                            <i class="fas fa-times" title="Xóa"></i>
                          </button>
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