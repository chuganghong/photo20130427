<?php
require_once('initialize.php');

$start = microtime(true);
$smarty->assign('title','login');
$smarty->assign('action','login.php');
$smarty->assign('which','admin');
$smarty->assign('value','login');
$smarty->display('lrForm.tpl');
$end = microtime(true);

$cost = $end-$start;

echo 'cost ' . $cost . '<br />';