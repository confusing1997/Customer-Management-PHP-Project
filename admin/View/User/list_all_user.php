<form action="" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" id="key_search_user" name="key_search_user">
    </div>
</form>

<div class="notification"></div>

<div class="row">
  <div class="col-12">
    <div class="card-box table-responsive">
        <table id="datatable_listuser" class="display table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Showroom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody id="view_all_user">
            <?php 
              $count_user = 0;
              foreach ($user as $key => $valueUser) {
                $count_user++;
                ?>
                  <tr>
                      <td><?= $count_user; ?></td>
                      <td><?= $valueUser['name'] ?></td>
                      <td><?= $valueUser['title'] ?></td>
                      <td><?= $valueUser['email'] ?></td>
                      <td>
                          <button class="btn btn-primary">Sửa</button>
                          <button class="btn btn-danger">Xóa</button>
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