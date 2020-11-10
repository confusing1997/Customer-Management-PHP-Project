<?php 

    include_once("Controller/User/User_c.php");

    $user = new User_c();

    //if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['avatar']) && isset($_POST['email'])
        //&& isset($_POST['address']) && isset($_POST['salary'])) :

        $id = (int)$_POST['id'];
        $name = $_POST['name'];
        $avatar = $_POST['avatar'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        //$num = count($user->checkEmailUser($email));

        //if ($num == 0) :

        $editUser = $user->editUser ($id, $name, $avatar, $email, $addres, $salary);

        if ($editUser): 
            echo 2;
        endif;

        //endif;

    //endif;  

    