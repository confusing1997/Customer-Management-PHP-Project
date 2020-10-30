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

$('#key_search').keyup(function(data){

    var key = $(this).val();

    if (key.length > 5) { 

        $.post('Server/Customer/list_customer.php', { key : key }, function(data){

            $('#view_data').html(data);

        });
    }

});

