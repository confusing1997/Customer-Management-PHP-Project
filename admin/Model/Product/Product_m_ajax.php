<?php 

    include_once("../../Config/myConfig.php");

    class Product_m_ajax extends Connect {

        function __construct()
        {
            parent::__construct();
        }

        //Add more product into tbl_product
        protected function addProduct ($name, $price, $description) {

            $sql = "INSERT INTO tbl_product (name, price, description)
                    VALUE (:name, :price, :description)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":name", $name);
            $pre->bindParam(":price", $price);
            $pre->bindParam(":description", $description);

            return $pre->execute();
        }

        //Remove product from tbl_product
        protected function removeProduct ($id) {

            $sql = "UPDATE tbl_product SET status = 0 WHERE id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            return $pre->execute();

        }

        //Modify a product from tbl_product
        protected function modifyProduct ($id, $name, $price, $description) {

            $sql = "UPDATE tbl_product
                    SET name = :name, price = :price, description = :description
                    WHERE id = :id";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":id", $id);
            $pre->bindParam(":name", $name);
            $pre->bindParam(":price", $price);
            $pre->bindParam(":description", $description); 
            return $pre->execute();
        }

        protected function getPro_id ($id) {

            $sql = "SELECT * FROM tbl_product WHERE id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            return $row = $pre->fetch(PDO::FETCH_ASSOC);

        }

    }