<form action="" method="POST">
<div class="form-group">
    <input type="text" class="form-control" id="key_search" name="key_search">
</div>
</form>
<p id="notification"></p>

<!-- Add Customer Modal -->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm khách hàng</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<!-- End Customer Modal -->


<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Showroom</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="view_data"></tbody>
        
    </table>
</div>
