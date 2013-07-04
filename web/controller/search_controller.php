<?php
/**
 * 实现首页搜索功能的search controller部分
 */
require('../common/include.php');
startSession();//开启SESSION会话

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//var_dump($_SERVER['REQUEST_METHOD']);  //TEST
	if(isset($_POST['keyWords']))
	{
		$keyWords = $_POST['keyWords'];   //搜索关键词
		//var_dump($keyWords);//test
		unset($_SESSION['yes']);
		
	}	
}

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';



require('search.php');   //实现首页搜索功能的model部分


require('header.php');  //提供topicData（显示栏目名称）等数据
require('Page.class.php');   //分页符



$linkPage = $_SERVER['SCRIPT_NAME'] . '?page=';

//var_dump($currentPage);
//var_dump($sum);
//var_dump($linkPage);


$page = new PageList($currentPage,$sum,$linkPage);
$pageString = $page->display('B');
$smarty->assign('pageStr',$pageString);

//$topicId=2;
//$linkPic = dirname($_SERVER['SCRIPT_NAME']) .'/pic.php?topicId=' . $topicId . '&albumId=';
$linkPic = dirname($_SERVER['SCRIPT_NAME']) .'/pic.php?topicId=';
$smarty->assign('linkPic',$linkPic);

//冗余代码，在pic.php中也有，如何解决这个问题？
$home = dirname($_SERVER['SCRIPT_NAME']) . '/index_b.php';
$home = 'http://' . $_SERVER['REMOTE_ADDR'] . $home;
$smarty->assign('home',$home);

$pre = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/templates/style/';
$smarty->assign('pre',$pre);

//搜索结果数据
$smarty->assign('data',$data);

//title数据
$smarty->assign('title',$keyWords);

$smarty->display($tpl . 'searchResult.tpl');

