<div class="notification"></div>
<button class="btn btn-primary" onclick="history.go(-1);">Back </button>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="datatable_listcustomer_care" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>STT</th>
                        <th>Full Name</th>
                        <th>Showroom</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Create at</th>
                        <th>Action</th>
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
                                            echo "<p style='color: red;'>Busy</p>";
                                        }else{
                                            echo "<p style='color: green;'>Free</p>";
                                        }
                                    ?>

                                </td>
                                <td><?= $valueCustomerCare['create_at'] ?></td>

                                <td> 
                                    <!-- Start Modal -->
                                    <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#detail_<?php echo $valueCustomerCare['id']?>" data-whatever="@getbootstrap" title="Detail"><span><i class="mdi mdi-pencil"></i></span></button>

                                    <div class="modal fade bs-example-modal-lg" id="detail_<?php echo $valueCustomerCare['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Customer care</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            
                                            <div class="notificationModal"></div>

                                            <div class="table-content<?= $valueCustomerCare['customer_id'] ?>" id="data_content<?= $valueCustomerCare['customer_id'] ?>">
                                                
                                                <table class="table table-bordered dt-responsive nowrap">
                                                    <thead class="text-center dataContentHeader">
                                                        <td style="width: 10%">Avatar</td>
                                                        <td style="width: 20%">Staff</td>
                                                        <td style="width: 60%">Content</td>
                                                        <td style="width: 10%">Time</td>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include_once 'Controller/CustomerCare/CustomerCare_c.php';
                                                        $customer_care = new CustomerCare_c();
                                                        $customer_id = $valueCustomerCare['id'];
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
                                            </div>                                            
                                          </div>
                                          <form>
                                            <textarea class="form-control ckeditor" rows="1" id="content<?= $valueCustomerCare['customer_id'] ?>" name="content<?= $valueCustomerCare['customer_id'] ?>"></textarea>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary add_content" value="<?= $valueCustomerCare['customer_id'] ?>">Update</button>
                                            </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Modal -->

                                    <!-- Add Customer Modal -->
                                    <button type="button" class="btn btn-icon waves-effect waves-light btn-warning" data-toggle="modal" data-target="#detail_customer<?= $valueCustomerCare['customer_id'] ?>" data-whatever="@getbootstrap" title="Transfer"><span><i class="mdi mdi-account-arrow-right"></i></span></button>

                                    <div class="modal fade text-left" id="detail_customer<?= $valueCustomerCare['customer_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Staff of System</h5>
                                    
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="name" class="col-form-label">full Name: <?= $valueCustomerCare['Họ tên NV']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="name" class="col-form-label">Unit: <?= $valueCustomerCare['title']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label for="phone" class="col-form-label">Day get Info of Customer: <?= $valueCustomerCare['create_at']; ?></label>
                                              </div>

                                              <div class="form-group">
                                                <label class="col-form-label">Transfer to:</label>
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
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-warning transfer" value="<?= $valueCustomerCare['customer_id'] ?>">Confirm</button>
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