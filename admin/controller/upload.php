<?php
/*
	处理图片上传
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
require_once('include.php');

$which = $_POST['which'];
$albumId = $_POST['albumId'];
$albumId = _filter($albumId);




var_dump($_POST);   //TEST
var_dump($_FILES);  //TEST



if( $which == '1' )
{
	//本地图片上传
	$upload = new upload('image');
	if($upload->up())
	{
		//数据库操作
		$pictureUrl = _filter($upload->getNewName());
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
	//$sql = "INSERT INTO (pictureUrl,ln,albumId) VALUES ('$pictureUrl',$ln,$albumId)";
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
		//echo $msg . '<br />';
		//$js_1 = 'history.go(-1);';
$js_1 = 'location.href="uploadForm.php?id=' . $albumId . '"';
//$js_1 = 'history.go(-1)';
$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
$msg = $msg . $js_2;
echo $msg;