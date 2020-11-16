<div class="notification"></div>

<!-- BEGIN ADD USER MODAL -->
<button type="button" class="btn btn-icon waves-effect waves-light btn-purple addUser" 
data-toggle = "modal" data-target = "#add_user" title="Add Staff">
     <i class="fa fa-plus" aria-hidden="true"></i> Add Staff
</button>

<div class="modal fade text-left" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form> 
          <div class="form-group">
            <label for="name" class="col-form-label">Staff Full Name:</label>
            <input type="text" class="form-control" id="user_name" name="user_name">
          </div>

          <div class="form-group">
            <label for="name" class="col-form-label">Showroom:</label>
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
            <label for="phone" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="user_email" name="user_email">
          </div>
          
          <div class="form-group">
            <label for="email" class="col-form-label">Address:</label>
            <input type="text" class="form-control" id="user_address" name="user_address">
          </div>

          <div class="form-group">
            <label for="email" class="col-form-label">Salary:</label>
            <input type="text" class="form-control" id="user_salary" name="user_salary">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_user">Add</button>
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
                <th>Order</th>
                <th>Full Name</th>
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

                          <!-- BEGIN EDIT USER MODAL -->

                          <button class="btn btn-icon waves-effect waves-light btn-warning"
                          data-toggle = "modal"
                          data-target = "#edit_user<?= $valueUser['id']; ?>"
                          data-whatever = "@getbootstrap"
                          title="Modify">
                            <i class="fas fa-wrench"></i>
                          </button>

                          <div class="modal fade" id="edit_user<?= $valueUser['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modify Info of Staff</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="form-group">
                                      <label for="name" class="col-form-label">Staff Full Name</label>
                                      <input type="text" class="form-control" id="staff_name<?= $valueUser['id'] ?>" name="user_name" value="<?= $valueUser['name']; ?>">
                                    </div>

                                    <div class="form-group">
                                      <label for="name" class="col-form-label">Showroom</label>
                                      <select name="" id="staff_showroom<?= $valueUser['id'] ?>" class="form-control">
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
                                      <label for="phone" class="col-form-label">Email</label>
                                      <input type="text" class="form-control" id="staff_email<?= $valueUser['id'] ?>" name="user_email" value="<?= $valueUser['email']; ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="email" class="col-form-label">Avatar</label>
                                      <input type="text" class="form-control" id="avatar_user<?= $valueUser['id'] ?>" name="avatar_user" value="<?= $valueUser['avatar']; ?>">
                                    </div>

                                    <div class="form-group">
                                      <label for="email" class="col-form-label">Địa chỉ</label>
                                      <input type="text" class="form-control" id="staff_address<?= $valueUser['id'] ?>" name="user_address" value="<?= $valueUser['addres']; ?>">
                                    </div>

                                    <div class="form-group">
                                      <label for="email" class="col-form-label">Lương cơ bản</label>
                                      <input type="text" class="form-control" id="staff_salary<?= $valueUser['id'] ?>" name="user_salary" value="<?= $valueUser['salary']; ?>">
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary edit_user" value="<?= $valueUser['id']; ?>">Modify</button>
                                    </div>
                                    
                                  </form>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <!-- END EDIT USER MODAL -->

                          <button class="btn btn-danger btn-icon waves-effect waves-light removeUser" 
                          value="<?= $valueUser['id']; ?>" 
                          title="Delete">  
                            <i class="fas fa-times"></i>
                          </button>

                          <a href="dashboard.php?page=list_customer_care_user&id=<?= $valueUser['id']; ?>">
                            <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" title="Detail"><span><i class="mdi mdi-pencil"></i></span></button>
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