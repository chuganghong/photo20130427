<?php
require_once('../common/include.php');



//$start = microtime(true);
$smarty->assign('title','login');
$smarty->assign('action','../model/login.php');
$smarty->assign('which','admin');
$smarty->assign('value','login');
$smarty->assign('header',TPL . 'header.tpl');

$smarty->display( TPL . 'lrForm.tpl');
$end = microtime(true);

//$cost = $end-$start;

//echo 'cost ' . $cost . '<br />';