<?php

    include_once("../../Config/myConfig.php");

    class CustomerCare_m_ajax extends Connect {

        function __construct()
        {
            parent::__construct();
        }

        //Thêm khách hàng vào bảng tbl_care
        protected function addCustomerCare($user_id){
            $sql = "INSERT INTO tbl_care (user_id, customer_id)
                    SELECT tbl_user.id, MAX(tbl_customer.id)
                    FROM tbl_user, tbl_customer
                    WHERE tbl_user.id = :user_id";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':user_id', $user_id);
            return $pre->execute();

        }

        //Xóa khách hàng trong bảng tbl_care
        protected function removeCustomerCare($customer_id){
            $sql = "DELETE FROM tbl_care WHERE customer_id = :customer_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':customer_id', $customer_id);

            return $pre->execute();
        }

        //Thêm khách hàng vào bảng tbl_care
        protected function addUserGet($user_id_get, $customer_id){
            $sql = "INSERT INTO tbl_care(user_id, customer_id) VALUES (:user_id_get, :customer_id)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':user_id_get', $user_id_get);

            $pre->bindParam(':customer_id', $customer_id);

            return $pre->execute();
        }

        //Thêm vào bảng tbl_history
        protected function addHistory($user_id_move, $customer_id, $user_id_get){
            $sql = "INSERT INTO tbl_history(user_id_move, customer_id, user_id_get) VALUES (:user_id_move, :customer_id, :user_id_get)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':user_id_get', $user_id_get);

            $pre->bindParam(':customer_id', $customer_id);

            $pre->bindParam(':user_id_move', $user_id_move);

            return $pre->execute();
        }

        //Thêm vào bảng tbl_transfer_noti
        protected function addNoti($user_id_move, $customer_id, $user_id_get){
            $sql = "INSERT INTO tbl_transfer_noti(user_id_move, customer_id, user_id_get) VALUES (:user_id_move, :customer_id, :user_id_get)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':user_id_get', $user_id_get);

            $pre->bindParam(':customer_id', $customer_id);

            $pre->bindParam(':user_id_move', $user_id_move);

            return $pre->execute();
        }

        //Xóa khách hàng trong bảng tbl_transfer_noti
        protected function removeNoti($customer_id){
            $sql = "DELETE FROM tbl_transfer_noti WHERE customer_id = :customer_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':customer_id', $customer_id);

            return $pre->execute();
        }

        //Thêm nội dung chăm sóc vào bảng tbl_detail
        protected function addContent($user_id, $customer_id, $content){
            $sql = "INSERT INTO tbl_detail (user_id, customer_id, content) VALUES (:user_id, :customer_id, :content)";
            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':user_id', $user_id);
            $pre->bindParam(':customer_id', $customer_id);
            $pre->bindParam(':content', $content);

            return $pre->execute();
        }

        //Lấy thông tin nhân viên chăm sóc khách hàng
        protected function getUserMove($customer_id) {

            $sql = "SELECT * FROM tbl_care
                    WHERE customer_id = :customer_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':customer_id', $customer_id);

            $pre->execute();

            return $row = $pre->fetch(PDO::FETCH_ASSOC);
        }
    }

