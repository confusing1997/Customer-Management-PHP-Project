<?php 
  include_once("Controller/Customer/Customer_c.php");
 ?>

<div class="notification"></div>

<div class="row">
  <div class="col-12">
    <div class="card-box table-responsive table_Cus">
        <table id="datatable_listcustomer" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr class="text-center">
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
                  <td class="text-center"><?php echo $dem+=1; ?></td>
                  <td><?php echo $value['name']; ?></td>
                  <td><?php echo $value['title']; ?></td>
                  <td><?php echo $value['phone']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td class="text-center">
                    <button type="button" class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="modal" data-target="#edit_customer<?= $value['id'] ?>" data-whatever="@getbootstrap" title="Sửa"><span><i class="fas fa-wrench"></i></span></button>

                    <div class="modal fade text-left" id="edit_customer<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin khách hàng</h5>
                    
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="name" class="col-form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="<?= $value['name']; ?>">
                              </div>

                              <div class="form-group">
                                <label for="showroom" class="col-form-label">Showroom</label>
                                <select class="form-control" id="showroom" disabled="" style="-webkit-appearance: none;"> 
                                <option value="<?= $value['showroom_id']; ?>"><?= $value['title']; ?></option>
                                ?>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="phone" class="col-form-label">Phone</label>
                                <input type="number" id="phone" name="phone" class="form-control" value="<?= $value['phone']; ?>">
                              </div>

                              <div class="form-group">
                                <label for="phone" class="col-form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="<?= $value['email']; ?>">
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-warning edit_customer" value="<?= $value['id'] ?>">Cập nhật</button>
                              </div>
                            </form>
                          </div> 
                        </div>
                      </div>
                    </div>

                    <!-- End Customer Modal -->

                    <button class="btn btn-danger btn-icon waves-effect waves-light delCus" value="<?php echo $value['id']; ?>" title="Xóa"><i class="fas fa-times"></i></button>
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
