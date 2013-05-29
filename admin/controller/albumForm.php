<?php
/*
	图集管理FORM
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
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
	$action = 'addAlbum.php';
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
	
	$smarty->assign('isAllow',1);
	
	$smarty->display('../templates/albumForm.tpl');
	
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
	
		
	$action = 'editAlbum.php';
	$value = '更新';
		
	$smarty->assign('action',$action);
	$smarty->assign('value',$value);
	$smarty->assign('which',$which);
	
	
	$smarty->assign('thumbUrl',$thumbUrl);
	$smarty->assign('topicId',$topicId);
	$smarty->assign('albumName',$albumName);
	
	$smarty->assign('albumId',$albumId);
	
	
	$smarty->assign('thumbUrl',$thumbUrl);
	
	$smarty->assign('isAllow',0);
	
	$smarty->display('../templates/albumForm2.tpl');
}

