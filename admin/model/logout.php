<?php
/*
	处理退出登录请求
	2013/04/28修改：
	1.使用了admin.class.php中的类方法。此页的代码变少了，但是却转移到了admin.class.php中，若此代码不能复用，这么做有何意义？
*/

require_once('../common/include.php');
session_start();
$which = $_GET['which'];

$admin = new admin($db);

if( $which == 'admin' )
{
	$admin->logout();  //退出登录
	$code = '<script>top.window.location.href="../controller/aLoginForm.php";</script>';
	echo $code;
}
else if( $which == 'user' )
{
	unset($_SESSION['adminName']);
	session_destroy();
}
