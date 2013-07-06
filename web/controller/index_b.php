<?php
require(dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/common/include.php');
require('getAlbumInfo_b.php');

$tpl = dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/templates/';

$footer = $tpl . 'footer.tpl';

require('header.php');

$new = $new;
$linkNew = dirname($_SERVER['SCRIPT_NAME']) . '/pic.php?';
$smarty->assign('new',$new);
$smarty->assign('linkNew',$linkNew);

//搜索框数据
$searchUrl = dirname($_SERVER['SCRIPT_NAME']) . '/search_controller.php';
$smarty->assign('searchUrl',$searchUrl);

//partA
$AtopicName = $Aname;
$AtinyPic = $AtinyPic;
$smarty->assign('Aname',$Aname);
$smarty->assign('AtinyPic',$AtinyPic);

$linkTopicA = $linkTopic . $topicIdA;//$linkTopic是什么数据？原来才变量在header.php中赋值了
$smarty->assign('linkTA',$linkTopicA);

$linkPicA = dirname($_SERVER['SCRIPT_NAME']) . '/pic.php?topicId=' . $topicIdA . '&albumId=';
$smarty->assign('LPA',$linkPicA);

//partB
$BtopicName = $Bname;

$BtinyPic = $BtinyPic;
$Bmedium = $Bmedium;
$Btext = $Btext;

$smarty->assign('BtopicName',$BtopicName);
$smarty->assign('BtinyPic',$BtinyPic);
$smarty->assign('Bmedium',$Bmedium);
$smarty->assign('Btext',$Btext);

$linkPicB = dirname($_SERVER['SCRIPT_NAME']) . '/pic.php?topicId=' . $topicIdB . '&albumId=';
$smarty->assign('LPB',$linkPicB);




//$pre = '/GitHub/photo20130427/web/templates/style/';
$pre = dirname(dirname($_SERVER['SCRIPT_NAME'])) . '/templates/style/';

$smarty->assign('css',$pre . 'style.css');


$linkTopicB = $linkTopic . $topicIdB;

$smarty->assign('linkTB',$linkTopicB);

$home = $_SERVER['SCRIPT_NAME'];
$home = 'http://127.0.0.1' . $home;//此处需要更改，否则再其他地方使用时会出现错误。
$smarty->assign('home',$home);

$smarty->assign('pre',$pre);
$smarty->assign('tpl',$tpl);

//静态化操作
$info = $smarty->fetch($tpl . 'index1.tpl');

if(!isset($isStatic))
{
	echo $info;
}

$pres = dirname(dirname(dirname($_SERVER['SCRIPT_NAME']))) . '/meinv/';

//替换topic链接

foreach($TopicData as $k=>$v)
{	
	$headerTopic = $linkTopic . $v['id'];
	$replace = $pres . $v['id'] . '/index_1.html';
	$info = str_replace($headerTopic,$replace,$info);
}

//替换new（最新发布）链接
//{$linkNew}topicId={$new[new]["topicId"]}&albumId={$new[new]["id"]}
foreach($new as $k2=>$v2)
{
	$newLink = $linkNew . 'topicId=' . $v2["topicId"] . '&albumId=' . $v2["id"];
	$replace2 = $pres . 'pic_' . $v2['id'] . '.html';
	$info = str_replace($newLink,$replace2,$info);
}

//替换partA（日本美女）链接
//{$LPA}{$AtinyPic[tinyPic]["id"]}
foreach($AtinyPic as $v3)
{
	$search3 = $linkPicA . $v3['id'];
	$replace3 = $pres . 'pic_' . $v3['id'] . '.html';
	$info = str_replace($search3,$replace3,$info);
}
//替换“日本美女”和“更多”的链接
$search32 = $linkTopicA;
$replace32 = $pres . $topicIdA . '.html';
$info = str_replace($search32,$replace32,$info);

//替换partB(韩国美女）链接
foreach($BtinyPic as $v4)
{
	$search4 = $linkPicB . $v4['id'];
	$replace4 = $pres . 'pic_' . $v4['id'] . '.html';
	$info = str_replace($search4,$replace4,$info);	
}
//替换partB中图链接
//{$LPB}{$Bmedium["id"]}
$search42 = $linkPicB . $Bmedium['id'];
$replace42 = $pres . 'pic_' . $Bmedium['id'] . '.html';
$info = str_replace($search42,$replace42,$info);
//替换partB的文字推荐链接
//{$LPB}{$Btext[text]["id"]}
foreach($Btext as $v43)
{
	$search43 = $linkPicB . $v43['id'];
	$replace43 = $pres . 'pic_' . $v43['id'] . '.html';
	$info = str_replace($search43,$replace43,$info);
}

$dir = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/meinv/';
$filename = $dir . 'index.html';
$fp = fopen($filename,'wb');
fwrite($fp,$info);
fclose($fp);


