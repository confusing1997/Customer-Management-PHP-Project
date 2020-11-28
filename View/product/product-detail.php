<div class="container pd0">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-7" style="padding: 50px 20px 50px 20px;float: left;">
				<div class="text-center">
					<img src="assets/images/product/<?php echo $detail['image'] ?>" class="text-center card-img-top" alt="<?php echo $detail['name']; ?>" style="width: 50%;">
				</div>
				<div class="tag-saleoff text-center" style="top: 50px;left: 550px;">
					-<?php echo $detail['sale']; ?>%
				</div>
			</div>
			<div class="col-md-5" style="padding: 100px 20px 50px 20px;float: left;">
				
				<?php 
					$price_old = $detail['price'];
   					$sale = $detail['sale'];
   					$price_new = $detail['price'] - ($price_old*$sale)/100;
				 ?>
				<div style="border-bottom: 1px solid #efefef; padding-bottom: 20px;">
				 	<h3 class="text-center pd0"><?php echo $detail['name'] ?></h3>
				</div>
				
				<div class="price" style="padding-top: 30px;">
					<div style="height: 40px;padding:0 10px;margin-bottom: 5px;">
						<span><p style="font-size: 20px; float: left;">Giá cũ:</p><p style="float: right; color: #d30000; font-size: 20px;font-weight: bold;text-decoration: line-through;"><?php echo number_format($price_old); ?>đ</p></span>
					</div>
					<div style="background-color: #e50102;height: 40px;color: white;padding:0 10px;border-radius: 5px;">
						<span><p style="font-size: 20px; float: left;">Giá mới giảm <?php echo $detail['sale']; ?>%</p><p style="float: right; color: white; font-size: 22px;font-weight: bold;"><?php echo number_format($price_new); ?>đ</p></span>
					</div>

					<div class="benefit" style="background-color: #efefef; margin-top: 20px;border-radius: 5px;">
						<div style="padding: 5px 20px; height: 40px;">
							<div style="float: left;">
								<img src="https://file.hstatic.net/1000269795/file/1_f911a79deb754a5883fc60cf84f6c9be.png" alt="" width="29">
							</div>
							<div style="padding-left: 40px;height: 100%;padding-top: 5px;">
								Tặng gói bảo hiểm 5 năm quyền lợi vượt trội
							</div>
						</div>

						<div style="padding: 5px 20px; height: 40px;">
							<div style="float: left;">
								<img src="https://file.hstatic.net/1000269795/file/2_0285c76b8db6472cae2a455e439720e0.png" alt="" width="29">
							</div>
							<div style="padding-left: 40px;height: 100%;padding-top: 5px;">
								Miễn phí thay pin trọn đời cho sản phẩm
							</div>
						</div>

						<div style="padding: 5px 20px; height: 40px;">
							<div style="float: left; padding-top: 5px;">
								<img src="https://file.hstatic.net/1000269795/file/3_f7d12e619adf48a096d989ee63501df4.png" alt="" width="29">
							</div>
							<div style="padding-left: 40px;height: 100%;padding-top: 5px;">
								Miễn phí giao hàng trên toàn quốc
							</div>
						</div>

						<div style="padding: 5px 20px; height: 40px;">
							<div style="float: left;">
								<img src="https://file.hstatic.net/1000269795/file/4_f8ad26f9db8f488b8adc48ba5ebc31bb.png" alt="" width="29">
							</div>
							<div style="padding-left: 40px;height: 100%;padding-top: 5px;">
								Bảo hành chính hãng trên toàn cầu
							</div>
						</div>

						<div style="padding: 5px 20px; height: 40px;">
							<div style="float: left;">
								<img src="https://file.hstatic.net/1000269795/file/5_90395d2d099e43dcbee07f042a384d14.png" alt="" width="29">
							</div>
							<div style="padding-left: 40px;height: 100%;padding-top: 5px;">
								Hoàn tiền gấp 10 lần nếu phát hiện hàng giả
							</div>
						</div>

						<div style="padding: 5px 20px; height: 40px;">
							<div style="float: left;">
								<img src="https://file.hstatic.net/1000269795/file/6_ce00fae62d7c405eb0230c2244e8b12e.png" alt="" width="29">
							</div>
							<div style="padding-left: 40px;height: 100%;padding-top: 5px;">
								Đổi trả dễ dàng trong 7 ngày
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="row" style="background-color: #efefef;margin: 0px 0px 30px 0px">
		<div class="title text-center" style="width: 100%; margin: 20px 0px 0px 0px;">
			<h4 style="text-align: center;">HỆ THỐNG SHOWROOM CỬA HÀNG</h4>
		</div>

		<div class="col-md-12 text-center" style="width: 100%; margin: 20px 0px;">
			<div class="col-md-3 showroom" style="float: left;">
				<a href="#"><img src="assets/images/showroom/showroom1-detail.png" alt="" width="75%"></a>
			</div>
			<div class="col-md-3 showroom" style="float: left;">
				<a href="#"><img src="assets/images/showroom/showroom2-detail.png" alt="" width="75%"></a>
			</div>
			<div class="col-md-3 showroom" style="float: left;">
				<a href="#"><img src="assets/images/showroom/showroom3-detail.png" alt="" width="75%"></a>
			</div>
			<div class="col-md-3 showroom" style="float: left;">
				<a href="#"><img src="assets/images/showroom/showroom4-detail.png" alt="" width="75%"></a>
			</div>
		</div>
	</div>

	<div class="row" style="margin-bottom: 50px;">
		<div class="col-md-8">
			<div class="card-box" style="box-shadow: 1px 14px 51px -17px rgba(0,0,0,.75);-moz-box-shadow: 1px 14px 51px -17px rgba(0,0,0,.75);-webkit-box-shadow: 1px 14px 51px -17px rgba(0,0,0,.75);">
		        <ul class="nav nav-tabs nav-bordered nav-justified">
		            <li class="nav-item" style="margin-bottom: -2px;">
		                <a href="#thongso" data-toggle="tab" aria-expanded="false" class="nav-link active" style="padding: 10px 0px !important;">
		                    <h5>THÔNG SỐ KĨ THUẬT</h5>
		                </a>
		            </li>
		            <li class="nav-item" style="margin-bottom: -2px;">
		                <a href="#mota" data-toggle="tab" aria-expanded="true" class="nav-link" style="padding: 10px 0px !important;">
		                    <h5>MÔ TẢ CHI TIẾT</h5>
		                </a>
		            </li>
		            <li class="nav-item" style="margin-bottom: -2px;">
		                <a href="#huongdan" data-toggle="tab" aria-expanded="false" class="nav-link" style="padding: 10px 0px !important;">
		                    <h5>HƯỚNG DẪN SỬ DỤNG</h5>
		                </a>
		            </li>
		            <li class="nav-item" style="margin-bottom: -2px;">
		                <a href="#chedo" data-toggle="tab" aria-expanded="false" class="nav-link" style="padding: 10px 0px !important;">
		                    <h5>CHẾ ĐỘ BẢO HÀNH</h5>
		                </a>
		            </li>
		        </ul>

		        <div class="tab-content">
					<div class="tab-pane active" id="thongso">
	       				<table class="table table-bordered table-hover">
	       					<tbody>
	       						<?php 
	       							$a = $detail['name'];
	       							$pieces = explode(' ', $a);
	       							$last_word = array_pop($pieces);
	       							array_unshift($pieces, $last_word);
	       							$b= implode(' ', $pieces);
	       							$pieces2 = explode(' ', $b);
	       							$last_word2 = array_pop($pieces2);
	       						 ?>
	       						<tr>
	       							<td style="width: 50%">Mã sản phẩm</td>
	       							<td><?php echo $last_word; ?></td>
	       						</tr>
	       						<tr>
	       							<td>Thương hiệu</td>
	       							<td><?php echo $last_word2 ?></td>
	       						</tr>
	       						<tr>
	       							<td>Dòng sản phẩm</td>
	       							<td></td>
	       						</tr>
	       						<tr>
	       							<td>Xuất sứ</td>
	       							<td><?php echo $detail['origin']; ?></td>
	       						</tr>
	       						<tr>
	       							<td>Phong cách</td>
	       							<td>Classic/ Phong cách đơn giản</td>
	       						</tr>
	       						<tr>
	       							<td>Giới tính</td>
	       							<td><?php if ($detail['role'] == 0) {
	       								echo "Nam";
	       							}else{ echo 'Nữ';} ?></td>
	       						</tr>
	       						<tr>
	       							<td>Kiểu máy</td>
	       							<td>Automatic/Máy tự động lên cót</td>
	       						</tr>
	       						<tr>
	       							<td>Kiểu dáng</td>
	       							<td>Mặt tròn</td>
	       						</tr>
	       						<tr>
	       							<td>Kích cỡ</td>
	       							<td>41.00 x 41.00 mm</td>
	       						</tr>
	       						<tr>
	       							<td>Độ dày</td>
	       							<td></td>
	       						</tr>
	       						<tr>
	       							<td>Chất liệu vỏ</td>
	       							<td>Thép không gỉ 316L</td>
	       						</tr>
	       						<tr>
	       							<td>Chất liệu dây</td>
	       							<td>Dây da</td>
	       						</tr>
	       						<tr>
	       							<td>Chất liệu kính</td>
	       							<td>Sarphie/Chống trầy xước</td>
	       						</tr>
	       						<tr>
	       							<td>Thiết kế mặt số</td>
	       							<td></td>
	       						</tr>
	       						<tr>
	       							<td>Chức năng</td>
	       							<td>3 kim, xem giờ</td>
	       						</tr>
	       						<tr>
	       							<td>Độ chịu nước</td>
	       							<td>Có</td>
	       						</tr>
	       						<tr>
	       							<td>Trọng lượng</td>
	       							<td></td>
	       						</tr>
	       						<tr>
	       							<td>Bảo hành quốc tế</td>
	       							<td><?php if ($detail['origin'] == 'Thụy Sỹ') {
	       								echo '2 năm';
	       							}else{ echo '1 năm';} ?></td>
	       						</tr>
	       					</tbody>
	       				</table>
	       			</div>
					<div class="tab-pane" id="mota" style="padding: 0 10px;text-align: justify;">
	       				<?php echo $detail['description']; ?>
	       			</div>
			    	<div class="tab-pane" id="huongdan">
	       				Hướng dẫn sử dụng
	       			</div>

	    			<div class="tab-pane" id="chedo" style="padding: 0 10px; text-align: justify;">
	       				<h4 class="text-center mb-3">CHÍNH SÁCH BẢO HÀNH ĐỒNG HỒ TẠI MILLENIUM</h4>
	       				<p >Tất cả các đồng hồ khi được bán ra đều có kèm một thẻ hoặc sổ bảo hành đồng hồ toàn cầu. Thẻ này có giá trị trong thời gian quy định của từng hãng khác nhau (thường là 2 năm).</p>
	 					<p>Mỗi thẻ hoặc sổ này có giá trị trên toàn thế giới nghĩa là khách hàng có thể mang sản phẩm đến bất kỳ trung tâm nào theo hệ thống phân phối của Hãng đểu được bảo hành và sửa chữa chu đáo.</p>
	 					<p>Mỗi thẻ hoặc sổ chỉ được phát hành với một chiếc đồng hồ duy nhất được bán ra. Đồng thời, thẻ này không phát lại với bất kỳ hình thức nào.</p>
	 					<h5>I. Bảo hành đồng hồ theo quy định của hãng</h5>
	 					<p>- Bảo hành chỉ có giá trị khi đồng hồ có thẻ/ sổ/ giấy bảo hành chính thức đi kèm. Thẻ/ sổ/ giấy bảo hành phải được ghi đầy đủ và chính xác các thông tin như: Mã số đồng hồ, mã đáy đồng hồ, địa chỉ bán, ngày mua hàng, ....Thẻ/ sổ/ giấy bảo hành phải được đóng dấu của Đại lý ủy quyền chính thức.</p>
	 					<p>- Thời gian bảo hành của đồng hồ được tính kể từ ngày mua ghi trên thẻ/ sổ/ giấy bảo hành và không được gia hạn sau khi hết thời hạn bảo hành. Cụ thể như sau:</p>
	 					<p>+ Thời hạn bảo hành theo tiêu chuẩn Quốc tế của các hãng Đồng hồ Citizen Nhật Bản là 1 năm</p>
	 					<p>+ Thời hạn bảo hành theo tiêu chuẩn Quốc tế của các hãng Đồng hồ Thụy Sỹ là 2 năm  Longines, Gucci, Hamilton, Edox, Raymond Weil, Movado, Charriol, Balmain, Tissot, Claude Bernard, Calvin Klein, Michel Herbelin v.v.</p>
	 					<p>- Chỉ bảo hành miễn phí cho trường hợp hư hỏng về máy và các linh kiện bên trong của đồng hồ khi được xác định là do lỗi của nhà sản xuất. Xem thêm tại đây!</p>
	 					<p>- Chỉ bảo hành, sửa chữa hoặc thay thế mới cho các linh kiện bên trong đồng hồ. Không thay thế hoặc đổi bằng 1 chiếc đồng hồ khác. Xem thêm tại đây! </p>
	 					<p>Lưu ý: Đặc thù của đồng hồ là không có kết nối với mạng máy tính bên ngoài nên không thể áp dụng Bảo hành điện tử như điện thoại, máy tính…. Quý khách vui lòng lưu trữ, bảo quản kỹ lượng thẻ/ sổ/ giấy bảo hành để được hưởng đầy đủ quyền lợi bảo hành cam kết mua hàng. MILLENIUM có quyền từ chối bảo hành khi Quý khách không cung cấp được thẻ/ sổ/ giấy bảo hành Quốc tế đi kèm sản phẩm.</p>
	 					<h5>II. Quy định chung trong bảo hành và sửa chữa đồng hồ tại MILLENIUM</h5>
	 					<p>1. Sản phẩm vẫn còn trong thời gian bảo hành, có sổ hoặc thẻ bảo hành kèm theo. Trên sổ hoặc thẻ bảo hành phải có đầy đủ thông tin như: ngày mua, nơi bán, mã số đồng hồ (mã số này phải trùng khớp với mã số đáy trên đồng hồ).</p>
	 					<p>2. Nếu Quý khách hàng không có bất kỳ các thông tin, một trong những giấy tờ trên, hoặc có nhưng đã quá thời hạn theo quy định của nhà sản xuất thì mọi công việc, dịch vụ sửa chữa, thay thế sẽ bị tính phí theo bảng giá quy định của MILLENIUM</p>
	 					<p>3. Các dịch vụ thay thế phụ tùng, sửa chữa đồng hồ tại MILLENIUM sẽ được bảo hành 12 tháng cho các phụ tùng thay thế và hạng mục sửa chữa đó.</p>
	 					<h5>III. Trung tâm bảo hành đồng hồ tại MILLENIUM</h5>
	 					<p>Địa chỉ 1: Tầng 2, Tòa nhà Diamond Flower, Hoàng Đạo Thúy, Cầu Giấy, Hà Nội</p>
	 					<p>Địa chỉ 2: Số 1, Hồ Tùng Mậu, Cầu giấy, Hà Nội</p>
	 					<p>Địa chỉ 3: Sô 51, Lê Đại Hành, Hai Bà Trưng, Hà Nội</p>
	       			</div>
	       		</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="title" style="background-color: #efefef;padding: 5px 5px">
				<h4 style="">SẢN PHẨM MỚI NHẤT</h4>
			</div>
			<?php 
				foreach ($productnew as $key => $valueproductnew) {
				$price_old1 = $valueproductnew['price'];
   				$sale1 = $valueproductnew['sale'];
   				$price_new1 = $valueproductnew['price'] - ($price_old1*$sale1)/100;
			?>
				<div style="display: flex; margin: 0px auto;border-bottom: 1px solid #efefef">
					<div style="padding: 0 0px; width: 100px;float: left;">
						<a href="index.php?page=product&id=<?= $valueproductnew['id']; ?>">
							<img src="assets/images/product/<?php echo $valueproductnew['image'] ?>" alt="" width="100">
						</a>
					</div>
					<div style="padding: 10px 10px;float: right" id="product-new">
						<a href="index.php?page=product&id=<?= $valueproductnew['id']; ?>">
							<h6><?php echo $valueproductnew['name'] ?></h6>
						</a>
						<p style="padding-top: 15px;">
						<span style="color: #d30000;"><?php echo number_format($price_new1); ?>đ</span>
						<span style="color: #7d7d7d;text-decoration: line-through;padding-left: 50px;"><?php echo number_format($price_old1); ?>đ</span>
						</p>
					</div>
				</div>
			<?php
				}
			 ?>	
		</div>
		
	</div>

	<div class="row" style="margin-bottom: 20px;">
		<div class="col-md-4 col-sm-4 col-lg-4 col-12 promo_margin">
			<img src="https://theme.hstatic.net/1000269795/1000439171/14/banner_product_1_large.jpg?v=4327" style="width: 100%;" alt="">
		</div>
		<div class="col-md-4 col-sm-4 col-lg-4 col-12 promo_margin">
			<img src="https://theme.hstatic.net/1000269795/1000439171/14/banner_product_2_large.jpg?v=4327" style="width: 100%;" alt="">
		</div>
		<div class="col-md-4 col-sm-4 col-lg-4 col-12 promo_margin">
			<img src="https://theme.hstatic.net/1000269795/1000439171/14/banner_product_3_large.jpg?v=4327" style="width: 100%;" alt="">
		</div>
	</div>
</div>