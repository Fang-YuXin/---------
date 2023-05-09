<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	$link = mysqli_connect("localhost","a0107","pwd0107");
	mysqli_query($link,'SET NAMES UTF8');
	mysqli_select_db($link,"a0107");

	$pphoto = $_POST['pphoto'];
	$pname = $_POST['pname'];
  	$content = $_POST['content'];
  	$price = $_POST['price'];


  	$sqlstr1 = "SELECT * FROM `Product`";
	$result1 = mysqli_query($link, $sqlstr1);
	$maxrow = mysqli_num_rows($result1);
	$string = strval($maxrow+1);
	$pid = "p000$string";


	$sqlstr2 = "INSERT INTO `Product`(`pid`, `pphoto`, `pname`, `content`, `price`) VALUES ('$pid','$pphoto','$pname','$content',$price)";
	mysqli_query($link, $sqlstr2);

	echo "<script>alert('已新增至資料庫')</script>";
	header("refresh:0;url=../back.html");
	mysqli_free_result($result1);
	mysqli_close($link);;


?>
</body>
</html>