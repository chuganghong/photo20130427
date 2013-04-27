<?php
/*
	后台首页
*/
include('include.php');
session_start();

if( !isset($_SESSION['adminName']) )
{
	die('你没有登录！');
}

$which = $_GET['which'];



$smarty->assign('title','管理员后台首页');



$nickname = 'admin';
$url = 'logout.php?which=' . $which;

$smarty->assign('nickname',$nickname);
$smarty->assign('url',$url);

/*
$url_1 = 'aRegisterForm.php';
$url_2 = '#';
$url_3 = '#';
$smarty->assign('url_1',$url_1);
$smarty->assign('url_2',$url_2);
$smarty->assign('url_3',$url_3);
$smarty->display('adminMenu.tpl');
*/

//$smarty->display('adminIndexTop.tpl');

//$smarty->display('lrForm.tpl');

$smarty->display('adminIndex.tpl');