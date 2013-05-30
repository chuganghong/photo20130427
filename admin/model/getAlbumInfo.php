<?php
/**
 * 提供图集信息
 * interge $length 每页显示的图集数量
 * array $data 每页显示的图集信息
 */
//从数据库中获取分页所需的数据
//$sql2 = "SELECT *  FROM album";
$sql2 = "SELECT COUNT(id) FROM album";
$resource = $db->_query($sql2);
$row = mysql_fetch_row($resource);
$nums = $row[0];
$length = 30;
$sumPage = ceil($nums/$length);

if( isset($_GET['page']) )
{
	$currentPage = $_GET['page'];
}
else
{
	$currentPage = 1;
}
$start = ($currentPage-1)*$length;
$addUrl = '../model/albumForm.php';
$editUrl = '../model/albumForm.php';
$deleteUrl = '../model/deleteAlbum.php';
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