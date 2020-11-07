$(document).on('click', '.delCus', function(e){
	
	var id = $(this).val();
	var check = confirm('Bạn có chắc chắn xóa ko?');
	if (check == true) {
		$.post('Server/Customer/remove_customer.php', {id : id}, function(data){
			$('.notification').html(data);
			$('.table_Cus').load(' #datatable_listcustomer');
		});
	}
});