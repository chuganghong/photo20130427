<?php
/*
	图集管理albumManage.php
*/
require_once('include.php');

$addUrl = 'albumForm.php';
$editUrl = 'albumForm.php';
$deleteUrl = 'deleteAlbum.php';
$smarty->assign('addUrl',$addUrl);
$smarty->assign('editUrl',$editUrl);
$smarty->assign('deleteUrl',$deleteUrl);

$th = array('ID','图集名称','操作');

$sql = "SELECT * FROM album";
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

$smarty->display('albumManage.tpl');