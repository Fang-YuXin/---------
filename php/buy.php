<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];	
	$payment = $_POST['radio'];

	$today = date("Y-m-d H:i:s");//自動產生時間

	$link = mysqli_connect("localhost","a0107","pwd0107");
	mysqli_query($link,'SET NAMES UTF8');
	mysqli_select_db($link,"a0107");

//產生orderid
	$sqlstr1 = "SELECT orderid FROM `Order` GROUP BY(orderid);";
	$result1 = mysqli_query($link,$sqlstr1);
	$maxrow = mysqli_num_rows($result1);
	$string1 = strval($maxrow+1);
	$row1 = "t000$string1";

//找product的price
	$sqlstr2 = "SELECT * FROM Product;";
	$result2 = mysqli_query($link, $sqlstr2);
	$maxrow = mysqli_num_rows($result2);

//增加進去order
	for($i = 1;$i < 9; $i++)
	{	
	$pnum = "T$i";
	$product = $_POST[$pnum]; //$product = $_POST['T1'];
	$row2 = mysqli_fetch_row($result2);//$row2[5] = price
	$total = intval($row2[4])*intval($product);
	$sqlstr3 = "INSERT INTO `Order` VALUES ('$row1','$today','$name','p0000$i','$row2[1]','$row2[2]',$product,$row2[4],$total,'$phone','$address','$payment','訂單處理中')";
	mysqli_query($link, $sqlstr3);
	}

	echo "<script>alert('您的訂單編號為$row1  建議您將 此頁面截圖，以便查詢貨物狀況 感謝您的購物!')</script>";
	header("refresh:0;url=../souvenir.html");

	mysqli_free_result($result1);
	mysqli_free_result($result2);
	mysqli_close($link);;

?>
</body>
</html>