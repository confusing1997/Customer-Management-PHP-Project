<?php

    include_once("../../Config/myConfig.php");

    class Customer_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }

        protected function getCustomer () {

            $sql = "SELECT *FROM tbl_customer, tbl_showroom 
                    WHERE tbl_customer.showroom_id = tbl_showroom.showroom_id";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        protected function addCustomer($name, $phone, $email){
            $sql = "INSERT INTO tbl_customer (name, phone, email) VALUES (:name, :phone, :email)";
            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':name', $name);
            $pre->bindParam(':phone', $phone);
            $pre->bindParam(':email', $email);

            return $pre->execute();

        }

        protected function removeCustomer ($id) {

            $sql = "DELETE FROM tbl_customer WHERE id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            return $pre->execute();

        }

        protected function searchCustomer ($key) {

            $sql = "SELECT * FROM tbl_customer, tbl_showroom
                    WHERE tbl_customer.showroom_id = tbl_showroom.showroom_id
                    AND CONCAT_WS(name, title, email, phone) LIKE :key";

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