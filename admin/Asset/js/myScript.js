$(document).on('click', '.delCus', function(e){
	e.preventDefault();
	var id = $(this).val();
	var check = confirm('Bạn có chắc chắn xóa ko?');
	if (check == true) {
		$.post('remove_customer.php', {id : id}, function(data){
			$('.notification').html(data);
			$('.table_Cus').load(' #datatable_listcustomer');
		});
	}
});

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