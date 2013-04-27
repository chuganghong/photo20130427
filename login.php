<?php
/*
	处理登录请求
*/
include('include.php');
$which = $_POST['which'];

$name = _filter($_POST['userName']);
$pwd =  _filter($_POST['password']);
$pwd = MD5($pwd);


if( $which=='admin' )
{
	//管理员登录
	$sql = "SELECT * FROM admin WHERE nickname='$name' AND password='$pwd'";
	$result = $db->_query($sql);
	$rows = mysql_num_rows($result);
	$url = 'adminIndex.php?which=admin';
	login($which,$rows,$name,$url);
}
else if( $which=='user' )
{
	//普通用户登录
	$url = 'user';
	login($which,$rows,$name,$url);
}


function login($which,$rows,$name,$url)
{
	$nameKey = $which . 'Name';
	if( $rows>0 )
	{
		if( isset($_SESSION) )
		{
			$_SESSION[$nameKey] = $name;
			var_dump($_SESSION[$nameKey]);//test
		}
		else
		{
			session_start();
			$_SESSION[$nameKey] = $name;
			var_dump($_SESSION[$nameKey]);//test
		}
		$str = '<script>location.href="' . $url . '"</script>';		
	}
	else
	{
		$str = '<script>alert("用户名或密码错误，请重新输入");';
		$str .= 'history.go(-1);</script>';
	}
	echo $str;
}
		