<?php

    include_once("admin/Config/myConfig.php");

    class Product_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Hiện danh sách khách hàng
        protected function getProductMale () {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                    WHERE
                        role = 0
                    LIMIT
                        0,8";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        protected function getProductFemale () {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                    WHERE
                        role = 1
                    LIMIT
                        0,8";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function getProductNew () {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                    ORDER BY
                        create_at
                    DESC
                    LIMIT
                        0,8";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function getProductHot () {

            $sql = "SELECT
                        pro.id,
                        pro.image,
                        pro.price,
                        pro.sale,
                        PRO.name,
                        SUM(OD.quantity) AS SALEQTY
                    FROM
                        tbl_product AS PRO
                    INNER JOIN tbl_detail_order AS OD
                    ON
                        PRO.id = OD.product_id
                    GROUP BY
                        PRO.name
                    ORDER BY
                        SALEQTY DESC
                    LIMIT
                        0,4";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function getProductSW() {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                    WHERE
                        origin = 'Thụy Sĩ'
                    LIMIT 0,8";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }
        
        protected function getProductJP() {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                    WHERE
                        origin = 'Nhật Bản' 
                    LIMIT 0,8";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function getProductOT() {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                    WHERE
                        origin NOT LIKE 'Thụy Sĩ' 
                    AND 
                        origin NOT LIKE 'Nhật Bản'
                    LIMIT 0,8";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function getProductDetail($id) {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                    WHERE
                        id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = $pre->fetch(PDO::FETCH_ASSOC);

            return $result;
        }
    }
