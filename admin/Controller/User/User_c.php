<?php

    include_once("Model/User/User_m.php");

    class User_c extends User_m {

        private $user;

        function __construct()
        {
            $this->user = new User_m();
        }

        public function User() {
            $user = $this->user->getAllUser();
            $showroom = $this->user->getInfoAboutShowroom();
            include_once 'View/User/list_all_user.php';
        }

        public function removeUser($id) {

            return $this->user->removeUser($id);

        }

        public function checkEmailUser($email) {

            return $this->user->checkEmailUser($email);

        }

        public function addIntoUser($name, $showroom_id, $email, $addres, $salary) {

            return $this->user->addIntoUser($name, $showroom_id, $email, $addres, $salary);

        }

    }