<?php
require('../common/include.php');
require('getAlbumInfo_b.php');
//$css = $_SERVER['HTTP_HOST'];
//echo $css;

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';
$header = $tpl . 'head.tpl';
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



$pre = '/GitHub/photo20130427/web/templates/style/';

$smarty->assign('css',$pre . 'style.css');
$smarty->assign('yu',$pre . 'yu.js');
$smarty->assign('tb',$pre . 'tb.js');



$smarty->assign('pre',$pre);
$smarty->assign('tpl',$tpl);
$smarty->assign('header',$header);
$smarty->assign('footer',$footer);
$smarty->display($tpl . 'index.tpl');