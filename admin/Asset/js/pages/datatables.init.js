$(document).ready(function(){
	$("#datatable_listuser").dataTable({
        "responsive": false
    });

    $("#datatable_listcustomer").dataTable({
        "responsive": false,
    });

    $("#datatable_listcustomer_care").dataTable({
        "responsive": false,
    });

    $("#datatable_listhistory").dataTable({
        "responsive": false,
        "order": [[ 4, "desc" ]],
    }); 

    $("#datatable_order1").dataTable({
        "responsive": false,
        "order": [[ 0, "asc" ]],
    });

    $("#list_bonus").dataTable({
        "responsive": false,
        "order": [[ 6, "desc" ]],
    });

    $("#datatable_list_purchased").dataTable({
        "responsive": false,
        "order": [[ 6, "asc" ]],
    });
    
});