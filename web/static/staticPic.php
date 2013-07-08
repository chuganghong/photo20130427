<?php
/**
 * 冗余代码，从pic.php截取而来，与picStatic.php一起实现网站前端页面HTML化的功能
 * 2013年7月06日 14点23分 * 
 */
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
else if($currentPage==$sum)
{	
	$linkPageNext = 'a';//当赋值为0时，在smarty模板中总出现问题，不知原因。
	//echo htmlspecialchars($pageString);   //test
}


$smarty->assign('linkPageNext',$linkPageNext);

//链接前缀、首页URL等数据
$smarty->assign('PS',$pageString);//分页数据
$smarty->assign('pre',$pre);//链接前缀
$smarty->assign('home',$home);//首页URL
$topic = dirname($_SERVER['SCRIPT_NAME']) . '/list.php?topicId=' . $topicId;
$smarty->assign('topic',$topic);

//将动态网页静态化
$info = $smarty->fetch($tpl . 'pic.tpl');
$info7 = $info;

//$pres = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/meinv/';
//$upres = dirname(dirname(dirname($_SERVER['SCRIPT_NAME']))) . '/meinv/';

//当前页码数
//$prep = $currentPage;


//替换 主页>日本美女 网站首页等
$homeTopic = array($home,$topic);
$homeTopicR = array(
					$upres . 'index_b.html',
					$upres . $topicId . '/index_1.html'
					);  //替换数据
$info = str_replace($homeTopic,$homeTopicR,$info);
$info6 = $info;

//替换点击图片显示下一个链接$linkPageNext
if(isset($page2))
{
	$search1 = $linkPageNext;
	$replace1 = $upres . 'pic_' . $albumId . '_' . $page2 . '.html';
	$info = str_replace($search1,$replace1,$info);
}
$info6 = $info;

//替换上一篇
//{$BLP}{$BPA["id"]}
if(is_array($BPreAlbum))
{
	$search2 = $linkPic . $BPreAlbum['id'];
	$replace2 = $upres . 'pic_' . $BPreAlbum['id'] . '_1.html';
	$info = str_replace($search2,$replace2,$info);
}
$info5 = $info;
//替换下一篇
//{$BLP}{$BNA["id"]}
if(is_array($BNextAlbum))
{
	$search3 = $linkPic . $BNextAlbum['id'];
	$replace3 = $upres . 'pic_' . $BNextAlbum['id'] . '_1.html';
	$info = str_replace($search3,$replace3,$info);
}
$info4 = $info;

//替换 推荐最性感美女图片 链接
//{$BLP}{$CRA[album]["id"]
foreach($CRecAlbums as $v)
{
	$search4 = $linkPic . $v['id'];
	$replace4 = $upres . 'pic_' . $v['id'] . '_1.html';
	$info = str_replace($search4,$replace4,$info);
}
$info3 = $info;
//替换导航栏目链接。冗余代码，可以考虑封装到函数里面。
foreach($TopicData as $k=>$v)
{
	$headerTopic = $linkTopic . $v['id'];
	$replace = $upres . $v['id'] . '/index_1.html';
	$info = str_replace($headerTopic,$replace,$info);
}


$filename = $pres . 'pic_' . $albumId . '_' . $prep . '.html';
$fp = fopen($filename,'wb');


//替换分页符中的链接
$pattern2 = '/<li><a href="[^>]*?page=(\d*?)">(.*?)<\/a><\/li>/s';
$replacement2 = '<li><a href="' . $upres . 'pic_' . $albumId . '_${1}.html">${2}</a></li>';
$str3 = preg_replace($pattern2,$replacement2,$pageString);
/*
$pattern3 = '/<div id="page">.*?<\/div>/s';
//$replacement3 = '/<div id="page">' . $str3 . '</div>/';
$replacement3 = $str3;
$info = preg_replace($pattern3,$replacement3,$info);
*/
$search4 = $pageString;
$replacement4 = $str3;
$info2 = $info;
$info = str_replace($search4,$replacement4,$info);
fwrite($fp,$info);
fclose($fp);
