<?php
/*
	图片管理
*/
require_once('../common/include.php');

startSession();//开启SESSION会话
checkLogin();//检测是否登录后台

require_once('getPicInfo.php');  //获取图片信息
$th = array('ID','缩略图','操作');

$url = $_SERVER['SCRIPT_NAME'] . '?page';
$page = new page($sumPage,$url,$currentPage);
$page->one_cut_page();   //一种风格的分页符



$smarty->assign('th',$th);
$smarty->assign('td',$td);

$smarty->assign('host',$host);

$js = '../common/js/common.js';
$smarty->assign('js',$js);

$deletePicUrl = '../model/deletePic.php';
$smarty->assign('deletePicUrl',$deletePicUrl);



$smarty->display( TPL . 'pictureManage.tpl');

$page->one_cut_page();   //一种风格的分页符