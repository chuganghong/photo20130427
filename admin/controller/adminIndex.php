<?php
/*
	后台首页
*/
include('../common/include.php');
session_start();

if( !isset($_SESSION['adminName']) )
{
	die('你没有登录！');
}

$which = $_GET['which'];



$smarty->assign('title','管理员后台首页');



$nickname = 'admin';
$url = '../model/logout.php?which=' . $which;

$smarty->assign('nickname',$nickname);
$smarty->assign('url',$url);

$smarty->assign('adminIndexTop','adminIndexTop.php');


$smarty->display( TPL . 'adminIndex.tpl');