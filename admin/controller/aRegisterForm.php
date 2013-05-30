<?php
require_once('../common/include.php');

$smarty->assign('action','../model/register.php');
$smarty->assign('which','admin');
$smarty->assign('value','Register');

$smarty->display( TPL . 'lrForm.tpl');