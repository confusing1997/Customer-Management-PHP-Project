<?php

    include_once("admin/Config/myConfig.php");

    class Customer_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Hiện danh sách khách hàng
        protected function getCustomerInfo($id) {

            $sql = "SELECT
                        *
                    FROM
                        tbl_customer, tbl_showroom
                    WHERE
                        tbl_customer.showroom_id = tbl_showroom.showroom_id
                    AND
                        id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = $pre->fetch(PDO::FETCH_ASSOC);

            return $result;
        }
    }
