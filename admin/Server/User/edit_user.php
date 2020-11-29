<?php 

    include_once("../../Controller/User/User_c_ajax.php");

    $user = new User_c_ajax();

    

        $id = (int)$_POST['id'];
        $name = trim($_POST['name']);
        $avatar = trim($_POST['avatar']);
        $email = trim($_POST['email']);
        $address = trim($_POST['address']);
        $salary = trim($_POST['salary']);

        $num = count($user->checkEmailUser($email));

        if ($num == 0 && $name != '' && $avatar != '' && $email != '' && $address != '' && $salary != ''):

            if (filter_var($email, FILTER_VALIDATE_EMAIL)):

                $editUser = $user->editUser ($id, $name, $avatar, $email, $address, $salary);

                if ($editUser):
?>

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Update Successfully!</strong> 
                </div>

<?php 
                endif;

            else:
?>

                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Email is Invalid!</strong> 
                </div>

<?php
            endif;

        elseif ($name =='' || $avatar == '' || $email == '' || $address == '' || $salary ==''):
            
?>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Data must not be Empty!</strong> 
            </div>

<?php
        else:
?>

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Staff is already exists!</strong> 
            </div>

<?php
        endif;

?>
        

<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(1000).slideUp();
    })
</script>
        
        

         

    