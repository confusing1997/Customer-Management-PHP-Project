<p class="notification"></p>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive table">
            <table id="datatable_listhistory" class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="text-center">
                        <th>Customer phone</th>
                        <th>Customer Full Name</th>
                        <th>Staff who transfer</th>
                        <th>Content</th>
                        <th>Time of Transference</th>
                    </tr>
                </thead>
                <tbody id="view_history">
                    <?php
                        foreach ($history as $valueTransfer) {
                        ?>
                            <tr>
                                <td><?= $valueTransfer['phone'] ?></td>
                                <td><?= $valueTransfer['Tên khách hàng'] ?></td>
                                <td><?= $valueTransfer['Nhân viên chuyển'] ?></td>
                                <td><span style="color: #FF6C7A; font-weight: bold"><?= $valueTransfer['Nhân viên chuyển']; ?></span> transfer to <span style="color: green; font-weight: bold"><?= $valueTransfer['Nhân viên nhận']; ?></span></td>
                                <td><?= $valueTransfer['create_at'] ?></td>
                            </tr>
                        <?php
                        }
                      ?>
            </table>
        </div>
    </div>
</div>
