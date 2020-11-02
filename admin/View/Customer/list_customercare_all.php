<form action="" method="POST">
<div class="form-group">
    <input type="text" class="form-control" id="key_search2" name="key_search2">
</div>
</form>
<p id="notification"></p>

<!-- <input style="display: none" type="text" id="userId" name="" value="<?php echo $_SESSION['id']; ?>"> -->

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Nhân viên</th>
                <th>Showroom</th>
                <th>Họ tên khách</th>
                <th>Số điện thoại</th>
                <th>Ngày chăm sóc</th>
                <th>Trạng thái</th>
                <th>Xem chi tiết</th>
            </tr>
        </thead>

        <tbody id="view_customer_care_all"></tbody>
        
    </table>
</div>