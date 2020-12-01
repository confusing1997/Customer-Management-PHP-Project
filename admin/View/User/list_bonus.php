<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
                <div class="input-daterange">
                    <div class="col-5">
                        <label>Từ ngày</label>
                        <input type="date" name="min" id="min" class="form-control mb-2">
                    </div>
                    <div class="col-5">
                        <label>Đến ngày</label>
                        <input type="date" name="max" id="max" class="form-control mb-2">
                    </div>      
                </div>
      <table id="list_bonus" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr class="text-center">
                <th>Order ID</th>
                <th>Seller</th>
                <th>User Care</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>Order Total</th>
                <th>Commission</th>
                <th>Create at</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $total = 0;
            foreach ($user as $key => $value) {
                $total += $value['bonus'];
                ?>
                <tr>
                    <td class="text-center"><?= $value['order_id']; ?></td>
                    <td><?= $value['Seller']; ?></td>
                    <td><?= $value['User Care']; ?></td>
                    <td><?= $value['Customer']; ?></td>
                    <td><?= $value['phone']; ?></td>
                    <td class="text-center text-danger"><?= number_format($value['total']); ?></td>
                    <td class="text-center text-success"><?= number_format($value['bonus']); ?></td>
                    <td class="text-center"><?= $value['create_at']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>

    </table><br>
    <div class="float-right form-group" style="margin-right: 15%;">
        <label class="">TOTAL:</label>
        <div>
            <input type="text" class=" font-weight-bold text-right text-success form-control" disabled=""  value="<?= number_format($total); ?>">
        </div>

    </div>
</div>
</div>
</div>