<p class="notification"></p>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive table">
            <table id="datatable_listhistory" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>Customer Phone</th>
                        <th>Customer Name</th>
                        <th>From</th>
                        <th>Content</th>
                        <th>Create at</th>
                    </tr>
                </thead>
                <tbody id="view_history">
                    <?php
                        foreach ($history as $valueTransfer) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $valueTransfer['phone'] ?></td>
                                <td><?= $valueTransfer['Tên khách hàng'] ?></td>
                                <td><?= $valueTransfer['Nhân viên chuyển'] ?></td>
                                <td><span style="color: #FF6C7A; font-weight: bold"><?= $valueTransfer['Nhân viên chuyển']; ?></span> transfer to <span style="color: green; font-weight: bold"><?= $valueTransfer['Nhân viên nhận']; ?></span></td>
                                <td class="text-center"><?= $valueTransfer['create_at'] ?></td>
                            </tr>
                        <?php
                        }
                      ?>
            </table>
        </div>
    </div>
</div>
