<p id="notification1"></p>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="datatable_listcustomer_care" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Showroom</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Trạng thái</th>
                        <th>Ngày chăm sóc</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>

                <tbody id="view_customer_care">
                    <?php 
                        $count = 0;
                        foreach ($customer_care as $key => $valueCustomerCare) {
                            $count++;
                        ?>
                            <tr>
                                <td class="text-center"><?= $count; ?></td>
                                <td><?= $valueCustomerCare['name'] ?></td>
                                <td><?= $valueCustomerCare['title'] ?></td>
                                <td><?= $valueCustomerCare['phone'] ?></td>
                                <td><?= $valueCustomerCare['email'] ?></td>
                                <td class="text-center">
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
                                    <!-- Start Modal -->
                                    <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#detail_<?php echo $valueCustomerCare['id']?>" data-whatever="@getbootstrap" title="Xem chi tiết"><span><i class="mdi mdi-pencil"></i></span></button>

                                    <div class="modal fade bs-example-modal-lg" id="detail_<?php echo $valueCustomerCare['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nội dung chi tiết chăm sóc khách hàng</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <table class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <td width="20%;">Avatar</td>
                                                    <td width="20%;">Nhân viên</td>
                                                    <td width="50%;">Nội dung</td>
                                                    <td width="10%;">Thời gian</td>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                                    $customer_care = new CustomerCare_c();
                                                    $customer_id = $valueCustomerCare['id'];
                                                    $result = $customer_care->getDetailCare($customer_id);
                                                    foreach ($result as $key => $value) {
                                                    ?>
                                                        <tr>
                                                            <td><img src="Asset/images/users/<?php echo $value['avatar']; ?>" alt="user-image" class="" style="width: 100px; height: 100px;"></td>
                                                            <td><?php echo $value['name'];?></td>
                                                            <td><?php echo $value['content'];?></td>
                                                            <td><?php echo $value['create_at'];?></td>
                                                        </tr>
                                                    <?php  
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Modal -->

                                    <!-- Add Customer Modal -->
                                    <button type="button" class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="modal" data-target="#detail_customer<?= $valueCustomerCare['customer_id'] ?>" data-whatever="@getbootstrap" title="Điều chuyển"><span><i class="mdi mdi-account-arrow-right"></i></span></button>

                                    <div class="modal fade text-left" id="detail_customer<?= $valueCustomerCare['customer_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nhân viên chăm sóc</h5>
                                    
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="name" class="col-form-label">Họ tên: <?= $valueCustomerCare['Họ tên NV']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="name" class="col-form-label">Đơn vị: <?= $valueCustomerCare['title']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="phone" class="col-form-label">Ngày chăm sóc: <?= $valueCustomerCare['create_at']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-form-label">Điều chuyển khách hàng cho:</label>
                                                <select class="form-control" id="listUser"> 
                                                <?php foreach ($customer_care1 as $value) {
                                                ?>
                                                    <option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
                                                <?php
                                                } 
                                                ?>
                                                </select>
                                              </div>

                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-warning transfer" value="<?= $valueCustomerCare['customer_id'] ?>">Điều chuyển</button>
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
                        }
                     ?>
                </tbody>
                
            </table>
        </div>
    </div>
</div>
