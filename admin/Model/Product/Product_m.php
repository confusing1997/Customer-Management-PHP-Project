<?php

    include_once("Config/myConfig.php");

    class Product_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Hiện danh sách sản phẩm
        protected function getProduct () {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                        ";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Hiện danh sách khách hàng
        protected function getCustomerName ($id) {

            $sql = "SELECT
                        tbl_customer.name AS 'Tên khách hàng',
                        tbl_user.name AS 'NV chăm sóc',
                        title
                    FROM
                        tbl_customer,
                        tbl_care,
                        tbl_user,
                        tbl_showroom
                    WHERE
                        tbl_customer.id = tbl_care.customer_id AND tbl_customer.showroom_id = tbl_showroom.showroom_id AND tbl_user.id = tbl_care.user_id AND tbl_customer.id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            $result = array();

            return $row = $pre->fetch(PDO::FETCH_ASSOC);

        }
    }
