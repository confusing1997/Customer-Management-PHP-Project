<div class="card-box">
	<div class="row">
		<?php if ($_SESSION['role']==1 || isset($_GET['user'])){ ?>
		<div class="col-7">
		<?php } else { ?>
		<div class="col-12">
		<?php } ?>
			<form>
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Care Content</label>
					<textarea class="form-control ckeditor" rows="30" name="content"></textarea>
				</fieldset>
				<button type="button" class="btn btn-success add_content" value="<?= $customer_id; ?>">Update</button>
			</form><br><br>
			<div class="notification"></div>
			<div class="table-content" id="data_content">                                                
				<table class="table table-bordered dt-responsive nowrap">
					<thead class="text-center dataContentHeader">
						<td style="width: 10%">Avatar</td>
						<td style="width: 20%">Staff</td>
						<td style="width: 60%">Content</td>
						<td style="width: 10%">Time</td>
					</thead>
					<tbody>
						<?php
						include_once 'Controller/CustomerCare/CustomerCare_c.php';
						$customer_care = new CustomerCare_c();
						$customer_id = $_GET['id'];
						$result = $customer_care->getDetailCare($customer_id);
						foreach ($result as $value) {
							?>
							<tr>
								<td class="text-center"><img src="Asset/images/users/<?php echo $value['avatar']; ?>" alt="user-image" class="" style="width: 50px; height: 50px;"></td>
								<td><?php echo $value['name'];?></td>
								<td><?php echo $value['content'];?></td>
								<td><?php echo $value['create_at'];?></td>
							</tr>
							<?php  
						}
						?>
					</tbody>
				</table>
			</div>
		</div>  <!--end col-7-->
		<?php if ($_SESSION['role']==1 || isset($_GET['user'])){ ?>
		<div class="col-5">
			<form>
				<div class="form-group">
					<label for="name" class="col-form-label"><b>Customer Name:</b> <?= $customer_care2['name']; ?></label>
				</div>

				<div class="form-group">
					<label for="name" class="col-form-label"><b>Staff Name:</b>  <?= $customer_care2['Họ tên NV']; ?></label>
				</div>

				<div class="form-group">
					<label for="name" class="col-form-label"><b>Unit:</b>  <?= $customer_care2['title']; ?></label>
				</div>

				<div class="form-group">
					<label for="phone" class="col-form-label"><b>Create at:</b>  <?= $customer_care2['create_at']; ?></label>
				</div>

				<div class="form-group">
					<label class="col-form-label">Transfer to:</label>
					<select class="form-control" id="listUser"> 
						<?php foreach ($customer_care1 as $value) {
							?>
							<option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
							<?php
						} 
						?>
					</select>
				</div>
				<button type="button" class="btn btn-warning transfer" value="<?= $customer_id; ?>">Transfer</button>
			</form><br>
			<div class="notification1">
				<?php 
					if (isset($_SESSION['notification'])) {
				?>
					<div class="alert alert-success">
		            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            	<strong>Request Sent!</strong>  
		        	</div>
				<?php
					}
					unset($_SESSION['notification']);
				 ?>
			</div>
		</div> <!--end col-5-->
		<?php } ?>
	</div> <!--end row-->
</div>

<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    })
</script>