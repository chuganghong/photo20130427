<?php
/*
	图集管理FORM
*/
require_once('include.php');
if( !isset($_GET['which']) )
{
	die();
}
$which = $_GET['which'];

$sql = "SELECT * FROM topic";
$result = $db->_query($sql);
while( $row = mysql_fetch_assoc($result) )
{
	$topicName[$row['id']] = $row['topicName'];
}




$smarty->assign('topicName',$topicName);


if( $which=='add' )
{
	//新增图集
	$action = 'addEditAlbum.php';
	$value = '保存';
	$src = '';
	
	$smarty->assign('action',$action);
	$smarty->assign('value',$value);
	$smarty->assign('which',$which);
	$smarty->assign('src',$src);
	
	$smarty->assign('thumbId','');
	$smarty->assign('topicId','');
	$smarty->assign('albumName','');
	
	//$smarty->assign('ln','');
	$smarty->assign('thumbUrl','');
	
	
	$smarty->assign('albumId','');
	
}
else if( $which=='edit' )
{
	//编辑图集
	
	$id = $_GET['id'];
	$values = explode('=>',$id);
	$topicId = $values[0];
	$albumName = $values[1];
	$thumbUrl = $values[2];   //暂不使用
	$albumId = $values[3];
	
		
	$action = 'addEditAlbum.php';
	$value = '更新';
		
	$smarty->assign('action',$action);
	$smarty->assign('value',$value);
	$smarty->assign('which',$which);
	
	
	$smarty->assign('thumbUrl',$thumbUrl);
	$smarty->assign('topicId',$topicId);
	$smarty->assign('albumName',$albumName);
	
	$smarty->assign('albumId',$albumId);
	
	
	$smarty->assign('thumbUrl',$thumbUrl);
}

$smarty->display('albumForm.tpl');