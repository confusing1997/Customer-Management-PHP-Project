<?php
    include_once("Model/Login_m.php");

    class Login_c extends Login_m {

        private $login;

        function __construct()
        {
            
            $this->login = new Login_m();
        }

        public function Login1() {
            
            if (isset($_POST['sm_login'])) {
                
                $users = $_POST['user'];     
                $user = strip_tags($users);          
                
                $passws = md5($_POST['passw']);
                $passw = strip_tags($passws);

                $log = $this->login->Login($user, $passw);
                // $num = count($log);
                if ($log) {
                    header("Location: dashboard.php?page=index");
                    // echo "<pre>";
                    // print_r($log);
                    // echo "</pre>";
                    $_SESSION['id'] = $log['id'];
                    $_SESSION['name'] = $log['name'];
                    $_SESSION['showroom_id'] = $log['showroom_id'];
                    $_SESSION['title'] = $log['title'];
                    $_SESSION['role'] = $log['role'];
                    $_SESSION['status'] = $log['status'];
                    

                } else {                    
                    $errors = "Tài khoản hoặc mật khẩu không đúng";
                }
            }
            include_once "View/login.php";   

        }
    }
?>