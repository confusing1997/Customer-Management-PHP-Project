<div class="collapse navbar-collapse navbar-ex1-collapse">
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
</div>