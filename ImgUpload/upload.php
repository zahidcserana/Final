<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<a href="javascript:void(0)" id="change_picture">Change</a>
<form  id="form" action="imgUpload.php" method="post" enctype="multipart/form-data" target="iframe" style="display: none;">
	
	<input type="file" id="file" name="file">
	
	
</form>
	<script >
		$(document).ready(function()
		{ 

			$("#change_picture").click(function()
			{ 
				$( "#file" ).click();
				
			   
			});
		});

		$( "#file" ).change(function(){
			alert('file');
		});
    	</script>
    	


</body>
</html>