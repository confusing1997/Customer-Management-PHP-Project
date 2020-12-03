<?php

    include_once("admin/Config/myConfig.php");

    class Customer_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Hiện danh sách khách hàng
        protected function getCustomerInfo($id) {

            $sql = "SELECT
                        *
                    FROM
                        tbl_customer, tbl_showroom
                    WHERE
                        tbl_customer.showroom_id = tbl_showroom.showroom_id
                    AND
                        id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = $pre->fetch(PDO::FETCH_ASSOC);

            return $result;
        }

        protected function getCustomerOrder($id) {

            $sql = "SELECT
                        tbl_customer.name AS 'Tên khách hàng',
                        usersell.name AS 'Nhân viên bán',
                        usercare.name AS 'Nhân viên chăm sóc',
                        tbl_order.total AS 'Đơn giá',
                        tbl_order.create_at AS 'Thời gian',
                        tbl_order.id AS 'id',
                        usercare.id AS 'idu'
                    FROM
                        tbl_user AS usersell
                    INNER JOIN tbl_order
                    ON
                        usersell.id = tbl_order.user_id_buy
                    INNER JOIN tbl_user AS usercare
                    ON
                        usercare.id = tbl_order.user_id_care
                    INNER JOIN tbl_customer
                    ON
                        tbl_customer.id = tbl_order.customer_id AND tbl_customer.id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function getCustomerOrderDetail($id) {

            $sql = "SELECT
                        tbl_product.image AS 'Sản phẩm',
                        tbl_product.name 'Tên sản phẩm',
                        tbl_product.price AS 'Đơn giá',
                        tbl_detail_order.sale AS 'Giảm giá',
                        tbl_detail_order.quantity AS 'Số lượng',
                        tbl_product.id AS 'id'
                    FROM
                        tbl_order,
                        tbl_detail_order,
                        tbl_product
                    WHERE
                        tbl_order.id = tbl_detail_order.order_id AND tbl_detail_order.product_id = tbl_product.id AND tbl_order.id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function addFeedback($order_id, $user_id, $customer_id, $rate, $feedback) {

            $sql = "INSERT INTO tbl_feedback(order_id, user_id, customer_id, rate, feedback) VALUES
                    (:order_id, :user_id, :customer_id, :rate, :feedback)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':order_id', $order_id);

            $pre->bindParam(':user_id', $user_id);

            $pre->bindParam(':customer_id', $customer_id);

            $pre->bindParam(':rate', $rate);

            $pre->bindParam(':feedback', $feedback);

            return $pre->execute();
        }

        protected function getUserInfo($id) {

            $sql = "SELECT
                        *
                    FROM
                        tbl_user, tbl_showroom
                    WHERE
                        tbl_user.showroom_id = tbl_showroom.showroom_id
                    AND
                        id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = $pre->fetch(PDO::FETCH_ASSOC);

            return $result;
        }

        protected function getUserRate($id) {

            $sql = "SELECT
                        COUNT(tbl_feedback.user_id) AS 'num',
                        ROUND(
                            SUM(tbl_feedback.rate) / COUNT(tbl_feedback.user_id),
                            1
                        ) AS 'avg'
                    FROM
                        tbl_feedback
                    WHERE
                        tbl_feedback.user_id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = $pre->fetch(PDO::FETCH_ASSOC);

            return $result;
        }

        protected function getUserFeedback($id, $row) {

            if (isset($_GET['pages'])) {
                $pages = $_GET['pages'];
            }else{
                $pages = 1;
            }

            $from = ($pages - 1) * $row;

            $sql = "SELECT
                        tbl_feedback.customer_id as 'idc',
                        tbl_customer.name,
                        tbl_customer.avatar,
                        tbl_feedback.rate,
                        tbl_feedback.feedback,
                        tbl_feedback.create_at as 'time'
                    FROM
                        tbl_feedback, tbl_customer
                    WHERE
                        tbl_feedback.customer_id = tbl_customer.id and tbl_feedback.user_id = :id
                    ORDER BY
                        tbl_feedback.create_at DESC
                    LIMIT 
                        $from,$row";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':id', $id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

        protected function countFeedback($user_id){

            $sql = "SELECT COUNT(user_id) as id FROM tbl_feedback WHERE user_id = :user_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':user_id', $user_id);

            $pre->execute();

            $result = $pre->fetch(PDO::FETCH_ASSOC);

            return $result['id'];
        }

        protected function checkFeedback($order_id) {

            $sql = "SELECT
                        *
                    FROM
                        tbl_feedback, tbl_order
                    WHERE
                        tbl_feedback.order_id = tbl_order.id
                    AND
                        order_id = :order_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':order_id', $order_id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;
        }

    }
