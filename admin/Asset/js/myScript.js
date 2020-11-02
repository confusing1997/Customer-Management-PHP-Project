getCustomer();

//Hiện danh sách khách hàng
function getCustomer(){

	$.post('Server/Customer/list_customer.php', function(data){

		$('#view_data').html(data);
		
	});

}

//Xóa khách hàng
$(document).on('click', '.rm_customer', function(){

    var id = $(this).val();

    var check = confirm('Are you sure?');

    if (check == true) {

        $.post('Server/Customer/remove_customer.php', { id: id }, function(data){

            $('#notification').html(data);

            getCustomer();

        })
    }

});


//Thêm khách hàng bằng Modal
$(document).on('click', '.add_customer', function($name,$showroom_id, $user_id, $phone, $email){

    var name = $('#name').val();
    var showroom_id = $('#showroom_id').val();
    var user_id = $('#user_id').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('Server/Customer/add_customer.php', { name: name, showroom_id: showroom_id, user_id: user_id, phone: phone, email: email }, function(data){
        
        $('input[type="text"]').val('');
        $(".modal:visible").modal('toggle');
        $('#notification').html(data);
        getCustomer();

    })
    
});


//Tìm kiếm khách hàng
$('#key_search').keyup(function(data){

    var key = $(this).val();

    if (key.length > 2) { 

        $.post('Server/Customer/list_customer.php', { key : key }, function(data){

            $('#view_data').html(data);

        });
    }

});

getCustomerCare();
//Hiện danh sách khách hàng mình đang chăm sóc
function getCustomerCare(){
    var userId = $('#userId').val();

    $.post('Server/Customer/list_customercare.php',{ userId: userId }, function(data){

        $('#view_customer_care').html(data);
        
    });

}
