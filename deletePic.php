<?php
/*
	删除图片
*/
require_once('include.php');

$picIdUrls = $_GET['picIdUrls'];
var_dump($picIdUrls);  //test

$picArr = explode("~",$picIdUrls);
var_dump($picArr);   //test

$msg = '';

foreach( $picArr as $picIdUrl )
{
	//删除图片
	$picIdUrlArr = explode('|',$picIdUrl);
	var_dump($picIdUrlArr);//test
	
	$id = _filter($picIdUrlArr[0]);
	$url = _filter($picIdUrlArr[1]);
	$sql = "DELETE FROM picture WHERE id=$id";
	$result = $db->_query($sql);
	$rows = mysql_affected_rows();
	if( $rows>0 )
	{
		//删除图片的数据库数据成功，接下来，删除图片文件
		if( file_exists($url) )   //若文件在服务器存在
		{
			$msg .= '删除图片' . $url . '数据库信息成功<br />';
			if( unlink($url) )   //删除文件
			{
				$msg .= '删除图片' . $url . '成功<br />';
			}
			else
			{
				$msg .= '删除图片' . $url . '失败<br />';
			}
		}
	}
	else
	{
		$msg .= '删除图片' . $url . '数据库信息失败<br />';
	}
}

$msg .= '3秒钟后返回列表。';
		//echo $msg . '<br />';
		//$js_1 = 'history.go(-1);';
$js_1 = 'location.href="pictureManage.php"';
//$js_1 = 'history.go(-1)';
$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
$msg = $msg . $js_2;
echo $msg;

		