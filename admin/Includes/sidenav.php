<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Chăm sóc khách hàng</li>

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
                        <i class="dripicons-user-id"></i>
                        <span> Lịch sử điều chuyển </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="dashboard.php?page=list_history">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Lịch sử điều chuyển </span>
                            </a>
                        </li>
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
                    </ul>
                </li>

                <li class="menu-title mt-2">Chăm sóc khách hàng</li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->