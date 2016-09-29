<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap-editable.css" rel="stylesheet" type="text/css">
	<script src="js/bootstrap-editable.min.js"></script>

	<script>
		$(document).ready(function(){
			$.fn.editable.defaults.mode = 'inline';
			//$('#stdid').editable();
			
			$('#stdname').editable({
				type:'text',
				url:'edit.php',
				pk:1

				
			});
	
		});
	</script>
</head>
<body>
<div class="container">
	<h1>Edit demo</h1>
</div>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		
	</tr>
	<tr>
		<td> <a href="#" id="stdid">1</a> </td>
		<td> <a href="#" id="stdname">zahid</a> </td>
		
	</tr>
	
</table>

</body>
</html>