<div class="container" id="product-brand">
	<div class="row text-center">
		<div class="col-md-6 col-md-push-4 text-center">
			<div class="card-box">
            <ul class="nav nav-tabs nav-bordered nav-justified">
                <li class="nav-item">
                    <a href="#thuysi" data-toggle="tab" aria-expanded="false" class="nav-link active">
                        <h5>Thụy Sĩ</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#nhatban" data-toggle="tab" aria-expanded="true" class="nav-link ">
                        <h5>Nhật Bản</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#khac" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <h5>Khác</h5>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane active" id="thuysi">
       	<div class="row">
       	<?php 
       		foreach ($productsw as $key => $valueproductsw) {
       		$price_old = $valueproductsw['price'];
       		$sale = $valueproductsw['sale'];
       		$price_new = $valueproductsw['price'] - ($price_old*$sale)/100;
       	?>
       		<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product">
					<div class="card" style="width: 100%">
						<img src="assets/images/product/<?php echo $valueproductsw['image'] ?>" class="card-img-top" alt="<?php echo $valueproductsw['name'] ?>">
						<div class="tag-saleoff text-center">
							-<?php echo $valueproductsw['sale']; ?>%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center pd0"><?php echo $valueproductsw['name'] ?></h5>
						<span><p class="price_new"><?php echo number_format($price_new); ?>₫</p></span><span><p class="price_old"><?php echo number_format($price_old); ?>₫</p></span>
					</div>
				</a>
			</div>
       	<?php
       		}
       	 ?>  	
        </div>
	</div>
    <div class="tab-pane" id="nhatban">
        <div class="row">
       	<?php 
       		foreach ($productjp as $key => $valueproductjp) {
       		$price_old = $valueproductjp['price'];
       		$sale = $valueproductjp['sale'];
       		$price_new = $valueproductjp['price'] - ($price_old*$sale)/100;
       	?>
       		<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product">
					<div class="card" style="width: 100%">
						<img src="assets/images/product/<?php echo $valueproductjp['image'] ?>" class="card-img-top" alt="<?php echo $valueproductjp['name'] ?>">
						<div class="tag-saleoff text-center">
							-<?php echo $valueproductjp['sale']; ?>%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center pd0"><?php echo $valueproductjp['name'] ?></h5>
						<span><p class="price_new"><?php echo number_format($price_new); ?>₫</p></span><span><p class="price_old"><?php echo number_format($price_old); ?>₫</p></span>
					</div>
				</a>
			</div>
       	<?php
       		}
       	 ?>  	
        </div>
    </div>
    <div class="tab-pane" id="khac">
        <div class="row">
       	<?php 
       		foreach ($productot as $key => $valueproductot) {
       		$price_old = $valueproductot['price'];
       		$sale = $valueproductot['sale'];
       		$price_new = $valueproductot['price'] - ($price_old*$sale)/100;
       	?>
       		<div class="col-md-3 col-sm-3 col-lg-3 col-6">
				<a href="#" class="product">
					<div class="card" style="width: 100%">
						<img src="assets/images/product/<?php echo $valueproductot['image'] ?>" class="card-img-top" alt="<?php echo $valueproductot['name'] ?>">
						<div class="tag-saleoff text-center">
							-<?php echo $valueproductot['sale']; ?>%
						</div>
					</div>
					<div class="card-body">
						<h5 class="product_name text-center pd0"><?php echo $valueproductot['name'] ?></h5>
						<span><p class="price_new"><?php echo number_format($price_new); ?>₫</p></span><span><p class="price_old"><?php echo number_format($price_old); ?>₫</p></span>
					</div>
				</a>
			</div>
       	<?php
       		}
       	 ?>  	
        </div> 
    </div>
</div>
<div class="row" style="margin-bottom: 30px;">
	<div class="col-md-12 col-lg-12 col-xs-12 col-12 text-center" >
		<a href="#" class="new_small"><h5>Xem thêm</h5></a>
	</div>
</div>
</div>