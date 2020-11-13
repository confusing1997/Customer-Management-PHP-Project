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
            SELECT tbl_care.customer_id, tbl_user.name as 'Họ tên NV', tbl_customer.name, tbl_showroom.title, tbl_customer.phone, tbl_customer.email, tbl_care.status, tbl_care.create_at, tbl_customer.id
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
                    tbl_customer.phone,
                    tbl_customer.name AS 'Tên khách hàng',
                    usermove.name AS 'Nhân viên chuyển',
                    userget.name AS 'Nhân viên nhận',
                    htr.create_at
                FROM
                    tbl_user AS usermove    
                INNER JOIN tbl_history htr
                ON
                    usermove.id = htr.user_id_move
                INNER JOIN tbl_user AS userget
                ON
                    userget.id = htr.user_id_get
                INNER JOIN tbl_customer
                ON
                    tbl_customer.id = htr.customer_id ORDER BY htr.create_at DESC";

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

            $sql = "SELECT tbl_user.avatar, tbl_user.name, tbl_detail.content, tbl_detail.create_at FROM tbl_detail, tbl_user WHERE tbl_user.id = tbl_detail.user_id AND tbl_detail.customer_id = :customer_id ORDER BY tbl_detail.create_at DESC";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":customer_id", $customer_id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Lấy thông tin tất cả nhân viên trừ mình
        protected function getAllUserExceptOne($id) {

            $sql = "SELECT * FROM tbl_user, tbl_showroom
                    WHERE tbl_user.showroom_id = tbl_showroom.showroom_id AND id != :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

    }

