<?php
include('include.php');

$addUrl = 'topicForm.php';
$editUrl = 'topicForm.php';
$deleteUrl = 'deleteToPic.php';
$smarty->assign('addUrl',$addUrl);
$smarty->assign('editUrl',$editUrl);
$smarty->assign('deleteUrl',$deleteUrl);

/*
	test

$con = mysql_connect('localhost','root','') or die('Could not connect:' . mysql_error());
mysql_select_db('picture',$con) or die('Could not use picture:' . mysql_error());
mysql_query('SET NAMES UTF8');
$sql = "SELECT * FROM album";
$resource = mysql_query($sql,$con);
while( $row = mysql_fetch_assoc($resource) )
{
	$data[] = $row;
}
*/
$sql = "SELECT * FROM topic";
$result = $db->_query($sql);
while( $row=mysql_fetch_assoc($result) )
{
	$data[] = $row;
}

if( !isset($data) )
{
	$data = array();
}

$smarty->assign('trTd',$data);


$th = array('编号','栏目名称','操作');
$smarty->assign('th',$th);

$td_1 = array('id'=>1,'topic'=>'清纯美女','operation'=>'删除');
$td_2 = array('id'=>2,'topic'=>'性感美女','operation'=>'删除');
$trTd = array($td_1,$td_2);
//$trTd = array();//test
//$smarty->assign('trTd',$trTd);


$smarty->display('topicManage.tpl');