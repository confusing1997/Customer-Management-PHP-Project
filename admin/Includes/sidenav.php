<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                <?php if($_SESSION['role'] == 1){ ?>
                <li class="menu-title mt-2"> Management </li>                
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-users"></i>
                        <span> Manage Staff </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="dashboard.php?page=list_all_user">
                            <span><i class=" mdi mdi-format-list-bulleted-square"></i></span>
                            <span> Staff's list </span>
                        </a></li>
                    </ul>
                </li>                

                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-user-id"></i>
                        <span> Manage Customer </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="dashboard.php?page=list_customer">
                            <span><i class=" mdi mdi-format-list-bulleted-square"></i></span>
                            <span> Customer's list </span>
                        </a></li>
                    </ul>
                </li>
                
                <?php
                    } 
                ?>

                
                <li class="menu-title"> Customer Attention </li>

                <li>
                    <a href="dashboard.php?page=index">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-user-id"></i>
                        <span> Customer Attention </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="dashboard.php?page=list_customer_care">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Staff's Customer list</span>
                        </a></li>
                        <li><a href="dashboard.php?page=list_customer_care_all">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> System's Customer list</span>
                        </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-user-id"></i>
                        <span> Transference history </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="dashboard.php?page=list_history">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Transference history </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-watch"></i>
                        <span> Product </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">
                            <span><i class="mdi mdi-format-list-bulleted-square"></i></span>
                                <span> Product list </span>
                        </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->