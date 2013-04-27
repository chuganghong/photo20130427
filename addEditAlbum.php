<?php
/*
	编辑、新增图集
*/
require_once('include.php');
$topicId = $_POST['topic'];
$albumName = $_POST['albumName'];

if( isset($_POST['image']) )   //上传网络图片
{
	$thumbUrl = $_POST['image'];
}
else  //上传本地图片
{
	$upload = new upload('image');//实例化图片上传类
	if( $upload->up() )
	{
		$thumbUrl = $upload->getNewName();//调用图片上传类方法获取图片地址
	}
	else
	{
		die();
	}
}
$albumId = $_POST['albumId'];
VAR_DUMP($_POST);  //TEST

if( isset($_POST['url']) )
{
	//本地图片
	$cover = _filter($_POST['url']);
}

var_dump($_POST['which']);  //test
$which = _filter($_POST['which']);

//过滤数据
$topicId = _filter($topicId);
$albumName = _filter($albumName);
$cover = _filter($thumbUrl);
$albumId = _filter($albumId);

if( $which == 'add' )
{
	//增加图集
	$sql = "INSERT INTO album (albumName,thumbUrl,topicId) VALUES ('$albumName','$cover',$topicId)";
	$result = $db->_query($sql);
	$rows = mysql_affected_rows();
	if( $rows>0 )
	{
		$msg = '增加图集 ' . $albumName . ' 成功。<br />';
	}	
	else
	{
		$msg = '增加图集 ' . $albumName . ' 失败。<br />';
	}
	
	$msg .= '3秒钟后返回列表。';
		//echo $msg . '<br />';
		//$js_1 = 'history.go(-1);';
	$js_1 = 'location.href="albumManage.php"';
	$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
	$msg = $msg . $js_2;
	echo $msg;
}
else if( $which == 'edit' )
{
	$sql = "UPDATE album SET albumName='$albumName',thumbUrl='$cover',topicId=$topicId WHERE id=$albumId";
	$result = $db->_query($sql);
	$rows = mysql_affected_rows();
	if( $rows>0 )
	{
		$msg = '更新图集 ' . $albumName . ' 成功。<br />';
	}	
	else
	{
		$msg = '更新图集 ' . $albumName . ' 失败。<br />';
	}
	
	$msg .= '3秒钟后返回列表。';
		//echo $msg . '<br />';
		//$js_1 = 'history.go(-1);';
	$js_1 = 'location.href="albumManage.php"';
	$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
	$msg = $msg . $js_2;
	echo $msg;
}
	