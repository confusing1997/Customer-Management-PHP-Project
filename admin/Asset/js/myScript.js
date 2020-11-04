
//Hiện danh sách khách hàng
getCustomer();
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

            $('.notification').html(data);

            getCustomer();

        })
    }

});


//Thêm khách hàng bằng Modal
$(document).on('click', '.add_customer', function(){

    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('Server/Customer/add_customer.php', { name: name, phone: phone, email: email }, function(data){
        
        $('input[type="text"]').val('');
        $(".modal:visible").modal('toggle');
        $('.notification').html(data);
        getCustomer();

    })
    
});

//Sửa khách hàng bằng Modal
$(document).on('click','.edit_customer', function(){

    var id = $(this).val();
    var idModal = '#edit_customer' + id;
    var name = $(idModal + ' .name_customer').val();
    var phone = $(idModal + ' .phone_customer').val();
    var email = $(idModal + ' .email_customer').val();

    $.post('Server/Customer/edit_customer.php', {id: id, name: name, phone: phone, email: email }, function(data){
            
        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('.notification').html(data);
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


//Hiện danh sách khách hàng mình đang chăm sóc
getCustomerCare();
function getCustomerCare(){

    $.post('Server/CustomerCare/list_customer_care.php', function(data){

        $('#view_customer_care').html(data);
        
    });

}

//Hiện danh sách toàn bộ khách hàng đang chăm sóc
getCustomerCareAll();
function getCustomerCareAll(){
    
    $.post('Server/CustomerCare/list_customer_care_all.php', function(data){

        $('#view_customer_care_all').html(data);
        
    });

}

//Tìm kiếm khách hàng đang được chăm sóc của 1 nhân viên
$('#key_search1').keyup(function(data){

    var key = $(this).val();

    if (key.length > 2) { 

        $.post('Server/CustomerCare/list_customer_care.php', { key : key }, function(data){

            $('#view_customer_care').html(data);

        });
    }

});

//Tìm kiếm khách hàng đang chăm sóc của công ty
$('#key_search2').keyup(function(data){

    var key = $(this).val();

    if (key.length > 2) { 

        $.post('Server/CustomerCare/list_customer_care_all.php', { key : key }, function(data){

            $('#view_customer_care_all').html(data);

        });
    }

});


//Hiện danh sách toàn bộ nhân viên
getAllUser();
function getAllUser(){
    
    $.post('Server/User/list_all_user.php', function(data){

        $('#view_all_user').html(data);
        
    });

}

//Tìm dữ liệu nhân viên của công ty theo tên và SĐT
$('#key_search_user').keyup(function(data){

    var key = $(this).val();

    if (key.length > 2) { 

        $.post('Server/User/list_all_user.php', { key : key }, function(data){

            $('#view_all_user').html(data);

        });
    }

});

