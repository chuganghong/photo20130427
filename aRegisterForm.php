<?php
require_once('include.php');

$smarty->assign('action','register.php');
$smarty->assign('which','admin');
$smarty->assign('value','Register');

$smarty->display('lrForm.tpl');