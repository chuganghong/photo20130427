<?php
require_once('../common/include.php');
startSession();

checkLogin();//检测是否登录后台

$nickname = 'admin';
$url = '../model/logout.php?which=admin';

$home = dirname(dirname(dirname($_SERVER['SCRIPT_NAME']))) . '/web/controller/index_b.php';
$smarty->assign('home',$home);  //网站前端首页

$smarty->assign('nickname',$nickname);
$smarty->assign('url',$url);

$smarty->display( TPL .'adminIndexTop.tpl');