<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="datatable_list_order" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>Order ID</th>
                        <th>Seller</th>
                        <th>User Care</th>
                        <th>Customer</th>
                        <th>Showroom</th>
                        <th>Order Total</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        foreach ($product as $key => $value) {
                    ?>
                            <tr>
                                <td class="text-center"><?= $value['id']; ?></td>
                                <td><?= $value['Nhân viên bán']; ?></td>
                                <td><?= $value['Nhân viên chăm sóc']; ?></td>
                                <td><?= $value['Tên khách hàng']; ?></td>
                                <td class="text-center"><?= $value['title']; ?></td>
                                <td class="text-center"><?= number_format($value['total']); ?></td>
                                <td class="text-center"><?= $value['create_at']; ?></td>
                                <td class="text-center">
                                    <!-- BEGIN DESCRIPTION MODAL -->

                                      <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-icon btn-info waves-effect waves-light" data-toggle="modal" data-target="#detail<?= $value['id']; ?>" title="Detail"><span><i class="mdi mdi-file-document"></i></span></button>

                                      <!-- Modal -->
                                    <div class="modal fade" id="detail<?= $value['id']; ?>" role="dialog">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        
                                          <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Detail Order</h4>
                                                </div>
                                                <div class="modal-body">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Image</th>
                                                                    <th>Name</th>
                                                                    <th>Price</th>
                                                                    <th>Sale</th>
                                                                    <th>Quantity</th>
                                                                    <th>Price</th>
                                                                </tr>
                                                            </thead>
                                                    <?php
                                                        include_once 'Controller/Product/Product_c.php';
                                                        $product = new Product_c();
                                                        $detailOrder = $product->getDetailOrder($value['id']);
                                                        $count = 0;
                                                        foreach ($detailOrder as $detail => $valueDetail) {
                                                            $count++;
                                                    ?>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?= $count; ?></td>
                                                                    <td><img src="../assets/images/product/<?= $valueDetail['image']; ?>" width="70px"></td>
                                                                    <td><?= $valueDetail['name']; ?></td>
                                                                    <td><?= number_format($valueDetail['price']); ?></td>
                                                                    <td><?= $valueDetail['sale']; ?>%</td>
                                                                    <td><?= $valueDetail['quantity']; ?></td>
                                                                    <td><?= number_format($valueDetail['price']*$valueDetail['quantity']); ?></td>                                                            
                                                                </tr>
                                                            </tbody>
                                                    <?php 
                                                        } 
                                                    ?>
                                                        </table>                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                          
                                    </div>

                                      <!-- END DESCRIPTION MODAL -->
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