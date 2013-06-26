<?php
/*
 * 栏目下的图集列表页
 */
//过滤用户输入。此种代码不好，会产生大量冗余代码
//开始对用户输入的GET值进行过滤：若恶意用户输入非期望值，跳转到首页
if( !isset($_GET['topicId']) )
{
	Header('Location:' . dirname($_SERVER['SCRIPT_NAME']) . '/index_b.php');
}
if( !is_int(intval($_GET['topicId'])) || ($_GET['topicId']<=0 ) || ($_GET['topicId']>8) || !ctype_digit($_GET['topicId']) )
{
	Header('Location:' . dirname($_SERVER['SCRIPT_NAME']) . '/index_b.php');
}
//结束对用户输入的GET值进行过滤

require('../common/include.php');

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';

//$topicId=1;
$num = 24;   //控制列表页显示的图集数量

require('albumListData.php'); //所需要的数据
//require('RecommendAlbum.class.php');//此文件为其他获取数据的基础.在albumListData.php中包含了此文件
require('header.php');  //提供topicData（显示栏目名称）等数据
require('Page.class.php');   //分页符

$linkPage = $_SERVER['SCRIPT_NAME'] . '?topicId=' . $topicId . '&page=';
$page = new PageList($currentPage,$sum,$linkPage);
$pageString = $page->display('B');

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
$home = 'http://' . $_SERVER['REMOTE_ADDR'] . $home;
$smarty->assign('home',$home);
$topic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=' . $topicId;
$smarty->assign('topic',$topic);


$smarty->display($tpl . 'list.tpl');