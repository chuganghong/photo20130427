<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/');
require('include.php');

$nickname = 'admin';
$url = 'logout.php?which=admin';

$smarty->assign('nickname',$nickname);
$smarty->assign('url',$url);

$smarty->display('templates/adminIndexTop.tpl');