<?php

    include_once("Model/Login_m.php");

    class Login_c extends Login_m {

        private $login;

        function __construct()
        {
            $this->login = new Login_m();
        }

        public function Login1() {
            echo "string";
            include_once "View/login.php";
            if (isset($_POST['sm_login'])) {
                
                $users = $_POST['user'];     // $passw = $_POST['passw'];    
                $user = strip_tags($users);   
                echo $user;         
                
                $passws = md5($_POST['passw']);
                $passw = strip_tags($passws);
                echo $passw; 

                $log = $this->login->Login($user, $passw);
                echo "<pre>";                
                print_r($log);
                echo "</pre>";
                // $num = countl($log);
                if ($log) {
                    // include_once "index.php";
                    header("Location: index.php?page=index");
                    // $_SESSION['id'] = $log['id'];
                    // $_SESSION['name'] = $log['name'];
                    // $_SESSION['status'] = $log['status'];

                } else {
                    
                    $errors = "Tài khoản hoặc mật khẩu không đúng";
                }

            }

        

        }
    }