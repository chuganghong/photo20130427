<?php
/*
 * 栏目下的图集列表页
 */
require('../common/include.php');

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';

$topicId=1;
$num = 24;



require('Page.class.php');   //分页符

if(!isset($_GET['page']))
{
	$currentPage = 1;
}
else
{
	$currentPage = $_GET['page'];
}

require('albumListData.php'); //所需要的数据

$linkPage = $_SERVER['SCRIPT_NAME'] . '?topicId=' . $topicId . '&page=';
$page = new PageList($currentPage,$sum,$linkPage);
$pageString = $page->display();

$linkPic = dirname($_SERVER['SCRIPT_NAME']) .'/pic.php?topicId=' . $topicId . '&albumId=';
$smarty->assign('linkPic',$linkPic);

$pre = '/GitHub/photo20130427/web/templates/style/';
$smarty->assign('pageStr',$pageString);
$smarty->assign('pre',$pre);

//获取partA数据
$ATopicName = $AName;
$ANewAlbums = $ANewAlbums;
$smarty->assign('ATN',$ATopicName);
$smarty->assign('ANA',$ANewAlbums);

//获取partB数据
$BRecAlbums = $BRecAlbums;
$smarty->assign('BRA',$BRecAlbums);

//冗余代码，在pic.php中也有，如何解决这个问题？
$home = dirname($_SERVER['SCRIPT_NAME']) . '/index_b.php';
$smarty->assign('home',$home);
$topic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=' . $topicId;
$smarty->assign('topic',$topic);



$smarty->display($tpl . 'list.tpl');