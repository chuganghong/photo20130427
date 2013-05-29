<?php
/*
	图集管理albumManage.php
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
require_once('include.php');

//从数据库中获取分页所需的数据
//$sql2 = "SELECT *  FROM album";
$sql2 = "SELECT COUNT(id) FROM album";
$resource = $db->_query($sql2);
//var_dump($resource);   //test
//$row = mysql_fetch_array($resource);
//$row = mysql_num_rows($resource);
$row = mysql_fetch_row($resource);
//var_dump($row);   //test
//$nums = $row['row'];
$nums = $row[0];
//var_dump($nums);   //test
$length = 30;
$sumPage = ceil($nums/$length);
//var_dump($sumPage);//test
if( isset($_GET['page']) )
{
	$currentPage = $_GET['page'];
}
else
{
	$currentPage = 1;
}
$start = ($currentPage-1)*$length;
$addUrl = 'albumForm.php';
$editUrl = 'albumForm.php';
$deleteUrl = 'deleteAlbum.php';
$smarty->assign('addUrl',$addUrl);
$smarty->assign('editUrl',$editUrl);
$smarty->assign('deleteUrl',$deleteUrl);

$th = array('ID','图集名称','操作');

$sql = "SELECT * FROM album ORDER BY id DESC LIMIT $start,$length ";
//$sql = "SELECT * FROM album";
$resource = $db->_query($sql);
while( $row = mysql_fetch_assoc($resource) )
{
	$data[] = $row;
}
if( !isset($data) )
{
	$data = array();
}
$smarty->assign('td',$data);

$smarty->assign('th',$th);

$uploadUrl = 'uploadForm.php';
$smarty->assign('uploadUrl',$uploadUrl);

$js = '../common/js/common.js';
$smarty->assign('js',$js);

$smarty->display('../templates/albumManage.tpl');

//下面是分页符，若能整合进模板就好了。

$total_page =$sumPage;
//var_dump($_SERVER['SCRIPT_NAME']);  //TEST
//var_dump(dirname($_SERVER['SCRIPT_NAME']));  //TEST
//$url = dirname($_SERVER['SCRIPT_NAME']) . '/adminIndex.php?which=admin&page';
$url = $_SERVER['SCRIPT_NAME'] . '?page';
$page = new page($total_page,$url,$currentPage);
$page->one_cut_page();   //一种风格的分页符