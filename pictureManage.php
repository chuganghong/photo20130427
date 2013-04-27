<?php
/*
	图片管理
*/
require_once('include.php');

$sql = "SELECT * FROM picture ORDER BY id DESC";
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