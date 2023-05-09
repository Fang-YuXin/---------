<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>旅行團詳細資料</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="../css/back.css" rel="stylesheet" type="text/css">
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/js-style.js"></script> 

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
	font-size: 20px;
	color:gray;
	background-color:#f8f9fa;
	text-align: center;
	border: 1px solid gray;
}
</style>
</head>
<body>
<div id="wrap">

    <!-- 回到頁首的按鈕-s -->
    <a id="backtotop" href="#">
      <img src="images/backtotop.png" style="width:36px; height:36px;background-color:#53D3DE;">
      <i class="fas fa-chevron-up"></i>
    </a>
    <!-- 回到頁首-e -->

    
  <!-- <div class="news">Packs are on SALE!!!</div>
 -->
   
   <nav class="navbar navbar-expand-lg navbar-light bg-light pb-0 sticky-top first-nav">
      
    <div class="container" > <!-- 使用container將導覽列置中 -->
      <!-- <a class="navbar-brand" href="home.html">
        <div id="logo">LOGO</div>
      </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>



      <!-- 左半部選單-s -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav s-navbar-font mr-auto">

          <li class="nav-item active">
            <a class="nav-link " href="../back.html" style="font-family:oxxo,Cambria,serif;font-size: 30px;padding-right:30px;color:gray ;" >新增販售物品<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a href="../back.html" class="nav-link" style="font-family:oxxo,Cambria,serif;font-size: 30px;padding-right: 30px;">查詢旅行團資料</a>
          </li>
          
           <li class="nav-item">
            
            <a href="../back.html" class="nav-link" style="font-family:oxxo,Cambria,serif;font-size: 30px;padding-right: 30px;">未處理訂單</a>
          </li>

          <li class="nav-item">
            
            <a href="../back.html" class="nav-link" style="font-family:oxxo,Cambria,serif;font-size: 30px;padding-right: 30px;">變更貨物狀況</a>
          </li>
        </ul>
      </div>
<!-- 左半部選單-e -->
  </div> <!-- <div class="container"> -->
</nav><!-- 導覽列-e -->

<h1 style="margin:0 auto;font-size: 36px; text-align: center;background-color:#a2b59f;">旅行團詳細資料</h1>

<div style="margin-top: 30px;margin-bottom: 30px;margin-left: 34.6px;">
<?php
	$link = mysqli_connect("localhost","a0107","pwd0107");
	mysqli_query($link,'SET NAMES UTF8');
	mysqli_select_db($link,"a0107");

	$radio = $_POST['radio'];

	echo "
	<table width='1450' border='2' align='center'>
    <tr style='text-align: center;' >
      <td class='col-2 style1'>參加者</td>
      <td class='col-2 style1'>身分證id</td>
      <td class='col-2 style1'>生日</td>
      <td class='col-2 style1'>電話</td>
      <td class='col-3 style1'>信箱</td>
      <td class='col-1 style1'>旅遊團</td>
    </tr>
  </table>";

  	$sqlstr1 = "SELECT * FROM `Signup` WHERE radio = '$radio';";
	$result1 = mysqli_query($link, $sqlstr1);
	$maxrow = mysqli_num_rows($result1);
	for($i = 0;$i < $maxrow; $i++)
	{
	$row = mysqli_fetch_row($result1);
	echo "
	<table width='1450' border='2' align='center'>
    <tr style='text-align: center;' >
      <td class='col-2 style1'>$row[0]</td>
      <td class='col-2 style1'>$row[1]</td>
      <td class='col-2 style1'>$row[2]</td>
      <td class='col-2 style1'>$row[3]</td>
      <td class='col-3 style1'>$row[4]</td>
      <td class='col-1 style1'>$row[5]</td>
    </tr>
  </table>";}

	mysqli_free_result($result1);
	mysqli_close($link);

?>
</div>
<!-- Footer Section -->

<section >
  <div class="py-4" style="background-color: #a2b59f">
    <div class="container">
      <div class="row">

      <div class="col-lg-6" style="background-color: #a2b59f">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d172361.43099239728!2d120.5159116340244!3d23.917620266060133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469344583e968d5%3A0xc43658840c70a3c!2zNTEx5b2w5YyW57ij56S-6aCt6YSJ56S-6aCt!5e0!3m2!1szh-TW!2stw!4v1655367812050!5m2!1szh-TW!2stw" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>


      </div>


      <div class="col-lg-6" style="background-color: #a2b59f">
  
     <h4 style="background-color: #a2b59f">網頁建議回饋單</h4>    

    <div id="form" style="background-color: #a2b59f">
      <form action="php/error.php" method="POST" target="nm_iframe">

        <div class="form-row" style="background-color: #a2b59f">
          <div class="form-group col-md-6" style="background-color:#a2b59f">
            <label for="name" style="background-color:#a2b59f">客戶姓名</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="form-group col-md-6" style="background-color:#a2b59f">
            <label for="phone" style="background-color:#a2b59f">連絡電話</label>
            <input name="phone" type="text" class="form-control" id="phone" placeholder="09XX-XXXXXX">
          </div>
          <div class="form-group col-md-6" style="background-color:#a2b59f">
            <label for="email" style="background-color:#a2b59f">聯絡信箱</label>
            <input name="email" type="text" class="form-control" id="email" placeholder="abc@XXX.com">
          </div>
          <div class="form-group col-md-6" style="background-color:#a2b59f">
            <label for="mes" style="background-color:#a2b59f">留言日期</label>
            <input name="mes" type="date" class="form-control" id="mes" placeholder="yyyy-mm-dd">
          </div>

          </div>
          <div class="form-group" style="background-color:#a2b59f">
           
            <label for="suggest" style="background-color:#a2b59f">改善建議</label>
            <input name="suggest" type="text" class="form-control" id="suggest" placeholder="建議、想法">
          </div>

          <input name="button" type="submit" class="btn btn-info" id="button" value="送出" onclick="window.alert('回饋表單已送出，請重新載入頁面，感謝您的建議!')">
          
      </form>
      <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>
    </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GoogleMap地圖 & form 表單-e -->


<!-- 回到頁首的按鈕-s -->
<a id="backtotop" href="#">
      <img src="images/backtotop.png" style="width:36px; height:36px; ">
      <i class="fas fa-chevron-up"></i>
    </a>
<!-- 回到頁首-e -->




<!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>