<?php

    include_once("../../Config/myConfig.php");

    class Customer_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }

        protected function getCustomer () {

            $sql = "SELECT * FROM tbl_customer, tbl_showroom 
                    WHERE tbl_customer.showroom_id = tbl_showroom.showroom_id";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

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
                    AND '$key' IN (name, title, email, phone)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':key', $key);

            $pre->execute(['%$key%']);

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

    }