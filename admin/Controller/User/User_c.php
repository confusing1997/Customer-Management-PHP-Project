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

        public function editUser ($id, $name, $avatar, $email, $addres, $salary) {

            return $this->user->editUser ($id, $name, $avatar, $email, $addres, $salary);

        }

        public function Bonus() {
            if (isset($_SESSION['id'])) {
                $user_id = (int)$_SESSION['id'];
            }
            $user = $this->user->getBonus($user_id);
            include_once 'View/User/list_bonus.php';
        }

        public function Feedback(){
            if (isset($_SESSION['id'])) {
                $user_id = (int)$_SESSION['id'];
            }
            $info = $this->user->getUserId($user_id);
            $user = $this->user->getFeedback($user_id, 3);
            $avg = $this->user->getAVG($user_id);
            $count = $this->user->countFeedback($user_id);

            include_once 'View/User/feedback.php';
        }

    }