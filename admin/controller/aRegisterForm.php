<?php
require_once('../common/include.php');



$smarty->assign('header',TPL . 'header.tpl');
$smarty->assign('title','Register');
$smarty->assign('action','../model/register.php');
$smarty->assign('which','admin');
$smarty->assign('value','Register');


$smarty->display( TPL . 'lrForm.tpl');