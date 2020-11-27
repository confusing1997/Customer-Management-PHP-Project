<?php 
	session_start();
	include_once '../../Controller/CustomerCare/CustomerCare_c_ajax.php';
	$customer_care = new CustomerCare_c_ajax();
	$rs = $customer_care->getNoti();
?>
	<a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge badge-danger rounded-circle noti-icon-badge count-noti"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-right">
                            <a href="" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="slimscroll noti-scroll" id="getNoti">
<?php
	$count = 0;
	foreach ($rs as $key => $value) {
		if ($value['user_id_get'] == $_SESSION['id']) {	
			$count++;
		}
	}
	if ($count > 0) {
?>	
	<a href="dashboard.php?page=get_transfer_noti&id=<?= $_SESSION['id']; ?>" class="dropdown-item notify-item noti_item">
		<div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
		<p class="notify-details">Có <?= $count; ?> yêu cầu điều chuyển!<small class="text-muted">1 min ago</small></p>
	</a>

<?php 
	}
?>

 	</div>

        <!-- All-->
        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
            View all
            <i class="fi-arrow-right"></i>
        </a>

    </div>

<script type="text/javascript">
	$(function(){
	    var n = $('.noti_item').length;
	    $('.count-noti').text(n);
	});
</script>