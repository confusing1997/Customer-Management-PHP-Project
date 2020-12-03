<form action="" method="POST" role="form" style="margin: 20px 0px;">
    <div class="row">
      <div class="col-lg-12 col-xs-12 col-md-12">
        <div class="input-group">
          <input type="text" value="<?php if(isset($key)) { echo $key; } ?>" name="key" class="form-control" placeholder="Typing phone to check...">
          <span class="input-group-btn">
            <button class="btn btn-primary" name="searchPhone" type="submit">Check</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</form>

<div class="notification"></div>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive table">
            <table id="datatable_listcustomer_care_all" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Staff</th>
                        <th>Showroom</th>
                        <th>Customer</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Create at</th>
                        <th>Status</th>
                        <th>Detail</th> 
                    </tr>
                </thead>
                <?php 
                    if (isset($_POST['searchPhone']) && strlen($key) >= 6 && $_SESSION['role'] == 2) {
                ?>
                <tbody id="view_customer_care_all">
                    <?php 
                        if (count($customer_care) == 0){
                    ?>  <tr class="text-center">
                            <td colspan="9">
                                <!-- Add Customer Modal -->
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" 
                                    data-toggle="modal" 
                                    data-target="#add_customer" 
                                    data-whatever="@getbootstrap">Add Customer
                                </button>

                                <div class="modal fade text-left" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form>
                                          <div class="form-group">
                                            <label for="name" class="col-form-label">Customer Name:</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                          </div>

                                          <div class="form-group">
                                            <label for="phone" class="col-form-label">Phone:</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $key; ?>">
                                          </div>
                                          
                                          <div class="form-group">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                          </div>

                                          <div class="form-group">
                                            <label for="birth" class="col-form-label">Birthday:</label>
                                            <input type="date" class="form-control" id="birth" name="birth">
                                          </div>

                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary add_customer">Add</button>
                                          </div>
                                        </form>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>

                                <!-- End Customer Modal -->
                            </td>
                        </tr>
                    <?php
                            
                        } else {
                        $count = 0;
                        foreach ($customer_care as $key => $valueCustomerAll) {
                            $count++;
                        ?>
                            <tr>
                                <td class="text-center"><?= $count; ?></td>
                                <td><?= $valueCustomerAll['Họ tên NV'] ?></td>
                                <td class="text-center"><?= $valueCustomerAll['title'] ?></td>
                                <td><?= $valueCustomerAll['Họ tên khách'] ?></td>
                                <td class="text-center"><?= $valueCustomerAll['phone'] ?></td>
                                <td><?= $valueCustomerAll['Email Khách'] ?></td>
                                <td class="text-center"><?= $valueCustomerAll['create_at'] ?></td>
                                <td class="text-center">
                                    <?php 
                                        if ($valueCustomerAll['status'] == 1) {
                                            echo "<p style='color: red;'>Busy</p>";
                                        }else if ($valueCustomerAll['status'] == 2) {
                                            echo "<p style='color: green;'>Purchased</p>";
                                        }else if ($valueCustomerAll['status'] == 3) {
                                            echo "<p style='color: blue;'>New</p>";
                                        }
                                    ?>

                                </td>
                               

                                <td class="text-center"> 
                                    <a href="dashboard.php?page=detail_customer_care&id=<?= $valueCustomerAll['id']; ?>">
                                      <button class="btn btn-info btn-icon waves-effect waves-light" title="Detail"><span><i class="mdi mdi-pencil"></i></span></button>
                                    </a>

                                    <a href="dashboard.php?page=create_order&id=<?= $valueCustomerAll['id']; ?>">
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-danger" title="Create Bill"><span><i class="mdi mdi-cart"></i></span></button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                    }
                } else if ($_SESSION['role'] == 1){
                ?>
                <tbody id="view_customer_care_all">
                    <?php 
                        if (count($customer_care) == 0){
                    ?>  <tr class="text-center">
                            <td colspan="9">
                                <!-- Add Customer Modal -->
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#add_customer" data-whatever="@getbootstrap">Add Customer</button>

                                <div class="modal fade text-left" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form>
                                          <div class="form-group">
                                            <label for="name" class="col-form-label">Customer Name:</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                          </div>

                                          <div class="form-group">
                                            <label for="phone" class="col-form-label">Phone:</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $key; ?>">
                                          </div>
                                          
                                          <div class="form-group">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                          </div>

                                          <div class="form-group">
                                            <label for="birth" class="col-form-label">Birthday:</label>
                                            <input type="date" class="form-control" id="birth" name="birth">
                                          </div>

                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary add_customer">Add</button>
                                          </div>
                                        </form>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>

                                <!-- End Customer Modal -->
                            </td>
                        </tr>
                    <?php
                            
                        } else {
                        $count = 0;
                        foreach ($customer_care as $key => $valueCustomerAll) {
                            $count++;
                        ?>
                            <tr>
                                <td class="text-center"><?= $count; ?></td>
                                <td><?= $valueCustomerAll['Họ tên NV'] ?></td>
                                <td class="text-center"><?= $valueCustomerAll['title'] ?></td>
                                <td><?= $valueCustomerAll['Họ tên khách'] ?></td>
                                <td class="text-center"><?= $valueCustomerAll['phone'] ?></td>
                                <td><?= $valueCustomerAll['Email Khách'] ?></td>
                                <td class="text-center"><?= $valueCustomerAll['create_at'] ?></td>
                                <td class="text-center">
                                    <?php 
                                        if ($valueCustomerAll['status'] == 1) {
                                            echo "<p style='color: red;'>Busy</p>";
                                        }else if ($valueCustomerAll['status'] == 2) {
                                            echo "<p style='color: green;'>Purchased</p>";
                                        }else if ($valueCustomerAll['status'] == 3) {
                                            echo "<p style='color: blue;'>New</p>";
                                        }
                                    ?>

                                </td>
                               

                                <td class="text-center"> 
                                    <a href="dashboard.php?page=detail_customer_care&id=<?= $valueCustomerAll['id']; ?>">
                                      <button class="btn btn-info btn-icon waves-effect waves-light" title="Detail"><span><i class="mdi mdi-pencil"></i></span></button>
                                    </a>

                                    <a href="dashboard.php?page=create_order&id=<?= $valueCustomerAll['id']; ?>">
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-danger" title="Create Bill"><span><i class="mdi mdi-cart"></i></span></button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                    }
                }
                     ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
