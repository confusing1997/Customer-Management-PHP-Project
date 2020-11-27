<?php 
	include_once 'Config/myConfig.php';

	class User_m extends Connect {

		function __construct()
		{
			parent::__construct();
		}

		//Lấy ra toàn bộ dữ liệu nhân viên
		protected function getAllUser() {

			$sql = "SELECT * FROM tbl_user, tbl_showroom
					WHERE tbl_user.showroom_id = tbl_showroom.showroom_id";

			$pre = $this->pdo->prepare($sql);

			$pre->execute();

			$result = array();

			while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

				$result[] = $row;

			}

			return $result;

		}

		//Xóa nhân viên theo id
		protected function removeUser($id) {

			$sql = "DELETE FROM tbl_user WHERE id = :id";

			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(":id", $id);

			return $pre->execute();

		}

		//Tìm kiếm nhân viên theo tên và SĐT
		protected function searchUserAsEmailAndName($key) {

			$sql = "SELECT *
					FROM tbl_user, tbl_showroom
					WHERE tbl_user.showroom_id = tbl_showroom.showroom_id 
						AND CONCAT(tbl_user.email, tbl_user.name) LIKE :key";

			$pre = $this->pdo->prepare($sql);
			
			$pre->bindValue(":key", '%'.$key.'%');

			$pre->execute();

			$result = array();

			while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

				$result[] = $row;

			}

			return $result;

		}

		//Lấy ra thông tin của showroom
		protected function getInfoAboutShowroom() {

			$sql = "SELECT * FROM tbl_showroom";

			$pre = $this->pdo->prepare($sql);

			$pre->execute();

			$result = array();

			while($row = $pre->fetch(PDO::FETCH_ASSOC)) {

				$result[] = $row;

			}

			return $result;

		}

		//Thêm dữ liệu của nhân viên vào tbl_user
		protected function addIntoUser($name, $showroom_id, $email, $addres, $salary) {

			$sql = "INSERT INTO tbl_user (name, showroom_id, email, addres, salary)
					VALUES (:name, :showroom_id, :email, :addres, :salary)";
			
			$pre = $this->pdo->prepare($sql); 

			$pre->bindParam(":name", $name);
			$pre->bindParam(":showroom_id", $showroom_id);
			$pre->bindParam(":email", $email);
			$pre->bindParam(":addres", $addres);
			$pre->bindParam(":salary", $salary);

			return $pre->execute();

		}

		//Kiểm tra trùng email của bảng user
		protected function checkEmailUser($email) {

			$sql = "SELECT * FROM tbl_user WHERE email = :email";

			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(":email", $email);

			$pre->execute();

			$result = array();

			while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {

				$result[] = $row;

			}

			return $result;

		}

		//Chỉnh sửa thông tin khách hàng
		protected function editUser ($id, $name, $avatar, $email, $addres, $salary) {

			$sql = "UPDATE tbl_user 
					SET name = :name, avatar = :avatar ,email = :email ,addres = :addres, salary = :salary
					WHERE id = :id";
			
			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(':id', $id);
			$pre->bindParam(':name', $name);
			$pre->bindParam(':avatar', $avatar);
			$pre->bindParam(':addres', $addres);
			$pre->bindParam(':email', $email);
			$pre->bindParam(':salary', $salary);

			return $pre->execute();
		}

		//Lấy thông tin lương thưởng của nhân viên
		protected function getBonus($user_id) {

			$sql = "SELECT
					    tbl_bonus.order_id,
					    usersell.name as 'Seller',
					    usercare.name as 'User Care',					    
					    tbl_customer.name 'Customer',
					    tbl_order.total,
					    tbl_bonus.bonus,
					    tbl_bonus.create_at
					FROM
					    tbl_bonus,
					    tbl_user,
					    tbl_user as usersell,
					    tbl_user as usercare,
					    tbl_order,
					    tbl_customer
					WHERE
					    tbl_bonus.user_id = tbl_user.id AND tbl_bonus.order_id = tbl_order.id AND tbl_order.user_id_buy = usersell.id AND tbl_order.user_id_care = usercare.id AND tbl_order.customer_id = tbl_customer.id AND tbl_bonus.user_id = :user_id";

			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(":user_id", $user_id);

			$pre->execute();

			$result = array();

			while($row = $pre->fetch(PDO::FETCH_ASSOC)) {

				$result[] = $row;

			}

			return $result;

		}

	}


 ?>