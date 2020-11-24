<?php

    include_once("../../admin/Config/myConfig.php");

    class Customer_m_ajax extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Cập nhật thông tin khách hàng
        protected function updateCustomerAva($id, $avatar) {

            $sql = "UPDATE tbl_customer 
                    SET 
                        avatar = :avatar
                    WHERE id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->bindParam(':avatar', $avatar);

            return $pre->execute();
        }

        protected function updateCustomerPass($id, $password) {

            $sql = "UPDATE tbl_customer 
                    SET 
                        passw = :password
                    WHERE id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->bindParam(':password', $password);

            return $pre->execute();
        }

        function checkPass($id, $pass){
            $sql = "SELECT *FROM tbl_customer WHERE id = :id AND passw = :pass";
            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);
            $pre->bindParam(':pass', $pass);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }
    }
