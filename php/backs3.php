<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style type="text/css">
@font-face {
  font-family: 'oxxo';
  src: url('art.ttf');
}

*{
	background-color:#f8f9fa
}

.style1{
	font-family:oxxo,Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size: 14px;
	color:gray;
	background-color:#f8f9fa;
}
</style>
</head>
<body>
<?php
	$link = mysqli_connect("localhost","a0107","pwd0107");
	mysqli_query($link,'SET NAMES UTF8');
	mysqli_select_db($link,"a0107");

	echo "
	<table width='1450' class='style1' border='1'>
    <tr style='text-align: center;' >
		<td class='col-1'>訂單編號</td>
		<td class='col-1'>訂單產生時間</td>
		<td class='col-1'>訂購者</td>
		<td class='col-1'>產品編號</td>
		<td class='col-1'>產品名稱</td>
		<td class='col-1'>購買數量</td>
		<td class='col-1'>產品單價</td>
		<td class='col-1'>付款金額</td>
		<td class='col-1'>聯絡電話</td>
		<td class='col-1'>寄送住址</td>
		<td class='col-1'>付款方式</td>
		<td class='col-1'>訂單狀況</td>
    </tr>
  </table>";

  	$sqlstr1 = "SELECT * FROM `Order` WHERE situation='訂單處理中'";
	$result1 = mysqli_query($link, $sqlstr1);
	$maxrow = mysqli_num_rows($result1);
	for($i = 0;$i < $maxrow; $i++)
	{
	$row = mysqli_fetch_row($result1);
	echo "
	<table width='1450' class='style1' border='1'>
    <tr style='text-align: center;' >
      <td class='col-1 style1'>$row[0]</td>
      <td class='col-1 style1'>$row[1]</td>
      <td class='col-1 style1'>$row[2]</td>
      <td class='col-1 style1'>$row[3]</td>
      <td class='col-1 style1'>$row[5]</td>
      <td class='col-1 style1'>$row[6]</td>
      <td class='col-1 style1'>$row[7]</td>
      <td class='col-1 style1'>$row[8]</td>
      <td class='col-1 style1'>$row[9]</td>
      <td class='col-1 style1'>$row[10]</td>
      <td class='col-1 style1'>$row[11]</td>
      <td class='col-1 style1'>$row[12]</td>
    </tr>
  </table>";}

	mysqli_free_result($result1);
	mysqli_close($link);
?>
</body>
</html>