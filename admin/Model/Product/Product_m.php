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
                        title,
                        tbl_customer.email
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
        protected function addDetailOrder ($product_id, $quantity) {

            $sql = "INSERT INTO tbl_detail_order(order_id, product_id, price, sale, quantity)
                    SELECT
                        MAX(tbl_order.id),
                        tbl_product.id,
                        tbl_product.price,
                        tbl_product.sale,
                        :quantity
                    FROM
                        tbl_order,
                        tbl_product
                    WHERE
                        tbl_product.id = :product_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":product_id", $product_id);
            $pre->bindParam(":quantity", $quantity);

            return $pre->execute();
        }

        // protected function getMaxOrderId(){
        //     $sql = "SELECT
        //                 max.orderid,
        //                 tbl_product.name,
        //                 tbl_product.price,
        //                 tbl_product.sale
        //             FROM
        //                 tbl_product,
        //                 tbl_detail_order,
        //                 (SELECT MAX(tbl_detail_order.order_id) as orderid  FROM tbl_detail_order) as max
        //             WHERE
        //                 tbl_product.id = tbl_detail_order.product_id AND tbl_detail_order.order_id = max.orderid";

        //     $pre = $this->pdo->prepare($sql);

        //     $pre->execute();

        //     return $row = $pre->fetch(PDO::FETCH_ASSOC);  
        // }

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
            return $pre->execute();

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
            return $pre->execute();

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
            return $pre->execute();

        }

        //Update Status Customer to Purchased and Transfer to Admin
        protected function purchasedStatus ($customer_id) {

            $sql = "UPDATE tbl_care
                    SET user_id = 1, status = 2
                    WHERE customer_id = :customer_id
                        ";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":customer_id", $customer_id);
            return $pre->execute();

        }

        //Send Mail
        protected function sendMail($email, $name, $rows, $total){ 
            // Gửi mail cho khách hàng
            include_once 'Asset/PHPMailer/class.phpmailer.php';
            include_once 'Asset/PHPMailer/class.smtp.php';

            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                $mail->CharSet = 'utf8';
                //Server settings
                $mail->SMTPDebug = 2;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'datgauteddy@gmail.com';                     // SMTP username
                $mail->Password   = 'dat23397';             // Nhập pass mail mọi người vào nhé
                $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('datgauteddy@gmail.com', 'Thông báo!');
                $mail->addAddress($email, $name);     // Add a recipient

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Thông báo đơn hàng!';
                $mail->Body    = '
                <h2>Chào '.$name.',</h3><br> 
                <p>Đơn hàng của bạn đã được xác nhận!</p> <br>
                <h1 style="text-align: center">HÓA ĐƠN</h4><br><br>
                <table border="1px" rules="all" cellpadding="20px">
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td>Giá</td>
                        <td>Khuyến mãi</td>
                        <td>Số lượng</td>
                        <td>Thành tiền</td>                                    
                    </tr>
                '.$rows.'
                    <tr>
                        <td colspan="4">Tổng</td>
                        <td>'.number_format($total).'</td>
                    </tr>                          
                </table>';
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        //Hiện danh sách hóa đơn
        protected function getOrderHistory ($customer_id) {

            $sql = "SELECT
                        od.id,
                        userbuy.name AS 'Nhân viên bán',
                        usercare.name AS 'Nhân viên chăm sóc',
                        tbl_customer.name AS 'Tên khách hàng',
                        tbl_showroom.title,
                        od.total,
                        od.create_at
                    FROM
                        tbl_user AS userbuy
                    INNER JOIN tbl_order od ON
                        userbuy.id = od.user_id_buy
                    INNER JOIN tbl_user AS usercare
                    ON
                        usercare.id = od.user_id_care
                    INNER JOIN tbl_customer ON tbl_customer.id = od.customer_id AND od.customer_id = :customer_id
                    INNER JOIN tbl_showroom ON tbl_customer.showroom_id = tbl_showroom.showroom_id
                    ORDER BY
                        od.create_at
                    DESC";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":customer_id", $customer_id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }

        //Hiện danh sách chi tiết hóa đơn
        protected function getDetailOrder ($order_id) {

            $sql = "SELECT
                        *
                    FROM
                        tbl_detail_order,
                        tbl_product
                    WHERE
                        tbl_detail_order.product_id = tbl_product.id AND order_id = :order_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":order_id", $order_id);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

        }
    }
