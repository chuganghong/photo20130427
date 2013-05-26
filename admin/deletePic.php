<?php
/*
	删除图片
	2013/04/28修改：
	1.使用了admin.class.php中的类方法
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/');
require_once('include.php');

$picIdUrls = $_GET['picIdUrls'];
var_dump($picIdUrls);  //test

$picArr = explode("~",$picIdUrls);
var_dump($picArr);   //test

$msg = '';

$admin = new admin($db);   //实例化数据库类

foreach( $picArr as $picIdUrl )
{
	//删除图片
	$picIdUrlArr = explode('|',$picIdUrl);
	var_dump($picIdUrlArr);//test
	
	$id = _filter($picIdUrlArr[0]);
	$url = _filter($picIdUrlArr[1]);
	
	
	if( $admin->deletePicDataPicId($id) )   //删除数据库中的图片信息
	{
		$msg = '删除图片' . $url . '数据库信息成功<br />';
		
		if( $admin->deletePicLocal($url) )  //删除服务器上的文件
		{
			$msg .= '删除图片' . $url . '成功<br />';
		}
		else
		{
			$msg .= '删除图片' . $url . '失败<br />';
		}
	}
	else
	{
		$msg = '删除图片' . $url . '数据库信息失败<br />';
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


/*
	
	
	
	
	
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
*/

		