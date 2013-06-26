<?php
require('../common/include.php');
require('getAlbumInfo_b.php');
//$css = $_SERVER['HTTP_HOST'];
//echo $css;

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';
$header = $tpl . 'header.tpl';
$footer = $tpl . 'footer.tpl';


$new = $data['new'];
$Japan = $data['Japan'];
$sex = $data['sex'];
$girl = $data['girl'];
$Korea = $data['Korea'];

$smarty->assign('new',$new);
$smarty->assign('Japan',$Japan);
$smarty->assign('sex',$sex);
$smarty->assign('girl',$girl);
$smarty->assign('Korea',$Korea);



$pre = '/GitHub/photo20130427/web/templates/common/';

$smarty->assign('css1',$pre . 'css.css');
$smarty->assign('head',$pre . 'header.css');



$smarty->assign('pre',$pre);
$smarty->assign('tpl',$tpl);
$smarty->assign('header',$header);
$smarty->assign('footer',$footer);
$smarty->display($tpl . 'index.tpl');