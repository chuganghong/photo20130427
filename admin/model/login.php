<?php
/*
	处理登录请求
	2013/04/28修改：
	1.把处理登录的代码移到了admin.class.php中
*/

require_once('../common/include.php');
$which = $_POST['which'];

$name = _filter($_POST['userName']);
$pwd =  _filter($_POST['password']);
//$pwd = MD5($pwd);


if( $which=='admin' )
{	
	$admin = new admin($db);
	if( $admin->login($name,$pwd) )
	{
		//登录成功
		$url = '../controller/adminIndex.php?which=admin';
		$str = '<script>location.href="' . $url . '"</script>';		
	}
	else
	{
		$str = '<script>alert("用户名或密码错误，请重新输入");';
		$str .= 'history.go(-1);</script>';
	}
	echo $str;
	
	//login($which,$rows,$name,$url);
}
else if( $which=='user' )
{
	//普通用户登录
	$url = 'user';
	login($which,$rows,$name,$url);
}