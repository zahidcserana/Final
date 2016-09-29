$(document).ready(function(){
	$.fn.editable.defaults.mode = 'inline';
	$('#stdid').editable();
	
	$('#stdname').editable({
		type:'text',
		url:'{{route('edit_name')}}',
		pk:1
	});
	
});