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
        $(".loadava1").load(" #ava");

    });
   
});