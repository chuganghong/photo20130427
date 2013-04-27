<?php
/*
	新增编辑栏目FORM
*/
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
	$idName = explode('=>',$id);
	//var_dump($idName);  //test
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

$smarty->display('topicForm.tpl');
	

