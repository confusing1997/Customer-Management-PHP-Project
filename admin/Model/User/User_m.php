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
	}


 ?>