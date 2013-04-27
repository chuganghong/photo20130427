<?php
/*
	处理注册请求
*/
include('include.php');

$which = $_POST['which'];
$name = _filter($_POST['userName']);
$pwd = _filter($_POST['password']);
$pwd = MD5($pwd);

if( $which=='admin' )
{
	//管理员注册
	$sql = "INSERT INTO admin ( nickname,password ) VALUES ( '$name','$pwd' )";
	$result = $db->_query($sql);
	$rows = mysql_affected_rows();
	register($which,$rows,$name);
}
else if( $which=='user' )
{
	//普通用户注册
	//$sql = "INSERT INTO
}




function register($which,$rows,$name)
{
	if( $rows>0 )
	{
		$nameKey = $which . 'Name';
		//注册成功
		if( isset($_SESSION) )
		{
			$_SESSION[$nameKey] = $name;
		}
		else
		{
			session_start();
			$_SESSION[$nameKey] = $name;
		}
		$str = '<script>location.href="adminIndex.php";</script>';
		
	}
	else
	{
		//注册失败
		$str = '<script>alert("注册失败，请重试！");';
		$str .= 'history.go(-1);</script>';
	}
	echo $str;
}
		