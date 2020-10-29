getAll();

function getAll(){

	$.post('Server/User/list_user.php', function(data){
		$('#view_data').html(data);
	});

}