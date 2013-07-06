<?php
/**
 * 初始化list.php的代码，包含在listStatic.php，存在大量与list.php中相同的代码。我不想
 * 这么写listStatic.php中的代码，但是我无法复用list.php中的代码。
 * 2013年7月6日 11点24分
 */

//require('../common/include.php');

var_dump(get_include_path());  //test
$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';

$linkPage = $_SERVER['SCRIPT_NAME'] . '?topicId=' . $topicId . '&page=';
$page = new PageList($currentPage,$sum,$linkPage);
$pageString = $page->display('B');


$linkPic = dirname($_SERVER['SCRIPT_NAME']) .'/pic.php?topicId=' . $topicId . '&albumId=';
$smarty->assign('linkPic',$linkPic);


$pre = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/templates/style/';
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

$pres = dirname(dirname(dirname($_SERVER['SCRIPT_NAME']))) . '/meinv/';

//替换topic链接
foreach($TopicData as $k=>$v)
{
	$headerTopic = $linkTopic . $v['id'];
	$replace = $pres . $v['id'] . '/index_1.html';
	$info = str_replace($headerTopic,$replace,$info);
}

//主页>日本美女链接替换
$search2 = $home;
$replace2 = $pres . 'index.html';
$info = str_replace($search2,$replace2,$info);
$search3 = $topic;
$replace3 = $pres . $topicId . '/';
//$info = str_replace($search3,$replace3,$info);

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
//var_dump($matches20);//test
//echo $pageString2;//test
//echo htmlspecialchars($pageString2);//test

//$info = str_replace($pageString,$pageString2,$info);//不知为何，此句出错，我无力解决，用preg_replace()代替此句
$pattern = '/<div class="page">.*?<\/div>/s';//正则表达式的修饰符s很重要，它表示.可以匹配换行符等
//preg_match_all($pattern,$info,$matches333);//test
//var_dump($matches333);  //test
$info = preg_replace($pattern,$pageString2,$info);//替换上面的str_replace()语句
//echo $info;
//echo htmlspecialchars($info);//test


//推荐美女链接HTML化
$dir = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/meinv/' . $topicId . '/';
/**
 * 为了配合preg_replace($pattern,$replacement,$subject)对列表HTML文件的命名，改变列表首页的命名

 if($currentPage==1)
 {
 $filename = $dir . 'index.html';
 }
 else
 {
 $filename = $dir . 'index_' . $currentPage . '.html';
 }
 */
$filename = $dir . 'index_' . $currentPage . '.html';

$fp=fopen($filename,'wb');
fwrite($fp,$info);
fclose($fp);
