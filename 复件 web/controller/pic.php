<?php
/**
 * 显示图片的页面。非常简单，只需albumId，就可以获取一个图集内的所有图片数据。
 * 难点在于，如何用一种好的方式组织代码
 */
require('../common/include.php');

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';
$pre = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/templates/style/';

require('Page.class.php');   //分页符

require('picData.php');

if(!isset($_GET['page']))
{
	$currentPage = 1;
}
elseif($_GET['page']<=$sum)
{
	$currentPage = $_GET['page'];
}
else
{
	$currentPage = 1;
}



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
$pageString = $page->display();

$smarty->assign('PS',$pageString);

$smarty->assign('pre',$pre);

$home = dirname($_SERVER['SCRIPT_NAME']) . '/index_b.php';
$smarty->assign('home',$home);
$topic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=' . $topicId;
$smarty->assign('topic',$topic);



$smarty->display($tpl . 'pic.tpl');