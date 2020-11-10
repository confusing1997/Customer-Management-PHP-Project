//Xóa khách hàng theo id
$(document).on('click', '.delCus', function(){
	var id = $(this).val();
	var check = confirm('Bạn có chắc chắn xóa không?');
	if (check == true) {
		$.post('remove_customer.php', {id : id}, function(data){
			$('.notification').html(data);
			$('.display').load(' #datatable_listcustomer');
            var table = $('#datatable_listcustomer').dataTable().api();
            table.destroy();
            table.draw();
            
		});
	}
});

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

//Thêm khác hàng modal
$(document).on('click', '.add_customer', function(){

    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('add_customer.php', { name: name, phone: phone, email: email }, function(data){
        
        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('.notification').html(data);
        $(".table").load(' #datatable_listcustomer_care_all');
        $(".table").load(' #datatable_listcustomer');
    })
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
            $('.notification').html(data);
            $(".table_User").load(' #datatable_listuser');

        })

});

$(document).on('click', '.transfer', function(){

    var user_id_get = $('#listUser').val();
    var customer_id = $(this).val();

    $.post('transfer_customer.php', { user_id_get: user_id_get, customer_id: customer_id}, function(data){
        
        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('.notification1').html(data);
        $(".table").load(' #datatable_listcustomer_care');
    })
});

$(document).on('click', '.edit_customer', function(){

    var customer_id = $(this).val();
    var showroom_id = $('#showroom').val();
    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('edit_customer.php', { customer_id : customer_id, showroom_id : showroom_id, name : name, phone : phone, email : email}, function(data){
        
        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('.notification').html(data);
        $(".table").load(' #datatable_listcustomer');
    })
});



