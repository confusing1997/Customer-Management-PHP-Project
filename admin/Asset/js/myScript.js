
//Xóa nhân viên theo id
$(document).on('click', '.removeUser', function(){
    var id = $(this).val();
    var check = confirm('Bạn có chắc chắn muốn xóa nhân viên này không?');
    if (check == true) {
        $.post('remove_user.php', { id : id }, function(data){
            $('.notification').html(data);
            $('.table_User').load(' #datatable_listuser');
        });
    }
});

//Thêm nhân viên modal
$(document).on('click', '.add_user', function(){
    
    var name = $('#user_name').val();
    var showroom = $('#user_showroom').val(); 
    var email = $('#user_email').val();
    var address = $('#user_address').val();
    var salary = $('#user_salary').val();

    
    $.post('add_user.php', { 
        name : name, 
        showroom : showroom, 
        email : email, 
        address : address, 
        salary : salary }, 
        function(data){

            $(".modal:visible").modal('toggle');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            $('#notification').html(data);
            $(".table_User").load(' #datatable_listuser');

        })

});

//Sửa nhân viên theo modal
$(document).on('click', '.edit_user', function(e){

    e.preventDefault();

    var id = $(this).val();
    var name = $('#staff_name').val();
    var avatar = $('#avatar_user').val();
    var email = $('#staff_email').val();
    var address = $('#staff_address').val();
    var salary = $('#staff_salary').val();
    
    //console.log(id, name, avatar, email, address, salary);

    $.post('edit_user.php', {
        
        id : id,
        name : name,
        avatar : avatar,
        email : email,
        address : address,
        salary : salary

    }, function (data){

        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('#notification').html(data);
        $(".table_User").load(' #datatable_listuser');

    })


});

//Xóa khách hàng theo id
$(document).on('click', '.delCus', function(){
	var id = $(this).val();
	var check = confirm('Bạn có chắc chắn xóa không?');
	if (check == true) {
		$.post('remove_customer.php', {id : id}, function(data){
			$('.notification').html(data);
			$('.table_Cus').load(' #datatable_listcustomer');
		});
	}
});

//Thêm khách hàng modal
$(document).on('click', '.add_customer', function(){

    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('add_customer.php', { name: name, phone: phone, email: email }, function(data){
        
        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('#notification').html(data);
        $(".table").load(' #datatable_listcustomer_care_all');
        $(".table").load(' #datatable_listcustomer');
    })
});

//Điều chuyển khách hàng
$(document).on('click', '.transfer', function(){

    var user_id_get = $('#listUser').val();
    var customer_id = $(this).val();

    $.post('transfer_customer.php', { user_id_get: user_id_get, customer_id: customer_id}, function(data){
        
        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('#notification1').html(data);
        $(".table").load(' #datatable_listcustomer_care');
    })
});

