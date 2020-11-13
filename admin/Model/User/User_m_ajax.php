<?php 
	include_once '../../Config/myConfig.php';

	class User_m_ajax extends Connect {

		function __construct()
		{
			parent::__construct();
		}

		//Xóa nhân viên theo id
		protected function removeUser($id) {

			$sql = "DELETE FROM tbl_user WHERE id = :id";

			$pre = $this->pdo->prepare($sql);

			$pre->bindParam(":id", $id);

			return $pre->execute();

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
	}
 ?>