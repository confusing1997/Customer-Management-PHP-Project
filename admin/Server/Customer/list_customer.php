<?php

    include_once("../../Controller/Customer/Customer_c.php");

    $customer = new Customer_c();

    if (isset($_POST['key'])) {

        $key = $_POST['key'];

        $result = $customer->searchCustomer($key);

    } else {

        $result = $customer->getCustomer();

    }

    

    $count = 0;
    foreach ($result as $valueCustomer) {

        $count++;
?>

        <tr>
            <td><?= $count; ?></td>
            <td><?= $valueCustomer['name'] ?></td>
            <td><?= $valueCustomer['title'] ?></td>
            <td><?= $valueCustomer['phone'] ?></td>
            <td><?= $valueCustomer['email'] ?></td>
 
            <td> 
                <!-- Start Modal Edit -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_customer<?= $valueCustomer['id']; ?>" data-whatever="@getbootstrap">Sửa</button>

                <div class="modal fade" id="edit_customer<?= $valueCustomer['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sửa khách hàng <?= $count; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="name" class="col-form-label">Tên khách hàng:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $valueCustomer['name']; ?>">
                          </div>

                          <div class="form-group">
                            <label for="phone" class="col-form-label">Số điện thoại:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $valueCustomer['phone']; ?>">
                          </div>
                          
                          <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $valueCustomer['email']; ?>">
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-primary edit_customer" value="<?= $valueCustomer['id']; ?>">Sửa</button>
                          </div>
                        </form>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- End Modal Edit -->
                <button type="button" class="btn btn-danger rm_customer" 
                        value="<?= $valueCustomer['id'] ?>">Xóa</button>
            </td>
        </tr>

<?php

    }
    
?>