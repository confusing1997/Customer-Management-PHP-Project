getCustomer();

function getCustomer(){

	$.post('Server/Customer/list_customer.php', function(data){

		$('#view_data').html(data);
		
	});

}

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

$(document).on('click', '.add_customer', function($name,$showroom_id, $phone, $email){

    var name = $('#name').val();
    var showroom_id = $('#showroom_id').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('Server/Customer/add_customer.php', { name: name,showroom_id: showroom_id, phone: phone, email: email }, function(data){
        
        $('input[type="text"]').val('');
        $(".modal:visible").modal('toggle');
        $('#notification').html(data);
        getCustomer();        

    })
    
});

$('#key_search').keyup(function(data){

    var key = $(this).val();

    if (key.length > 2) { 

        $.post('Server/Customer/list_customer.php', { key : key }, function(data){

            $('#view_data').html(data);

        });
    }

});

