<?php
/*
	图片管理
*/
require_once('include.php');

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

$smarty->assign('th',$th);
$smarty->assign('td',$td);

$deletePicUrl = 'deletePic.php';
$smarty->assign('deletePicUrl',$deletePicUrl);

$smarty->display('pictureManage.tpl');

$url = $_SERVER['SCRIPT_NAME'] . '?page';
$page = new page($sumPage,$url,$currentPage);
$page->one_cut_page();   //一种风格的分页符
