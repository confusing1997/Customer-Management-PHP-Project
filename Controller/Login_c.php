<?php
    include_once("Model/Login_m.php");

    class Logincus_c extends Logincus_m {

        private $login;

        function __construct()
        {
            
            $this->login = new Logincus_m();
        }

        public function LoginC() {
            
            if (isset($_POST['sm_login'])) {
                
                $users = $_POST['user'];     
                $user = strip_tags($users);          
                
                $passws = $_POST['passw'];
                $passw = strip_tags($passws);

                $log = $this->login->Login($user, $passw);

                echo "<pre>";
                print_r($log) ;
                echo "</pre>";
               
                if ($log) {
                    header("Location: index.php?page=index");
                    $_SESSION['id_cus'] = $log['id'];
                    $_SESSION['name_cus'] = $log['name'];
                    $_SESSION['showroom_id_cus'] = $log['showroom_id'];
                    $_SESSION['title_cus'] = $log['title'];
                    $_SESSION['avatar_cus'] = $log['avatar'];
                    
                } else {                    
                    $errors = "Số điện thoại hoặc mật khẩu không đúng";
                }
            }
            include_once "View/login.php";   

        }
    }
?>