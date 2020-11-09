<div class="notification"></div>

<div class="row">
  <div class="col-12">
    <div class="card-box table-responsive">
        <table id="datatable_listuser" class="display table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr class="text-center">
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
                      <td class="text-center"><?= $count_user; ?></td>
                      <td><?= $valueUser['name'] ?></td>
                      <td><?= $valueUser['title'] ?></td>
                      <td><?= $valueUser['email'] ?></td>
                      <td class="text-center">
                          <button class="btn btn-icon waves-effect waves-light btn-warning" title="Sửa"><i class="fas fa-wrench"></i></button>
                          <button class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-times" title="Xóa"></i></button>
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