$("#form-ava").on('change','#ava-img',(function(e) {
    e.preventDefault();
    var size = this.files[0].size;
    var formData = new FormData($('form#form-ava')[0]);
    var fileExtension = ['jpeg', 'jpg', 'png'];
    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) != -1) {
        if (size < 1048576) {
            $.ajax({
            url: "Server/Customer/preview.php",
            type: "POST",
            data:  formData,
            contentType: false,
            cache: false,
            processData:false,
            beforeSend : function(){

                $("#err").fadeOut();
            },
            success: function(data){

                $("#avatar_cus").html(data).fadeIn();
                console.log(data);
                $("#form-ava")[0].reset(); 
            },
            error: function(e){

                $("#err").html(e).fadeIn();
            }
            });
        }else{
            alert('Kích thước ảnh tối đa là 1mb!');
        }  
    }else{
        alert('Không đúng định dạng ảnh!');
   }    
}));

$(document).on('click', '.save', function(){
    var name = $('#ava_val').val();
    $.post('Server/Customer/avatar.php', { name : name }, function(data){
        $("#avatar_cus").load(" #avatar");
        $("#ava_cus").load(" #load_ava");
        $('.loadava1').load(' .loadava1');
    });
});

$(document).on('keyup', '#pass_now', function(){
    var pass = $('#pass_now').val();
    var pass_new = $('#pass_new').val();
    var confirm_pass = $('#confirm_pass').val();
    var pattern = new RegExp('[A-Z]');
    var pattern1 = new RegExp('[a-z]');
    var uppercase = pass_new.match(pattern);
    var lowercase = pass_new.match(pattern1);
    if (pass.length > 5) {
        $('#error').attr("style","display: none");
        $('#pass_now').attr("style","border-color: #ced4da; width: 300px");
        $('#update').removeClass('btn-disable');
        if (5 < pass_new.length < 15 && uppercase && lowercase) {
            if (pass_new === confirm_pass) {
                $('#update').removeClass('btn-disable');
            }else{
                $('#update').addClass('btn-disable');
            }
        }else{
            $('#update').addClass('btn-disable');
        }
    }else{
        $('#error').attr("style","display: block");
        $('#pass_now').attr("style","border-color: red; width: 300px");    
        $('#error').html('Mật khẩu phải gồm ít nhất 6 kí tự');
        $('#error').addClass('error');
        $('#update').addClass('btn-disable'); 
    }
});

$(document).on('keydown', '#pass_now', function(){
    var pass = $('#pass_now').val();
    var pass_new = $('#pass_new').val();
    var confirm_pass = $('#confirm_pass').val();
    var pattern = new RegExp('[A-Z]');
    var pattern1 = new RegExp('[a-z]');
    var uppercase = pass_new.match(pattern);
    var lowercase = pass_new.match(pattern1);
    if (pass.length > 5) {
        $('#error').attr("style","display: none");
        $('#pass_now').attr("style","border-color: #ced4da; width: 300px");
        $('#update').removeClass('btn-disable');
        if (5 < pass_new.length < 15 && uppercase && lowercase) {
            if (pass_new === confirm_pass) {
                $('#update').removeClass('btn-disable');
            }else{
                $('#update').addClass('btn-disable');
            }
        }else{
            $('#update').addClass('btn-disable');
        }
    }else{
        $('#error').attr("style","display: block");
        $('#pass_now').attr("style","border-color: red; width: 300px");    
        $('#error').html('Mật khẩu phải gồm ít nhất 6 kí tự');
        $('#error').addClass('error');
        $('#update').addClass('btn-disable'); 
    }
});

$(document).on('keyup', '#pass_new', function(){
    var pass_new = $('#pass_new').val();
    var confirm_pass = $('#confirm_pass').val();
    var pattern = new RegExp('[A-Z]');
    var pattern1 = new RegExp('[a-z]');
    var uppercase = pass_new.match(pattern);
    var lowercase = pass_new.match(pattern1);
    if ( 5 < pass_new.length < 15 && uppercase && lowercase) {
        $('#error1').attr("style","display: none");
        $('#pass_new').attr("style","border-color: #ced4da; width: 300px");
        $('#update').removeClass('btn-disable');
        if (pass_new === confirm_pass) {
            $('#update').removeClass('btn-disable');
        }else{
            $('#update').addClass('btn-disable');
            $('#error2').attr("style","display: block; width: 300px;");
            $('#confirm_pass').attr("style","border-color: red; width: 300px");
            $('#error2').html('Mật khẩu xác nhận không trùng khớp!');
            $('#error2').addClass('error');
        }
    }else{
        $('#error1').attr("style","display: block; width: 300px;");
        $('#pass_new').attr("style","border-color: red; width: 300px");
        $('#error1').html('Mật khẩu phải có 6-16 kí tự, bảo gồm 1 chữ in hoa và 1 chữ in thường');
        $('#error1').addClass('error');
        $('#update').addClass('btn-disable');
    }
});

$(document).on('keydown', '#pass_new', function(){
    var pass_new = $('#pass_new').val();
    var confirm_pass = $('#confirm_pass').val();
    var pattern = new RegExp('[A-Z]');
    var pattern1 = new RegExp('[a-z]');
    var uppercase = pass_new.match(pattern);
    var lowercase = pass_new.match(pattern1);
    if ( 5 < pass_new.length < 15 && uppercase && lowercase) {
        $('#error1').attr("style","display: none");
        $('#pass_new').attr("style","border-color: #ced4da; width: 300px");
        $('#update').removeClass('btn-disable');
        if (pass_new === confirm_pass) {
            $('#update').removeClass('btn-disable');
        }else{
            $('#update').addClass('btn-disable');
            $('#error2').attr("style","display: block; width: 300px;");
            $('#confirm_pass').attr("style","border-color: red; width: 300px");
            $('#error2').html('Mật khẩu xác nhận không trùng khớp!');
            $('#error2').addClass('error');
        }
    }else{
        $('#error1').attr("style","display: block; width: 300px;");
        $('#pass_new').attr("style","border-color: red; width: 300px");
        $('#error1').html('Mật khẩu phải có 6-16 kí tự, bảo gồm 1 chữ in hoa và 1 chữ in thường');
        $('#error1').addClass('error');
        $('#update').addClass('btn-disable');
    }
});

$(document).on('keyup', '#confirm_pass', function(){
    var pass = $('#pass_now').val();
    var pass_new = $('#pass_new').val();
    var confirm_pass = $('#confirm_pass').val();
    var pattern = new RegExp('[A-Z]');
    var pattern1 = new RegExp('[a-z]');
    var uppercase = pass_new.match(pattern);
    var lowercase = pass_new.match(pattern1);
    if (pass_new === confirm_pass) {
        $('#error2').attr("style","display: none");
        $('#confirm_pass').attr("style","border-color: #ced4da; width: 300px");
        if (5 < pass_new.length < 15 && uppercase && lowercase) {
            if (pass.length > 5) {
                $('#update').removeClass('btn-disable');
            }else{
                $('#update').addClass('btn-disable');
            }
        }else{
            $('#update').addClass('btn-disable');
        } 
    }else{
        $('#update').addClass('btn-disable');
        $('#error2').attr("style","display: block; width: 300px;");
        $('#confirm_pass').attr("style","border-color: red; width: 300px");
        $('#error2').html('Mật khẩu xác nhận không trùng khớp!');
        $('#error2').addClass('error');
    }
});

$(document).on('keydown', '#confirm_pass', function(){
    var pass = $('#pass_now').val();
    var pass_new = $('#pass_new').val();
    var confirm_pass = $('#confirm_pass').val();
    var pattern = new RegExp('[A-Z]');
    var pattern1 = new RegExp('[a-z]');
    var uppercase = pass_new.match(pattern);
    var lowercase = pass_new.match(pattern1);
    if (pass_new === confirm_pass) {
        $('#error2').attr("style","display: none");
        $('#confirm_pass').attr("style","border-color: #ced4da; width: 300px");
        if (5 < pass_new.length < 15 && uppercase && lowercase) {
            if (pass.length > 5) {
                $('#update').removeClass('btn-disable');
            }else{
                $('#update').addClass('btn-disable');
            }
        }else{
            $('#update').addClass('btn-disable');
        } 
    }else{
        $('#update').addClass('btn-disable');
        $('#error2').attr("style","display: block; width: 300px;");
        $('#confirm_pass').attr("style","border-color: red; width: 300px");
        $('#error2').html('Mật khẩu xác nhận không trùng khớp!');
        $('#error2').addClass('error');
    }
});

$(document).on('click', '#update', function(){
    var pass = $('#pass_now').val();
    var pass_new = $('#pass_new').val();
    var confirm_pass = $('#confirm_pass').val();
    var pattern = new RegExp('[A-Z]');
    var pattern1 = new RegExp('[a-z]');
    var uppercase = pass_new.match(pattern);
    var lowercase = pass_new.match(pattern1);
    if (pass.length > 5) {
        if (5 < pass_new.length < 15 && uppercase && lowercase) {
            if (pass_new === confirm_pass) {

                $.post('Server/Customer/password.php', { pass_new : pass_new, pass : pass }, function(data){
                    $('#notification').html(data);
                    $('.loadava1').load(' .loadava1');
                });
            }else{
                alert('Mật khẩu xác nhận không khớp!');
            }
        }else{
            alert('Mật khẩu không hợp lệ!');
        }
    }else{
        alert('Mật khẩu không hợp lệ!');
    }
})
