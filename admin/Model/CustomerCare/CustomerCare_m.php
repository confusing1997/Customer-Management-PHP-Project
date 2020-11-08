<?php

    include_once("Config/myConfig.php");

    class CustomerCare_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }

        //Hiện danh sách khách hàng đang chăm sóc của nhân viên đang đăng nhập
        protected function getCustomerCare ($user_id) {

            $sql = "
            SELECT tbl_customer.name, tbl_showroom.title, tbl_customer.phone, tbl_customer.email, tbl_care.status, tbl_care.create_at, tbl_customer.id
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

        //Hiện danh sách tất cả khách hàng đang được chăm sóc của công ty
        protected function getCustomerCareAll () {

            $sql = "
                SELECT
                    tbl_customer.id,
                    tbl_user.name as 'Họ tên NV',
                    tbl_showroom.title,
                    tbl_customer.name as 'Họ tên khách',
                    tbl_customer.phone,
                    tbl_customer.email as 'Email Khách',
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
                    tbl_customer.id,
                    tbl_user.name as 'Họ tên NV',
                    tbl_showroom.title,
                    tbl_customer.name as 'Họ tên khách',
                    tbl_customer.phone,
                    tbl_customer.email as 'Email Khách',
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

        //Hiện danh sách lịch sử điều chuyển
        protected function getHistory () {

            $sql = "
                SELECT
                    cus.phone,
                    cus.name AS 'Tên khách hàng',
                    user1.name AS 'Nhân viên chuyển',
                    user02.name AS 'Nhân viên nhận',
                    cus.create_at
                FROM
                    (
                    SELECT
                        tbl_customer.phone,
                        tbl_customer.name,
                        tbl_history.create_at
                    FROM
                        tbl_customer,
                        tbl_history
                    WHERE
                        tbl_customer.id = tbl_history.customer_id
                ) cus,
                tbl_user AS user1
                JOIN tbl_history his1 ON
                    user1.id = his1.user_id_move
                JOIN(
                    SELECT
                        user2.name
                    FROM
                        tbl_user AS user2
                    JOIN tbl_history his2 ON
                        user2.id = his2.user_id_get
                ) AS user02";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Hiện chi tiết nội dung chăm sóc khách hàng
        protected function getDetailCare ($customer_id) {

            $sql = "SELECT * FROM tbl_detail, tbl_user WHERE tbl_user.id = tbl_detail.user_id AND tbl_detail.customer_id = :customer_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":customer_id", $customer_id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

    }

