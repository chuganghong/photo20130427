<?php
/*
	图片管理
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
include('include.php');
$sql2 = "SELECT COUNT(id) FROM picture";
$result = $db->_query($sql2);
$row = mysql_fetch_row($result);
$num = $row[0];
$length = 20;   //每页显示的数量
$sumPage = ceil($num/$length);   //总页数

if( isset($_GET['page']) )
{
	$currentPage = $_GET['page'];
}
else
{
	$currentPage = 1;
}

$start = ($currentPage-1)*$length;
$sql = "SELECT * FROM picture ORDER BY id DESC LIMIT $start,$length";
//$sql = "SELECT * FROM picture ORDER BY id DESC";
$result = $db->_query($sql);
while( $row=mysql_fetch_assoc($result) )
{
	$td[] = $row;
}
if( !isset($td) )
{
	$td = array();
}

$th = array('ID','缩略图','操作');

//var_dump($td);  //test

$smarty->assign('th',$th);
$smarty->assign('td',$td);

$js = '../common/js/common.js';
$smarty->assign('js',$js);

$deletePicUrl = 'deletePic.php';
$smarty->assign('deletePicUrl',$deletePicUrl);

$smarty->display('..//templates/pictureManage.tpl');

$url = $_SERVER['SCRIPT_NAME'] . '?page';
$page = new page($sumPage,$url,$currentPage);
$page->one_cut_page();   //一种风格的分页符
