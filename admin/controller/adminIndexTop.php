<?php
require_once('../common/include.php');

$nickname = 'admin';
$url = '../model/logout.php?which=admin';

$smarty->assign('nickname',$nickname);
$smarty->assign('url',$url);

$smarty->display( TPL .'adminIndexTop.tpl');