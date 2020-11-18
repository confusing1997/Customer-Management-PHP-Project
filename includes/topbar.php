<div class="navbar-custom">
    <div class="container">
        <ul class="list-unstyled topnav-menu float-right mb-0">
        <?php 
           if (isset($_SESSION['id_cus'])) {
        ?>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                    <span class="ml-1"><?php echo $_SESSION['name']; ?><i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Xin chào !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>Tài khoản</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-shopping-cart"></i>
                        <span>Lịch sử mua hàng</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="index.php?page=logout" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Đăng xuất</span>
                    </a>

                </div>
            </li>
        <?php
            } else{
        ?>
                <li class="notification-list" style="line-height: 70px;">
                    <a href="index.php?page=login" class="login">
                        Login
                    </a>
                </li>
        <?php
            }
         ?>
            

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon" style="color: #A2A2A2;"></i>
                </a>
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box col-md-3 col-xs-3">
            <a href="index.php" class="logo text-center">
                <img src="assets/images/logo.png" alt="" height="50" style="line-height: 70px; margin-top: 10px; margin-bottom: 10px;">
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search" style="color: black;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</div>