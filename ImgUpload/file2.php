<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="userphoto">
        <div class="gravatar-wrapper-128"><img id="image" src="image/bg1.jpg" alt="" class="logo" width="120" height="120"></div>
        <div class="change-picture-slide" style="top: 30px;">
            <input accept="image/*" type="file" id="upload" name="upload" onchange="readURL(this);"style="visibility: hidden;" />
            <a href="" onclick="changePicture(); return false">Change Picture</a>
        </div>
    </div>
    <script>
        function changePicture(){
            $('#upload').click();
        }
        function readURL(input)
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();
                reader.onload = function (e)
                {
                    $('#image')
                    .attr('src',e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }



    </script>

</body>
</html>