<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<a href="javascript:void(0)" id="change_picture">Change</a>
<form  id="form" action="imgUpload.php" method="post" enctype="multipart/form-data"  style="display: none;">
	
	<input type="file" id="file" name="file">
	<img src="" id="image_upload">
	
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
			var reader = new FileReader();
               	reader.onload = function (e) {
                  $('#image_upload').attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
		});
    	</script>
    	


</body>
</html>