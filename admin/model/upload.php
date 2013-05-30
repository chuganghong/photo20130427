<?php
/**
 * 2013年5月30日
 * 处理图片上传
 * 为了让图片能显示，我花了很多时间。
 * 弄清楚了几点：1.move_uploadede_file($tmp_name,$destination)的$destination必须是服务器上的文件路径，不能是UR。
 * 2.使用HTTP请求某文件时，不能使用被请求文件在服务器上的路径，必须使用其网络地址。在使用网络地址的时候，若不将其补充为完整
 * 的URL，会被自动补充完整，得到的不是预想地址。
 */

require_once('../common/include.php');

$which = $_POST['which'];
$albumId = $_POST['albumId'];
$albumId = _filter($albumId);


if( $which == '1' )
{
	//本地图片上传
	$upload = new upload('image');
	$dir1 = 'GitHub/photo20130427/uploads';
	//$dir1 = 'uploads';
	//$dir = DR . $dir1;
	if( $upload->up($dir1) )
	{
		//数据库操作
		//$filepath = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $dir;
		$filepath = $upload->getFilepath();
		//var_dump($filepath);  //test
		//var_dump($_SERVER['HTTP_HOST']);   //TEST
		$pictureUrl = _filter($filepath);
		$ln = 1;
	}
	else
	{
		$msg = '上传图片失败。<br />';
	}
}
else if( $which == '0' )
{
	//网络图片上传
	$ln = 0;
	$pictureUrl = $_POST['image'];
	$pictureUrl = _filter($pictureUrl);	
}

$sql = "INSERT INTO picture (pictureUrl,ln,albumId) VALUES ('$pictureUrl',$ln,$albumId)";
$result = $db->_query($sql);
$rows = mysql_affected_rows();
if( $rows>0 )
{
	$msg = '上传图片成功。存储到数据库成功。<br />';
}
else
{
	$msg = '存储到数据库失败。<br />';
}
$msg .= '3秒钟后返回列表。';		
$js_1 = 'location.href="../controller/uploadForm.php?id=' . $albumId . '"';
$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
$msg = $msg . $js_2;
echo $msg;