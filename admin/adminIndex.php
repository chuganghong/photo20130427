<?php
/*
	后台首页
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/');
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

$smarty->assign('adminIndexTop','adminIndexTop.php');


$smarty->display('templates/adminIndex.tpl');