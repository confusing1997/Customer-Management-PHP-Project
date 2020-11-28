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
                        tbl_order.id AS 'id'
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
    }
