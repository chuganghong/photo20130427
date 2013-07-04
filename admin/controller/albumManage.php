<?php
/*
	图集管理albumManage.php
*/
require_once('../common/include.php');

startSession();//开启SESSION会话
checkLogin();//检测是否登录后台

require('getAlbumInfo.php');  //获取图集信息
$smarty->assign('td',$data);

$smarty->assign('th',$th);

//下面是分页符，若能整合进模板就好了。
$total_page =$sumPage;
$url = $_SERVER['SCRIPT_NAME'] . '?page';
$page = new page($total_page,$url,$currentPage);
$page->one_cut_page();   //一种风格的分页符

$uploadUrl = 'uploadForm.php';   //上传图片
$smarty->assign('uploadUrl',$uploadUrl);

$addUrl = 'albumForm.php';   //新增图集
$smarty->assign('addUrl',$addUrl);

$editUrl = 'albumForm.php';   //编辑图集
$smarty->assign('editUrl',$editUrl);

$js = '../common/js/common.js';
$smarty->assign('js',$js);

$smarty->display(TPL . 'albumManage.tpl');


$page->one_cut_page();   //一种风格的分页符
