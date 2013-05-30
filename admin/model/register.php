<?php
/*
	处理注册请求
	2013/04/28修改：
	1.使用了admin.class.php中的类方法。此页的代码变少了，但是却转移到了admin.class.php中，若此代码不能复用，这么做有何意义？
*/

require_once('../common/include.php');

$which = $_POST['which'];
$name = _filter($_POST['userName']);
$pwd = _filter($_POST['password']);
$pwd = MD5($pwd);

$admin = new admin($db);

if( $which=='admin' )
{
	//管理员注册
	if( $admin->register($name,$pwd) )    //注册
	{
		$str = '<script>location.href="../controller/adminIndex.php?which=admin";</script>';
	}
	else
	{
		//注册失败
		$str = '<script>alert("注册失败，请重试！");';
		$str .= 'history.go(-1);</script>';
	}
	echo $str;
}
else if( $which=='user' )
{
	//普通用户注册
	//$sql = "INSERT INTO
}
