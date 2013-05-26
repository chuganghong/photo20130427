<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/');
require_once('initialize.php');

$start = microtime(true);
$smarty->assign('title','login');
$smarty->assign('action','login.php');
$smarty->assign('which','admin');
$smarty->assign('value','login');
$smarty->display('templates/lrForm.tpl');
$end = microtime(true);

$cost = $end-$start;

echo 'cost ' . $cost . '<br />';