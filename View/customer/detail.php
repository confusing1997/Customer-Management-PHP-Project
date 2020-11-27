<div class="col-md-9 col-9" style="background-color: #fff; padding-left: 30px;border-radius: 0.25rem; margin: 50px 0 0px 0;float: left;height: 100%">
	<div class="title-info" style="border-bottom: 1px solid #efefef; width: 100%; height:80px;margin-top: 20px;">
		<div style="width: 90%; float: left;">
		<h4 style="color: #333">Chi Tiết Hóa Đơn</h4>
		<p>Danh sách sản phẩm quý khách đã mua tại hệ thống của chúng tôi!</p>
		</div>
		<div style="width: 10%; float: left;margin-top: 30px;padding-left: 20px;">
			<button class="btn btn-primary" onclick="history.go(-1);" style="left: 850px;top: 50px;">Back </button>
		</div>
	</div>
	<div class="info_cus col-12" style="">
		<div class="card-box table-responsive">
			<table class="display table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; font-size: 14px;" id="">
				<thead>
		            <tr class="text-center">
		              <th>STT</th>
		              <th>Sản phẩm</th>
		              <th>Tên sản phẩm</th>
		              <th>Đơn giá</th>
		              <th>Giảm giá</th>
		              <th>Số lượng</th>
		              <th>Chức năng</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php
		        		$count = 0;
		        		foreach ($detail as $key => $value) {
		        		?>
		        			<tr>
		        				<td class="text-center" style='vertical-align: middle;'><?php echo $count+=1; ?></td>
		        				<td class="text-center"><img src="assets/images/product/<?php echo $value['Sản phẩm']; ?>" alt="" width='50'></td>
		        				<td style='vertical-align: middle;'><?php echo $value['Tên sản phẩm']; ?></td>
		        				<td style='vertical-align: middle;'><?php echo number_format($value['Đơn giá']); ?>đ</td>
		        				<td style='vertical-align: middle;' class="text-center"><?php echo $value['Giảm giá']; ?>%</td>
		        				<td style='vertical-align: middle;' class="text-center"><?php echo $value['Số lượng']; ?></td>
		        				<td class="text-center" style='vertical-align: middle;'>
		        					<a href="index.php?page=product&id=<?php echo $value['id']; ?>">
			                            <button type="button" class="btn btn-icon waves-effect waves-light btn-primary" title="Xem chi tiết"><span><i class="mdi mdi-pencil"></i></span></button>
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
