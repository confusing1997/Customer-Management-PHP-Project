<?php
    
    include_once("Config/myConfig.php");

    class Login_m extends Connect {

        function __construct()
        {   
            
            parent::__construct();

        }

        protected function Login($user, $passw) {
        
            $sql = "SELECT * FROM tbl_user WHERE email = :user AND passw = :passw";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":user", $user);
            $pre->bindParam(":passw", $passw);
            $pre->execute();
            return $row = $pre->fetch(PDO::FETCH_ASSOC);

        }


    }
?>