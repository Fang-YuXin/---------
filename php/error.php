<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>

<style type="text/css">
<!--
@font-face {
  font-family: 'oxxo';
  src: url('art.ttf');
}

*{
	background-color:#f8f9fa
}

.style1{
	font-family:oxxo,Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: 28px;
	color:gray;
	background-color:#f8f9fa
}
-->
</style>
</head>

<body>
<?php

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];	
	$mes = $_POST['mes'];
	$suggest = $_POST['suggest'];
	
	
	$link = mysqli_connect("localhost","a0107","pwd0107");
	mysqli_query($link,"SET NAMES 'UTF8'");
	mysqli_select_db($link,"a0107");
	
	$sqlstr ="INSERT INTO Suggest VALUES ('".$name."','".$phone."','".$email."','".$mes."','".$suggest."');";
	
	/*$result = mysqli_query($link,$sqlstr); 因為不需要回傳*/
	mysqli_query($link,$sqlstr);	

	mysqli_close($link);


?>
</body>
</html>
