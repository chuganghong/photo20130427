<?php
/*
	图集管理FORM
*/
require_once('../common/include.php');
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
	$action = '../model/addAlbum.php';
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
	
	$smarty->display( TPL . 'albumForm.tpl');
	
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
	$ln = $values[4];   //是网络图片还是本地图片，1为本地，0为网络
	
	$host = 'http://' . $_SERVER['HTTP_HOST'];    //与从数据库中取出的缩略图地址一起使用
	
	if( $ln )
		$thumbUrl = $host . '/' . $thumbUrl;
	
	
		
	$action = '../model/editAlbum.php';
	$value = '更新';
		
	$smarty->assign('action',$action);
	$smarty->assign('value',$value);
	$smarty->assign('which',$which);
	
	
	$smarty->assign('thumbUrl',$thumbUrl);
	$smarty->assign('topicId',$topicId);
	$smarty->assign('albumName',$albumName);
	
	$smarty->assign('albumId',$albumId);
	
	//$smarty->assign('ln',$ln);
	//$smarty->assign('host',$host);
	
	
	//$smarty->assign('thumbUrl',$thumbUrl);
	
	$smarty->assign('isAllow',0);//这有什么作用？
	
	$smarty->display( TPL . 'albumForm2.tpl');
}

