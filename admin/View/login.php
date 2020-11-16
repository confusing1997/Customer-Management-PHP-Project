<?php 

	// if (isset($_GET['redirect'])) {
	// 	echo "<script>alert('Bạn cần đăng nhập để hiển thị chức năng này!');</script>";
	// }	
 ?>

<div class="account-pages mt-5 pt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-pattern">

                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                            </a>
                            <h5 class="text-uppercase text-center font-bold mt-4">Login</h5>

                        </div>

                        <form action="" method="POST">

                            <div class="form-group mb-3">
                                <label for="emailaddress">Email</label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="user" value="<?php if(isset($user)){ echo $user; } ?>">
                            </div>

                            <div class="form-group mb-3">
                                
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="passw">
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-gradient btn-block" type="submit" name="sm_login"> Login </button>
                            </div>

                            <?php if (isset($errors)) { ?>
                            <div class="form-group mt-3">
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong><?php echo $errors; ?> </strong>
                                </div>
                            </div>
                            <?php } ?>
                        </form>


                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>