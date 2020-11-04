<!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="dashboard.php?page=index"><i class="fa fa-fw fa-dashboard"></i> Thống kê</a>
        </li>
        <?php if($_SESSION['role'] == 1){ ?>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Quản lý nhân viên <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user" class="collapse">
                    <li>
                        <a href="dashboard.php?page=list_all_user"><i class="fa fa-fw fa-table"></i> Danh sách nhân viên</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Thêm nhân viên</a>
                    </li>
                </ul>
            </li>
        <?php
            } 
        ?>
        
        
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#customer"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Quản lý khách hàng <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="customer" class="collapse">
                <li>
                    <a href="dashboard.php?page=list_customer"><i class="fa fa-fw fa-table"></i> Danh sách khách hàng</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-edit"></i> Thêm khách hàng</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#care"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp; Chăm sóc khách hàng <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="care" class="collapse">
                <li>
                    <a href="dashboard.php?page=list_customer_care"><i class="fa fa-fw fa-table"></i> Danh sách chăm sóc của nhân viên</a>
                </li>
                <li>
                    <a href="dashboard.php?page=list_customer_care_all"><i class="fa fa-fw fa-table"></i> Danh sách khách hàng đang chăm sóc của công ty</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-edit"></i> Thêm khách hàng chăm sóc</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#product"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Đồng hồ <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="product" class="collapse">
                <li>
                    <a href="#"><i class="fa fa-fw fa-table"></i> Danh sách đồng hồ</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-edit"></i> Thêm đồng hồ</a>
                </li>
            </ul>
        </li>
    </ul>
</div> -->
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Quản lý</li>

                <li>
                    <a href="dashboard.php?page=index">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                
                <?php if($_SESSION['role'] == 1){ ?>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-users"></i>
                            <span> Quản lý nhân viên </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="dashboard.php?page=list_all_user">
                                <span><i class=" mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Danh sách nhân viên </span>
                            </a></li>
                            <li><a href="#"> 
                                <span><i class="mdi mdi-file-document-box-plus-outline"></i></span>
                                <span> Thêm nhân viên </span>
                            </a></li>
                        </ul>
                    </li>
                <?php
                    } 
                ?>

                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-user-id"></i>
                        <span> Quản lý khách hàng </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="dashboard.php?page=list_customer">
                            <span><i class=" mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Danh sách khách hàng </span>
                        </a></li>
                        <li><a href="#">
                            <span><i class="mdi mdi-file-document-box-plus-outline"></i></span>
                            <span> Thêm khách hàng </span>
                        </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-user-id"></i>
                        <span> Chăm sóc khách hàng </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="dashboard.php?page=list_customer_care">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Danh sách khách hàng chăm sóc của nhân viên </span>
                        </a></li>
                        <li><a href="dashboard.php?page=list_customer_care_all">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Danh sách khách hàng chăm sóc của công ty </span>
                        </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-watch"></i>
                        <span> Sản phẩm </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Danh sách sản phẩm </span>
                        </a></li>
                        <li><a href="#">
                            <span><i class="mdi mdi-file-document-box-plus-outline"></i></span>
                                <span> Thêm sản phẩm </span>
                        </a></li>
                    </ul>
                </li>

                <li class="menu-title mt-2">Thống kê</li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->