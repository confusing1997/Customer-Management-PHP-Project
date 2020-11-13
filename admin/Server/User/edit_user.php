<?php 

    include_once("../../Controller/User/User_c_ajax.php");

    $user = new User_c_ajax();

    

        $id = (int)$_POST['id'];
        $name = trim($_POST['name']);
        $avatar = trim($_POST['avatar']);
        $email = trim($_POST['email']);
        $address = trim($_POST['address']);
        $salary = trim($_POST['salary']);

        $editUser = $user->editUser ($id, $name, $avatar, $email, $address, $salary);

        if ($editUser) :
?>

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Cập nhật thành công!!</strong> 
            </div>

<?php 

        endif;
?>

<script type="text/javascript">
    //Hiện thông báo .. giây xong ẩn
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    })
</script>
        
        

         

    