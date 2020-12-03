<div class="col-md-9 col-9" style="background-color: #fff; padding-left: 30px;border-radius: 0.25rem; margin: 50px 0 0px 0;float: left;height: 100%">
	<div class="title-info" style="border-bottom: 1px solid #efefef; width: 100%; height:80px;">
		<div style="margin-top: 20px;">
		<h4 style="color: #333">Lịch Sử Mua Hàng</h4>
		<p>Danh sách sản phẩm quý khách đã mua tại hệ thống của chúng tôi!</p>
		</div>
	</div>
	<div class="info_cus col-12" style="">
		<div class="card-box table-responsive">
			<table class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; font-size: 14px;" id="history_buy">
				<thead>
		            <tr class="text-center">
		              <th>Đơn hàng</th>
		              <th>Nhân viên bán</th>
		              <th>Nhân viên chăm sóc</th>
		              <th>Đơn giá</th>
		              <th>Thời gian</th>
		              <th>Chức năng</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php
		        		$count = 0;
		        		foreach ($history as $key => $value) {
		        		?>
		        			<tr>
		        				<td class="text-center"><?php echo $count+=1; ?></td>
		        				<td><?php echo $value['Nhân viên bán']; ?></td>
		        				<td><?php echo $value['Nhân viên chăm sóc']; ?></td>
		        				<td><?php echo number_format($value['Đơn giá']); ?>đ</td>
		        				<td><?php echo $value['Thời gian']; ?></td>
		        				<td class="text-center">
		        					<a href="index.php?page=profile&method=detail&id=<?= $value['id']; ?>">
			                            <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" title="Xem chi tiết"><span><i class="mdi mdi-pencil"></i></span></button>
                          			</a>
                          			<a href="index.php?page=profile&method=rate&idu=<?= $value['idu']; ?>&ido=<?= $value['id'];?>&pages=1">
			                            <button type="button" class="btn btn-icon waves-effect waves-light btn-warning" title="Đánh giá"><span><i class="mdi mdi-star"></i></span></button>
                          			</a>
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
