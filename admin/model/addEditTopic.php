<?php
/*
	增加栏目
*/

require_once('../common/include.php');

$which = $_POST['which'];

$topicName = _filter($_POST['topicName']);

$msg = '';
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
		$msg = '<p>增加栏目 ' . $topicName . ' 成功。</p>';		
	}
	else if( $rows=1 )
	{
		$msg = '<p>已存在此栏目。</p>';
	}
	else
	{
		$msg = '<p>增加栏目 ' . $topicName . ' 失败。</p>';
	}	
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
	
	if( $rows>0 )
	{		
		$msg .= '<p>编辑栏目成功。</p>';
		
	}
	else
	{
		$msg .= '<p>编辑栏目失败。</p>';
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
		location.href = "../controller/topicManage.php";  //此处的URL要注意，若用history.go(-1)会得到原页面
	}
}
id = 'tips';
i = 6;
setTimeGo(id,i);
</script>
<p id="tips"></p>
	
	