<?php

    include_once("../../Config/myConfig.php");

    class Customer_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Hiện danh sách khách hàng
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

        //Thêm khách hàng vào bảng tbl_customer
        protected function addCustomer($name,$showroom_id, $phone, $email){
            $sql = "INSERT INTO tbl_customer (name,showroom_id, phone, email) VALUES (:name, :showroom_id, :phone, :email)";
            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':name', $name);
            $pre->bindParam(':showroom_id', $showroom_id);
            $pre->bindParam(':phone', $phone);
            $pre->bindParam(':email', $email);

            return $pre->execute();

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

        //Hàm kiểm tra xem khách hàng đã có trong danh sách hay chưa theo email và sđt
        function checkEmailPhone($phone, $email){
            $sql = "SELECT *FROM tbl_customer WHERE phone = :phone OR email = :email";
            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':phone', $phone);
            $pre->bindParam(':email', $email);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        //Xóa khách hàng trong bảng tbl_customer
        protected function removeCustomer ($id) {

            $sql = "DELETE FROM tbl_customer WHERE id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            return $pre->execute();

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

        //Hiện danh sách khách hàng đang chăm sóc của nhân viên đang đăng nhập
        protected function getCustomerCare ($user_id) {

            $sql = "
            SELECT tbl_customer.name, tbl_showroom.title, tbl_customer.phone, tbl_customer.email, tbl_care.status, tbl_care.create_at
            FROM
                tbl_user,
                tbl_customer,
                tbl_showroom,
                tbl_care
            WHERE
                tbl_customer.showroom_id = tbl_showroom.showroom_id AND tbl_user.id = tbl_care.user_id AND tbl_customer.id = tbl_care.customer_id AND tbl_user.id = :user_id
            ORDER BY tbl_care.create_at DESC";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":user_id", $user_id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Hiện danh sách tất cả khách hàng đang được chăm sóc của công ty
        protected function getCustomerCareAll () {

            $sql = "
                SELECT
                    tbl_user.name,
                    tbl_showroom.title,
                    tbl_customer.name as 'Họ tên khách',
                    tbl_customer.phone,
                    tbl_care.create_at,
                    tbl_care.status
                FROM
                    tbl_user,
                    tbl_customer,
                    tbl_showroom,
                    tbl_care
                WHERE
                    tbl_customer.showroom_id = tbl_showroom.showroom_id AND tbl_user.id = tbl_care.user_id AND tbl_customer.id = tbl_care.customer_id
                ORDER BY tbl_care.create_at DESC";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Tìm kiếm khách hàng trong mục danh sách khách hàng đang được chăm sóc của nhân viên đang đăng nhập
        protected function searchCustomerCare ($key, $user_id) {

            $sql = " 
               SELECT tbl_customer.name, tbl_showroom.title, tbl_customer.phone, tbl_customer.email, tbl_care.status, tbl_care.create_at
            FROM
                tbl_user,
                tbl_customer,
                tbl_showroom,
                tbl_care
            WHERE
                tbl_customer.showroom_id = tbl_showroom.showroom_id AND tbl_user.id = tbl_care.user_id AND tbl_customer.id = tbl_care.customer_id AND tbl_user.id = :user_id
                    AND CONCAT(tbl_customer.name,tbl_customer.phone) LIKE :key";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":user_id", $user_id);

            $pre->bindValue(':key', '%'.$key.'%');

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Tìm kiếm khách hàng trong danh sách tất cả khách hàng được chăm sóc của công ty
        protected function searchCustomerCareAll ($key) {

            $sql = " 
                SELECT
                    tbl_user.name,
                    tbl_showroom.title,
                    tbl_customer.name as 'Họ tên khách',
                    tbl_customer.phone,
                    tbl_care.create_at,
                    tbl_care.status
                FROM
                    tbl_user,
                    tbl_customer,
                    tbl_showroom,
                    tbl_care
                WHERE
                    tbl_customer.showroom_id = tbl_showroom.showroom_id AND tbl_user.id = tbl_care.user_id AND tbl_customer.id = tbl_care.customer_id
                    AND CONCAT(tbl_user.name, tbl_customer.name, phone) LIKE :key";

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

