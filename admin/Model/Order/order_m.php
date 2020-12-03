<?php

    include_once("Config/myConfig.php");

    class Order_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }

        protected function getAmountOfOrder() {

            $sql = "SELECT * FROM tbl_order";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function getDetailOrder() {

            $sql = "SELECT SUM(price * quantity) AS total_price FROM tbl_detail_order";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $row = $pre->fetch(PDO::FETCH_ASSOC);

            return $sum = $row['total_price'];

        }

        protected function sumQuantity() {

            $sql = "SELECT SUM(quantity) from tbl_detail_order";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $row = $pre->fetch(PDO::FETCH_ASSOC);

            return $sum = $row['SUM(quantity)'];

        }

        protected function avgPrice() {

            $sql = "SELECT AVG(price * quantity) as avgPrice from tbl_detail_order";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $row = $pre->fetch(PDO::FETCH_ASSOC);

            return $avg = $row['avgPrice'];

        }

        protected function totalSalary() {

            $sql = "SELECT SUM(salary) from tbl_user";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $row = $pre->fetch(PDO::FETCH_ASSOC);

            return $sum = $row['SUM(salary)'];

        }

        protected function amountOfAdmin() {

            $sql = "SELECT * FROM tbl_user WHERE role = 1";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function amountOfStaff() {

            $sql = "SELECT * FROM tbl_user WHERE role = 2";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function customerAmount() {

            $sql = "SELECT * FROM tbl_customer";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function transferenceAmount() {

            $sql = "SELECT * FROM tbl_history";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function contentAmount() {

            $sql = "SELECT content FROM tbl_detail";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function sh1CustomerAmount() {

            $sql = "SELECT showroom_id FROM tbl_customer WHERE showroom_id = 1";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function sh2CustomerAmount() {

            $sql = "SELECT showroom_id FROM tbl_customer WHERE showroom_id = 2";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function sh3CustomerAmount() {

            $sql = "SELECT showroom_id FROM tbl_customer WHERE showroom_id = 3";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function avgAmountCustomerSh1() {

            $sql = "SELECT (SUM(showroom_id)/COUNT(showroom_id)) AS avgCus FROM tbl_customer WHERE showroom_id = 1";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        protected function avgAmountCustomerSh2() {

            $sql = "SELECT (SUM(showroom_id)/COUNT(showroom_id)) AS avgCus FROM tbl_customer WHERE showroom_id = 2";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        protected function avgAmountCustomerSh3() {

            $sql = "SELECT (SUM(showroom_id)/COUNT(showroom_id)) AS avgCus FROM tbl_customer WHERE showroom_id = 3";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        protected function amountOfProduct() {

            $sql = "SELECT * FROM tbl_product";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function sh1StaffAmount() {

            $sql = "SELECT showroom_id FROM tbl_user WHERE showroom_id = 1";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function sh2StaffAmount() {

            $sql = "SELECT showroom_id FROM tbl_user WHERE showroom_id = 2";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function sh3StaffAmount() {

            $sql = "SELECT showroom_id FROM tbl_user WHERE showroom_id = 3";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function personalAmount($id) {

            $sql = "SELECT user_id FROM tbl_detail WHERE user_id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function sumBonus($id) {

            $sql = "SELECT SUM(bonus) from tbl_bonus WHERE user_id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            $row = $pre->fetch(PDO::FETCH_ASSOC);

            return $sum = $row['SUM(bonus)'];

        }

        protected function personalProductAmount($id) {

            $sql = "SELECT order_id FROM tbl_bonus WHERE user_id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function personalCustomerBeingCare($id) {

            $sql = "SELECT user_id FROM tbl_care WHERE user_id = $id AND status = 1";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();    

            return $pre->rowCount();

        }

        protected function personalTotalCustomer($id) {

            $sql = "SELECT user_id FROM tbl_care WHERE user_id = $id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            return $pre->rowCount();

        }

        protected function personalTransference($id) {

            $sql = "SELECT user_id_move FROM tbl_history WHERE user_id_move = $id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();    

            return $pre->rowCount();

        }

        protected function getShowroomId($id) {

            $sql = "SELECT * FROM tbl_user, tbl_showroom 
                    WHERE id = :id AND tbl_user.showroom_id = tbl_showroom.showroom_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

    }