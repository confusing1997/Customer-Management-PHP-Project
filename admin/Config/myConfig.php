<?php 

	class Connect{
		private $user = "root";
		private $pass = "";
		private $dns = "mysql:host=localhost;dbname=customer_care";

		protected $pdo = null;
		function __construct(){
			try {
				$this->pdo = new PDO($this->dns, $this->user, $this->pass);
				$this->pdo->query("SET NAMES utf8");

			} catch (PDOException $e) {
				echo $e->getMessage();
				exit();
			}
		}

	}

 ?>