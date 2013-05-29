<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
require_once('include.php');
$url_1 = 'topicManage.php';
$url_2 = 'albumManage.php';
$url_3 = 'pictureManage.php';

$smarty->assign('url_1',$url_1);
$smarty->assign('url_2',$url_2);
$smarty->assign('url_3',$url_3);

$smarty->display('../templates/adminMenu.tpl');