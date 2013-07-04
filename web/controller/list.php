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
if( !is_int(intval($_GET['topicId'])) || ($_GET['topicId']<=0 ) || ($_GET['topicId']>20) || !ctype_digit($_GET['topicId']) )
{
	Header('Location:' . dirname($_SERVER['SCRIPT_NAME']) . '/index_b.php');
}
//结束对用户输入的GET值进行过滤

require('../common/include.php');

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';


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

//网站静态化代码
$info = $smarty->fetch($tpl . 'list.tpl');

echo $info;

$pres = dirname(dirname(dirname($_SERVER['SCRIPT_NAME']))) . '/meinv/';

//替换topic链接
foreach($TopicData as $k=>$v)
{
	$headerTopic = $linkTopic . $v['id'];
	$replace = $pres . $v['id'];
	$info = str_replace($headerTopic,$replace,$info);
}

//主页>日本美女链接替换
$search2 = $home;
$replace2 = $pres . 'index.html';
$info = str_replace($search2,$replace2,$info);
$search3 = $topic;
$replace3 = $pres . $topicId . '/';
$info = str_replace($search3,$replace3,$info);

//图集列表链接
//{$linkPic}{$ANA[album]["id"]}
foreach($ANewAlbums as $v4)
{
	$search4 = $linkPic . $v4['id'];
	$replace4 = $pres . 'pic_' . $v4['id'] . '_1.html';
	$info = str_replace($search4,$replace4,$info);
}

//分页符链接HMTL化，受阻：因为不好查找动态链接，暂时放弃。
//分页符链接HTML化，用preg_replace($pattern,$replacement,$subject)
//<li><a href="/GitHub/photo20130427/web/controller/list.php?topicId=2&amp;page=1"><span>首页</span></a></li>
$pattern = '/<li><a href=".*?page=(\d+)">(.*?)<\/a><\/li>/s';
$replacement = '<li><a href="' . $pres . $topicId . '/index_${1}.html">${2}</a></li>';
$pageString2 = preg_replace($pattern,$replacement,$pageString);
preg_match_all($pattern,$pageString,$matches20);//test
var_dump($matches20);//test

echo $pageString2;//test
echo htmlspecialchars($pageString2);//test

$info = str_replace($pageString,$pageString2,$info);
echo '<hr>';
echo htmlspecialchars($info);//test


//推荐美女链接HTML化
$dir = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/meinv/' . $topicId . '/';
if($currentPage==1)
{
	$filename = $dir . 'index.html';
}
else
{
	$filename = $dir . 'index_' . $currentPage . '.html';
}

$fp=fopen($filename,'wb');
fwrite($fp,$info);
fclose($fp);
