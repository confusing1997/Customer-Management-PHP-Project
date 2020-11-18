<?php
    
    include_once("admin/Config/myConfig.php");

    class Logincus_m extends Connect {

        function __construct()
        {   
            
            parent::__construct();

        }

        protected function Login($user, $passw) {
        
            $sql = "SELECT * FROM tbl_customer, tbl_showroom WHERE tbl_customer.showroom_id = tbl_showroom.showroom_id AND phone = :user AND passw = :passw";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":user", $user);
            $pre->bindParam(":passw", $passw);
            $pre->execute();
            return $row = $pre->fetch(PDO::FETCH_ASSOC);

        }


    }
?>