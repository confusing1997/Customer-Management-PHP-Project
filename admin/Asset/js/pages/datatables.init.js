$(document).ready(function(){
	$("#datatable_listcustomer").DataTable({
	});

	var dtable = $(".datatable_listcustomer").dataTable().api();

// Grab the datatables input box and alter how it is bound to events
$(".dataTables_filter input")
    .unbind() // Unbind previous default bindings
    .bind("input", function(e) { // Bind our desired behavior
        // If the length is 3 or more characters, or the user pressed ENTER, search
        if(this.value.length >= 3 || e.keyCode == 13) {
            // Call the API search function
            dtable.search(this.value).draw();
        }
        // Ensure we clear the search if they backspace far enough
        if(this.value == "") {
            dtable.search("").draw();
        }
        return;
    });
});




