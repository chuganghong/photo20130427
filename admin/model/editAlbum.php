<?php
/*
	编辑图集
	2013/04/28修改：
	1.使用了admin.class.php中的类方法。此页的代码变少了，但是却转移到了admin.class.php中，若此代码不能复用，这么做有何意义？
	2.将编辑或增加图集之后的提示信息封装到了函数msg中。
	2013年5月21日修改：
	1.在编辑图集页面，可以上传缩略图也可以不上传缩略图，但是，为了与上传图片页面共用一个上传图片的模板，我想了很多办法来在公用的上传代码中来实现模板共享，觉得很麻烦，也没有实现功能。
	今后遇到这种情况，宁可多写一个模板，也不要贪图少写这种无难度的代码。
	2013年5月30日
	1.上传本地图片的代码中有缩略图的存储路径$dir，在不同的服务器部署时需要给此变量设定不同的值，有没有办法让其自动获取正确的路径？
*/

require_once('../common/include.php');
$topicId = $_POST['topic'];
$albumName = $_POST['albumName'];
$isChange = $_POST['change'];   //识别是否上传了图片

//获取recommend记录
//$oldRec1 = $_GET['oldRec'];
$oldRec1 = $_POST['oldRec'];
$oldRec = json_decode($oldRec1);
//var_dump($oldRec);//test
//var_dump($_POST);
//var_dump($_GET);
//var_dump(unserialize($_POST['oldRec']));  //test
$newRec = isset($_POST['rec'])?$_POST['rec']:array();  //新的recommend记录
//var_dump($newRec);
//die();//test

$admin = new admin($db);

if( $isChange==1 )
{
	//echo '1<br />';//test
	if( isset($_POST['image']) )   //上传网络图片
	{
		$thumbUrl = $_POST['image'];		
		$cover = $thumbUrl;
		$ln = 0;
	}
	else  //上传本地图片
	{
		$upload = new upload('image');//实例化图片上传类
		$dir = 'GitHub/photo20130427/uploads/thumb';  //缩略图存储路径		
		if( $upload->up($dir) )
		{
			$filepath = $upload->getFilepath();//调用图片上传类方法获取图片地址
			$cover = _filter($filepath);
			$ln = 1;
		}
		else
		{
			die();
		}
	}
}
else if( $isChange==0 )
{
	//echo '0<br />';   //test
	$cover = '';
	$ln = '';
}
$albumId = $_POST['albumId'];
//VAR_DUMP($_POST);  //TEST



//var_dump($_POST['which']);  //test
$which = _filter($_POST['which']);

//过滤数据
$topicId = _filter($topicId);
$albumName = _filter($albumName);

//var_dump($cover);  //test
$albumId = _filter($albumId);

//var_dump('ln',$ln);//test
if( $admin->editAlbum($albumName,$cover,$topicId,$albumId,$ln)>0 )
{
	foreach($newRec as $v)   //增加新的推荐记录
	{
		if(!in_array($v,$oldRec))
		{
			$admin->addRec($v,$albumId);
		}
	}
	
	foreach($oldRec as $v1)   //删除已经取消的推荐记录
	{
		
		if(!in_array($v1,$newRec))
		{
			//echo 'start <br />';  //test
			$admin->delRec($v1, $albumId);
		}
	}
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

/**
 * 增加或编辑图集之后的提示信息，此函数可以用其他更好的代码代替，但是好像涉及到较多的其他代码，先不管它。
 * 此函数在addAlbum.php中出现过，为冗余代码，很有必要处理它。
 * @param boolean $boolean 上一步操作是否成功
 * @param integer $i 设定多少秒后跳转
 * @param string $which 识别是增加图集还是编辑图集，add增加，edit编辑
 * @param string $albumName 图集名称
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
	$js_1 = 'location.href="../controller/albumManage.php"';
	$js_2 = '<script>setTimeout(\'' . $js_1 . '\',' . $time . ');</script>';
	
	$msg = $msg . $js_2;
	echo $msg;
}