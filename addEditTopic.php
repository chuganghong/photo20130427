<?php
/*
	增加栏目
*/
require_once('include.php');

$which = $_POST['which'];

$topicName = _filter($_POST['topicName']);

if( $which=='add' )
{
	//增加栏目
	//$sql = "INSERT INTO topic (topicName) SELECT '$topicName' FROM topic WHERE NOT EXISTS (SELECT * FROM topic WHERE topicName='$topicName')";
	$sql = "INSERT INTO topic (topicName) SELECT '$topicName' FROM dual WHERE NOT EXISTS ( SELECT * FROM topic WHERE topicName='$topicName')";
	//$sql = "INSERT INTO topic (topicName) VALUES ('$topicName')";
	$result = $db->_query($sql);
	$rows = mysql_affected_rows();
	if( $rows>0 )
	{
		$msg = '增加栏目 ' . $topicName . ' 成功。<br />';
		/*
		$msg .= '3秒钟后返回列表。';
		//echo $msg . '<br />';
		//$js_1 = 'history.go(-1);';
		$js_1 = 'location.href="topicManage.php"';
		$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
		
		$msg = $msg . $js_2;
		*/
	}
	else if( $rows=1 )
	{
		$msg = '已存在此栏目。<br />';
	}
	else
	{
		$msg = '增加栏目 ' . $topicName . ' 失败。<br />';
	}
	
	$msg .= '3秒钟后返回列表。';
		//echo $msg . '<br />';
		//$js_1 = 'history.go(-1);';
	$js_1 = 'location.href="topicManage.php"';
	$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
	$msg = $msg . $js_2;
	echo $msg;
}
else if( $which=='edit' )
{
	//编辑栏目	
	$topicId = _filter($_POST['topicId']);
	if( is_array($topicId) )
	{
		$topicId = $topicId[0];//若是全选了，设置为只处理第一个
	}
	$sql = "UPDATE topic SET topicName='$topicName' WHERE id=$topicId";
	$result = $db->_query($sql);
	$rows = mysql_affected_rows();
	
	$msg = '<script type="text/javascript" src="js/common.js"></script>';
	$msg .= '<script>window.onload = setTimeGo("topicManage.php","tip",3);</script>';
	
	if( $rows>0 )
	{
		
		$msg .= '编辑栏目成功。';
		
		//$js_1 = 'history.go(-1);';
		//$js_1 = 'location.href="topicManage.php"';
		//$js_2 = '<script>setTimeout(\'' . $js_1 . '\',3000);</script>';
		//$msg = $msg . $js_2;
	}
	else
	{
		$msg .= '编辑栏目失败。';
	}
	$msg .= '<p id="tip"></p>';
	echo $msg;
}
	
	