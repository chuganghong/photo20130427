<?php
/*
	删除图集
	实现此功能不难，就是很麻烦，流程如下：
	1.获取图集ID
	    漏掉的环节：删除图集的缩略图，即重复第3步。
	2.根据此图集ID获取该图集下的所有图片的数据库信息（主要是图片地址信息）
	3.根据图片地址信息，判断图片是否为服务器图片，若是，删除；若不是，不做处理。
	4.删除图片的数据库信息。
	5.删除图集的数据库信息。
	2013/04/28修改：
	1.使用了admin.class.php中的类方法。此页的代码变少了，但是却转移到了admin.class.php中，若此代码不能复用，这么做有何意义？
*/
//var_dump($_GET);    //TEST
//var_dump($_POST);   //TEST
//{$td[td].topicId}=>{$td[td].albumName}=>{$td[td].thumbUrl}=>{$td[td].id}
include('include.php');
$albumIds = $_GET['albumIds'];
$albumIdArr = explode('~',$albumIds);

$msg = '';
$admin = new admin($db);

foreach( $albumIdArr as $albumId )
{
	$idArr = explode('=>',$albumId);
	//var_dump($idArr);  //test	
	$topicId = _filter($idArr[0]);
	$albumName = _filter($idArr[1]);
	$thumbUrl = _filter($idArr[2]);
	$id = _filter($idArr[3]);
	
	
	$msg = $admin->deleteAlbum($id);    //根据图集ID来删除图集
}
echo $msg;
