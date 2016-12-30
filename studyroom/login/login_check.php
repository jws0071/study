<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">


</head>
<body>
<?php


include "../dbconn.php";
include "PassWord.php";
$rows=adminSelect();


echo $row[0];
$userid=$_POST["userid"];
$userpw=$_POST["userpw"]; //  login 화면에서 입력값 전달 받음 (POST 형식)
$userpw = encrypt($userpw, "woosunkey");


session_start();
if($rows[0]==$userid)
{

	if($rows[1]==$userpw)
	{
		$_SESSION['is_login']=true;
		$_SESSION['user_id'] = $userid;
		echo("<script> window.open(); location.href='../admin_page.php'</script>");
	}
	else
	{
		$_SESSION['is_login']=false;
		$_SESSION['user_id'] = '';
		echo("<script> window.alert('No Match PW'); location.href='login.php'</script>");
	}
}
else
{
	echo("<script> window.alert('No Match ID'); location.href='login.php'</script>");
}

?>
</body>
</html>