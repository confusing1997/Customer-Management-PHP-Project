<?php 
	include_once '../../Config/myConfig.php';

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
	}


 ?>