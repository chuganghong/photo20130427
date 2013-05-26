<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/');
require_once('include.php');

$smarty->assign('action','register.php');
$smarty->assign('which','admin');
$smarty->assign('value','Register');

$smarty->display('templates/lrForm.tpl');