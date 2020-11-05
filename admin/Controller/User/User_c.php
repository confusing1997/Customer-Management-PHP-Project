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
            include_once 'View/User/list_all_user.php';
        }
    }