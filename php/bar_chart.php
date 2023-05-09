
<?php

$link = Mysqli_connect("localhost","a0230","pwd0230");
Mysqli_select_db($link,"a0230");

$sqlstr1 = "SELECT COUNT(*) FROM `member` WHERE birthday>='1980-01-01' AND birthday<='1985-12-31' Order BY birthday";
$sqlstr2 = "SELECT COUNT(*) FROM `member` WHERE birthday>='1986-01-01' AND birthday<='1990-12-31' Order BY birthday";
$sqlstr3 = "SELECT COUNT(*) FROM `member` WHERE birthday>='1991-01-01' AND birthday<='1995-12-31' Order BY birthday";
$sqlstr4 = "SELECT COUNT(*) FROM `member` WHERE birthday>='1996-01-01' AND birthday<='2000-12-31' Order BY birthday";
$sqlstr5 = "SELECT COUNT(*) FROM `member` WHERE birthday>='2001-01-01' Order BY birthday";

$result1 = Mysqli_query($link,$sqlstr1);
$result2 = Mysqli_query($link,$sqlstr2);
$result3 = Mysqli_query($link,$sqlstr3);
$result4 = Mysqli_query($link,$sqlstr4);
$result5 = Mysqli_query($link,$sqlstr5);

$rows1 = $result1->fetch_all();
$rows2 = $result2->fetch_all();
$rows3 = $result3->fetch_all();
$rows4 = $result4->fetch_all();
$rows5 = $result5->fetch_all();
/*
echo "<pre>";
print_r($result1);
exit;

$integer1 = intval($rows1);
$integer2 = intval($rows2);
$integer3 = intval($rows3);
$integer4 = intval($rows4);
$integer5 = intval($rows5);
*/
$data[] = (int)$rows1[0][0];
$data[] = (int)$rows2[0][0];
$data[] = (int)$rows3[0][0];
$data[] = (int)$rows4[0][0];
$data[] = (int)$rows5[0][0];

//settype($data, "float");
//$integer = intval($variable);
/*$data[] = $result2;
$data[] = $result3;
$data[] = $result4;
$data[] = $result5;
*/
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);

?>






