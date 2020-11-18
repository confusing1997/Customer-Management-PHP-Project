<?php

    include_once("Config/myConfig.php");

    class Customer_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Hiện danh sách khách hàng
        protected function getCustomer () {

            $sql = "SELECT
                        *
                    FROM
                        tbl_customer,
                        tbl_showroom,
                        tbl_care
                    WHERE
                        tbl_customer.showroom_id = tbl_showroom.showroom_id AND tbl_customer.id = tbl_care.customer_id
                    ORDER BY
                        tbl_customer.create_at
                    DESC
                        ";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Tìm kiếm khách hàng trong bảng tbl_customer
        protected function searchCustomer ($key) {

            $sql = "SELECT * FROM tbl_customer, tbl_showroom
                    WHERE tbl_customer.showroom_id = tbl_showroom.showroom_id
                    AND CONCAT(name, title, email, phone) LIKE :key";

            $pre = $this->pdo->prepare($sql);

            $pre->bindValue(':key', '%'.$key.'%');

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }  
    }
