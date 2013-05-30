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
	2013/05/28
	1.运行时，此代码会提示删除图集失败，实际上是成功了，因为我设置了删除服务器上的缩略图，当服务器上没有保存缩略图时，会提示删除图集失败。
*/


require_once('../common/include.php');
//$albumIds = $_GET['albumIds'];
$albumIds = $_POST['albumIds'];

$albumIdArr = json_decode($albumIds);

$admin = new admin($db);

foreach( $albumIdArr as $albumId )
{
	$idArr = explode('=>',$albumId);	
	$topicId = _filter($idArr[0]);
	$albumName = _filter($idArr[1]);
	$thumbUrl = _filter($idArr[2]);
	$id = _filter($idArr[3]);
	
	
	$msg = $admin->deleteAlbum($id);    //根据图集ID来删除图集
}
echo $msg;
?>
<script>
/**
 *此代码在多处使用，有必要将其封装为一个函数，但是，若将其封装到JS文件里的函数，如何触发此函数?
 */
 
function setTimeGo(id,i)
{
	t = i;
	id_1 = id;
	setInterval("timer()",1000);
}

function timer()   //与setTimeGo()配合使用
{
	var tip = (t--) + "秒后返回";
	document.getElementById(id_1).innerHTML = tip;
	if( t == 0 )
	{
		location.href = "../controller/albumManage.php";  //此处的URL要注意，若用history.go(-1)会得到原页面
	}
}
id = 'tips';
i = 6;
setTimeGo(id,i);
</script>
<p id="tips"></p>
