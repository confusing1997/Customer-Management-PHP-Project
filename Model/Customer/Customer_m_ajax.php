<?php

    include_once("../../admin/Config/myConfig.php");

    class Customer_m_ajax extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Cập nhật thông tin khách hàng
        protected function updateCustomerInfo($id, $avatar) {

            $sql = "UPDATE tbl_customer 
                    SET 
                        avatar = :avatar
                    WHERE id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->bindParam(':avatar', $avatar);

            return $pre->execute();
        }
    }
