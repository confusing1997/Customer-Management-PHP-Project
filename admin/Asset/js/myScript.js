
//Xóa nhân viên theo id
$(document).on('click', '.removeUser', function(){
    var id = $(this).val();
    var $button = $(this);
    var table = $('#datatable_listuser').DataTable();
    var check = confirm('Bạn có chắc chắn muốn xóa nhân viên này không?');
    if (check == true) {
        $.post('Server/User/remove_user.php', { id : id }, function(data){
            $('.notification').html(data);
            table.row($button.parents('tr')).remove().draw();
            // $('.table_User').load(' #datatable_listuser');

        });
    };
});

//Thêm khác hàng modal
$(document).on('click', '.add_customer', function(){

    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('Server/Customer/add_customer.php', { name: name, phone: phone, email: email }, function(data){
        
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

    
    $.post('Server/User/add_user.php', { 
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

//Sửa nhân viên theo modal
$(document).on('click', '.edit_user', function(e){

    e.preventDefault();

    var id = $(this).val();
    var name = $('#staff_name' + id).val();
    var avatar = $('#avatar_user'+ id).val();
    var email = $('#staff_email'+ id).val();
    var address = $('#staff_address'+ id).val();
    var salary = $('#staff_salary'+ id).val();

    $.post('Server/User/edit_user.php', {
        
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
        $('.notification').html(data);
        $(".table_User").load(' #datatable_listuser');

    })


});

//Xóa khách hàng theo id
$(document).on('click', '.delCus', function(){
	var id = $(this).val();
    var $button = $(this);
    var table = $('#datatable_listcustomer').DataTable();
	var check = confirm('Are you sure want to Delete this Customer?');
	if (check == true) {
		$.post('Server/Customer/remove_customer.php', {id : id}, function(data){
			$('.notification').html(data);
            table.row($button.parents('tr')).remove().draw();
			// $('.table_Cus').load(' #datatable_listcustomer');
		});
	}
});

//Thêm khách hàng modal
$(document).on('click', '.add_customer', function(){

    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    $.post('Server/User/add_customer.php', { name: name, phone: phone, email: email }, function(data){
        
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

    $.post('Server/CustomerCare/transfer_customer.php', { user_id_get: user_id_get, customer_id: customer_id}, function(){
        // $('.notification1').html();
        window.location.reload();
    })
});

$(document).on('click', '.edit_customer', function(){

    var customer_id = $(this).val();
    var name = $('#name' + customer_id).val();
    var phone = $('#phone' + customer_id).val();
    var email = $('#email' + customer_id).val();

    $.post('Server/Customer/edit_customer.php', { customer_id : customer_id, name : name, phone : phone, email : email}, function(data){
        
        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('.notification').html(data);
        $(".table").load(' #datatable_listcustomer');
    })
});

//Thêm nội dung chăm sóc của khách hàng mình đang chăm sóc
$(document).on('click', '.add_content', function(e){
    e.preventDefault();
    var customer_id = $(this).val();
    var content = CKEDITOR.instances['content'].getData();
    $.post('Server/CustomerCare/add_content.php', { customer_id: customer_id, content: content}, function(data){
        $('.notification').html(data);
        $(".table-content").load(' #data_content');
        //$('.modal-body').scrollTop(0);
    })
});

//Thêm nội dung chăm sóc của khách hàng
$(document).on('click', '.add_content_2nd', function(e){
    e.preventDefault();
    var customer_id = $(this).val();
    var content = CKEDITOR.instances['update_content' + customer_id].getData();
    console.log(customer_id,content);
    $.post('Server/CustomerCare/add_content.php', { customer_id: customer_id, content: content}, function(data){
        $('.notificationModal').html(data);
        $(".table_content_all"+customer_id).load(' #data-care');
        $('.modal').find('textarea').val('');
        $('.modal-body').scrollTop(0);
    })
});

//Add product Modal
$(document).on('click', '.add_product', function(){

    var name = $('#product_name').val();
    var price = $('#product_cost').val();
    var description = $('#product_description').val();

    $.post('Server/Product/add_product.php', {

        name : name,
        price : price,
        description : description }, 
        
        function(data){

        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $('.notification').html(data);
        $(".table_product").load(' #datatable_list_product');

    })

});

//Remove a product from tbl_product
$(document).on('click', '.remove_Product', function(){

    var id = $(this).val();
    var check = confirm('Are you sure want to Delete this Product?');

    if (check == true) {

        $.post('Server/Product/remove_product.php', 
        
            { id : id }, 
        
            function(data){

                $(".notification").html(data);
                $(".table_product").load(" #datatable_list_product");

            });

    }

});


//Modify a product from tbl_product
$(document).on('click', ' .modify_product', function(){
//e.preventDefault();
    var product_id = $(this).val();
    var name = $("#product_name" + product_id).val();
    var price = $("#product_price" + product_id).val();
    var description = $("#product_description" + product_id).val();

    $.post("Server/Product/modify_product.php", { 

        product_id : product_id,
        name : name,
        price : price,
        description : description

     }, 
    
    function(data){

        $(".modal:visible").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $(".notification").html(data);
        $(".table_product").load(" #datatable_list_product");

    })
});


//Thêm sản phẩm vào bảng hóa đơn tạm thời
/*$(document).on('click', '.btn_add', function(e){
    e.preventDefault();

    var id = $(this).val();
    var qty = $('#qty_' + id).val();

    $.post('Server/Product/add_order.php', { id : id, qty : qty }, function(data){
        
        $('#view_product_select').html(data);
    });
});*/

function updateCart(id){
    var qty = $("#qty_" + id).val();
    if (qty > 0) {
        $.ajax({
            url: 'Server/Product/add_order.php',
            type: 'POST',
            dataType: 'html',
            data: {id : id, qty : qty},

            success : function(){
                $(".order2").load(" #datatable_order2");
                $(".sum-price").load(" #total");
            },

            error : function(){
                console.log('error');
            }

        })
    }else{
        
    }
}

getNoti();
function getNoti(){

    $.post('Server/User/getNoti.php', function(data){
        $('#getNoti').html(data);
    });

}

//Remove a product from tbl_product
$(document).on('click', '.btn-accept', function(){

    var customer_id = $(this).val();
    var check = confirm('Are you sure you want to Accept this request?');

    if (check == true){
        $.post('Server/CustomerCare/accept_transfer.php', 
        
            { customer_id : customer_id }, 
        
            function(data){

                $(".notification").html(data);
                $(".table-noti").load(" #table-noti");

            });
    }

});

//Remove a product from tbl_product
$(document).on('click', '.btn-decline', function(){

    var customer_id = $(this).val();
    var check = confirm('Are you sure you want to Decline this request?');

    if (check == true) {

        $.post('Server/CustomerCare/decline_transfer.php', 
        
            { customer_id : customer_id }, 
        
            function(data){

                $(".notification").html(data);
                $(".table-noti").load(" #table-noti");
                $(".noti_title").load(" #noti_title");

            });

    }

});

$(document).on('click', '.del_cart', function(){

    var id = $(this).val();

    $.post('Server/Product/del_cart.php', {id : id}, function(data) {
        $(".notification").html(data);
        $(".order2").load(' #datatable_order2');
    });

});

$(document).on('click', '.btn_add_customer', function(){

    var customer_id = $(this).val();
    var $button = $(this);
    var table = $('#datatable_list_purchased').DataTable();
    $.post('Server/CustomerCare/add_customer_care.php', {customer_id : customer_id}, function(data) {
        $(".notification").html(data);        
        table.row($button.parents('tr')).remove().draw();
        // $(".purchased").load(' #datatable_list_purchased');
    });

});