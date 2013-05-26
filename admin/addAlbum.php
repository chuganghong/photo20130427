<?php
/*
	新增图集
	2013/04/28修改：
	1.使用了admin.class.php中的类方法。此页的代码变少了，但是却转移到了admin.class.php中，若此代码不能复用，这么做有何意义？
	2.将编辑或增加图集之后的提示信息封装到了函数msg中。
	2013年5月21日修改：
	1.在编辑图集页面，可以上传缩略图也可以不上传缩略图，但是，为了与上传图片页面共用一个上传图片的模板，我想了很多办法来在公用的上传代码中来实现模板共享，觉得很麻烦，也没有实现功能。
	今后遇到这种情况，宁可多写一个模板，也不要贪图少写这种无难度的代码。
	2013年5月22日修改：
	1.由增加和编辑图集功能改为增加功能
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/');
require_once('include.php');
$topicId = $_POST['topic'];
$albumName = $_POST['albumName'];
$isEmpty = $_POST['isEmpty'];   //识别是否上传了图片

$admin = new admin($db);

if( $isEmpty==1 )
{
	if( isset($_POST['image']) )   //上传网络图片
	{
		$thumbUrl = $_POST['image'];
		/*
		if( isset($_POST['url']) )
		{
			//网络图片
			$cover = _filter($_POST['url']);
		}
		*/
		$cover = $thumbUrl;
	}
	else  //上传本地图片
	{
		$upload = new upload('image');//实例化图片上传类
		if( $upload->up() )
		{
			$thumbUrl = $upload->getNewName();//调用图片上传类方法获取图片地址
			$cover = _filter($thumbUrl);
		}
		else
		{
			die();
		}
	}
}
else if( $isEmpty==0 )
{
	$cover = '';
}
$albumId = $_POST['albumId'];
VAR_DUMP($_POST);  //TEST



var_dump($_POST['which']);  //test
$which = _filter($_POST['which']);

//过滤数据
$topicId = _filter($topicId);
$albumName = _filter($albumName);

var_dump($cover);  //test
$albumId = _filter($albumId);

if( $which == 'add' )
{	
	if( $admin->addAlbum($albumName,$cover,$topicId) )  //增加图集
	{
		$boolean = true;
		$i = 3;
		msg($boolean,$i,$which,$albumName);		
	}
	else
	{
		$boolean = false;
		$i = 3;
		msg($boolean,$i,$which,$albumName);		
	}	
}
/*
else if( $which == 'edit' )
{
	
	if( $admin->editAlbum($albumName,$cover,$topicId,$albumId)>0 )
	{
		$boolean = true;
		$i = 3;
		msg($boolean,$i,$which,$albumName);		
	}
	else
	{
		$boolean = false;
		$boolean = true;
		$i = 3;
		msg($boolean,$i,$which,$albumName);		
	}	
}
*/

function msg($boolean,$i,$which,$albumName)   //增加或编辑图集之后的提示信息
{
	switch($which)
	{
		case 'add':
			if( $boolean )
			{
				$msg = '增加图集 ' . $albumName . ' 成功。<br />';
			}
			else
			{
				$msg = '增加图集 ' . $albumName . ' 失败。<br />';
			}
			break;
		case 'edit':
			if( $boolean )
			{
				$msg = '更新图集 ' . $albumName . ' 成功。<br />';
			}
			else
			{
				$msg = '更新图集 ' . $albumName . ' 失败。<br />';
			}
	}
	
	$time = $i*1000;
	$js_1 = 'location.href="albumManage.php"';
	$js_2 = '<script>setTimeout(\'' . $js_1 . '\',' . $time . ');</script>';
	
	$msg = $msg . $js_2;
	echo $msg;
}