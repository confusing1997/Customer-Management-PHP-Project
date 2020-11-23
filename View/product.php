<div class="container" id="product">
	<div class="row text-center">
		<div class="brand-name text-center">
			<div class="title-object-1">	
			</div>
			<div class="wrap-content text-center">
				<h3 class="text-center">SẢN PHẨM</h3>
			</div>
			<div class="title-object-2"></div>
		</div>
		<div class="col-md-6 col-md-push-4 text-center">
			<div class="card-box">
        <ul class="nav nav-tabs nav-bordered nav-justified">
            <li class="nav-item">
                <a href="#men" data-toggle="tab" aria-expanded="false" class="nav-link active">
                    <h5>NAM</h5>
                </a>
            </li>
            <li class="nav-item">
                <a href="#women" data-toggle="tab" aria-expanded="true" class="nav-link ">
                    <h5>NỮ</h5>
                </a>
            </li>
            <li class="nav-item">
                <a href="#new" data-toggle="tab" aria-expanded="false" class="nav-link">
                    <h5>MỚI</h5>
                </a>
            </li>
            <li class="nav-item">
                <a href="#hot" data-toggle="tab" aria-expanded="false" class="nav-link">
                    <h5>BÁN CHẠY</h5>
                </a>
            </li>
        </ul>
    	</div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane active" id="men">
       	<div class="row">
       	<?php 
       		foreach ($productmale as $key => $valueproductmale) {
       		$price_old = $valueproductmale['price'];
       		$sale = $valueproductmale['sale'];
       		$price_new = $valueproductmale['price'] - ($price_old*$sale)/100;
       	?>
       		<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product">
					<div class="card" style="width: 100%">
						<img src="assets/images/product/<?php echo $valueproductmale['image'] ?>" class="card-img-top" alt="<?php echo $valueproductmale['name']; ?>">
						<div class="tag-saleoff text-center">
							-<?php echo $valueproductmale['sale']; ?>%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center pd0"><?php echo $valueproductmale['name'] ?></h5>
						<span><p class="price_new"><?php echo number_format($price_new); ?>₫</p></span><span><p class="price_old"><?php echo number_format($price_old); ?>₫</p></span>
					</div>
				</a>
			</div>
       	<?php
       		}
       	 ?>   
        </div>
	</div>
    <div class="tab-pane" id="women">
        <div class="row">
        <?php 
       		foreach ($productfemale as $key => $valueproductfemale) {
       		$price_old = $valueproductfemale['price'];
       		$sale = $valueproductfemale['sale'];
       		$price_new = $valueproductfemale['price'] - ($price_old*$sale)/100;
       	?>
       		
       		<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product">
					<div class="card" style="width: 100%">
						<img src="assets/images/product/<?php echo $valueproductfemale['image'] ?>" class="card-img-top" alt="<?php echo $valueproductfemale['image'] ?>">
						<div class="tag-saleoff text-center">
							-<?php echo $valueproductfemale['sale']; ?>%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center pd0"><?php echo $valueproductfemale['name'] ?></h5>
						<span><p class="price_new"><?php echo number_format($price_new); ?>₫</p></span><span><p class="price_old"><?php echo number_format($price_old); ?>₫</p></span>
					</div>
				</a>
			</div>
       	<?php
       		}
       	 ?>
        </div>
    </div>
    <div class="tab-pane" id="new">
        <div class="row">
        <?php 
       		foreach ($productnew as $key => $valueproductnew) {
       		$price_old = $valueproductnew['price'];
       		$sale = $valueproductnew['sale'];
       		$price_new = $valueproductnew['price'] - ($price_old*$sale)/100;
       	?>
       		<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product">
					<div class="card" style="width: 100%">
						<img src="assets/images/product/<?php echo $valueproductnew['image'] ?>" class="card-img-top" alt="<?php echo $valueproductnew['name'] ?>">
						<div class="tag-saleoff text-center">
							-<?php echo $valueproductnew['sale']; ?>%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center pd0"><?php echo $valueproductnew['name'] ?></h5>
						<span><p class="price_new"><?php echo number_format($price_new); ?>₫</p></span><span><p class="price_old"><?php echo number_format($price_old); ?>₫</p></span>
					</div>
				</a>
			</div>
       	<?php
       		}
       	 ?>
        </div> 
    </div>
    <div class="tab-pane" id="hot">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center pd0">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product_hot">
					<div class="card" style="width: 100%">
						<img src="https://product.hstatic.net/1000269795/product/l2.909.4.78.3_5bd9f8034e344b79aac3283038988d8e_master.jpg" class="card-img-top" alt="...">
						<div class="tag-saleoff text-center">
							-10%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center">Đồng hồ Longines L2.909.4.78.3</h5>
						<span><p class="price_new">55,440,000₫</p></span><span><p class="price_old">61,660,000₫</p></span>
					</div>
				</a>
			</div>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-12 col-lg-12 col-xs-12 col-12 text-center" style="margin-bottom: 20px;">
		<a href="#" class="new_small"><h5>Xem thêm</h5></a>
	</div>
</div>
</div>