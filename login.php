<html>
<head>
<style>
h1{
color: Red;
text-shadow: 1px 1px silver;
font-family:Microsoft JhengHei;
font-size:28px;
}

table{
border-style: dotted;
background-color: Lavender;
height: 20%;
width: 40%;
}

.mark{
color: Blue;

text-shadow: 1px 1px silver;
font-family:Microsoft JhengHei;
font-size:24px;
}

.mark2{
color: black;
font-family:Microsoft JhengHei;
font-size:22px;
}

.mark3{
color: Blue;
font-family:Microsoft JhengHei;
font-size:18px;
}

.buttons{
color: black;
font-family:Microsoft JhengHei;
font-size:16px;
}

</style>

<meta name="google-site-verification" content="fIMItzNuOxcxDN7CqY9vUuAXQVIqNYk88FrLLhl3EAQ" />
</head>

<body>
<div class="submark">
<h1  align='center'>
<?php
$account = $_POST['account'];
$password = $_POST['password'];

$link=mysqli_connect("localhost","root","rootnewpassword") or die("無法建立資料連結: ".mysqli_connect_error());
mysqli_select_db($link, "accounts")or die ("無法開啟急要型號資料庫:".mysqli_error($link));

	$sql="select * from `account` where `ac` = '$account' and `pw` = '$password'";
$result=mysqli_query($link,$sql);
  $rowcount=mysqli_num_rows($result);


	if($rowcount>0){
	$link2=mysqli_connect("localhost","root","rootnewpassword") or die("無法建立資料連結: ".mysqli_connect_error());
mysqli_select_db($link2, "accounts")or die ("無法開啟急要型號資料庫:".mysqli_error($link));

	$sql2="INSERT INTO `loginrecords`(`ac`, `pw`) VALUES ('$account','$password')";
$result2=mysqli_query($link2,$sql2);
   header('Location: index2.php?account='.$account);
	}else{
   echo '帳號或密碼錯誤, 請再次確認';
   mysqli_free_result($result);

}

?>
</h1>
</div>

<br><br>
<table align='center'>
<tr><td colspan='2' border='1px';><a align='center' class='mark'>點單/庫存/結帳/成本/營利  營運資訊即時記錄!</a></td></tr>
<tr></tr>
<tr></tr>
<form action="login.php" method="POST">

<tr><td class='mark2'>帳號: </td><td><input  id="account" name="account"></input></td></tr>
<tr><td class='mark2'>密碼: </td><td><input type="password" id="password" name="password"></input></td></tr>
<tr><td></td><td><input type='submit' value='登入' class='buttons'></input><input type='reset' value='重置'  class='buttons'></input></td></tr>
<tr><td></td><td align='right'><a href='application.php' class='mark3'>[申請帳號專區]</a></td></tr>

<!--
<select>

<option>test1</option>
<option>test2</option>
<option>test3</option>
</select>
-->
</form>
</table>
<!--<img src="/photos/order.jpg" alt="HTML5 Icon" style="width:128px;height:128px" class="center">-->
</body>
</body>
</html>