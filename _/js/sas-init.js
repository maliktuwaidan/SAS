$(document).ready(function() {
	// initiate smua data table yang ada di backend
	$('#example').dataTable();
	
	$("#myform").validate({
	  rules: {
		field: "required"
	  }, debug:true
	});
	
} );