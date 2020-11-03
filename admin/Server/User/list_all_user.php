<?php

     include_once("../../Controller/User/User_c.php");

     $user = new User_c(); 

     if (isset($_POST['key'])) {

        $key = $_POST['key'];

        $result = $user->searchUserAsEmailAndName($key);

     } else {

        $result = $user->getAllUser();

     }

     $count_user = 0;
     foreach ($result as $valueUser) {
        $count_user++;
?>

        <tr>
            <td><?= $count_user; ?></td>
            <td><?= $valueUser['name'] ?></td>
            <td><?= $valueUser['title'] ?></td>
            <td><?= $valueUser['email'] ?></td>
            <td>
                <button class="btn btn-primary">Sửa</button>
                <button class="btn btn-danger">Xóa</button>
            </td>    
        </tr>

<?php
     }
?>