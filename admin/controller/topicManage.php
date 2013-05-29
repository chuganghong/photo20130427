<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
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

$js = '../common/js/common.js';
$smarty->assign('js',$js);

$smarty->assign('trTd',$data);


$th = array('编号','栏目名称','操作');
$smarty->assign('th',$th);

$smarty->display('../templates/topicManage.tpl');