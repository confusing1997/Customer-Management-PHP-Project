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
                      <button class="btn btn-icon waves-effect waves-light btn-warning"><i class="fas fa-wrench" title="Sửa"></i></button>
                      <button class="btn btn-danger btn-icon waves-effect waves-light delCus" value="<?php echo $value['id']; ?>" title="Xóa">
                        <i class="fas fa-times"></i>
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
