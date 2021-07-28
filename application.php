<html>
<style>
h1{
color: Red;
text-shadow: 1px 1px silver;
font-family:Microsoft JhengHei;
font-size:28px;
}

.submark{
color: navy;
text-shadow: 1px 1px silver;
font-family:Microsoft JhengHei;
font-size:14px;
    text-align: center;
	    line-height: 100%;
		margin-top:2%;
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


<body>
<div class="submark">
<h1 align='center'>帳號申請專區</h1>
<p>基於帳號安全考量, 帳號/密碼需介於6-16個字元</p><p>有 * 記號欄位為必填</p>
</div>
<br><br>
<table align='center'>
<form method="post" action="accountapplication.php">
<tr><td><a href="http://www.shopofmine.com" class="mark3">[返回首頁]</a></td></tr>
<tr><td>帳號 <font color="red">*</font> </td><td><input id="account" name="account"></input></td></tr>
<tr><td>密碼 <font color="red">*</font> </td><td><input type="password" id="password" name="password"></input></td></tr>
<tr><td>請確認密碼 <font color="red">*</font> </td><td><input type="password" id="password2" name="password2"></input></td></tr>
<tr><td>E-Mail <font color="red">*</font> </td><td><input id="email" name="email"></input></td></tr>
<tr><td></td><td><input onclick="return validate()" type="submit" value="提交"></input><input type="reset" value="重置"></input></td></tr>
<!--
<select>

<option>test1</option>
<option>test2</option>
<option>test3</option>
</select>
-->
</form>
</table>

</body>

<script language="Javascript">



function validate() {

    var a = document.getElementById("account").value;
	var a1 = a.length;
    var p = document.getElementById("password").value;
    var pc = document.getElementById("password2").value;
	var email = document.getElementById("email").value;
	var p1 = p.length;

			if (a == "" ||  p == ""||  pc == ""||  email == ""){

        alert("有 * 記號欄位必填, 請全部填寫");

        return false;

    };
	
	if (a1 < "6" || a1 > "16"){

        alert("基於安全考量, 帳號需介於6-16個字元");

        return false;

    };
	

	
		if (p1 < "6" || p1 > "16"){

        alert("基於安全考量, 密碼需介於6-16個字元");

        return false;

    };
	
			if (p != pc){

        alert("兩次輸入密碼不相同");

        return false;

    };
	
}


</script>
</html>