<div class="row">
        <div class="col-12">
            <form action="">
            <div class="card-box table-responsive">
                <table id="datatable_listcustomer_care" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="text-center">
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody id="view_product_select">
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
                                                echo "<p style='color: green;'>Còn hàng</p>";
                                            }else{
                                                echo "<p style='color: red;'>Hết hàng</p>";
                                            }
                                        ?>
                                    </td>

                                    <td class="text-center"> 
                                        <input type="checkbox" name="">
                                    </td>
                                </tr>
                            <?php
                            }
                         ?>
                    </tbody>
                    
                </table>
            </div>
            <div class="card-box">
                <label for="name_customer" class="">Tên khách hàng: </label>
                <input type="text" class="form-control mb-3" disabled="" name="name_customer" value="<?= $customer['Tên khách hàng']; ?>">
                <label for="name_user_care" class="">Nhân viên chăm sóc: </label>
                <input type="text" class="form-control mb-3" disabled="" name="name_user_care" value="<?= $customer['NV chăm sóc']; ?>">
                <label for="name_user_buy" class="">Nhân viên bán hàng: </label>
                <input type="text" class="form-control mb-3" disabled="" name="name_user_buy" value="<?= $_SESSION['name']; ?>">
                <button class="btn btn-primary float-right mb-3">Lập hóa đơn</button>
            </div>
        
            </form>
</div>