<div class="notification"></div>

<!-- BEGIN ADD USER MODAL -->
<button type="button" class="btn btn-icon waves-effect waves-light btn-purple addUser" 
data-toggle = "modal" data-target = "#add_product" title="Modify">
     <i class="fa fa-plus" aria-hidden="true"></i> Add Product
</button>

<div class="modal fade text-left" id="add_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form> 
          <div class="form-group">
            <label for="name" class="col-form-label">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="user_name">
          </div>

          <div class="form-group">
            <label for="phone" class="col-form-label">Price:</label>
            <input type="text" class="form-control" id="product_cost" name="user_email">
          </div>
          
          <div class="form-group">
            <label for="email" class="col-form-label">Description:</label>
            <input type="text" class="form-control" id="product_description" name="user_address">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_product">Add</button>
          </div>
        </form>
      </div>
      
    <!-- END USER MODAL -->

    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card-box table-responsive table_product">
    
        <table id="datatable_list_product" class="display table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr class="text-center">
                <th>Order</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody id="view_all_product">
            <?php 
              $count = 0;
              foreach ($product as $key => $valueProduct) {
                $count++;
                ?>
                  <tr>
                      <td class="text-center"><?= $count; ?></td>
                      <td><?= $valueProduct['name'] ?></td>
                      <td class="text-center"><?= number_format($valueProduct['price']); ?></td>
                      <td class="text-center">
                          <?php 
                              if ($valueProduct['status'] == 1) {
                                  echo "<p style='color: green;'>Stocking</p>";
                              }else{
                                  echo "<p style='color: red;'>Out of stock</p>";
                              }
                          ?>
                      </td>
                      <td class="text-center">

                          <!-- BEGIN DESCRIPTION MODAL -->

                          <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-icon btn-info waves-effect waves-light" data-toggle="modal" data-target="#description<?= $valueProduct['id']; ?>"><span><i class="mdi mdi-file-document"></i></span></button>

                          <!-- Modal -->
                          <div class="modal fade" id="description<?= $valueProduct['id']; ?>" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content" style="width: 200%; right: 50%;">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Detail</h4>
                                </div>
                                <div class="modal-body">
                                  
                                  <div class="form-group">
                                    <p><?= $valueProduct['description']; ?></p>
                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                                
                              </div>
                              
                            </div>
                          </div>

                          <!-- END DESCRIPTION MODAL -->

                          <button class="btn btn-danger btn-icon waves-effect waves-light remove_Product" 
                          value="<?= $valueProduct['id']; ?>" 
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