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

if( !isset($_GET['topicId']) || intval($_GET['topicId'])<=0 || intval($_GET['topicId'])>20 || !ctype_digit($_GET['topicId']))
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

//partC数据，推荐最美美女图片
$CRecAlbums = $CRecAlbums;
$smarty->assign('CRA',$CRecAlbums);

$linkPage = $_SERVER['SCRIPT_NAME'] . '?albumId=' . $albumId. '&topicId=' . $topicId . '&page=';
$page = new PagePic($currentPage,$sum,$linkPage);
$pageString = $page->display(1);

//点击图片显示下一页所需要的数据
if($currentPage<$sum)
{
	$page2 = $currentPage+1;
	$linkPageNext = $linkPage . $page2;	
}
else
{
	//$albumIdRand = rand(1,300);
	//$linkPageNext = $linkPic . '?albumId=' . $albumIdRand;
	$linkPageNext = 'a';//当赋值为0时，在smarty模板中总出现问题，不知原因。
}
//var_dump($currentPage,$linkPageNext);  //TEST
$smarty->assign('linkPageNext',$linkPageNext);

//链接前缀、首页URL等数据
$smarty->assign('PS',$pageString);//分页数据
$smarty->assign('pre',$pre);//链接前缀
$smarty->assign('home',$home);//首页URL
$topic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=' . $topicId;
$smarty->assign('topic',$topic);

//将动态网页静态化
$info = $smarty->fetch($tpl . 'pic.tpl');
echo $info;

$pres = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/meinv/';
$upres = dirname(dirname(dirname($_SERVER['SCRIPT_NAME']))) . '/meinv/';

//当前页码数
$prep = $currentPage;
/**
 * 由于我解决不了分页符中的第一页链接为'pic_2.html'的问题，只能用'pic_2_1.html'，故
 * 将pic.php生成的HTML文件也命令为与分页符吻合的文件名.
 * 使用了preg_replace($pattern,$replacement,$subject)解决分页符替换问题，故不需要此段代码
 
if($pre1==1)
{
	$pre1Next = $upres . 'pic_' . $albumId . '.html';
	$filename = $pres . 'pic_' . $albumId . '.html';
}
else
{
	$pre1Next = $upres . 'pic_' . $albumId . '_' . ($pre1+1) . '.html';
	$filename = $pres . 'pic_' . $albumId . '_' . $pre1 . '.html';
}
*/

//替换 主页>日本美女 网站首页等
$homeTopic = array($home,$topic);
$homeTopicR = array(
					$upres . 'index_b.html',
					$upres . $topicId . '/'
					);  //替换数据
$info = str_replace($homeTopic,$homeTopicR,$info);

//替换点击图片显示下一个链接$linkPageNext
if(isset($page2))
{
	$search1 = $linkPageNext;
	$replace1 = $upres . 'pic_' . $albumId . '_' . $page2 . '.html';
	$info = str_replace($search1,$replace1,$info);
}

//替换上一篇
//{$BLP}{$BPA["id"]}
if(is_array($BPreAlbum))
{
	$search2 = $linkPic . $BPreAlbum['id'];
	$replace2 = $upres . 'pic_' . $BPreAlbum['id'] . '_1.html';
	$info = str_replace($search2,$replace2,$info);
}
//替换下一篇
//{$BLP}{$BNA["id"]}
if(is_array($BNextAlbum))
{
	$search3 = $linkPic . $BNextAlbum['id'];
	$replace3 = $upres . 'pic_' . $BNextAlbum['id'] . '_1.html';
	$info = str_replace($search3,$replace3,$info);
}

//替换 推荐最性感美女图片 链接
//{$BLP}{$CRA[album]["id"]
foreach($CRecAlbums as $v)
{
	$search4 = $linkPic . $v['id'];
	$replace4 = $upres . 'pic_' . $v['id'] . '_1.html';
	$info = str_replace($search4,$replace4,$info);
}

//替换导航栏目链接。冗余代码，可以考虑封装到函数里面。
foreach($TopicData as $k=>$v)
{
	$headerTopic = $linkTopic . $v['id'];
	$replace = $upres . $v['id'];
	$info = str_replace($headerTopic,$replace,$info);
}


$filename = $pres . 'pic_' . $albumId . '_' . $prep . '.html';
$fp = fopen($filename,'wb');


//替换分页符中的链接
#<li><a href="/GitHub/photo20130427/web/controller/pic.php?albumId=3613&amp;topicId=1&amp;page=7">上一页</a></li>
$pattern1 = '/<div id="page">.*?<\/div>/';
preg_match_all($pattern1,$info,$matches1);
$str2 = $matches1[0][0];
$pattern2 = '/<li><a href=".*?(page=(\d+))*">(.*?)<\/a><\/li>/';

$replacement2 = '<li><a href="' . $upres . 'pic_' . $albumId . '_${2}.html">${3}</a></li>';
$str3 = preg_replace($pattern2,$replacement2,$str2);
//echo htmlspecialchars($str3);//test
$search4 = $pageString;
$replacement4 = '<div id="page">' . $str3 . '</div>';
$str4 = str_replace($search4,$replacement4,$info);
fwrite($fp,$str4);
fclose($fp);
