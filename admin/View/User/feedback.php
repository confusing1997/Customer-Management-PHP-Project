<?php 
    $pages = ceil($count / 3);
 ?>
<div class="row">
    <div class="col-12">
        <div class="card-box">            
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <div class="card-body">
                            <img src="Asset/images/users/<?= $info['avatar'];?>" class="float-left rounded-circle mr-3 mb-3" width="128px">
                            <div class="message">
                                <h2 class="mt-3"><?= $info['name'];?></h2>
                                <h4 class="card-subtitle text-muted mt-2"><?php echo ($info['role']==2)?"Staff" :"Admin" ; ;?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <h3 class="mt-3 text-muted">AVERAGE SCORE</h3>
                        </div>
                        <div class="row">
                            <div class="float-right" style="font-size: 50px;"><?php echo round($avg/0.5)*.5;?></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h1 class="mt-5 text-danger">
                            <?php 
                                switch (round($avg/0.5)*.5) {
                                    case 0.5:
                                        echo "<i class='mdi mdi-star-half'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 1:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 1.5:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-half'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 2:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 2.5:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-half'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 3:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 3.5:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-half'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 4:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                    case 4.5:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star-half'></i>";
                                        break;
                                    case 5:
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        echo "<i class='mdi mdi-star'></i>";
                                        break;
                                    default:
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        echo "<i class='mdi mdi-star-outline'></i>";
                                        break;
                                }
                               

                            ?>
                                
                            </h1>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="card-body">
                        <h3 class="text-danger">Feedbacks (<?= $count;?>)</h3>
                    </div>
                </div>
            </div>

                
                <div class="card">
                    <?php 
                        foreach ($user as $key => $value) { 
                    ?>
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col-3">
                                <img src="../assets/images/customer/<?php 
                                    if($value['avatar']=='guest.jpg'){
                                        echo $value['avatar'];
                                    } else {
                                        echo $value['id'];
                                        ?>/<?php echo $value['avatar'];
                                    }
                                ?>" class="float-left rounded-circle mr-3" width="64px">
                                <div class="message">
                                    <h4 class="mb-2"><?=$value['name'];?></h4>
                                    <h6 class="card-subtitle text-muted"><?=$value['phone'];?></h6>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <p class="card-text" style="font-size: 16px"><i class="mdi mdi-format-quote-open text-danger"></i> <?=$value['feedback'];?> <i class="mdi mdi-format-quote-close text-danger"></i></p>
                            </div>

                            <div class="col-3">
                                <h3 class="text-center text-danger">
                                    <?php 
                                        switch ($value['rate']) {
                                            case 0.5:
                                                echo "<i class='mdi mdi-star-half'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 1:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 1.5:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-half'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 2:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 2.5:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-half'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 3:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 3.5:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-half'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 4:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                            case 4.5:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star-half'></i>";
                                                break;
                                            case 5:
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                echo "<i class='mdi mdi-star'></i>";
                                                break;
                                            default:
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                echo "<i class='mdi mdi-star-outline'></i>";
                                                break;
                                        }
                               

                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php 
                        } 
                    ?>
                    <nav aria-label="Page navigation example" class="">
                        <ul class="pagination float-right mr-5" style="padding-right: 40px">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php  
                            for ($i = 1; $i <= $pages; $i++) { 
                        ?>
                                <li class="page-item <?php if($i == $_GET['pages']){ echo 'active';} ?>"><a href="dashboard.php?page=feedback&pages=<?= $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                        <?php
                            }
                        ?>
                        
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div>
    </div>
</div>