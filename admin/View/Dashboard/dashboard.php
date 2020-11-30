<div class="card-box">
	<?php if($_SESSION['role'] == 1) {?>
		<div class="row">

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-box float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Orders</h5>
					<h3 class="mb-3" data-plugin="counterup"><?= $order; ?></h3>
					<!-- <span class="badge badge-primary"> +11% </span> 
					<span class="text-muted ml-2 vertical-middle">From previous period</span> -->
				</div>
			</div>

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-layers float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Revenue</h5>
					<h3 class="mb-3"><span data-plugin="counterup"><?= number_format($getDetailOrder); ?></span> VND</h3>
					<!-- <span class="badge badge-primary"> -29% </span> 
					<span class="text-muted ml-2 vertical-middle">From previous period</span> -->
				</div>
			</div>

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-tag float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Average Price</h5>
					<h3 class="mb-3"><span data-plugin="counterup"><?= number_format(round($avgPrice)); ?></span> VND</h3>
					<!-- <span class="badge badge-primary"> 0% </span> 
					<span class="text-muted ml-2 vertical-middle">From previous period</span> -->
				</div>
			</div>

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-briefcase float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Product Sold</h5>
					<h3 class="mb-3" data-plugin="counterup"><?= $sumQuantity; ?></h3>
					<!-- <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span> -->
				</div>
			</div>

		</div>

	

		<div class="row">
			<!-- Start System Overview -->
			
			<div class="col-xl-7">
				<div class="card-box">
					<h4 class="header-title">System Overview</h4>

					<div class="row">
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Customer</h6>
								<h6 class="font-18"><i class="fa fa-users" aria-hidden="true"></i> 
								<span class="text-dark"><?= $customerAmount; ?></span> </h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Number of Transference</h6>
								<h6 class="font-18"><i class="fa fa-paper-plane" aria-hidden="true"></i> 
								<span class="text-dark"><?= $transferenceAmount ?></span> </h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Care Content</h6>
								<h6 class="font-18"><i class="fa fa-keyboard"></i> 
								<span class="text-dark"><?= $contentAmount; ?></span> </h6>
							</div>
						</div>
					</div>
					
					<canvas id="transactions-chart" height="350" class="mt-4"></canvas>
					
					<!-- System Overview to Dashboard.init.js -->
					<input type="hidden" value="<?= $sh1CustomerAmount; ?>" id="sh1_cus">
					<input type="hidden" value="<?= $sh2CustomerAmount; ?>" id="sh2_cus">
					<input type="hidden" value="<?= $sh3CustomerAmount; ?>" id="sh3_cus">
					<?php foreach($avgAmountCustomerSh1 as $valueCustomerAvg) { ?>
						<input type="hidden" value="<?= round($valueCustomerAvg['avgCus']); ?>" id="sh1_cus_avg">
					<?php } ?>
					<?php foreach($avgAmountCustomerSh2 as $valueCustomerAvg) { ?>
					<input type="hidden" value="<?= round($valueCustomerAvg['avgCus']); ?>" id="sh2_cus_avg">
					<?php } ?>
					<?php foreach($avgAmountCustomerSh3 as $valueCustomerAvg) { ?>
					<input type="hidden" value="<?= round($valueCustomerAvg['avgCus']); ?>" id="sh3_cus_avg">
					<?php } ?>
					<!-- System Overview to Dashboard.init.js -->
					
				</div>
				
			</div>
			
			<!-- End System Overview -->

			<!-- Start Resources Overview -->
			<div class="col-xl-5">
				<div class="card-box">
					<h4 class="header-title">Resources Overview</h4>

					<div class="row">
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Admin</h6>
								<h6 class="font-18 "><i class="fa fa-user-circle"></i> 
								<span class="text-dark"><?= $amountOfAdmin ?></span> <small></small></h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Product Amount</h6>
								<h6 class="font-18"><i class="fa fa-university" aria-hidden="true"></i> 
								<span class="text-dark"><?= $amountOfProduct; ?></span> </h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Staff</h6>
								<h6 class="font-18"><i class="fa fa-address-card"></i> 
								<span class="text-dark"><?= $amountOfStaff; ?></span> </h6>
							</div>
						</div>
					</div>

					<canvas id="sales-history" height="350" class="mt-4"></canvas>

					<!-- Resources Overview to Dashboard.init.js -->
					<input type="hidden" id="sh1_staff_am" value="<?= $sh1StaffAmount; ?>">
					<input type="hidden" id="sh2_staff_am" value="<?= $sh2StaffAmount; ?>">
					<input type="hidden" id="sh3_staff_am" value="<?= $sh3StaffAmount; ?>">
					<!-- Resources Overview to Dashboard.init.js -->
				</div>
			</div>
			<!-- End Resources Overview -->	
			
		</div>
	
	<?php } ?>

	<?php if($_SESSION['role'] == 2) {?>
		<div class="row">

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-box float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Care Content</h5>
					<h3 class="mb-3" data-plugin="counterup"><?= $personalAmount; ?></h3>
					<!-- <span class="badge badge-primary"> +11% </span> 
					<span class="text-muted ml-2 vertical-middle">From previous period</span> -->
				</div>
			</div>

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-layers float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Bonus</h5>
					<h3 class="mb-3"><span data-plugin="counterup"><?= number_format($sumBonus); ?></span> VND</h3>
					<!-- <span class="badge badge-primary"> -29% </span> 
					<span class="text-muted ml-2 vertical-middle">From previous period</span> -->
				</div>
			</div>

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-tag float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Orders</h5>
					<h3 class="mb-3"><span data-plugin="counterup"><?= $personalProductAmount; ?></span> </h3>
					<!-- <span class="badge badge-primary"> 0% </span> 
					<span class="text-muted ml-2 vertical-middle">From previous period</span> -->
				</div>
			</div>

			<div class="col-md-6 col-xl-3">
				<div class="card-box tilebox-one">
					<i class="fe-briefcase float-right"></i>
					<h5 class="text-muted text-uppercase mb-3 mt-0">Customer</h5>
					<h3 class="mb-3" data-plugin="counterup"><?= $personalCustomerBeingCare; ?></h3>
					<!-- <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span> -->
				</div>
			</div>

		</div>

	

		<div class="row">
			<!-- Start System Overview -->
			
			<div class="col-xl-7">
				<div class="card-box">
					<h4 class="header-title">Overview</h4>

					<div class="row">
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Customer</h6>
								<h6 class="font-18"><i class="fa fa-users" aria-hidden="true"></i> 
								<span class="text-dark"><?= $personalTotalCustomer; ?></span> </h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Number of Transference</h6>
								<h6 class="font-18"><i class="fa fa-paper-plane" aria-hidden="true"></i> 
								<span class="text-dark"><?= $personalTransference; ?></span> </h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Care Content</h6>
								<h6 class="font-18"><i class="fa fa-keyboard"></i> 
								<span class="text-dark"><?= $contentAmount; ?></span> </h6>
							</div>
						</div>
					</div>
					
					<canvas id="transactions-chart" height="350" class="mt-4"></canvas>
					
					<!-- System Overview to Dashboard.init.js -->
					
					<!-- System Overview to Dashboard.init.js -->
					
				</div>
				
			</div>
			
			<!-- End System Overview -->

			<!-- Start Resources Overview -->
			<!-- <div class="col-xl-5">
				<div class="card-box">
					<h4 class="header-title">Resources Overview</h4>

					<div class="row">
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Admin</h6>
								<h6 class="font-18 "><i class="fa fa-user-circle"></i> 
								<span class="text-dark"><?= $amountOfAdmin ?></span> <small></small></h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Product Amount</h6>
								<h6 class="font-18"><i class="fa fa-university" aria-hidden="true"></i> 
								<span class="text-dark"><?= $amountOfProduct; ?></span> </h6>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="text-center mt-3">
								<h6 class="font-normal text-muted font-14">Total Staff</h6>
								<h6 class="font-18"><i class="fa fa-address-card"></i> 
								<span class="text-dark"><?= $amountOfStaff; ?></span> </h6>
							</div>
						</div>
					</div>

					<canvas id="sales-history" height="350" class="mt-4"></canvas>

					Resources Overview to Dashboard.init.js -->
					
					<!-- Resources Overview to Dashboard.init.js
				</div>
			</div> -->
			<!-- End Resources Overview -->	
			
		</div>
	
	<?php } ?>
</div>