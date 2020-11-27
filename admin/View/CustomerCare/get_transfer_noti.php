<div class="card-box">
	<div class="row">
		<div class="col-12 noti_title">
			<h3 id="noti_title"><?= count($noti); ?> transfer requests</h3>
		</div>
	</div><br>
	<div class="notification"></div><br>
	<?php 
		if (count($noti) > 0){
	?>
	<div class="row">
		<div class="col-12">
			<table class="table table-bordered table-noti" id="table-noti">
				<thead>
					<tr class="text-center">
						<th>Customer Name</th>
						<th>Phone</th>
						<th>From</th>
						<th>Create at</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php 
					foreach ($noti as $key => $value) {
				?>
				<tbody>
					<tr>
						<td><?= $value['Tên khách hàng']; ?></td>
						<td class="text-center"><?= $value['phone']; ?></td>
						<td><?= $value['Nhân viên chuyển']; ?></td>
						<td class="text-center"><?= $value['create_at']; ?></td>
						<td class="text-center">
							<button type="button" class="btn btn-success custom waves-effect waves-light btn-accept" value="<?=$value['id']; ?>">Accept</button>
							<button type="button" class="btn btn-secondary custom waves-effect waves-light btn-decline" value="<?=$value['id']; ?>">Decline</button>
						</td>
					</tr>
				</tbody>
				<?php
					}
				 ?>
				
			</table>
		</div>
	</div>
	<?php 
		}
	?>
</div>