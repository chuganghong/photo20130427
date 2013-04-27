<?php
require('include.php');

$nickname = 'admin';
$url = 'logout.php?which=admin';

$smarty->assign('nickname',$nickname);
$smarty->assign('url',$url);

$smarty->display('adminIndexTop.tpl');