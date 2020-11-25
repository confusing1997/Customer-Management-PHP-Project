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
                        *
                    FROM
                        tbl_product
                    ORDER BY
                        create_at DESC
                    LIMIT 0,8";

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
    }
