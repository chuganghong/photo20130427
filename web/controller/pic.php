<?php
/**
 * 显示图片的页面。非常简单，只需albumId，就可以获取一个图集内的所有图片数据。
 * 难点在于，如何用一种好的方式组织代码
 */

$home = dirname($_SERVER['SCRIPT_NAME']) . '/index_b.php';
$home = 'http://' . $_SERVER['REMOTE_ADDR'] . $home;
//开始对用户输入的GET值进行过滤：若恶意用户输入非期望值，跳转到首页
if(!isset($_GET['albumId']) || intval($_GET['albumId'])<=0 || !ctype_digit($_GET['albumId']))
{
	Header('Location:' . $home);
}

if( !isset($_GET['topicId']) || intval($_GET['topicId'])<=0 || intval($_GET['topicId'])>8 || !ctype_digit($_GET['topicId']))
{
	Header('Location:' . $home);
}
//结束对用户输入的GET值进行过滤

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';
$pre = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/templates/style/';

require('../common/include.php'); //初始化文件等

require('Page.class.php');   //分页符

require('picData.php');

require('header.php');  //提供topicData（显示栏目名称）等数据，需要$tpl

//partA数据
$ATopicName = $ATopicName;
$APics = $APics;
$AAlbumName = $AAlbumName;
$currentPage2 = $currentPage-1;
$smarty->assign('ATN',$ATopicName);
$smarty->assign('AP',$APics);
$smarty->assign('AAN',$AAlbumName);
$smarty->assign('CP',$currentPage2);

//partB数据
$BPreAlbum = $BPreAlbum;
$BNextAlbum = $BNextAlbum;
$linkPic = $_SERVER['SCRIPT_NAME'] . '?topicId=' . $topicId . '&albumId=';
$smarty->assign('BPA',$BPreAlbum);
$smarty->assign('BNA',$BNextAlbum);
$smarty->assign('BLP',$linkPic);

//partC数据
$CRecAlbums = $CRecAlbums;
$smarty->assign('CRA',$CRecAlbums);

$linkPage = $_SERVER['SCRIPT_NAME'] . '?albumId=' . $albumId. '&topicId=' . $topicId . '&page=';
$page = new PagePic($currentPage,$sum,$linkPage);
$pageString = $page->display(1);

//点击图片显示下一页所需要的数据
$linkPageNext = $linkPage . ($currentPage+1);
$smarty->assign('linkPageNext',$linkPageNext);

//链接前缀、首页URL等数据


$smarty->assign('PS',$pageString);//分页数据
$smarty->assign('pre',$pre);//链接前缀
$smarty->assign('home',$home);//首页URL
$topic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=' . $topicId;
$smarty->assign('topic',$topic);

$smarty->display($tpl . 'pic.tpl');