<?php
	//$name = $_GET['name'];
	
	$name = 'csecse';
	$db =new mysqli('localhost','root','','golf');
	$query = " UPDATE users SET name = '".$_POST['value']."' WHERE id = 2";
	$result = $db->query($query);
?>

