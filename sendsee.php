<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Aliens Abducted Me - Report an Abduction</title>
</head>

<body>
	<h2>發送成功，感謝您的意見來信.</h2>

	<?php
$sendTo = "maizizi@gmail.com,jouce1212@gmail.com";//收件者
$subject = "【景福維美】來自官網的訪客信"; //主旨
$namess = $_POST['name'] ;
$phone = $_POST['phone'];
//$email = $_POST['email'] ;
//$message = $_POST['message']; //內容
$gender = $_POST['gender']; //性別
$city  = $_POST['city']; //城市
$town = $_POST['town']; //區域

$msg = 
    "顧客姓名: $namess\n" . 
    "聯絡電話: $phone\n" .    
//    "電子信箱: $email\n" .
  	"性別: $gender\n" .
	"縣市: $city\n" .
	"區域: $town\n" ;
	
mb_internal_encoding("UTF-8");
mail($sendTo, $subject, $msg);
?>

	<a href="https://www.maizizi.vaserver.com/jingfu-weimei/">返回首頁</a>

</body>

</html>
