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

<div class="notification"></div>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive table">
            <table id="datatable_listcustomer_care_all" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>STT</th>
                        <th>Nhân viên</th>
                        <th>Showroom</th>
                        <th>Họ tên khách</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ngày chăm sóc</th>
                        <th>Trạng thái</th>
                        <th>Xem chi tiết</th> 
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
                                    data-whatever="@getbootstrap">Thêm khách hàng
                                </button>

                                <div class="modal fade text-left" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $key; ?>">
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
                                <td><?= $valueCustomerAll['title'] ?></td>
                                <td><?= $valueCustomerAll['Họ tên khách'] ?></td>
                                <td><?= $valueCustomerAll['phone'] ?></td>
                                <td><?= $valueCustomerAll['Email Khách'] ?></td>
                                <td><?= $valueCustomerAll['create_at'] ?></td>
                                <td class="text-center">
                                    <?php 
                                        if ($valueCustomerAll['status'] == 1) {
                                            echo "<p style='color: red;'>Đang chăm sóc</p>";
                                        }else{
                                            echo "<p style='color: green;'>Đang rảnh</p>";
                                        }
                                    ?>

                                </td>
                               

                                <td class="text-center"> 
                                    <!-- Add Customer Modal -->
                                    <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#detail_customer<?= $valueCustomerAll['id'] ?>" data-whatever="@getbootstrap" title="Xem chi tiết"><span><i class="mdi mdi-pencil"></i></span></button>

                                    <div class="modal fade text-left" id="detail_customer<?= $valueCustomerAll['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Chi tiết khách hàng</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="notificationModal"></div>
                                              <div class="form-group">
                                                <label for="name" class="col-form-label">Tên khách hàng: <?= $valueCustomerAll['Họ tên khách']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="name" class="col-form-label">Nhân viên chăm sóc: <?= $valueCustomerAll['Họ tên NV']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="phone" class="col-form-label">Số điện thoại: <?= $valueCustomerAll['phone']; ?></label>
                                              </div>
                                              
                                              <div class="form-group">
                                                <label for="email" class="col-form-label">Email: <?= $valueCustomerAll['Email Khách']; ?></label>
                                              </div>

                                              <div class="table_content_all<?= $valueCustomerAll['id'] ?>" id="data_content_all<?= $valueCustomerAll['id'] ?>">
                                              <!--Bảng lịch sử cập nhật-->
                                              <table class="table table-bordered dt-responsive nowrap">
                                                  <thead class="text-center dataContentHeader">
                                                      <td style="width: 6%">Avatar</td>
                                                      <td style="width: 20%">Nhân viên</td>
                                                      <td style="width: 64%">Nội dung</td>
                                                      <td style="width: 10%">Thời gian</td>
                                                  </thead>
                                                  <tbody id="data-care">
                                                      <?php
                                                      include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                                      $customer_care = new CustomerCare_c();
                                                      $customer_id = $valueCustomerAll['id'];
                                                      $result = $customer_care->getDetailCare($customer_id);
                                                      foreach ($result as $value) {
                                                      ?>
                                                          <tr>
                                                              <td><img src="Asset/images/users/<?php echo $value['avatar']; ?>" alt="user-image" class="" style="width: 50px; height: 50px;"></td>
                                                              <td><?php echo $value['name'];?></td>
                                                              <td><?php echo $value['content'];?></td>
                                                              <td><?php echo $value['create_at'];?></td>
                                                          </tr>
                                                      <?php  
                                                      }
                                                      ?>
                                                  </tbody>
                                              </table>
                                              <!--Bảng lịch sử cập nhật-->
                                              </div>
                                              
                                          </div>
                                          <form>
                                            <textarea class="form-control ckeditor" rows="1" id="update_content<?= $valueCustomerAll['id'] ?>" name="update_content<?= $valueCustomerAll['id'] ?>"></textarea>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary add_content_2nd" value="<?= $valueCustomerAll['id'] ?>">Cập nhật</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- End Customer Modal -->
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
                                <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#add_customer" data-whatever="@getbootstrap">Thêm khách hàng</button>

                                <div class="modal fade text-left" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $key; ?>">
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
                                <td><?= $valueCustomerAll['title'] ?></td>
                                <td><?= $valueCustomerAll['Họ tên khách'] ?></td>
                                <td><?= $valueCustomerAll['phone'] ?></td>
                                <td><?= $valueCustomerAll['Email Khách'] ?></td>
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
                               

                                <td class="text-center"> 
                                    <!-- Add Customer Modal -->
                                    <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#detail_customer<?= $valueCustomerAll['id'] ?>" data-whatever="@getbootstrap" title="Xem chi tiết"><span><i class="mdi mdi-pencil"></i></span></button>

                                    <div class="modal fade text-left" id="detail_customer<?= $valueCustomerAll['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Chi tiết khách hàng</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="form-group">
                                                <label for="name" class="col-form-label">Tên khách hàng: <?= $valueCustomerAll['Họ tên khách']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="name" class="col-form-label">Nhân viên chăm sóc: <?= $valueCustomerAll['Họ tên NV']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="phone" class="col-form-label">Số điện thoại: <?= $valueCustomerAll['phone']; ?></label>
                                              </div>
                                              
                                              <div class="form-group">
                                                <label for="email" class="col-form-label">Email: <?= $valueCustomerAll['Email Khách']; ?></label>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- End Customer Modal -->
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
