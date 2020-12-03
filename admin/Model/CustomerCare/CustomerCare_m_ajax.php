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
        protected function addUserGet($user_id_get, $customer_id, $status){
            $sql = "INSERT INTO tbl_care(user_id, customer_id, status) VALUES (:user_id_get, :customer_id, :status)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':user_id_get', $user_id_get);

            $pre->bindParam(':customer_id', $customer_id);
            
            $pre->bindParam(':status', $status);

            return $pre->execute();
        }

        //Hiện danh sách noti
        protected function getNoti () {

            $sql = "
                SELECT
                    tbl_customer.phone,
                    tbl_customer.name AS 'Tên khách hàng',
                    usermove.name AS 'Nhân viên chuyển',
                    userget.name AS 'Nhân viên nhận',
                    tnt.user_id_get,
                    tnt.status,
                    tnt.create_at
                FROM
                    tbl_user AS usermove    
                INNER JOIN tbl_transfer_noti tnt
                ON
                    usermove.id = tnt.user_id_move
                INNER JOIN tbl_user AS userget
                ON
                    userget.id = tnt.user_id_get
                INNER JOIN tbl_customer
                ON
                    tbl_customer.id = tnt.customer_id";

            $pre = $this->pdo->prepare($sql);

            $pre->execute();

            $result = array();

            while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

                $result[] = $row;

            }

            return $result;

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
        protected function addNoti($user_id_move, $customer_id, $status, $user_id_get){
            $sql = "INSERT INTO tbl_transfer_noti(user_id_move, customer_id, status, user_id_get) VALUES (:user_id_move, :customer_id, :status, :user_id_get)";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':user_id_get', $user_id_get);

            $pre->bindParam(':customer_id', $customer_id);

            $pre->bindParam(':status', $status);

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

        //Lấy thông tin trong bảng tbl_transfer_noti
        protected function getInfoNoti($customer_id) {

            $sql = "SELECT * FROM tbl_transfer_noti
                    WHERE customer_id = :customer_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':customer_id', $customer_id);

            $pre->execute();

            return $row = $pre->fetch(PDO::FETCH_ASSOC);
        }

        //Send Mail
        protected function sendMail($email, $nameGet, $nameMove, $idGet){
            

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
                $mail->addAddress($email, $nameGet);     // Add a recipient

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Yêu cầu điều chuyển!';
                $mail->Body    = '
                    Bạn nhận được 1 yêu cầu điều chuyển khách hàng từ '.$nameMove.'
                    <br>Bấm vào nút dưới đây để xem
                    <br><br><a href="http://localhost/Customer-Management-PHP-Project/admin/dashboard.php?page=get_transfer_noti&id='.$idGet.'">
                        <button type="button" style="background-color: #4CAF50; 
                            border: none;
                            color: white;
                            padding: 15px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;">View</button>
                    </a>
                ';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        //Lấy thông tin User theo id
        protected function getUserId($user_id) {

            $sql = "SELECT * FROM tbl_user WHERE id = :user_id";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(":user_id", $user_id);

            $pre->execute();

            return $row = $pre->fetch(PDO::FETCH_ASSOC);

        }

        //Update Status Customer to New and Transfer to User want to get
        protected function newCare ($user_id, $customer_id) {

            $sql = "UPDATE tbl_care
                    SET user_id = :user_id, status = 3, create_at = current_timestamp
                    WHERE customer_id = :customer_id
                        ";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(":user_id", $user_id);
            $pre->bindParam(":customer_id", $customer_id);
            return $pre->execute();

        }
    }

