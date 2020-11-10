<?php 


    include_once("Controller/User/User_c.php");

    $user = new User_c(); 
    
        $name = $_POST['name'];
        $showroom = $_POST['showroom'];
        $address = $_POST['address']; 
        $email = $_POST['email'];
        $salary = $_POST['salary'];

        $num = count($user->checkEmailUser($email));

        if ($num == 0 && $name != '' && $showroom != '' && $email != '' && $address != '' && $salary != '') :

        $addUser = $user->addIntoUser($name, $showroom, $email, $address, $salary);

            if ($addUser !== false) :

?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thêm mới thành công!</strong> 
            </div>
<?php
            else :

                echo "Thêm mới thất bại";

            endif;

        elseif ($name == ''  && $email == '' && $address == '' && $salary == ''):
?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Dữ liệu nhập không được trống!</strong> 
            </div>
<?php
        else:
?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Nhân viên đã tồn tại!</strong> 
            </div>

<?php
        endif;

?>

<script type="text/javascript">
//Hiện thông báo trong 2 giây 
    $(document).ready(function(){
        $(".alert").delay(2000).slideUp();
    })
</script>
   