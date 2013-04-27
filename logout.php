<?php
/*
	处理退出登录请求
*/
session_start();
var_dump($_GET);
var_dump($_SESSION);
$which = $_GET['which'];

if( $which == 'admin' )
{
	unset($_SESSION['adminName']);
	session_destroy();
	$code = '<script>top.window.location.href="aLoginForm.php";</script>';
	echo $code;
}
else if( $which == 'user' )
{
	unset($_SESSION['adminName']);
	session_destroy();
}