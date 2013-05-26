<?php
/*
	新增编辑栏目FORM
*/
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/');
require_once('include.php');

$which = $_GET['which'];


if( $which=='add' )
{
	//新增栏目FORM
	$smarty->assign('which',$which);
	$value = '保存';
	$smarty->assign('value',$value);
	$url = 'addEditTopic.php';
	$smarty->assign('url',$url);
	$smarty->assign('topicName','');
	$smarty->assign('topicId','');
}
else if( $which=='edit' )
{
	//编辑栏目
	
	$id = $_GET['id'];
	var_dump($id);   //test
	$idName = explode('=>',$id);
	var_dump($idName);  //test
	$id = $idName[0];
	$topicName = $idName[1];
	$smarty->assign('which',$which);
	$value = '更新';
	$smarty->assign('value',$value);
	$url = 'addEditTopic.php';
	$smarty->assign('url',$url);
	$smarty->assign('topicName',$topicName);
	$smarty->assign('topicId',$id);
}

$smarty->display('templates/topicForm.tpl');
	

