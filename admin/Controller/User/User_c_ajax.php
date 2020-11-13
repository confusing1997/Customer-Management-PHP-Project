<?php

    include_once("../../Model/User/User_m_ajax.php");

    class User_c_ajax extends User_m_ajax {

        private $user;

        function __construct()
        {
            $this->user = new User_m_ajax();
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

        public function editUser ($id, $name, $avatar, $email, $addres, $salary) {

            return $this->user->editUser ($id, $name, $avatar, $email, $addres, $salary);

        }

    }