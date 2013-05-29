<?php
/*
	删除图片
	2013/04/28修改：
	1.使用了admin.class.php中的类方法
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
require_once('include.php');
$msg = '';
$admin = new admin($db);   //实例化数据库类

if( isset($_GET['picIdUrls']) )
{
	$picArr[] = $_GET['picIdUrls'];
	/**
	 * The goto 操作符仅在 PHP 5.3及以上版本有效. 
	 * 第一次使用goto操作符，感觉不错，避免了使用if..else把大段的代码放入括号中
	 */
	goto a;	
}

$picIdUrls = $_POST['picIdUrls'];

$picArr = json_decode($picIdUrls);

a:   //供上面的goto操作符使用
foreach( $picArr as $picIdUrl )
{
	//删除图片
	$picIdUrlArr = explode('|',$picIdUrl);
	//var_dump($picIdUrlArr);//test
	
	$id = _filter($picIdUrlArr[0]);
	$url = _filter($picIdUrlArr[1]);
	
	
	if( $admin->deletePicDataPicId($id) )   //删除数据库中的图片信息
	{
		$msg .= '<p>删除图片' . $url . '数据库信息成功</p>';
		
		if( $admin->deletePicLocal($url) )  //删除服务器上的文件
		{
			$msg .= '<p>删除图片' . $url . '成功</p>';
		}
		else
		{
			$msg .= '<p>删除图片' . $url . '失败</p>';
		}
	}
	else
	{
		$msg = '<p>删除图片' . $url . '数据库信息失败</p>';
	}
}
echo $msg;
?>
<script>
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
		location.href = "pictureManage.php";  //此处的URL要注意，若用history.go(-1)会得到原页面
	}
}
id = 'tips';
i = 6;
setTimeGo(id,i);
</script>
<p id="tips"></p>

