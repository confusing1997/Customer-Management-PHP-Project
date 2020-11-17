<?php

    include_once("Config/myConfig.php");

    class Product_m extends Connect {

        function __construct()
        {
            parent::__construct();
        }
        //Hiện danh sách sản phẩm
        protected function getProduct () {

            $sql = "SELECT
                        *
                    FROM
                        tbl_product
                        ";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Hiện danh sách khách hàng
        protected function getId ($id) {

            $sql = "SELECT
                        tbl_care.user_id,
                        tbl_customer.name AS 'Tên khách hàng',
                        tbl_user.name AS 'NV chăm sóc',
                        title
                    FROM
                        tbl_customer,
                        tbl_care,
                        tbl_user,
                        tbl_showroom
                    WHERE
                        tbl_customer.id = tbl_care.customer_id AND tbl_customer.showroom_id = tbl_showroom.showroom_id AND tbl_user.id = tbl_care.user_id AND tbl_customer.id = :id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":id", $id);

            $pre->execute();

            return $row = $pre->fetch(PDO::FETCH_ASSOC);

        }

        //Add more product into tbl_order
        protected function addOrder ($user_id_buy, $user_id_care, $customer_id, $total) {

            $sql = "INSERT INTO tbl_order (user_id_buy, user_id_care, customer_id, total)
                    VALUE (:user_id_buy, :user_id_care, :customer_id, :total)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":user_id_buy", $user_id_buy);
            $pre->bindParam(":user_id_care", $user_id_care);
            $pre->bindParam(":customer_id", $customer_id);
            $pre->bindParam(":total", $total);

            return $pre->execute();
        }

        //Add more product into tbl_order
        protected function addDetailOrder ($product_id, $price, $quantity) {

            $sql = "INSERT INTO tbl_detail_order (product_id, price, quantity)
                    VALUE (:product_id, :price, :quantity)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":product_id", $product_id);
            $pre->bindParam(":price", $price);
            $pre->bindParam(":quantity", $quantity);

            return $pre->execute();
        }

        //Add Bonus for user_care + user_sell (6%)
        protected function addBonus6 ($id) {

            $sql = "INSERT INTO tbl_bonus(user_id, order_id, bonus)
                    SELECT
                        tbl_user.id,
                        MAX(tbl_order.id),
                        ROUND(6 * tbl_order.total / 100, -3)
                    FROM
                        tbl_user,
                        tbl_order,
                        (SELECT MAX(tbl_order.id) as idmax, total FROM tbl_order) as max
                    WHERE
                        tbl_user.id = tbl_order.user_id_buy AND tbl_user.id = tbl_order.user_id_care AND tbl_order.id = max.idmax  AND tbl_user.id = :id
                        ";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":id", $id);
            $pre->execute();

        }

        //Add Bonus for user_care (4%)
        protected function addBonus4 ($user_id_care) {

            $sql = "INSERT INTO tbl_bonus(user_id, order_id, bonus)
                    SELECT
                        tbl_user.id,
                        MAX(tbl_order.id),
                        ROUND(4 * tbl_order.total / 100, -3)
                    FROM
                        tbl_user,
                        tbl_order,
                        (SELECT MAX(tbl_order.id) as idmax, total FROM tbl_order) as max
                    WHERE
                        tbl_user.id = tbl_order.user_id_care AND tbl_order.id = max.idmax  AND tbl_user.id = :user_id_care";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":user_id_care", $user_id_care);
            $pre->execute();

        }

        //Add Bonus for user_sell (2%)
        protected function addBonus2 ($user_id_buy) {

            $sql = "INSERT INTO tbl_bonus(user_id, order_id, bonus)
                    SELECT
                        tbl_user.id,
                        MAX(tbl_order.id),
                        ROUND(2 * tbl_order.total / 100, -3)
                    FROM
                        tbl_user,
                        tbl_order,
                        (SELECT MAX(tbl_order.id) as idmax, total FROM tbl_order) as max
                    WHERE
                        tbl_user.id = tbl_order.user_id_buy AND tbl_order.id = max.idmax  AND tbl_user.id = :user_id_buy
                        ";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":user_id_buy", $user_id_buy);
            $pre->execute();

        }
    }
